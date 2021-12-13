<?php
include_once '../configuration.php';

//check if form is submitted
if (isset($_POST['add_notice_board'])) {

    //check if form input are not empty
    if (empty($_POST['description'])) {
        header("location: ../events_gallery_page/notice_board?info=failed");
    } else {
        //sanitize form input
        $description = NoticeBoard::sanitize_input($_POST['description']);

        

        //get an Instance of slider class
        $notice_board = NoticeBoard::getInstance();

        //initialize class propperties
        $notice_board->setDescription($description);
      

        //add form input to database/check if it successful
        if ($notice_board->add()) {
            header("location: ../events_gallery_page/notice_board?info=success");
        } else {
            header("location: ../events_gallery_page/notice_board?info=failed");
        }
    }
}