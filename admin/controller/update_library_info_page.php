<?php

if (!isset($_GET['auth'])) {
    header("location: library_info_page?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_library_info_page'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/library_info_page?info=failed");
    } else {

        //sanitize data
        $id = Library_info_page::sanitize_input($auth);
        $title = Library_info_page::sanitize_input($_POST['title']);
        $description = Library_info_page::sanitize_input($_POST['description']);

        //get an Instance of library_info_page class
        $library_info_page = Library_info_page::getInstance();

        //initialize class properties

        $library_info_page->setId($auth);
        $library_info_page->setTitle($title);
        $library_info_page->setDescription($description);

        //update form input to database & check if it successful
        if ($library_info_page->update()) {
            header("location: ../facilities_page/library_info_page?info=complete");
        } else {
            header("location: ../facilities_page/library_info_page?info=failed");
        }
    }
}