<?php

include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_gallery_data'])) {

    //check if form input are not empty
    if (empty($_POST['description'])) {
        header("location: ../home_page/gallery_data?info=failed");
    } else {

        $description = GalleryData::sanitize_input($_POST['description']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["gallery_image"]) && $_FILES["gallery_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['gallery_image']['name'];
                $imageFileType = $_FILES['gallery_image']['type'];
                $imageFileSize = $_FILES['gallery_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $gallery_image = 'gallery_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['gallery_image']['tmp_name'], "../uploads/raw/" . $gallery_image);
                    $imageFileName = copy('../uploads/raw/' . $gallery_image, '../uploads/thumbnail/' . $gallery_image);
                } else {
                    header("location: ../home_page/gallery_data?info=failed");
                }
            } else {
                header("location: ../home_page/gallery_data?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of slider class
        $gallery_info = GalleryData::getInstance();

        //initialize class propperties
        $gallery_info->setDescription($description);
        $gallery_info->setGallery_image($gallery_image);

        //add form input to database/check if it successful
        if ($gallery_info->add()) {
            header("location: ../home_page/gallery_data?info=success");
        } else {
            header("location: ../home_page/gallery_data?info=failed");
        }
    }
} else {
    header("location: ../home_page/gallery_data?info=failed");
}