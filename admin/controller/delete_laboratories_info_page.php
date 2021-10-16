<?php

include_once '../configuration.php';
$id = laboratories_info_page::sanitize_input($_GET['auth']);
$laboratories_info_page = laboratories_info_page::getInstance();
$laboratories_info_page->setId($id);
if ($laboratories_info_page->delete()) {
    header("location: ../facilities_page/laboratories_info_page?info=del");
} else {
    header("location: ../facilities_page/laboratories_info_page?info=failed");
}
