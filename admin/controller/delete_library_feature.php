<?php

include_once '../configuration.php';
$id = Library_feature::sanitize_input($_GET['auth']);
$library_feature = Library_feature::getInstance();
$library_feature->setId($id);
if ($library_feature->delete()) {
    header("location: ../facilities_page/library_feature?info=del");
} else {
    header("location: ../facilities_page/library_feature?info=failed");
}
