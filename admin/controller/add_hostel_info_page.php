<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_hostel_info_page'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/hostel_info_page?info=failed");
    } else {

        //sanitize form input
        $title = Hostel_info_page::sanitize_input($_POST['title']);
        $description = Hostel_info_page::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $hostel_info_page = Hostel_info_page::getInstance();

        //initialize class properties
        $hostel_info_page->setTitle($title);
        $hostel_info_page->setDescription($description);

        //add form input to database/check if it successful
        if ($hostel_info_page->add()) {
            header("location: ../facilities_page/hostel_info_page?info=success");
        } else {
            header("location: ../facilities_page/hostel_info_page?info=failed");
        }
    }
}