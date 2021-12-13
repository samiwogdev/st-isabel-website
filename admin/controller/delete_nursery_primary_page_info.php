<?php

include_once '../configuration.php';
$id = NurseryPrimaryPageInfo::sanitize_input($_GET['auth']);
$nursery_primary_page_info = NurseryPrimaryPageInfo::getInstance();
$nursery_primary_page_info->setId($id);
if ($nursery_primary_page_info->delete()) {
    header("location: ../academics_page/nursery_primary_page_info?info=del");
} else {
    header("location: ../academics_page/nursery_primary_page_info?info=failed");
}
