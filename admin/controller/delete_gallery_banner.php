<?php

include_once '../configuration.php';
$id = GalleryBanner::sanitize_input($_GET['auth']);
$gallery_banner = GalleryBanner::getInstance();
$gallery_banner->setId($id);
if ($gallery_banner->delete()) {
    header("location: ../events_gallery_page/gallery_banner?info=del");
} else {
    header("location: ../events_gallery_page/gallery_banner?info=failed");
}
