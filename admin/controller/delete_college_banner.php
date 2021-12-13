<?php

include_once '../configuration.php';
$id = CollegeBanner::sanitize_input($_GET['auth']);
$college_banner = CollegeBanner::getInstance();
$college_banner->setId($id);
if ($college_banner->delete()) {
    header("location: ../academics_page/college_banner?info=del");
} else {
    header("location: ../academics_page/college_banner?info=failed");
}