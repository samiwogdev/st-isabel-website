<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_facility_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])){
        header("location: ../facilities/facility-banner?info=failed");
    } else {

        //sanitize form input
        $title = FacilityBanner::sanitize_input($_POST['title']);

        //process formm Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["facility_image"]) && $_FILES["facility_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['facility_image']['name'];
                $imageFileType = $_FILES['facility_image']['type'];
                $imageFileSize = $_FILES['facility_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $facility_image = 'facility_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['facility_image']['tmp_name'], "../uploads/raw/" . $facility_image);
                    $imageFileName = copy('../uploads/raw/' . $facility_image, '../uploads/thumbnail/' . $facility_image);
                } else {
                    header("location: ../facilities/facility-banner?info=failed");
                }
            } else {
                header("location: ../facilities/facility-banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of creche_banner class
        $facility_banner = FacilityBanner::getInstance();

        //initialize class properties
        $facility_banner->setTitle($title);
        $facility_banner->setBanner_image($facility_image);

        //add form input to database/check if it successful
        if ($facility_banner->add()) {
            header("location: ../facilities/facility-banner?info=success");
        } else {
            header("location: ../facilities/facility-banner?info=failed");
        }
    }
}