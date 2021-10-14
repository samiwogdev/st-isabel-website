<?php

if (!isset($_GET['auth'])) {
    header("location: school_qualities?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_school_qualities'])) {

    //check if form input are not empty
    if (empty($_POST['qualities'])){
        header("location: ../home_page/school_qualities?info=failed");
    } else {

        //sanitize data
        $id = School_qualities::sanitize_input($auth);
        $qualities = School_qualities::sanitize_input($_POST['qualities']);
       

        //get an Instance of slider_ext class
        $school_qualities = School_qualities::getInstance();

        //initialize class properties

        $school_qualities->setId($auth);
        $school_qualities->setQualities($qualities);
 

        //update form input to database & check if it successful
        if ($school_qualities->update()) {
            header("location: ../home_page/school_qualities?info=complete");
        } else {
            header("location: ../home_page/school_qualities?info=failed");
        }
    }
}