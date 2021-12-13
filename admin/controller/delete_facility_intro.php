<?php

include_once '../configuration.php';
$id = FacilityIntro::sanitize_input($_GET['auth']);
$page_info = FacilityIntro::getInstance();
$page_info->setId($id);
if ($page_info->delete()) {
    header("location: ../home_page/facility_intro?info=del");
} else {
    header("location: ../home_page/facility_intro?info=failed");
}
