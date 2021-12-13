<?php

include_once '../configuration.php';
$id = CrechePageInfo::sanitize_input($_GET['auth']);
$creche_page_info = CrechePageInfo::getInstance();
$creche_page_info->setId($id);
if ($creche_page_info->delete()) {
    header("location: ../academics_page/creche_page_info?info=del");
} else {
    header("location: ../academics_page/creche_page_info?info=failed");
}
