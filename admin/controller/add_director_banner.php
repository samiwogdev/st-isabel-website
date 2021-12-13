<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_director_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../school_page/director_banner?info=failed");
    } else {

        //sanitize form input
        $title = DirectorBanner::sanitize_input($_POST['title']);

        //process formm Image
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
        $director_banner->setTitle($title);
        $director_banner->setDirector_image($director_image);

        //add form input to database/check if it successful
        if ($director_banner->add()) {
            header("location: ../school_page/director_banner?info=success");
        } else {
            header("location: ../school_page/director_banner?info=failed");
        }
    }
}