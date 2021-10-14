<?php

if (!isset($_GET['auth'])) {
    header("location: slider_ext?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_slider_ext'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/slider_ext?info=failed");
    } else {

        //sanitize data
        $id = Slider_ext::sanitize_input($auth);
        $title = Slider_ext::sanitize_input($_POST['title']);
        $description = Slider_ext::sanitize_input($_POST['description']);

        //get an Instance of slider_ext class
        $slider_ext = Slider_ext::getInstance();

        //initialize class properties

        $slider_ext->setId($auth);
        $slider_ext->setTitle($title);
        $slider_ext->setDescription($description);

        //update form input to database & check if it successful
        if ($slider_ext->update()) {
            header("location: ../home_page/slider_ext?info=complete");
        } else {
            header("location: ../home_page/slider_ext?info=failed");
        }
    }
}