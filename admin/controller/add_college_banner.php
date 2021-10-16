<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_college_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../academics_page/college_banner?info=failed");
    } else {

        //sanitize form input
        $title = College_banner::sanitize_input($_POST['title']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["college_image"]) && $_FILES["college_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['college_image']['name'];
                $imageFileType = $_FILES['college_image']['type'];
                $imageFileSize = $_FILES['college_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $college_image = 'college_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['college_image']['tmp_name'], "../uploads/raw/" . $college_image);
                    $imageFileName = copy('../uploads/raw/' . $college_image, '../uploads/thumbnail/' . $college_image);
                } else {
                    header("location: ../academics_page/college_banner?info=failed");
                }
            } else {
                header("location: ../academics_page/college_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of college_banner class
        $college_banner = College_banner::getInstance();

        //initialize class properties
        $college_banner->setTitle($title);
        $college_banner->setCollege_image($college_image);

        //add form input to database/check if it successful
        if ($college_banner->add()) {
            header("location: ../academics_page/college_banner?info=success");
        } else {
            header("location: ../academics_page/college_banner?info=failed");
        }
    }
}