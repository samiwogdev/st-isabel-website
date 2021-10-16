<?php

if (!isset($_GET['auth'])) {
    header("location: college_page_info?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_college_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/college_page_info?info=failed");
    } else {

        //sanitize data
        $id = College_page_info::sanitize_input($auth);
        $title = College_page_info::sanitize_input($_POST['title']);
        $description = College_page_info::sanitize_input($_POST['description']);

        //get an Instance of college_page_info class
        $college_page_info = College_page_info::getInstance();

        //initialize class properties

        $college_page_info->setId($auth);
        $college_page_info->setTitle($title);
        $college_page_info->setDescription($description);

        //update form input to database & check if it successful
        if ($college_page_info->update()) {
            header("location: ../academics_page/college_page_info?info=complete");
        } else {
            header("location: ../academics_page/college_page_info?info=failed");
        }
    }
}