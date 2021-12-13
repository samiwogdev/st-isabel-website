<?php

include_once '../configuration.php';
$id = AdmissionBanner::sanitize_input($_GET['auth']);
$admission_banner = AdmissionBanner::getInstance();
$admission_banner->setId($id);
if ($admission_banner->delete()) {
    header("location: ../admission_page/admission_banner?info=del");
} else {
    header("location: ../admission_page/admission_banner?info=failed");
}
