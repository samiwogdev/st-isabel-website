<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_creche_page_info_ext'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/creche_page_info_ext?info=failed");
    } else {

        //sanitize form input
        $title = Creche_page_info_ext::sanitize_input($_POST['title']);
        $description = Creche_page_info_ext::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $creche_page_info_ext = Creche_page_info_ext::getInstance();

        //initialize class properties
        $creche_page_info_ext->setTitle($title);
        $creche_page_info_ext->setDescription($description);

        //add form input to database/check if it successful
        if ($creche_page_info_ext->add()) {
            header("location: ../academics_page/creche_page_info_ext?info=success");
        } else {
            header("location: ../academics_page/creche_page_info_ext?info=failed");
        }
    }
}