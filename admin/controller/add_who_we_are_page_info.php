<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_who_we_are_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../school_page/who_we_are_page_info?info=failed");
    } else {

        //sanitize form input
        $title = WhoWeArePageInfo::sanitize_input($_POST['title']);
        $description = WhoWeArePageInfo::sanitize_input($_POST['description']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["page_image"]) && $_FILES["page_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['page_image']['name'];
                $imageFileType = $_FILES['page_image']['type'];
                $imageFileSize = $_FILES['page_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $page_image = 'page_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['page_image']['tmp_name'], "../uploads/raw/" . $page_image);
                    $imageFileName = copy('../uploads/raw/' . $page_image, '../uploads/thumbnail/' . $page_image);
                } else {
                    header("location: ../school_page/who_we_are_page_info?info=failed");
                }
            } else {
                header("location: ../school_page/who_we_are_page_info?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of page_info class
        $who_we_are_page_info = WhoWeArePageInfo::getInstance();

        //initialize class properties
        $who_we_are_page_info->setTitle($title);
        $who_we_are_page_info->setDescription($description);
        $who_we_are_page_info->setPage_image($page_image);

        //add form input to database/check if it successful
        if ($who_we_are_page_info->add()) {
            header("location: ../school_page/who_we_are_page_info?info=success");
        } else {
            header("location: ../school_page/who_we_are_page_info?info=failed");
        }
    }
}