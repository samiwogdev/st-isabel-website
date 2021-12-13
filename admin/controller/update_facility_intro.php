<?php

if (!isset($_GET['auth'])) {
    header("location: facility_intro?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/facility_intro?info=failed");
    } else {

        //sanitize data
        $id = FacilityIntro::sanitize_input($auth);
        $title = FacilityIntro::sanitize_input($_POST['title']);
        $description = FacilityIntro::sanitize_input($_POST['description']);

        //get an Instance of page_info class
        $page_info = FacilityIntro::getInstance();

        //initialize class properties

        $page_info->setId($auth);
        $page_info->setTitle($title);
        $page_info->setDescription($description);

        //update form input to database & check if it successful
        if ($page_info->update()) {
            header("location: ../home_page/facility_intro?info=complete");
        } else {
            header("location: ../home_page/facility_intro?info=failed");
        }
    }
}