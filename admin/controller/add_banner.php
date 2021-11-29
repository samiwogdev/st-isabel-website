<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){  
        header("location: ../school_page/banner?info=failed");
    } else {

        //sanitize form input
     $title = Banner::sanitize_input($_POST['title']);


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
                    header("location: ../school_page/banner?info=failed");
                }
            } else {
                header("location: ../school_page/banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of banner class
        $banner = Banner::getInstance();

        //initialize class properties
        $banner->setTitle($title);
        $banner->setBanner_image($banner_image);

        //add form input to database/check if it successful
        if ($banner->add()) {
            header("location: ../school_page/banner?info=success");
        } else {
            header("location: ../school_page/banner?info=failed");
        }
    }
}