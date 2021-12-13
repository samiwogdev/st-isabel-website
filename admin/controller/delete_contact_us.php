<?php

include_once '../configuration.php';
$id = ContactUs::sanitize_input($_GET['auth']);
$contact_us = ContactUs::getInstance();
$contact_us->setId($id);
if ($contact_us->delete()) {
    header("location: ../contact_page/contact_us?info=del");
} else {
    header("location: ../contact_page/contact_us?info=failed");
}
