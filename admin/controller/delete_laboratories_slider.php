<?php

include_once '../configuration.php';
$id = Laboratories_slider::sanitize_input($_GET['auth']);
$laboratories_slider = Laboratories_slider::getInstance();
$laboratories_slider->setId($id);
if ($laboratories_slider->delete()) {
    header("location: ../facilities_page/laboratories_slider?info=del");
} else {
    header("location: ../facilities_page/laboratories_slider?info=failed");
}
