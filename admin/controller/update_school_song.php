<?php

if (!isset($_GET['auth'])) {
    header("location: school_song?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_school_song'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/school_song?info=failed");
    } else {

        //sanitize data
        $id = SchoolSong::sanitize_input($auth);
        $title = SchoolSong::sanitize_input($_POST['title']);
        $description = SchoolSong::sanitize_input($_POST['description']);

        //get an Instance of Slider_ext class
        $school_song = SchoolSong::getInstance();

        //initialize class properties

        $school_song->setId($auth);
        $school_song->setTitle($title);
        $school_song->setDescription($description);

        //update form input to database & check if it successful
        if ($school_song->update()) {
            header("location: ../home_page/school_song?info=complete");
        } else {
            header("location: ../home_page/school_song?info=failed");
        }
    }
}