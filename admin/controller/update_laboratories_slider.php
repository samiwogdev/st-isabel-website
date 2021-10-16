<?php

if (!isset($_GET['auth'])) {
    header("location: laboratories_slider?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_laboratories_slider'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../facilities_page/laboratories_slider?info=failed");
    } else {

        //sanitize data
        $id = Laboratories_slider::sanitize_input($auth);
        $title = Laboratories_slider::sanitize_input($_POST['title']);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["slider_image"]) && $_FILES["slider_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['slider_image']['name'];
                $imageFileType = $_FILES['slider_image']['type'];
                $imageFileSize = $_FILES['slider_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $slider_image = 'slider_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['slider_image']['tmp_name'], "../uploads/raw/" . $slider_image);
                    $imageFileName = copy('../uploads/raw/' . $slider_image, '../uploads/thumbnail/' . $slider_image);
                } else {
                    header("location: ../facilities_page/laboratories_slider?info=failed");
                }
            } else {
                header("location: ../facilities_page/laboratories_slider?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of laboratories_slider class
        $laboratories_slider = Laboratories_slider::getInstance();

        //initialize class properties

        $laboratories_slider->setId($auth);
        $laboratories_slider->setTitle($title);
        $laboratories_slider->setSlider_image($slider_image);

        //update form input to database & check if it successful
        if ($laboratories_slider->update()) {
            header("location: ../facilities_page/laboratories_slider?info=complete");
        } else {
            header("location: ../facilities_page/laboratories_slider?info=failed");
        }
    }
}