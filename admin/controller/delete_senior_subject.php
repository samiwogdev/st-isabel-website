<?php

include_once '../configuration.php';
$id = SeniorSubject::sanitize_input($_GET['auth']);
$senior_sub = SeniorSubject::getInstance();
$senior_sub->setId($id);
if ($senior_sub->delete()) {
    header("location: ../academics_page/senior_subject?info=del");
} else {
    header("location: ../academics_page/senior_subject?info=failed");
}