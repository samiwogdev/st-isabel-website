<?php

include_once '../configuration.php';
$id = Library_info_page::sanitize_input($_GET['auth']);
$library_info_page = Library_info_page::getInstance();
$library_info_page->setId($id);
if ($library_info_page->delete()) {
    header("location: ../facilities_page/library_info_page?info=del");
} else {
    header("location: ../facilities_page/library_info_page?info=failed");
}
