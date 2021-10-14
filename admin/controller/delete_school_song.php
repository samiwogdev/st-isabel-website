<?php

include_once '../configuration.php';
$id = School_song::sanitize_input($_GET['auth']);
$school_song = School_song::getInstance();
$school_song->setId($id);
if ($school_song->delete()) {
    header("location: ../home_page/school_song?info=del");
} else {
    header("location: ../home_page/school_song?info=failed");
}
