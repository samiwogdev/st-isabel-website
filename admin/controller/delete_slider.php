<?php

include_once '../configuration.php';
$id = Slider::sanitize_input($_GET['auth']);
$slider = Slider::getInstance();
$slider->setId($id);
if ($slider->delete()) {
    header("location: ../home_page/slider?info=del");
} else {
    header("location: ../home_page/slider?info=failed");
}
