<?php

if (!isset($_GET['auth'])) {
    header("location: director_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_director_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../school_page/director_banner?info=failed");
    } else {

        //sanitize data
        $id = DirectorBanner::sanitize_input($auth);
        $title = DirectorBanner::sanitize_input($_POST['title']);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["director_image"]) && $_FILES["director_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['director_image']['name'];
                $imageFileType = $_FILES['director_image']['type'];
                $imageFileSize = $_FILES['director_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $director_image = 'director_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['director_image']['tmp_name'], "../uploads/raw/" . $director_image);
                    $imageFileName = copy('../uploads/raw/' . $director_image, '../uploads/thumbnail/' . $director_image);
                } else {
                    header("location: ../school_page/director_banner?info=failed");
                }
            } else {
                header("location: ../school_page/director_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of director_banner class
        $director_banner = DirectorBanner::getInstance();

        //initialize class properties

        $director_banner->setId($auth);
        $director_banner->setTitle($title);
        $director_banner->setDirector_image($director_image);

        //update form input to database & check if it successful
        if ($director_banner->update()) {
            header("location: ../school_page/director_banner?info=complete");
        } else {
            header("location: ../school_page/director_banner?info=failed");
        }
    }
}