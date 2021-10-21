<?php

include_once '../configuration.php';
$id = Admission_banner::sanitize_input($_GET['auth']);
$admission_banner = Admission_banner::getInstance();
$admission_banner->setId($id);
if ($admission_banner->delete()) {
    header("location: ../admission_page/admission_banner?info=del");
} else {
    header("location: ../admission_page/admission_banner?info=failed");
}
