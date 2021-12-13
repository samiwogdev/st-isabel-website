<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_nursery_primarysubject'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../academics_page/nursery_primarysubject?info=failed");
    } else {

        //sanitize form input
        $title = NurseryPrimarysubject::sanitize_input($_POST['title']);
        

        //get an Instance of page_info class
        $nursery_primarysubject = NurseryPrimarysubject::getInstance();

        //initialize class properties
        $nursery_primarysubject->setTitle($title);

        //add form input to database/check if it successful
        if ($nursery_primarysubject->add()) {
            header("location: ../academics_page/nursery_primarysubject?info=success");
        } else {
            header("location: ../academics_page/nursery_primarysubject?info=failed");
        }
    }
}