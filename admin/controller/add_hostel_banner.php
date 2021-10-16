<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_hostel_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../facilities_page/hostel_banner?info=failed");
    } else {

        //sanitize form input
        $title = Hostel_banner::sanitize_input($_POST['title']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["hostel_image"]) && $_FILES["hostel_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['hostel_image']['name'];
                $imageFileType = $_FILES['hostel_image']['type'];
                $imageFileSize = $_FILES['hostel_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $hostel_image = 'hostel_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['hostel_image']['tmp_name'], "../uploads/raw/" . $hostel_image);
                    $imageFileName = copy('../uploads/raw/' . $hostel_image, '../uploads/thumbnail/' . $hostel_image);
                } else {
                    header("location: ../facilities_page/hostel_banner?info=failed");
                }
            } else {
                header("location: ../facilities_page/hostel_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of hostel_banner class
        $hostel_banner = Hostel_banner::getInstance();

        //initialize class properties
        $hostel_banner->setTitle($title);
        $hostel_banner->setHostel_image($hostel_image);

        //add form input to database/check if it successful
        if ($hostel_banner->add()) {
            header("location: ../facilities_page/hostel_banner?info=success");
        } else {
            header("location: ../facilities_page/hostel_banner?info=failed");
        }
    }
}