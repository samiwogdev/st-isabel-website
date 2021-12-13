<?php

if (!isset($_GET['auth'])) {
    header("location: senior_subject?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_senior_subject'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../academics_page/senior_subject?info=failed");
    } else {

        //sanitize data
        $id = SeniorSubject::sanitize_input($auth);
        $title = SeniorSubject::sanitize_input($_POST['title']);

        //get an Instance of senior_subject class
        $senior_subject = SeniorSubject::getInstance();

        //initialize class properties

        $senior_subject->setId($auth);
        $senior_subject->setTitle($title);

        //update form input to database & check if it successful
        if ($senior_subject->update()) {
            header("location: ../academics_page/senior_subject?info=complete");
        } else {
            header("location: ../academics_page/senior_subject?info=failed");
        }
    }
}

