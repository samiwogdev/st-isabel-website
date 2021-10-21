<?php

if (!isset($_GET['auth'])) {
    header("location: objective_page_info?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_objective_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../school_page/objective_page_info?info=failed");
    } else {

        //sanitize data
        $id = Objective_page_info::sanitize_input($auth);
        $title = Objective_page_info::sanitize_input($_POST['title']);
        $description = Objective_page_info::sanitize_input($_POST['description']);

        //get an Instance of objective_page_info class
        $objective_page_info = Objective_page_info::getInstance();

        //initialize class properties

        $objective_page_info->setId($auth);
        $objective_page_info->setTitle($title);
        $objective_page_info->setDescription($description);

        //update form input to database & check if it successful
        if ($objective_page_info->update()) {
            header("location: ../school_page/objective_page_info?info=complete");
        } else {
            header("location: ../school_page/objective_page_info?info=failed");
        }
    }
}