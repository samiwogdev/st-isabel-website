<?php

include_once '../configuration.php';
$id = Nursery_primary_page_infoExt::sanitize_input($_GET['auth']);
$nursery_primary_page_infoExt = Nursery_primary_page_infoExt::getInstance();
$nursery_primary_page_infoExt->setId($id);
if ($nursery_primary_page_infoExt->delete()) {
    header("location: ../academics_page/nursery_primary_page_infoExt?info=del");
} else {
    header("location: ../academics_page/nursery_primary_page_infoExt?info=failed");
}
