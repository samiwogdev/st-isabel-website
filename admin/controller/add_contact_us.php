<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_contact_us'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../contact_page/contact_us?info=failed");
    } else {

        //sanitize form input
        $title = Contact_us::sanitize_input($_POST['title']);
        $description = Contact_us::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $contact_us = contact_us::getInstance();

        //initialize class properties
        $contact_us->setTitle($title);
        $contact_us->setDescription($description);

        //add form input to database/check if it successful
        if ($contact_us->add()) {
            header("location: ../contact_page/contact_us?info=success");
        } else {
            header("location: ../contact_page/contact_us?info=failed");
        }
    }
}