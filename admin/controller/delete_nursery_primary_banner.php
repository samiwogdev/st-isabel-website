<?php

include_once '../configuration.php';
$id = Nursery_primary_banner::sanitize_input($_GET['auth']);
$nursery_primary_banner = Nursery_primary_banner::getInstance();
$nursery_primary_banner->setId($id);
if ($nursery_primary_banner->delete()) {
    header("location: ../academics_page/nursery_primary_banner?info=del");
} else {
    header("location: ../academics_page/nursery_primary_banner?info=failed");
}
