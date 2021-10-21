<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_laboratories_info_page'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/laboratories_info_page?info=failed");
    } else {

        //sanitize form input
        $title = Laboratories_info_page::sanitize_input($_POST['title']);
        $description = Laboratories_info_page::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $laboratories_info_page = Laboratories_info_page::getInstance();

        //initialize class properties
        $laboratories_info_page->setTitle($title);
        $laboratories_info_page->setDescription($description);

        //add form input to database/check if it successful
        if ($laboratories_info_page->add()) {
            header("location: ../facilities_page/laboratories_info_page?info=success");
        } else {
            header("location: ../facilities_page/laboratories_info_page?info=failed");
        }
    }
}