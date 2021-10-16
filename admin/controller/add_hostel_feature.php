<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_hostel_feature'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['feature'])) {
        header("location: ../facilities_page/hostel_feature?info=failed");
    } else {

        //sanitize form input
        $title = Hostel_feature::sanitize_input($_POST['title']);
        $feature = Hostel_feature::sanitize_input($_POST['feature']);
        

        //get an Instance of page_info class
        $hostel_feature = Hostel_feature::getInstance();

        //initialize class properties
        $hostel_feature->setTitle($title);
        $hostel_feature->setFeature($feature);

        //add form input to database/check if it successful
        if ($hostel_feature->add()) {
            header("location: ../facilities_page/hostel_feature?info=success");
        } else {
            header("location: ../facilities_page/hostel_feature?info=failed");
        }
    }
}