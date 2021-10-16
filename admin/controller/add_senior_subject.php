<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_senior_subject'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../academics_page/senior_subject?info=failed");
    } else {

        //sanitize form input
        $title = Senior_subject::sanitize_input($_POST['title']);
        

        //get an Instance of page_info class
        $senior_subject = Senior_subject::getInstance();

        //initialize class properties
        $senior_subject->setTitle($title);

        //add form input to database/check if it successful
        if ($senior_subject->add()) {
            header("location: ../academics_page/senior_subject?info=success");
        } else {
            header("location: ../academics_page/senior_subject?info=failed"); 
        }
    }
}