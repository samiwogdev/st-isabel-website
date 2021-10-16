<?php

include_once '../configuration.php';
$id = Nursery_primary_page_info::sanitize_input($_GET['auth']);
$nursery_primary_page_info = Nursery_primary_page_info::getInstance();
$nursery_primary_page_info->setId($id);
if ($nursery_primary_page_info->delete()) {
    header("location: ../academics_page/nursery_primary_page_info?info=del");
} else {
    header("location: ../academics_page/nursery_primary_page_info?info=failed");
}
