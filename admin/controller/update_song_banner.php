<?php

if (!isset($_GET['auth'])) {
         header("location: ../home_page/song_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_song_banner'])) {
    
        //sanitize data
        $id = SongBanner::sanitize_input($auth);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["banner_image"]) && $_FILES["banner_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['banner_image']['name'];
                $imageFileType = $_FILES['banner_image']['type'];
                $imageFileSize = $_FILES['banner_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $banner_image = 'banner_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['banner_image']['tmp_name'], "../uploads/raw/" . $banner_image);
                    $imageFileName = copy('../uploads/raw/' . $banner_image, '../uploads/thumbnail/' . $banner_image);
                } else {
                    header("location: ../home_page/song_banner?info=failed");
                }
            } else {
                header("location: ../home_page/song_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of page_info class
        $song_b = SongBanner::getInstance();

        //initialize class properties

        $song_b->setId($auth);
        $song_b->setBanner_image($banner_image);

        //update form input to database & check if it successful
        if ($song_b->update()) {
            header("location: ../home_page/song_banner?info=complete");
        } else {
            header("location: ../home_page/song_banner?info=failed");
        }
}