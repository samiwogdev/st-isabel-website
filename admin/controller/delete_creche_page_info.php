<?php

include_once '../configuration.php';
$id = Creche_page_info::sanitize_input($_GET['auth']);
$creche_page_info = Creche_page_info::getInstance();
$creche_page_info->setId($id);
if ($creche_page_info->delete()) {
    header("location: ../academics_page/creche_page_info?info=del");
} else {
    header("location: ../academics_page/creche_page_info?info=failed");
}
