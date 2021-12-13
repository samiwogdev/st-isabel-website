CREATE TABLE IF NOT EXISTS `page_definition` (
  `id` int(11) primary key auto_increment NOT NULL,
  `title` varchar(150) NOT NULL
);

CREATE TABLE IF NOT EXISTS `facility_definition` (
  `id` int(11) primary key auto_increment NOT NULL,
  `title` varchar(150) NOT NULL
);

CREATE TABLE IF NOT EXISTS `gallery_def` (
  `id` int(11) primary key auto_increment NOT NULL,
  `title` varchar(150) NOT NULL
);

CREATE TABLE IF NOT EXISTS `page_definition` (
  `id` int(11) primary key auto_increment NOT NULL,
  `definition_id` int(10)  NOT NULL,
  `title` varchar(150) NOT NULL,
   constraint definition_id_fk foreign key(definition_id) references page_definition(id) on update cascade
);

CREATE TABLE IF NOT EXISTS `facility_data` (
  `id` int(11) primary key auto_increment NOT NULL,
  `icon` varchar(100) NULL,
  `facility_image` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
);.

CREATE TABLE IF NOT EXISTS `lab_info` (
  `id` int(11) primary key auto_increment NOT NULL,
  `icon` varchar(100) NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS `news_data` (
  `id` int(11) primary key auto_increment NOT NULL,
  `news_image` varchar(250) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS `gallery_data` (
  `id` int(11) primary key auto_increment NOT NULL,
  `gallery_image` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS `download_data` (
  `id` int(11) primary key auto_increment NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `download_file` varchar(150) NOT NULL
);

CREATE TABLE IF NOT EXISTS `facility_intro` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS `notice_board` (
 `id` int(11) primary key auto_increment NOT NULL,
`description` varchar(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS `school_song` (
  `id` int(11)  primary key auto_increment NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `facility_info` (
  `id` int(11)  primary key auto_increment NOT NULL,
  `facility_def_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
constraint school_facility_def_id foreign key(facility_def_id) references facility_definition(id) on update cascade
);

CREATE TABLE IF NOT EXISTS `facility_picture` (
  `id` int(11)  primary key auto_increment NOT NULL,
  `facility_def_id` int(11) NOT NULL,
  `facility_picture` varchar(250) NOT NULL,
constraint facility_def_id foreign key(facility_def_id) references facility_definition(id) on update cascade
);

CREATE TABLE IF NOT EXISTS `gallery_picture` (
  `id` int(11)  primary key auto_increment NOT NULL,
  `gallery_def_id` int(11) NOT NULL,
  `gallery_picture` varchar(250) NOT NULL,
constraint gallery_def_id foreign key(gallery_def_id) references gallery_def(id) on update cascade
);

CREATE TABLE IF NOT EXISTS `facility_banner` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`banner_image` varchar(250) NOT NULL
);
