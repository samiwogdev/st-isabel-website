<?php

if (!isset($_GET['auth'])) {
    header("location: library_feature?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_library_feature'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['feature'])) {
        header("location: ../facilities_page/library_feature?info=failed");
    } else {

        //sanitize data
        $id = Library_feature::sanitize_input($auth);
        $title = Library_feature::sanitize_input($_POST['title']);
        $feature = Library_feature::sanitize_input($_POST['feature']);

        //get an Instance of library_feature class
        $library_feature = Library_feature::getInstance();

        //initialize class properties

        $library_feature->setId($auth);
        $library_feature->setTitle($title);
        $library_feature->setFeature($feature);

        //update form input to database & check if it successful
        if ($library_feature->update()) {
            header("location: ../facilities_page/library_feature?info=complete");
        } else {
            header("location: ../facilities_page/library_feature?info=failed");
        }
    }
}