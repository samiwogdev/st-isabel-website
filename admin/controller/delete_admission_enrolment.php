<?php

include_once '../configuration.php';
$id = AdmissionEnrolment::sanitize_input($_GET['auth']);
$admission_enrolment = AdmissionEnrolment::getInstance();
$admission_enrolment->setId($id);
if ($admission_enrolment->delete()) {
    header("location: ../admission_page/admission_enrolment?info=del");
} else {
    header("location: ../admission_page/admission_enrolment?info=failed");
}