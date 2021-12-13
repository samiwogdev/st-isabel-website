<?php

include_once '../configuration.php';
$id = WhoWeArePageInfo::sanitize_input($_GET['auth']);
$WhoWeArePageInfo= WhoWeArePageInfo::getInstance();
$WhoWeArePageInfo->setId($id);
if ($WhoWeArePageInfo->delete()) {
    header("location: ../school_page/who_we_are_page_info?info=del");
} else {
 header("location: ../school_page/who_we_are_page_info?info=failed");
}
