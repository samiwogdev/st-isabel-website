<?php

if (!isset($_GET['auth'])) {
    header("location: hostel_feature?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_hostel_feature'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['feature'])) {
        header("location: ../facilities_page/hostel_feature?info=failed");
    } else {

        //sanitize data
        $id = Hostel_feature::sanitize_input($auth);
        $title = Hostel_feature::sanitize_input($_POST['title']);
        $feature = Hostel_feature::sanitize_input($_POST['feature']);

        //get an Instance of hostel_feature class
        $hostel_feature = Hostel_feature::getInstance();

        //initialize class properties

        $hostel_feature->setId($auth);
        $hostel_feature->setTitle($title);
        $hostel_feature->setFeature($feature);

        //update form input to database & check if it successful
        if ($hostel_feature->update()) {
            header("location: ../facilities_page/hostel_feature?info=complete");
        } else {
            header("location: ../facilities_page/hostel_feature?info=failed");
        }
    }
}