<?php

if (!isset($_GET['auth'])) {
    header("location: nursery_primarysubject?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_nursery_primarysubject'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../academics_page/nursery_primarysubject?info=failed");
    } else {

        //sanitize data
        $id = Nursery_primarysubject::sanitize_input($auth);
        $title = Nursery_primarysubject::sanitize_input($_POST['title']);

        //get an Instance of nursery_primarysubject class
        $nursery_primarysubject = Nursery_primarysubject::getInstance();

        //initialize class properties

        $nursery_primarysubject->setId($auth);
        $nursery_primarysubject->setTitle($title);

        //update form input to database & check if it successful
        if ($nursery_primarysubject->update()) {
            header("location: ../academics_page/nursery_primarysubject?info=complete");
        } else {
            header("location: ../academics_page/nursery_primarysubject?info=failed");
        }
    }
}

