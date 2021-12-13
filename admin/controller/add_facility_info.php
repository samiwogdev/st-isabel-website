<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_facility_info'])) {
  
    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities/definition?info=failed");
    } else {

        //sanitize form input
        $setFacility_def_id = FacilityInfo::sanitize_input($_GET['auth']);
        $title = FacilityInfo::sanitize_input($_POST['title']);
        $description = FacilityInfo::sanitize_input($_POST['description']);

        //get an Instance of page_info class
        $facility_info = FacilityInfo::getInstance();

        //initialize class properties
        $facility_info->setFacility_def_id($setFacility_def_id);
        $facility_info->setTitle($title);
        $facility_info->setDescription($description);

        //add form input to database/check if it successful
        if ($facility_info->add()) {
            header("location: ../facilities/definition?info=success");
        } else {
            header("location: ../facilities/definition?info=failed");
        }
    }
}