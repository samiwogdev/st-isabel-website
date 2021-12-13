<?php

include_once '../configuration.php';
$id = ObjectivePageInfo::sanitize_input($_GET['auth']);
$objective_page_info = ObjectivePageInfo::getInstance();
$objective_page_info->setId($id);
if ($objective_page_info->delete()) {
    header("location: ../school_page/objective_page_info?info=del");
} else {
    header("location: ../school_page/objective_page_info?info=failed");
}
