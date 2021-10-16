<?php

if (!isset($_GET['auth'])) {
    header("location: nursery_primary_page_infoExt?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_nursery_primary_page_infoExt'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/nursery_primary_page_infoExt?info=failed");
    } else {

        //sanitize data
        $id = Nursery_primary_page_infoExt::sanitize_input($auth);
        $title = Nursery_primary_page_infoExt::sanitize_input($_POST['title']);
        $description = Nursery_primary_page_infoExt::sanitize_input($_POST['description']);

        //get an Instance of nursery_primary_page_infoExt class
        $nursery_primary_page_infoExt = nursery_primary_page_infoExt::getInstance();

        //initialize class properties

        $nursery_primary_page_infoExt->setId($auth);
        $nursery_primary_page_infoExt->setTitle($title);
        $nursery_primary_page_infoExt->setDescription($description);

        //update form input to database & check if it successful
        if ($nursery_primary_page_infoExt->update()) {
            header("location: ../academics_page/nursery_primary_page_infoExt?info=complete");
        } else {
            header("location: ../academics_page/nursery_primary_page_infoExt?info=failed");
        }
    }
}

