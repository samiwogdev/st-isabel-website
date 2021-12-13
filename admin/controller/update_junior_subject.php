<?php

if (!isset($_GET['auth'])) {
    header("location: junior_subject?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_junior_subject'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../academics_page/junior_subject?info=failed");
    } else {

        //sanitize data
        $id = JuniorSubject::sanitize_input($auth);
        $title = JuniorSubject::sanitize_input($_POST['title']);

        //get an Instance of junior_subject class
        $junior_subject = JuniorSubject::getInstance();

        //initialize class properties

        $junior_subject->setId($auth);
        $junior_subject->setTitle($title);

        //update form input to database & check if it successful
        if ($junior_subject->update()) {
            header("location: ../academics_page/junior_subject?info=complete");
        } else {
            header("location: ../academics_page/junior_subject?info=failed");
        }
    }
}

