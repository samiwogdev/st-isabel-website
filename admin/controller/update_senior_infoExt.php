<?php

if (!isset($_GET['auth'])) {
    header("location: senior_infoExt?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_senior_infoExt'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/senior_infoExt?info=failed");
    } else {

        //sanitize data
        $id = SeniorInfoExt::sanitize_input($auth);
        $title = SeniorInfoExt::sanitize_input($_POST['title']);
        $description = SeniorInfoExt::sanitize_input($_POST['description']);

        //get an Instance of senior_infoExt class
        $senior_infoExt = SeniorInfoExt::getInstance();

        //initialize class properties

        $senior_infoExt->setId($auth);
        $senior_infoExt->setTitle($title);
        $senior_infoExt->setDescription($description);

        //update form input to database & check if it successful
        if ($senior_infoExt->update()) {
            header("location: ../academics_page/senior_infoExt?info=complete");
        } else {
            header("location: ../academics_page/senior_infoExt?info=failed");
        }
    }
}