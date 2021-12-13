<?php

include_once '../configuration.php';
$id = JuniorInfoExt::sanitize_input($_GET['auth']);
$junior_infoExt = JuniorInfoExt::getInstance();
$junior_infoExt->setId($id);
if ($junior_infoExt->delete()) {
    header("location: ../academics_page/junior_infoExt?info=del");
} else {
    header("location: ../academics_page/junior_infoExt?info=failed");
}