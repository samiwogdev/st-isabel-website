<?php

include_once '../configuration.php';
$id = SeniorSubject::sanitize_input($_GET['auth']);
$senior_subject = SeniorSubject::getInstance();
$senior_subject->setId($id);
if ($senior_subject->delete()) {
    header("location: ../academics_page/senior_subject?info=del");
} else {
    header("location: ../academics_page/senior_subject?info=failed");
}
