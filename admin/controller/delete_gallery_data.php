<?php

include_once '../configuration.php';
$id = GalleryData::sanitize_input($_GET['auth']);
$gallery_data = GalleryData::getInstance();
$gallery_data->setId($id);
if ($gallery_data->delete()) {
    header("location: ../home_page/gallery_data?info=del");
} else {
    header("location: ../home_page/gallery_data?info=failed");
}
