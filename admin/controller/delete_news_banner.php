<?php

include_once '../configuration.php';
$id = NewsBanner::sanitize_input($_GET['auth']);
$news_banner = NewsBanner::getInstance();
$news_banner->setId($id);
if ($news_banner->delete()) {
    header("location: ../events_gallery_page/news_banner?info=del");
} else {
    header("location: ../events_gallery_page/news_banner?info=failed");
}
