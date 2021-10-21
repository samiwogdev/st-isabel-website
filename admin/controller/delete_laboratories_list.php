<?php

include_once '../configuration.php';
$id = Laboratories_list::sanitize_input($_GET['auth']);
$laboratories_list = Laboratories_list::getInstance();
$laboratories_list->setId($id);
if ($laboratories_list->delete()) {
    header("location: ../facilities_page/laboratories_list?info=del");
} else {
    header("location: ../facilities_page/laboratories_list?info=failed");
}

