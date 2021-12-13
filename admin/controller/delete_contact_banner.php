<?php

include_once '../configuration.php';
$id = ContactBanner::sanitize_input($_GET['auth']);
$contact_banner = ContactBanner::getInstance();
$contact_banner->setId($id);
if ($contact_banner->delete()) {
    header("location: ../contact_page/contact_banner?info=del");
} else {
    header("location: ../contact_page/contact_banner?info=failed");
}
