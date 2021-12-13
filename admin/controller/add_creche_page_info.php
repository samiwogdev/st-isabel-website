<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_creche_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/creche_page_info?info=failed");
    } else {

        //sanitize form input
        $title = CrechePageInfo::sanitize_input($_POST['title']);
        $description = CrechePageInfo::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $creche_page_info = CrechePageInfo::getInstance();

        //initialize class properties
        $creche_page_info->setTitle($title);
        $creche_page_info->setDescription($description);

        //add form input to database/check if it successful
        if ($creche_page_info->add()) {
            header("location: ../academics_page/creche_page_info?info=success");
        } else {
            header("location: ../academics_page/creche_page_info?info=failed");
        }
    }
}