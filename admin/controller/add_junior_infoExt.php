<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_junior_infoExt'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/junior_infoExt?info=failed");
    } else {

        //sanitize form input
        $title = JuniorInfoExt::sanitize_input($_POST['title']);
        $description = JuniorInfoExt::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $junior_infoExt = JuniorInfoExt::getInstance();

        //initialize class properties
        $junior_infoExt->setTitle($title);
        $junior_infoExt->setDescription($description);

        //add form input to database/check if it successful
        if ($junior_infoExt->add()) {
            header("location: ../academics_page/junior_infoExt?info=success");
        } else {
            header("location: ../academics_page/junior_infoExt?info=failed");
        }
    }
}