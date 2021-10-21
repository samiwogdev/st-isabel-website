<?php

include_once '../configuration.php';
$id = Creche_banner::sanitize_input($_GET['auth']);
$creche_banner = Creche_banner::getInstance();
$creche_banner->setId($id);
if ($creche_banner->delete()) {
    header("location: ../academics_page/creche_banner?info=del");
} else {
    header("location: ../academics_page/creche_banner?info=failed");
}
