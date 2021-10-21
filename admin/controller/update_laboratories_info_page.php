<?php

if (!isset($_GET['auth'])) {
    header("location: laboratories_info_page?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_laboratories_info_page'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/laboratories_info_page?info=failed");
    } else {

        //sanitize data
        $id = Laboratories_info_page::sanitize_input($auth);
        $title = Laboratories_info_page::sanitize_input($_POST['title']);
        $description = Laboratories_info_page::sanitize_input($_POST['description']);

        //get an Instance of laboratories_info_page class
        $laboratories_info_page = Laboratories_info_page::getInstance();

        //initialize class properties

        $laboratories_info_page->setId($auth);
        $laboratories_info_page->setTitle($title);
        $laboratories_info_page->setDescription($description);

        //update form input to database & check if it successful
        if ($laboratories_info_page->update()) {
            header("location: ../facilities_page/laboratories_info_page?info=complete");
        } else {
            header("location: ../facilities_page/laboratories_info_page?info=failed");
        }
    }
}