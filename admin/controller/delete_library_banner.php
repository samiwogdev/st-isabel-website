<?php

include_once '../configuration.php';
$id = Library_banner::sanitize_input($_GET['auth']);
$library_banner = Library_banner::getInstance();
$library_banner->setId($id);
if ($library_banner->delete()) {
    header("location: ../facilities_page/library_banner?info=del");
} else {
    header("location: ../facilities_page/library_banner?info=failed");
}
