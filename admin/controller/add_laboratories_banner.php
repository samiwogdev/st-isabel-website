<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_laboratories_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../facilities_page/laboratories_banner?info=failed");
    } else {

        //sanitize form input
        $title = Laboratories_banner::sanitize_input($_POST['title']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["laboratories_image"]) && $_FILES["laboratories_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['laboratories_image']['name'];
                $imageFileType = $_FILES['laboratories_image']['type'];
                $imageFileSize = $_FILES['laboratories_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $laboratories_image = 'laboratories_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['laboratories_image']['tmp_name'], "../uploads/raw/" . $laboratories_image);
                    $imageFileName = copy('../uploads/raw/' . $laboratories_image, '../uploads/thumbnail/' . $laboratories_image);
                } else {
                    header("location: ../facilities_page/laboratories_banner?info=failed");
                }
            } else {
                header("location: ../facilities_page/laboratories_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of laboratories_banner class
        $laboratories_banner = Laboratories_banner::getInstance();

        //initialize class properties
        $laboratories_banner->setTitle($title);
        $laboratories_banner->setLaboratories_image($laboratories_image);

        //add form input to database/check if it successful
        if ($laboratories_banner->add()) {
            header("location: ../facilities_page/laboratories_banner?info=success");
        } else {
            header("location: ../facilities_page/laboratories_banner?info=failed");
        }
    }
}