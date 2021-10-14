<?php

include_once '../configuration.php';
$id = Enrolment::sanitize_input($_GET['auth']);
$enrolment = Enrolment::getInstance();
$enrolment->setId($id);
if ($enrolment->delete()) {
    header("location: ../home_page/enrolment?info=del");
} else {
    header("location: ../home_page/enrolment?info=failed");
}
