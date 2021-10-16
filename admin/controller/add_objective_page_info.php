<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_objective_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../school_page/objective_page_info?info=failed");
    } else {

        //sanitize form input
        $title = Objective_page_info::sanitize_input($_POST['title']);
        $description = Objective_page_info::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $objective_page_info = Objective_page_info::getInstance();

        //initialize class properties
        $objective_page_info->setTitle($title);
        $objective_page_info->setDescription($description);

        //add form input to database/check if it successful
        if ($objective_page_info->add()) {
            header("location: ../school_page/objective_page_info?info=success");
        } else {
            header("location: ../school_page/objective_page_info?info=failed");
        }
    }
}