<?php

if (!isset($_GET['auth'])) {
    header("location: nursery_primary_page_info?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_nursery_primary_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/nursery_primary_page_info?info=failed");
    } else {

        //sanitize data
        $id = NurseryPrimaryPageInfo::sanitize_input($auth);
        $title = NurseryPrimaryPageInfo::sanitize_input($_POST['title']);
        $description = NurseryPrimaryPageInfo::sanitize_input($_POST['description']);

        //get an Instance of nursery_primary_page_info class
        $nursery_primary_page_info = NurseryPrimaryPageInfo::getInstance();

        //initialize class properties

        $nursery_primary_page_info->setId($auth);
        $nursery_primary_page_info->setTitle($title);
        $nursery_primary_page_info->setDescription($description);

        //update form input to database & check if it successful
        if ($nursery_primary_page_info->update()) {
            header("location: ../academics_page/nursery_primary_page_info?info=complete");
        } else {
            header("location: ../academics_page/nursery_primary_page_info?info=failed");
        }
    }
}

