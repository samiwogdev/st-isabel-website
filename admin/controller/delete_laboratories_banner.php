<?php

include_once '../configuration.php';
$id = Laboratories_banner::sanitize_input($_GET['auth']);
$laboratories_banner = Laboratories_banner::getInstance();
$laboratories_banner->setId($id);
if ($laboratories_banner->delete()) {
    header("location: ../facilities_page/laboratories_banner?info=del");
} else {
    header("location: ../facilities_page/laboratories_banner?info=failed");
}
