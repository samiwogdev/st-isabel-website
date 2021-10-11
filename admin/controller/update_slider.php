<?php

if (!isset($_GET['auth'])) {
    header("location: slider?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_slider'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/slider?info=failed");
    } else {

        //sanitize data
        $id = Slider::sanitize_input($auth);
        $title = Slider::sanitize_input($_POST['title']);
        $description = Slider::sanitize_input($_POST['description']);

        //process formm Image
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
                    header("location: ../home_page/slider?info=failed");
                }
            } else {
                header("location: ../home_page/slider?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of slider class
        $slider = Slider::getInstance();

        //initialize class propperties

        $slider->setId($auth);
        $slider->setTitle($title);
        $slider->setDescription($description);
        $slider->setSlider_image($slider_image);

        //update form input to database & check if it successful
        if ($slider->update()) {
            header("location: ../home_page/slider?info=complete");
        } else {
            header("location: ../home_page/slider?info=failed");
        }
    }
}