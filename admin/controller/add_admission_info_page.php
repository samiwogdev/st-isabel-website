<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_admission_info_page'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../admission_page/admission_info_page?info=failed");
    } else {

        //sanitize form input
        $title = AdmissionInfoPage::sanitize_input($_POST['title']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["result_image"]) && $_FILES["result_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['result_image']['name'];
                $imageFileType = $_FILES['result_image']['type'];
                $imageFileSize = $_FILES['result_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $result_image = 'result_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['result_image']['tmp_name'], "../uploads/raw/" . $result_image);
                    $imageFileName = copy('../uploads/raw/' . $result_image, '../uploads/thumbnail/' . $result_image);
                } else {
                    header("location: ../admission_page/admission_info_page?info=failed");
                }
            } else {
                header("location: ../admission_page/admission_info_page?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of admission_info_page class
        $admission_info_page = AdmissionInfoPage::getInstance();

        //initialize class properties
        $admission_info_page->setTitle($title);
        $admission_info_page->setResult_image($result_image);

        //add form input to database/check if it successful
        if ($admission_info_page->add()) {
            header("location: ../admission_page/admission_info_page?info=success");
        } else {
            header("location: ../admission_page/admission_info_page?info=failed");
        }
    }
}