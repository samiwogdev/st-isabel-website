<?php

include_once '../configuration.php';
$id = Page_info::sanitize_input($_GET['auth']);
$page_info = Page_info::getInstance();
$page_info->setId($id);
if ($page_info->delete()) {
    header("location: ../school_page/who_we_are_page_info?info=del");
} else {
    header("location: ../school_page/who_we_are_page_info?info=failed");
}
