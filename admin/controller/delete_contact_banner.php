<?php

include_once '../configuration.php';
$id = Contact_banner::sanitize_input($_GET['auth']);
$contact_banner = Contact_banner::getInstance();
$contact_banner->setId($id);
if ($contact_banner->delete()) {
    header("location: ../contact_page/contact_banner?info=del");
} else {
    header("location: ../contact_page/contact_banner?info=failed");
}
