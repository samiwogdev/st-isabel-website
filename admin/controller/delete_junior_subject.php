<?php

include_once '../configuration.php';
$id = JuniorSubject::sanitize_input($_GET['auth']);
$junior_subject = JuniorSubject::getInstance();
$junior_subject->setId($id);
if ($junior_subject->delete()) {
    header("location: ../academics_page/junior_subject?info=del");
} else {
    header("location: ../academics_page/junior_subject?info=failed");
}
