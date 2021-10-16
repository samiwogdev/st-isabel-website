<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_nursery_primary_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/nursery_primary_page_info?info=failed");
    } else {

        //sanitize form input
        $title = Nursery_primary_page_info::sanitize_input($_POST['title']);
        $description = Nursery_primary_page_info::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $nursery_primary_page_info = Nursery_primary_page_info::getInstance();

        //initialize class properties
        $nursery_primary_page_info->setTitle($title);
        $nursery_primary_page_info->setDescription($description);

        //add form input to database/check if it successful
        if ($nursery_primary_page_info->add()) {
            header("location: ../academics_page/nursery_primary_page_info?info=success");
        } else {
            header("location: ../academics_page/nursery_primary_page_info?info=failed");
        }
    }
}