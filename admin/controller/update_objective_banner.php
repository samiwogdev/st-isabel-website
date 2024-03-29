<?php

if (!isset($_GET['auth'])) {
    header("location: objective_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_objective_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../school_page/objective_banner?info=failed");
    } else {

        //sanitize data
        $id = ObjectiveBanner::sanitize_input($auth);
        $title = ObjectiveBanner::sanitize_input($_POST['title']);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["objective_image"]) && $_FILES["objective_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['objective_image']['name'];
                $imageFileType = $_FILES['objective_image']['type'];
                $imageFileSize = $_FILES['objective_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $objective_image = 'objective_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['objective_image']['tmp_name'], "../uploads/raw/" . $objective_image);
                    $imageFileName = copy('../uploads/raw/' . $objective_image, '../uploads/thumbnail/' . $objective_image);
                } else {
                    header("location: ../school_page/objective_banner?info=failed");
                }
            } else {
                header("location: ../school_page/objective_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of objective_banner class
        $objective_banner = ObjectiveBanner::getInstance();

        //initialize class properties

        $objective_banner->setId($auth);
        $objective_banner->setTitle($title);
        $objective_banner->setObjective_image($objective_image);

        //update form input to database & check if it successful
        if ($objective_banner->update()) {
            header("location: ../school_page/objective_banner?info=complete");
        } else {
            header("location: ../school_page/objective_banner?info=failed");
        }
    }
}