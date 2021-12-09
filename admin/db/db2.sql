CREATE TABLE IF NOT EXISTS `page_definition` (
  `id` int(11) primary key auto_increment NOT NULL,
  `title` varchar(150) NOT NULL
);

CREATE TABLE IF NOT EXISTS `facility_definition` (
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
);

CREATE TABLE IF NOT EXISTS `facility_intro` (
 `id` int(11) primary key auto_increment NOT NULL,
`title` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL
);
