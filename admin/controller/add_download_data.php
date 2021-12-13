<?php

include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_download_data'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../events_gallery_page/downloads?info=failed");
    } else {

        $title = Download::sanitize_input($_POST['title']);
        $description = Download::sanitize_input($_POST['description']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["download_file"]) && $_FILES["download_file"]["error"] == 0) {
                $allowedImageType = array("pdf" => "application/pdf", "jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['download_file']['name'];
                $imageFileType = $_FILES['download_file']['type'];
                $imageFileSize = $_FILES['download_file']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $download_file = 'download_file' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['download_file']['tmp_name'], "../uploads/raw/" . $download_file);
                    $imageFileName = copy('../uploads/raw/' . $download_file, '../uploads/thumbnail/' . $download_file);
                } else {
                    header("location: ../home_page/downloads?info=failed");
                }
            } else {
                header("location: ../events_gallery_page/downloads?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of slider class
        $download = Download::getInstance();

        //initialize class propperties
        $download->setTitle($title);
        $download->setDescription($description);
        $download->setDownload_file($download_file);

        //add form input to database/check if it successful
        if ($download->add()) {
            header("location: ../events_gallery_page/downloads?info=success");
        } else {
            header("location: ../events_gallery_page/downloads?info=failed");
        }
    }
} else {
    header("location: ../events_gallery_page/downloads?info=failed");
}