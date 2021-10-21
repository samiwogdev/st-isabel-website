<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_library_feature'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['feature'])) {
        header("location: ../facilities_page/library_feature?info=failed");
    } else {

        //sanitize form input
        $title = Library_feature::sanitize_input($_POST['title']);
        $feature = Library_feature::sanitize_input($_POST['feature']);
        

        //get an Instance of page_info class
        $library_feature = Library_feature::getInstance();

        //initialize class properties
        $library_feature->setTitle($title);
        $library_feature->setFeature($feature);

        //add form input to database/check if it successful
        if ($library_feature->add()) {
            header("location: ../facilities_page/library_feature?info=success");
        } else {
            header("location: ../facilities_page/library_feature?info=failed");
        }
    }
}