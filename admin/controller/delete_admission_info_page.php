<?php

include_once '../configuration.php';
$id = Admission_info_page::sanitize_input($_GET['auth']);
$admission_info_page = Admission_info_page::getInstance();
$admission_info_page->setId($id);
if ($admission_info_page->delete()) {
    header("location: ../admission_page/admission_info_page?info=del");
} else {
    header("location: ../admission_page/admission_info_page?info=failed");
}
