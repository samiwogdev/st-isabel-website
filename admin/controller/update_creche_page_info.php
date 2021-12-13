<?php

if (!isset($_GET['auth'])) {
    header("location: creche_page_info?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_creche_page_info'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/creche_page_info?info=failed");
    } else {

        //sanitize data
        $id = CrechePageInfo::sanitize_input($auth);
        $title = CrechePageInfo::sanitize_input($_POST['title']);
        $description = CrechePageInfo::sanitize_input($_POST['description']);

        //get an Instance of creche_page_info class
        $creche_page_info = CrechePageInfo::getInstance();

        //initialize class properties

        $creche_page_info->setId($auth);
        $creche_page_info->setTitle($title);
        $creche_page_info->setDescription($description);

        //update form input to database & check if it successful
        if ($creche_page_info->update()) {
            header("location: ../academics_page/creche_page_info?info=complete");
        } else {
            header("location: ../academics_page/creche_page_info?info=failed");
        }
    }
}