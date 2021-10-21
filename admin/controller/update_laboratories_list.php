<?php

if (!isset($_GET['auth'])) {
    header("location: laboratories_list?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_laboratories_list'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/laboratories_list?info=failed");
    } else {

        //sanitize data
        $id = Laboratories_list::sanitize_input($auth);
        $title = Laboratories_list::sanitize_input($_POST['title']);
        $description = Laboratories_list::sanitize_input($_POST['description']);

        //get an Instance of laboratories_list class
        $laboratories_list = Laboratories_list::getInstance();

        //initialize class properties

        $laboratories_list->setId($auth);
        $laboratories_list->setTitle($title);
        $laboratories_list->setDescription($description);

        //update form input to database & check if it successful
        if ($laboratories_list->update()) {
            header("location: ../facilities_page/laboratories_list?info=complete");
        } else {
            header("location: ../facilities_page/laboratories_list?info=failed");
        }
    }
}