<?php

include_once '../configuration.php';
$id = Hostel_slider::sanitize_input($_GET['auth']);
$hostel_slider = Hostel_slider::getInstance();
$hostel_slider->setId($id);
if ($hostel_slider->delete()) {
    header("location: ../facilities_page/hostel_slider?info=del");
} else {
    header("location: ../facilities_page/hostel_slider?info=failed");
}
