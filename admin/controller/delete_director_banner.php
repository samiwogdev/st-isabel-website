<?php

include_once '../configuration.php';
$id = Director_banner::sanitize_input($_GET['auth']);
$director_banner = Director_banner::getInstance();
$director_banner->setId($id);
if ($director_banner->delete()) {
    header("location: ../school_page/director_banner?info=del");
} else {
    header("location: ../school_page/director_banner?info=failed");
}
