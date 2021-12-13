<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_facility_data'])) {

    //check if form input are not empty
    if ( empty($_POST['icon']) || empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/facility_data?info=failed");
    } else {

        //sanitize form input
        $icon = FacilityData::sanitize_input($_POST['icon']);
        $title = FacilityData::sanitize_input($_POST['title']);
        $description = FacilityData::sanitize_input($_POST['description']);
        

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
                    header("location: ../home_page/facility_data?info=failed");
                }
            } else {
                header("location: ../home_page/facility_data?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of slider class
        $facility_data = FacilityData::getInstance();

        //initialize class propperties
        $facility_data->setIcon($icon);
        $facility_data->setTitle($title);
        $facility_data->setDescription($description);
        $facility_data->setFacility_image($facility_image);

        //add form input to database/check if it successful
        if ($facility_data->add()) {
            header("location: ../home_page/facility_data?info=success");
        } else {
            header("location: ../home_page/facility_data?info=failed");
        }
    }
}else{
   header("location: ../home_page/facility_data?info=failed");
}