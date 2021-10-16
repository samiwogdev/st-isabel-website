<?php

include_once '../configuration.php';
$id = College_banner::sanitize_input($_GET['auth']);
$college_banner = College_banner::getInstance();
$college_banner->setId($id);
if ($college_banner->delete()) {
    header("location: ../academics_page/college_banner?info=del");
} else {
    header("location: ../academics_page/college_banner?info=failed");
}