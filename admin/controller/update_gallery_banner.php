<?php

if (!isset($_GET['auth'])) {
    header("location: gallery_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_gallery_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../events_gallery_page/gallery_banner?info=failed");
    } else {

        //sanitize data
        $id = GalleryBanner::sanitize_input($auth);
        $title = GalleryBanner::sanitize_input($_POST['title']);

        //process form Image
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
                    header("location: ../events_gallery_page/gallery_banner?info=failed");
                }
            } else {
                header("location: ../events_gallery_page/gallery_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of gallery_banner class
        $gallery_banner = GalleryBanner::getInstance();

        //initialize class properties

        $gallery_banner->setId($auth);
        $gallery_banner->setTitle($title);
        $gallery_banner->GalleryBanner($gallery_image);

        //update form input to database & check if it successful
        if ($gallery_banner->update()) {
            header("location: ../events_gallery_page/gallery_banner?info=complete");
        } else {
            header("location: ../events_gallery_page/gallery_banner?info=failed");
        }
    }
}