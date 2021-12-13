<?php

include_once '../configuration.php';
$id = SchoolQualities::sanitize_input($_GET['auth']);
$school_qualities = SchoolQualities::getInstance();
$school_qualities-> setId($id);
if ($school_qualities->delete()){
    header("location: ../home_page/school_qualities?info=del");
}else {
    header("location: ../home_page/school_qualities?info=failed");

}