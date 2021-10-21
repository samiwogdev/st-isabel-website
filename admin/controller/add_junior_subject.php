<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_junior_subject'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../academics_page/junior_subject?info=failed");
    } else {

        //sanitize form input
        $title = Junior_subject::sanitize_input($_POST['title']);
        

        //get an Instance of page_info class
        $junior_subject = Junior_subject::getInstance();

        //initialize class properties
        $junior_subject->setTitle($title);

        //add form input to database/check if it successful
        if ($junior_subject->add()) {
            header("location: ../academics_page/junior_subject?info=success");
        } else {
            header("location: ../academics_page/junior_subject?info=failed");
        }
    }
}