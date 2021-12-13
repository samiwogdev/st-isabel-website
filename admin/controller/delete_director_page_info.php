<?php

include_once '../configuration.php';
$id = DirectorPageInfo::sanitize_input($_GET['auth']);
$director_page_info = DirectorPageInfo::getInstance();
$director_page_info->setId($id);
if ($director_page_info->delete()) {
    header("location: ../school_page/director_page_info?info=del");
} else {
    header("location: ../school_page/director_page_info?info=failed");
}
