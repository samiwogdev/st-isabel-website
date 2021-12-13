<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_contact_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../contact_page/contact_banner?info=failed");
    } else {

        //sanitize form input
        $title = ContactBanner::sanitize_input($_POST['title']);

        //process formm Image
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
        $contact_banner = ContactBanner::getInstance();

        //initialize class properties
        $contact_banner->setTitle($title);
        $contact_banner->setContact_image($contact_image);

        //add form input to database/check if it successful
        if ($contact_banner->add()) {
            header("location: ../contact_page/contact_banner?info=success");
        } else {
            header("location: ../contact_page/contact_banner?info=failed");
        }
    }
}