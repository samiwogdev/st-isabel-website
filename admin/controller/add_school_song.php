<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_school_song'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/school_song?info=failed");
    } else {

        //sanitize form input
        $title = School_song::sanitize_input($_POST['title']);
        $description = School_song::sanitize_input($_POST['description']);

        

        //get an Instance of slider class
        $school_song = School_song::getInstance();

        //initialize class propperties
        $school_song->setTitle($title);
        $school_song->setDescription($description);
      

        //add form input to database/check if it successful
        if ($school_song->add()) {
            header("location: ../home_page/school_song?info=success");
        } else {
            header("location: ../home_page/school_song?info=failed");
        }
    }
}