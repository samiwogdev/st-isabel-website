<?php

if (!isset($_GET['auth'])) {
    header("location: library_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_library_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../facilities_page/library_banner?info=failed");
    } else {

        //sanitize data
        $id = Library_banner::sanitize_input($auth);
        $title = Library_banner::sanitize_input($_POST['title']);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["library_image"]) && $_FILES["library_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['library_image']['name'];
                $imageFileType = $_FILES['library_image']['type'];
                $imageFileSize = $_FILES['library_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $library_image = 'library_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['library_image']['tmp_name'], "../uploads/raw/" . $library_image);
                    $imageFileName = copy('../uploads/raw/' . $library_image, '../uploads/thumbnail/' . $library_image);
                } else {
                    header("location: ../facilities_page/library_banner?info=failed");
                }
            } else {
                header("location: ../facilities_page/library_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of library_banner class
        $library_banner = Library_banner::getInstance();

        //initialize class properties

        $library_banner->setId($auth);
        $library_banner->setTitle($title);
        $library_banner->setLibrary_image($library_image);

        //update form input to database & check if it successful
        if ($library_banner->update()) {
            header("location: ../facilities_page/library_banner?info=complete");
        } else {
            header("location: ../facilities_page/library_banner?info=failed");
        }
    }
}