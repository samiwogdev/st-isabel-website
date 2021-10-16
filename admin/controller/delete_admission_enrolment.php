<?php

include_once '../configuration.php';
$id = Admission_enrolment::sanitize_input($_GET['auth']);
$admission_enrolment = Admission_enrolment::getInstance();
$admission_enrolment->setId($id);
if ($admission_enrolment->delete()) {
    header("location: ../admission_page/admission_enrolment?info=del");
} else {
    header("location: ../admission_page/admission_enrolment?info=failed");
}