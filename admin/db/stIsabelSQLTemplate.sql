/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  samiwog
 * Created: Oct 11, 2021
 */

CREATE TABLE IF NOT EXISTS `slider` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
`slider_image` varchar(250) NOT NULL
-- `user_type` int(1) comment '1 => user, 2 => admin 3 => superAdmin'
);

CREATE TABLE IF NOT EXISTS `slider_ext` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);
ALTER TABLE slider_ext ADD COLUMN bg_color VARCHAR(50) AFTER description
ALTER TABLE slider_ext ADD COLUMN header_color VARCHAR(50) AFTER bg_color

/*Enrolment*/
CREATE TABLE IF NOT EXISTS `enrolment` (
 `id` int(11) primary key auto_increment NOT NULL,
 `bg_image` varchar(250) NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
`enrol_title` varchar(250) NOT NULL,
`enrol_desc` varchar(250) NOT NULL
);

/*QUALITIES*/
CREATE TABLE IF NOT EXISTS `school_qualities` (
 `id` int(11) primary key auto_increment NOT NULL,
`qualities` varchar(250) NOT NULL
);

/*SCHOOL SONG*/
CREATE TABLE IF NOT EXISTS `school_song` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

/*SLIDER_EXT*/
CREATE TABLE IF NOT EXISTS `slider_ext` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);


/*SCHOOLPAGE
    
*/ /* SCHOOL_BANNER*/
CREATE TABLE IF NOT EXISTS `school_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`banner_image` varchar(250) NOT NULL
);

/* PAGEINFO*/
CREATE TABLE IF NOT EXISTS `page_info` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
`page_image` varchar(250) NOT NULL
);
ALTER TABLE page_info MODIFY COLUMN description Text

 /* DIRECTOR_BANNER*/
CREATE TABLE IF NOT EXISTS `director_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`director_image` varchar(250) NOT NULL
);

/* DIRECTOR_PAGEINFO*/

CREATE TABLE IF NOT EXISTS `director_page_info` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
`page_image` varchar(250) NOT NULL
);

/* OBJECTIVE_BANNER*/
CREATE TABLE IF NOT EXISTS `objective_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`objective_image` varchar(250) NOT NULL
);

/* OBJECTIVE_INFORMATION*/
CREATE TABLE IF NOT EXISTS `objective_page_info` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
);


/* ACADEMICS_PAGE

*****CRECHE_BANNER*/
CREATE TABLE IF NOT EXISTS `creche_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`creche_image` varchar(250) NOT NULL
);

/* CRECHE_INFORMATION*/
CREATE TABLE IF NOT EXISTS `creche_page_info` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
);

/* CRECHE_INFORMATION EXTENTION*/
CREATE TABLE IF NOT EXISTS `creche_page_info_ext` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
);

/* NURSERY_BANNER*/
CREATE TABLE IF NOT EXISTS `nursery_primary_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`nursery_image` varchar(250) NOT NULL
);

/* NURSERY/PRIMARY_INFORMATION*/
CREATE TABLE IF NOT EXISTS `nursery_primary_page_info` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);
/* NURSERY/PRIMARY_INFORMATION EXTENTION*/
CREATE TABLE IF NOT EXISTS `nursery_primary_page_infoExt` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);
/* NURSERY/PRIMARY_SUBJECTS */
CREATE TABLE IF NOT EXISTS `nursery_primarysubject` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
);

/*****COLLEGE_BANNER*/
CREATE TABLE IF NOT EXISTS `college_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`college_image` varchar(250) NOT NULL
);

/* COLLEGE_INFORMATION*/
CREATE TABLE IF NOT EXISTS `college_page_info` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

/* JUNIOR_INFO_EXT*/
CREATE TABLE IF NOT EXISTS `junior_infoExt` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);
/* SENIOR_INFO_EXT*/
CREATE TABLE IF NOT EXISTS `senior_infoExt` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

/* Junior_SUBJECTS */
CREATE TABLE IF NOT EXISTS `junior_subject` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
);
/* SENIOR_SUBJECTS */
CREATE TABLE IF NOT EXISTS `senior_subject` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
);

/*****GALLERY_BANNER*/
CREATE TABLE IF NOT EXISTS `gallery_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`gallery_image` varchar(250) NOT NULL
);

/*****NEW BANNER*/
CREATE TABLE IF NOT EXISTS `news_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`news_image` varchar(250) NOT NULL
);

/* CONTACT 
        ******GET IN TOUCH***
        
CONTACT_US
        ***/    
CREATE TABLE IF NOT EXISTS `contact_us` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

      /*****BANNER*****
*/
CREATE TABLE IF NOT EXISTS `contact_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`contact_image` varchar(250) NOT NULL
);

/* FACILITIES PAGE
        *********
            hostel_banner
        ***/    
CREATE TABLE IF NOT EXISTS `hostel_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`hostel_image` varchar(250) NOT NULL
);

            /*hostel_slider
        ***/    
CREATE TABLE IF NOT EXISTS `hostel_slider` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`slider_image` varchar(250) NOT NULL
);


 /*hostel_page_info
        ***/    
CREATE TABLE IF NOT EXISTS `hostel_info_page` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

/* Hostel feature */
CREATE TABLE IF NOT EXISTS `hostel_feature` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`feature` varchar(250) NOT NULL
);

        /*********
            hostel_banner*/
            
CREATE TABLE IF NOT EXISTS `library_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`library_image` varchar(250) NOT NULL
);

          /*library_slider
        ***/    
CREATE TABLE IF NOT EXISTS `library_slider` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`slider_image` varchar(250) NOT NULL
);

 /*library_page_info
        ***/    
CREATE TABLE IF NOT EXISTS `library_info_page` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

/* Library feature */
CREATE TABLE IF NOT EXISTS `library_feature` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`feature` varchar(250) NOT NULL
);

      
      /*********
            laboratories_banner*/       
CREATE TABLE IF NOT EXISTS `laboratories_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`laboratories_image` varchar(250) NOT NULL
);

 /*laboratories_page_info
        ***/    
CREATE TABLE IF NOT EXISTS `laboratories_info_page` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

        /*laboratories_slider
        ***/    
CREATE TABLE IF NOT EXISTS `laboratories_slider` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`slider_image` varchar(250) NOT NULL
);

       /*** List of laboratories*/    
CREATE TABLE IF NOT EXISTS `laboratories_list` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

  /********* admission_page
            admission_banner*/       
CREATE TABLE IF NOT EXISTS `admission_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`admission_image` varchar(250) NOT NULL
);

/********* admission_page
            enrolment*/       
CREATE TABLE IF NOT EXISTS `admission_enrolment` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
`enrolment` varchar(250) NOT NULL,
`enrolment_image` varchar(250) NOT NULL,

);

/********* admission_page
            enrolment*/       
CREATE TABLE IF NOT EXISTS `admission_enrolment` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
`enrolment` varchar(250) NOT NULL,
`enrolment_image` varchar(250) NOT NULL
);

      /*********
            laboratories_banner*/       
CREATE TABLE IF NOT EXISTS `admission_info_page` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`result_image` varchar(250) NOT NULL
);