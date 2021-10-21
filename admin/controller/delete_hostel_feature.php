<?php

include_once '../configuration.php';
$id = Hostel_feature::sanitize_input($_GET['auth']);
$hostel_feature = Hostel_feature::getInstance();
$hostel_feature->setId($id);
if ($hostel_feature->delete()) {
    header("location: ../facilities_page/hostel_feature?info=del");
} else {
    header("location: ../facilities_page/hostel_feature?info=failed");
}
