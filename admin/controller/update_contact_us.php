<?php

if (!isset($_GET['auth'])) {
    header("location: contact_us?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_contact_us'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../contact_page/contact_us?info=failed");
    } else {

        //sanitize data
        $id = Contact_us::sanitize_input($auth);
        $title = Contact_us::sanitize_input($_POST['title']);
        $description = Contact_us::sanitize_input($_POST['description']);

        //get an Instance of contact_us class
        $contact_us = Contact_us::getInstance();

        //initialize class properties

        $contact_us->setId($auth);
        $contact_us->setTitle($title);
        $contact_us->setDescription($description);

        //update form input to database & check if it successful
        if ($contact_us->update()) {
            header("location: ../contact_page/contact_us?info=complete");
        } else {
            header("location: ../contact_page/contact_us?info=failed");
        }
    }
}