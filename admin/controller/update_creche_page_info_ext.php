<?php

if (!isset($_GET['auth'])) {
    header("location: creche_page_info_ext?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_creche_page_info_ext'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/creche_page_info_ext?info=failed");
    } else {

        //sanitize data
        $id = Creche_page_info_ext::sanitize_input($auth);
        $title = Creche_page_info_ext::sanitize_input($_POST['title']);
        $description = Creche_page_info_ext::sanitize_input($_POST['description']);

        //get an Instance of creche_page_info_ext class
        $creche_page_info_ext = Creche_page_info_ext::getInstance();

        //initialize class properties

        $creche_page_info_ext->setId($auth);
        $creche_page_info_ext->setTitle($title);
        $creche_page_info_ext->setDescription($description);

        //update form input to database & check if it successful
        if ($creche_page_info_ext->update()) {
            header("location: ../academics_page/creche_page_info_ext?info=complete");
        } else {
            header("location: ../academics_page/creche_page_info_ext?info=failed");
        }
    }
}