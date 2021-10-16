<?php

include_once '../configuration.php';
$id = Banner::sanitize_input($_GET['auth']);
$banner = Banner::getInstance();
$banner->setId($id);
if ($banner->delete()) {
    header("location: ../school_page/banner?info=del");
} else {
    header("location: ../school_page/banner?info=failed");
}
