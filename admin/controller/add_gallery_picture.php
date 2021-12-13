<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_gallery_picture'])) {
$gallery_def_id = GalleryPicture::sanitize_input($_GET['auth']);

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
                    header("location: ../events_gallery_page/gallery_picture?info=failed&auth=".$gallery_def_id);
                }
            } else {
                   header("location: ../events_gallery_page/gallery_picture?info=failed&auth=".$gallery_def_id);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }


        //get an Instance of creche_banner class
        $gallery_picture = GalleryPicture::getInstance();

        //initialize class properties
        $gallery_picture->setGallery_picture($gallery_image);
        $gallery_picture->setGallery_def_id($gallery_def_id);

        //add form input to database/check if it successful
        if ($gallery_picture->add()) {
      header("location: ../events_gallery_page/gallery_picture?info=success&auth=".$gallery_def_id);
        } else {
               header("location: ../events_gallery_page/gallery_picture?info=failed&auth=".$gallery_def_id);
        }

}