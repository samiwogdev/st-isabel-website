<?php

if (!isset($_GET['auth'])) {
    header("location: contact_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_contact_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../contact_page/contact_banner?info=failed");
    } else {

        //sanitize data
        $id = Contact_banner::sanitize_input($auth);
        $title = Contact_banner::sanitize_input($_POST['title']);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["contact_image"]) && $_FILES["contact_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['contact_image']['name'];
                $imageFileType = $_FILES['contact_image']['type'];
                $imageFileSize = $_FILES['contact_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $contact_image = 'contact_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['contact_image']['tmp_name'], "../uploads/raw/" . $contact_image);
                    $imageFileName = copy('../uploads/raw/' . $contact_image, '../uploads/thumbnail/' . $contact_image);
                } else {
                    header("location: ../contact_page/contact_banner?info=failed");
                }
            } else {
                header("location: ../contact_page/contact_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of contact_banner class
        $contact_banner = Contact_banner::getInstance();

        //initialize class properties

        $contact_banner->setId($auth);
        $contact_banner->setTitle($title);
        $contact_banner->setContact_image($contact_image);

        //update form input to database & check if it successful
        if ($contact_banner->update()) {
            header("location: ../contact_page/contact_banner?info=complete");
        } else {
            header("location: ../contact_page/contact_banner?info=failed");
        }
    }
}