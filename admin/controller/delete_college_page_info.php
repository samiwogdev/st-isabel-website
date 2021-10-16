<?php

include_once '../configuration.php';
$id = College_page_info::sanitize_input($_GET['auth']);
$college_page_info = College_page_info::getInstance();
$college_page_info->setId($id);
if ($college_page_info->delete()) {
    header("location: ../academics_page/college_page_info?info=del");
} else {
    header("location: ../academics_page/college_page_info?info=failed");
}