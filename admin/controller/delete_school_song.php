<?php

include_once '../configuration.php';
$id = SchoolSong::sanitize_input($_GET['auth']);
$school_song = SchoolSong::getInstance();
$school_song->setId($id);
if ($school_song->delete()) {
    header("location: ../home_page/school_song?info=del");
} else {
    header("location: ../home_page/school_song?info=failed");
}
