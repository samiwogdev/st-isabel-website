<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_facility_intro'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/facility_intro?info=failed");
    } else {

        //sanitize form input
        $title = FacilityIntro::sanitize_input($_POST['title']);
        $description = FacilityIntro::sanitize_input($_POST['description']);

        

        //get an Instance of slider class
        $facility_intro = FacilityIntro::getInstance();

        //initialize class propperties
        $facility_intro->setTitle($title);
        $facility_intro->setDescription($description);
      

        //add form input to database/check if it successful
        if ($facility_intro->add()) {
            header("location: ../home_page/facility_intro?info=success");
        } else {
            header("location: ../home_page/facility_intro?info=failed");
        }
    }
}