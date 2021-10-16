<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_library_info_page'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities_page/library_info_page?info=failed");
    } else {

        //sanitize form input
        $title = Library_info_page::sanitize_input($_POST['title']);
        $description = Library_info_page::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $library_info_page = Library_info_page::getInstance();

        //initialize class properties
        $library_info_page->setTitle($title);
        $library_info_page->setDescription($description);

        //add form input to database/check if it successful
        if ($library_info_page->add()) {
            header("location: ../facilities_page/library_info_page?info=success");
        } else {
            header("location: ../facilities_page/library_info_page?info=failed");
        }
    }
}