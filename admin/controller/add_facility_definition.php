<?php

include_once '../configuration.php';

if (isset($_POST['add_facility_definition'])) {
    
    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../facilities/definition?info=failed");
    } else {

        $title = FacilityDefinition::sanitize_input($_POST['title']);

        //get an Instance of college_banner class
        $facility_definition = FacilityDefinition::getInstance();

        //initialize class properties
        $facility_definition->setTitle($title);
        if ($facility_definition->add()) {
            header("location: ../facilities/definition?info=success");
        } else {
            header("location: ../facilities/definition?info=failed");
        }
    }
} else {
    header("location: ../facilities/definition?info=failed");
}