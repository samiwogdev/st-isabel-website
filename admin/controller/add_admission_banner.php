<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_admission_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../admission_page/admission_banner?info=failed");
    } else {

        //sanitize form input
        $title = AdmissionBanner::sanitize_input($_POST['title']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["admission_image"]) && $_FILES["admission_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['admission_image']['name'];
                $imageFileType = $_FILES['admission_image']['type'];
                $imageFileSize = $_FILES['admission_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $admission_image = 'admission_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['admission_image']['tmp_name'], "../uploads/raw/" . $admission_image);
                    $imageFileName = copy('../uploads/raw/' . $admission_image, '../uploads/thumbnail/' . $admission_image);
                } else {
                    header("location: ../admission_page/admission_banner?info=failed");
                }
            } else {
                header("location: ../admission_page/admission_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of admission_banner class
        $admission_banner = AdmissionBanner::getInstance();

        //initialize class properties
        $admission_banner->setTitle($title);
        $admission_banner->setadmission_image($admission_image);

        //add form input to database/check if it successful
        if ($admission_banner->add()) {
            header("location: ../admission_page/admission_banner?info=success");
        } else {
            header("location: ../admission_page/admission_banner?info=failed");
        }
    }
}