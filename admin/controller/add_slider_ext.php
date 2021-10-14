<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_slider_ext'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../home_page/slider_ext?info=failed");
    } else {

        //sanitize form input
        $title = Slider_ext::sanitize_input($_POST['title']);
        $description = Slider_ext::sanitize_input($_POST['description']);

        

        //get an Instance of slider class
        $slider_ext = Slider_ext::getInstance();

        //initialize class propperties
        $slider_ext->setTitle($title);
        $slider_ext->setDescription($description);
      

        //add form input to database/check if it successful
        if ($slider_ext->add()) {
            header("location: ../home_page/slider_ext?info=success");
        } else {
            header("location: ../home_page/slider_ext?info=failed");
        }
    }
}