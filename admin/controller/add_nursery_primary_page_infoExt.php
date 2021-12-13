<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_nursery_primary_page_infoExt'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../academics_page/nursery_primary_page_infoExt?info=failed");
    } else {

        //sanitize form input
        $title = NurseryPrimaryPageInfoExt::sanitize_input($_POST['title']);
        $description = NurseryPrimaryPageInfoExt::sanitize_input($_POST['description']);
        

        //get an Instance of page_info class
        $nursery_primary_page_infoExt = NurseryPrimaryPageInfoExt::getInstance();

        //initialize class properties
        $nursery_primary_page_infoExt->setTitle($title);
        $nursery_primary_page_infoExt->setDescription($description);

        //add form input to database/check if it successful
        if ($nursery_primary_page_infoExt->add()) {
            header("location: ../academics_page/nursery_primary_page_infoExt?info=success");
        } else {
            header("location: ../academics_page/nursery_primary_page_infoExt?info=failed");
        }
    }
}