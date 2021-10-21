<?php

if (!isset($_GET['auth'])) {
    header("location: news_banner?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
}
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['update_news_banner'])) {

    //check if form input are not empty
    if (empty($_POST['title'])) {
        header("location: ../events_gallery_page/news_banner?info=failed");
    } else {

        //sanitize data
        $id = News_banner::sanitize_input($auth);
        $title = News_banner::sanitize_input($_POST['title']);

        //process form Image
        try {
            // Check if image was uploaded without errors
            if (isset($_FILES["news_image"]) && $_FILES["news_image"]["error"] == 0) {
                $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
                $imageFileName = $_FILES['news_image']['name'];
                $imageFileType = $_FILES['news_image']['type'];
                $imageFileSize = $_FILES['news_image']['size'];
                $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

                // Verify MYME type of the file
                if (in_array($imageFileType, $allowedImageType)) {
                    $news_image = 'news_image' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                    move_uploaded_file($_FILES['news_image']['tmp_name'], "../uploads/raw/" . $news_image);
                    $imageFileName = copy('../uploads/raw/' . $news_image, '../uploads/thumbnail/' . $news_image);
                } else {
                    header("location: ../events_gallery_page/news_banner?info=failed");
                }
            } else {
                header("location: ../events_gallery_page/news_banner?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of news_banner class
        $news_banner = News_banner::getInstance();

        //initialize class properties

        $news_banner->setId($auth);
        $news_banner->setTitle($title);
        $news_banner->setNews_image($news_image);

        //update form input to database & check if it successful
        if ($news_banner->update()) {
            header("location: ../events_gallery_page/news_banner?info=complete");
        } else {
            header("location: ../events_gallery_page/news_banner?info=failed");
        }
    }
}