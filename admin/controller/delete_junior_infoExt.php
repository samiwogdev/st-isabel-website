<?php

include_once '../configuration.php';
$id = Junior_infoExt::sanitize_input($_GET['auth']);
$junior_infoExt = Junior_infoExt::getInstance();
$junior_infoExt->setId($id);
if ($junior_infoExt->delete()) {
    header("location: ../academics_page/junior_infoExt?info=del");
} else {
    header("location: ../academics_page/junior_infoExt?info=failed");
}