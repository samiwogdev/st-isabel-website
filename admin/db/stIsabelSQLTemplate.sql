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

