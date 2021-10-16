<?php

if (!isset($_GET['auth'])) {
    header("location: junior_infoExt?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_junior_infoExt'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/junior_infoExt?info=failed");
    } else {

        //sanitize data
        $id = Junior_infoExt::sanitize_input($auth);
        $title = Junior_infoExt::sanitize_input($_POST['title']);
        $description = Junior_infoExt::sanitize_input($_POST['description']);

        //get an Instance of junior_infoExt class
        $junior_infoExt = Junior_infoExt::getInstance();

        //initialize class properties

        $junior_infoExt->setId($auth);
        $junior_infoExt->setTitle($title);
        $junior_infoExt->setDescription($description);

        //update form input to database & check if it successful
        if ($junior_infoExt->update()) {
            header("location: ../academics_page/junior_infoExt?info=complete");
        } else {
            header("location: ../academics_page/junior_infoExt?info=failed");
        }
    }
}