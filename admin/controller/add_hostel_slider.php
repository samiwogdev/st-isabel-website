<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_hostel_slider'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../facilities_page/hostel_slider?info=failed");
    } else {

        //sanitize form input
        $title = Hostel_slider::sanitize_input($_POST['title']);

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
                    header("location: ../facilities_page/hostel_slider?info=failed");
                }
            } else {
                header("location: ../facilities_page/hostel_slider?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of hostel_slider class
        $hostel_slider = Hostel_slider::getInstance();

        //initialize class properties
        $hostel_slider->setTitle($title);
        $hostel_slider->setSlider_image($slider_image);

        //add form input to database/check if it successful
        if ($hostel_slider->add()) {
            header("location: ../facilities_page/hostel_slider?info=success");
        } else {
            header("location: ../facilities_page/hostel_slider?info=failed");
        }
    }
}