<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_laboratories_list'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/laboratories_list?info=failed");
    } else {

        //sanitize form input
        $title = Laboratories_list::sanitize_input($_POST['title']);
        $description = Laboratories_list::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $laboratories_list = Laboratories_list::getInstance();

        //initialize class properties
        $laboratories_list->setTitle($title);
        $laboratories_list->setDescription($description);

        //add form input to database/check if it successful
        if ($laboratories_list->add()) {
            header("location: ../facilities_page/laboratories_list?info=success");
        } else {
            header("location: ../facilities_page/laboratories_list?info=failed");
        }
    }
}