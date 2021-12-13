<?php

include_once '../configuration.php';
$id = NurseryPrimarysubject::sanitize_input($_GET['auth']);
$nursery_primarysubject = NurseryPrimarysubject::getInstance();
$nursery_primarysubject->setId($id);
if ($nursery_primarysubject->delete()) {
    header("location: ../academics_page/nursery_primarysubject?info=del");
} else {
    header("location: ../academics_page/nursery_primarysubject?info=failed");
}
