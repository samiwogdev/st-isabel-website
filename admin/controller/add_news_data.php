<?php

include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_news_data'])) {

    //check if form input are not empty
    if (empty($_POST['title']) || empty($_POST['description'])) {
        header("location: ../events_gallery_page/news_info?info=failed");
    } else {

        $title = News::sanitize_input($_POST['title']);
        $description = News::sanitize_input($_POST['description']);


        //process formm Image
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
                    header("location: ../home_page/news_info?info=failed");
                }
            } else {
                header("location: ../events_gallery_page/news_info?info=failed");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        //get an Instance of slider class
        $news_info = News::getInstance();

        //initialize class propperties
        $news_info->setTitle($title);
        $news_info->setDescription($description);
        $news_info->setNews_image($news_image);

        //add form input to database/check if it successful
        if ($news_info->add()) {
            header("location: ../events_gallery_page/news_info?info=success");
        } else {
            header("location: ../events_gallery_page/news_info?info=failed");
        }
    }
} else {
    header("location: ../events_gallery_page/news_info?info=failed");
}