<?php

include_once '../configuration.php';
$id = SliderExt::sanitize_input($_GET['auth']);
$slider_ext = SliderExt::getInstance();
$slider_ext->setId($id);
if ($slider_ext->delete()) {
    header("location: ../home_page/slider_ext?info=del");
} else {
    header("location: ../home_page/slider_ext?info=failed");
}
