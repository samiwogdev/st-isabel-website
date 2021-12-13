<?php

include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_lab_info'])) {

    //check if form input are not empty
    if (empty($_POST['icon']) || empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../facilities/laboratory_info?info=failed");
    } else {

        //sanitize form input
        $icon = LaboratoryInfo::sanitize_input($_POST['icon']);
        $title = LaboratoryInfo::sanitize_input($_POST['title']);
        $description = LaboratoryInfo::sanitize_input($_POST['description']);

        //get an Instance of slider class
        $lab_info = LaboratoryInfo::getInstance();

        //initialize class propperties
        $lab_info->setIcon($icon);
        $lab_info->setTitle($title);
        $lab_info->setDescription($description);

        //add form input to database/check if it successful
        if ($lab_info->add()) {
            header("location: ../facilities/laboratory_info?info=success");
        } else {
            header("location: ../facilities/laboratory_info?info=failed");
        }
    }
} else {
    header("location: ../facilities/laboratory_info?info=failed");
}