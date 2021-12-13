<?php

include_once '../configuration.php';
$id = SongBanner::sanitize_input($_GET['auth']);
$song_b = SongBanner::getInstance();
$song_b->setId($id);
if ($song_b->delete()) {
    header("location: ../home_page/song_banner?info=del");
} else {
    header("location: ../home_page/song_banner?info=failed");
}
