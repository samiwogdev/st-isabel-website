<?php

include_once '../configuration.php';
$id = SeniorInfoExt::sanitize_input($_GET['auth']);
$senior_infoExt = SeniorInfoExt::getInstance();
$senior_infoExt->setId($id);
if ($senior_infoExt->delete()) {
    header("location: ../academics_page/senior_infoExt?info=del");
} else {
    header("location: ../academics_page/senior_infoExt?info=failed");
}