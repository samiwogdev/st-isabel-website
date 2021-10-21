<?php

if (!isset($_GET['auth'])) {
    header("location: hostel_info_page?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_hostel_info_page'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/hostel_info_page?info=failed");
    } else {

        //sanitize data
        $id = Hostel_info_page::sanitize_input($auth);
        $title = Hostel_info_page::sanitize_input($_POST['title']);
        $description = Hostel_info_page::sanitize_input($_POST['description']);

        //get an Instance of hostel_info_page class
        $hostel_info_page = Hostel_info_page::getInstance();

        //initialize class properties

        $hostel_info_page->setId($auth);
        $hostel_info_page->setTitle($title);
        $hostel_info_page->setDescription($description);

        //update form input to database & check if it successful
        if ($hostel_info_page->update()) {
            header("location: ../facilities_page/hostel_info_page?info=complete");
        } else {
            header("location: ../facilities_page/hostel_info_page?info=failed");
        }
    }
}