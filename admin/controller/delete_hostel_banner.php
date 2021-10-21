<?php

include_once '../configuration.php';
$id = Hostel_banner::sanitize_input($_GET['auth']);
$hostel_banner = Hostel_banner::getInstance();
$hostel_banner->setId($id);
if ($hostel_banner->delete()) {
    header("location: ../facilities_page/hostel_banner?info=del");
} else {
    header("location: ../facilities_page/hostel_banner?info=failed");
}
