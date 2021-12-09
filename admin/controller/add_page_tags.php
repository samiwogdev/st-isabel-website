<?php

include_once '../configuration.php';

if (isset($_POST['add_page_definition'])) {
    
    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../events_gallery_page/page_definition?info=failed");
    } else {

        $title = PageDefinition::sanitize_input($_POST['title']);

        //get an Instance of college_banner class
        $page_definition = PageDefinition::getInstance();

        //initialize class properties
        $page_definition->setTitle($title);
        if ($page_definition->add()) {
            header("location: ../events_gallery_page/page_definition?info=success");
        } else {
            header("location: ../events_gallery_page/page_definition?info=failed");
        }
    }
} else {
    header("location: ../events_gallery_page/page_definition?info=failed");
}