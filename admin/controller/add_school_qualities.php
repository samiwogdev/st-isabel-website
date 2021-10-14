<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_school_qualities'])){
   
    //check if form input are not empty
    if (empty($_POST['qualities'])){
        header("location: ../home_page/school_qualities?info=failed");
    }else {
        //sanitize form input
        $qualities = School_qualities::sanitize_input($_POST['qualities']);
    

    //get an Instance of School_qualities class
    $school_qualities = School_qualities::getInstance();

    //initialize class properties
    $school_qualities -> setQualities($qualities);

    //add form input to database/check if it's successful
    if($school_qualities->add()) {
        header("location: ../home_page/school_qualities?info=success");

            }else{
                 header("location: ../home_page/school_qualities?info=failed");
            }
        }
    }
