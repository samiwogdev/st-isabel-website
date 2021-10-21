<?php

include_once '../configuration.php';
$id = Nursery_primarysubject::sanitize_input($_GET['auth']);
$nursery_primarysubject = Nursery_primarysubject::getInstance();
$nursery_primarysubject->setId($id);
if ($nursery_primarysubject->delete()) {
    header("location: ../academics_page/nursery_primarysubject?info=del");
} else {
    header("location: ../academics_page/nursery_primarysubject?info=failed");
}
