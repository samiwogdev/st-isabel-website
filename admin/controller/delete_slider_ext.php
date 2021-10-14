<?php

include_once '../configuration.php';
$id = Slider_ext::sanitize_input($_GET['auth']);
$slider_ext = Slider_ext::getInstance();
$slider_ext->setId($id);
if ($slider_ext->delete()) {
    header("location: ../home_page/slider_ext?info=del");
} else {
    header("location: ../home_page/slider_ext?info=failed");
}
