<?php

include_once '../configuration.php';
$id = CrecheBanner::sanitize_input($_GET['auth']);
$creche_banner = CrecheBanner::getInstance();
$creche_banner->setId($id);
if ($creche_banner->delete()) {
    header("location: ../academics_page/creche_banner?info=del");
} else {
    header("location: ../academics_page/creche_banner?info=failed");
}
