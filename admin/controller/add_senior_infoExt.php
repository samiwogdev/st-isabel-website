<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_senior_infoExt'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/senior_infoExt?info=failed");
    } else {

        //sanitize form input
        $title = SeniorInfoExt::sanitize_input($_POST['title']);
        $description = SeniorInfoExt::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $senior_infoExt = SeniorInfoExt::getInstance();

        //initialize class properties
        $senior_infoExt->setTitle($title);
        $senior_infoExt->setDescription($description);

        //add form input to database/check if it successful
        if ($senior_infoExt->add()) {
            header("location: ../academics_page/senior_infoExt?info=success");
        } else {
            header("location: ../academics_page/senior_infoExt?info=failed");
        }
    }
}