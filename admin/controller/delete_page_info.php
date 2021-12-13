<?php

include_once '../configuration.php';
$id = PageInfo::sanitize_input($_GET['auth']);
$page_info = PageInfo::getInstance();
$page_info->setId($id);
if ($page_info->delete()) {
    header("location: ../home_page/page_info?info=del");
} else {
    header("location: ../home_page/page_info?info=failed");
}
