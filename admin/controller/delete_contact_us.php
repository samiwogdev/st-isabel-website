<?php

include_once '../configuration.php';
$id = Contact_us::sanitize_input($_GET['auth']);
$contact_us = Contact_us::getInstance();
$contact_us->setId($id);
if ($contact_us->delete()) {
    header("location: ../contact_page/contact_us?info=del");
} else {
    header("location: ../contact_page/contact_us?info=failed");
}
