<?php

include_once '../configuration.php';
$id = Library_slider::sanitize_input($_GET['auth']);
$library_slider = Library_slider::getInstance();
$library_slider->setId($id);
if ($library_slider->delete()) {
    header("location: ../facilities_page/library_slider?info=del");
} else {
    header("location: ../facilities_page/library_slider?info=failed");
}
