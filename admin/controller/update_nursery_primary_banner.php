<?php

if (!isset($_GET['auth'])) {
    header("location: nursery_primary_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_nursery_primary_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../academics_page/nursery_primary_banner?info=failed");
    } else {

        //sanitize data
        $id = Nursery_primary_banner::sanitize_input($auth);
        $title = Nursery_primary_banner::sanitize_input($_POST['title']);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["nursery_image"]) && $_FILES["nursery_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['nursery_image']['name'];
                $imageFileType = $_FILES['nursery_image']['type'];
                $imageFileSize = $_FILES['nursery_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $nursery_image = 'nursery_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['nursery_image']['tmp_name'], "../uploads/raw/" . $nursery_image);
                    $imageFileName = copy('../uploads/raw/' . $nursery_image, '../uploads/thumbnail/' . $nursery_image);
                } else {
                    header("location: ../academics_page/nursery_primary_banner?info=failed");
                }
            } else {
                header("location: ../academics_page/nursery_primary_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of nursery_primary_banner class
        $nursery_primary_banner = Nursery_primary_banner::getInstance();

        //initialize class properties

        $nursery_primary_banner->setId($auth);
        $nursery_primary_banner->setTitle($title);
        $nursery_primary_banner->setNursery_image($nursery_image);

        //update form input to database & check if it successful
        if ($nursery_primary_banner->update()) {
            header("location: ../academics_page/nursery_primary_banner?info=complete");
        } else {
            header("location: ../academics_page/nursery_primary_banner?info=failed");
        }
    }
}