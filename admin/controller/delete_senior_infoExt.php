<?php

include_once '../configuration.php';
$id = Senior_infoExt::sanitize_input($_GET['auth']);
$senior_infoExt = Senior_infoExt::getInstance();
$senior_infoExt->setId($id);
if ($senior_infoExt->delete()) {
    header("location: ../academics_page/senior_infoExt?info=del");
} else {
    header("location: ../academics_page/senior_infoExt?info=failed");
}