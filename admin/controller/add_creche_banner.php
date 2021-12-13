<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_creche_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../academics_page/creche_banner?info=failed");
    } else {

        //sanitize form input
        $title = CrecheBanner::sanitize_input($_POST['title']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["creche_image"]) && $_FILES["creche_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['creche_image']['name'];
                $imageFileType = $_FILES['creche_image']['type'];
                $imageFileSize = $_FILES['creche_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $creche_image = 'creche_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['creche_image']['tmp_name'], "../uploads/raw/" . $creche_image);
                    $imageFileName = copy('../uploads/raw/' . $creche_image, '../uploads/thumbnail/' . $creche_image);
                } else {
                    header("location: ../academics_page/creche_banner?info=failed");
                }
            } else {
                header("location: ../academics_page/creche_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of creche_banner class
        $creche_banner = CrecheBanner::getInstance();

        //initialize class properties
        $creche_banner->setTitle($title);
        $creche_banner->setcreche_image($creche_image);

        //add form input to database/check if it successful
        if ($creche_banner->add()) {
            header("location: ../academics_page/creche_banner?info=success");
        } else {
            header("location: ../academics_page/creche_banner?info=failed");
        }
    }
}