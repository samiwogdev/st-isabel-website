<?php

include_once '../configuration.php';
$id = Hostel_info_page::sanitize_input($_GET['auth']);
$hostel_info_page = Hostel_info_page::getInstance();
$hostel_info_page->setId($id);
if ($hostel_info_page->delete()) {
    header("location: ../facilities_page/hostel_info_page?info=del");
} else {
    header("location: ../facilities_page/hostel_info_page?info=failed");
}
