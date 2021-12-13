<?php

include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_song_banner'])) {

    //process formm Image
    try {
        // Check if image was uploaded without errors
        if (isset($_FILES["song_banner"]) && $_FILES["song_banner"]["error"] == 0) {
            $allowedImageType = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif");
            $imageFileName = $_FILES['song_banner']['name'];
            $imageFileType = $_FILES['song_banner']['type'];
            $imageFileSize = $_FILES['song_banner']['size'];
            $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);

            // Verify MYME type of the file
            if (in_array($imageFileType, $allowedImageType)) {
                $song_banner = 'song_banner' . md5(rand()) . '_' . time() . '.' . $imageExtension;
                move_uploaded_file($_FILES['song_banner']['tmp_name'], "../uploads/raw/" . $song_banner);
                $imageFileName = copy('../uploads/raw/' . $song_banner, '../uploads/thumbnail/' . $song_banner);
            } else {
                header("location: ../home_page/song_banner?info=failed");
            }
        } else {
            header("location: ../home_page/song_banner?info=failed");
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    //get an Instance of page_info class
    $song_b = SongBanner::getInstance();

    //initialize class properties
    $song_b->setBanner_image($song_banner);

    //add form input to database/check if it successful
    if ($song_b->add()) {
        header("location: ../home_page/song_banner?info=success");
    } else {
        header("location: ../home_page/song_banner?info=failed");
    }
}