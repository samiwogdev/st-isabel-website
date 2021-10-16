<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_admission_enrolment'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['enrolment'])) {
        header("location: ../admission_page/admission_enrolment?info=failed");
    } else {

        //sanitize form input
        $title = Admission_enrolment::sanitize_input($_POST['title']);
        $description = Admission_enrolment::sanitize_input($_POST['description']);
        $enrolment = Admission_enrolment::sanitize_input($_POST['enrolment']);
        
//process formm Image
try {
    // Check if image was uploaded without errors
    if (isset($_FILES["enrolment_image"]) && $_FILES["enrolment_image"]["error"] == 0) {
        $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
        $imageFileName = $_FILES['enrolment_image']['name'];
        $imageFileType = $_FILES['enrolment_image']['type'];
        $imageFileSize = $_FILES['enrolment_image']['size'];
        $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

        // Verify MYME type of the file
        if (in_array($imageFileType, $allowedImageType)) {
            $enrolment_image = 'enrolment_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
            move_uploaded_file($_FILES['enrolment_image']['tmp_name'], "../uploads/raw/" . $enrolment_image);
            $imageFileName = copy('../uploads/raw/' . $enrolment_image, '../uploads/thumbnail/' . $enrolment_image);
        } else {
            header("location: ../admission_page/admission_enrolment?info=failed");
        }
    } else {
        header("location: ../admission_page/admission_enrolment?info=failed");
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}


        //get an Instance of page_info class
        $admission_enrolment = Admission_enrolment::getInstance();

        //initialize class properties
        $admission_enrolment->setTitle($title);
        $admission_enrolment->setDescription($description);
        $admission_enrolment->setEnrolment($enrolment);
        $admission_enrolment->setEnrolment_image($enrolment_image);

        //add form input to database/check if it successful
        if ($admission_enrolment->add()) {
            header("location: ../admission_page/admission_enrolment?info=success");
        } else {
            header("location: ../admission_page/admission_enrolment?info=failed");
        }
    }
}