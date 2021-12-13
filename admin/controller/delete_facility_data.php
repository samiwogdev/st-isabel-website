<?php

include_once '../configuration.php';
$id = FacilityData::sanitize_input($_GET['auth']);
$facility_data = FacilityData::getInstance();
$facility_data->setId($id);
if ($facility_data->delete()) {
    header("location: ../home_page/facility_data?info=del");
} else {
    header("location: ../home_page/facility_data?info=failed");
}