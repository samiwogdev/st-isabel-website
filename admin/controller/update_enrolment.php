<?php

if (!isset($_GET['auth'])) {
    header("location: enrolment?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_enrolment'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['enrol_title']) || empty($_POST['enrol_desc'])){
        header("location: ../home_page/enrolment?info=failed");
 } else {
     
     //sanitize data 
     $id = Enrolment::sanitize_input($auth);
     $title = Enrolment::sanitize_input($_POST['title']);
     $description = Enrolment::sanitize_input($_POST['description']);
     $enrol_title = Enrolment::sanitize_input($_POST['enrol_title']);
     $enrol_desc = Enrolment::sanitize_input($_POST['enrol_desc']);

     //process form Image
     try {
        // Check if image was uploaded without errors
        if (isset($_FILES["bg_image"]) && $_FILES["bg_image"]["error"] == 0) {
            $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
            $imageFileName = $_FILES['bg_image']['name'];
            $imageFileType = $_FILES['bg_image']['type'];
            $imageFileSize = $_FILES['bg_image']['size'];
            $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

            // Verify MYME type of the file
            if (in_array($imageFileType, $allowedImageType)) {
                $bg_image = 'bg_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                move_uploaded_file($_FILES['bg_image']['tmp_name'], "../uploads/raw/" . $bg_image);
                $imageFileName = copy('../uploads/raw/' . $bg_image, '../uploads/thumbnail/' . $bg_image);
            } else {
                header("location: ../home_page/enrolment?info=failed");
            }
        } else {
            header("location: ../home_page/enrolment?info=failed");
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

    //get an Instance of Enrolment class
    $enrolment =Enrolment::getInstance();

    //initialize class properties
    $enrolment->setId($auth);
    $enrolment->setBg_image($bg_image);
    $enrolment->setTitle($title);
    $enrolment->setDescription($description);
    $enrolment->setEnrol_title($enrol_title);
    $enrolment->setEnrol_desc($enrol_desc);

    //update form input to database & check if it successful


    if($enrolment->update()){
        header("location: ../home_page/enrolment?info=complete");
    }else{
        header("location: ../home_page/enrolment?info=failed");

    }

 }
}