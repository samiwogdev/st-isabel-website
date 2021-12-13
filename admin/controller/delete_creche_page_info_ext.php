<?php

include_once '../configuration.php';
$id = CrechePageInfoExt::sanitize_input($_GET['auth']);
$creche_page_info_ext = CrechePageInfoExt::getInstance();
$creche_page_info_ext->setId($id);
if ($creche_page_info_ext->delete()) {
    header("location: ../academics_page/creche_page_info_ext?info=del");
} else {
    header("location: ../academics_page/creche_page_info_ext?info=failed");
}
