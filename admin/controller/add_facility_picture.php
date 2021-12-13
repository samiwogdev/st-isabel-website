<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_facility_picture'])) {
$facility_def_id = FacilityPicture::sanitize_input($_GET['auth']);

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
                    header("location: ../facilities/facility_data?info=failed&auth=".$facility_def_id);
                }
            } else {
                  header("location: ../facilities/facility_data?info=failed&auth=".$facility_def_id);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }


        //get an Instance of creche_banner class
        $facility_picture = FacilityPicture::getInstance();

        //initialize class properties
        $facility_picture->setFacility_picture($facility_image);
        $facility_picture->setFacility_def_id($facility_def_id);

        //add form input to database/check if it successful
        if ($facility_picture->add()) {
            header("location: ../facilities/facility_data?info=success&auth=".$facility_def_id);
        } else {
              header("location: ../facilities/facility_data?info=failed&auth=".$facility_def_id);
        }

}