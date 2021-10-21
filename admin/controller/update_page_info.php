<?php

if (!isset($_GET['auth'])) {
    header("location: page_info?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../school_page/page_info?info=failed");
    } else {

        //sanitize data
        $id = Page_info::sanitize_input($auth);
        $title = Page_info::sanitize_input($_POST['title']);
        $description = Page_info::sanitize_input($_POST['description']);

        //process form Image
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
                    header("location: ../school_page/page_info?info=failed");
                }
            } else {
                header("location: ../school_page/page_info?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of page_info class
        $page_info = Page_info::getInstance();

        //initialize class properties

        $page_info->setId($auth);
        $page_info->setTitle($title);
        $page_info->setDescription($description);
        $page_info->setpage_image($page_image);

        //update form input to database & check if it successful
        if ($page_info->update()) {
            header("location: ../school_page/page_info?info=complete");
        } else {
            header("location: ../school_page/page_info?info=failed");
        }
    }
}