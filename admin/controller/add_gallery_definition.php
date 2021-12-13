<?php

include_once '../configuration.php';

if (isset($_POST['add_gallery_definition'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../events_gallery_page/gallery_definition?info=failed");
    } else {

        $title = GalleryDefinition::sanitize_input($_POST['title']);

        //get an Instance of college_banner class
        $gallery_definition = GalleryDefinition::getInstance();

        //initialize class properties
        $gallery_definition->setTitle($title);
        if ($gallery_definition->add()) {
            header("location: ../events_gallery_page/gallery_definition?info=success");
        } else {
            header("location: ../events_gallery_page/gallery_definition?info=failed");
        }
    }
} else {
    header("location: ../events_gallery_page/gallery_definition?info=failed");
}