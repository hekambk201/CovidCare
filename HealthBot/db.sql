

/* Database Name scsj3483*/



CREATE TABLE `scsj3483`.`chats`
 ( `id` INT NOT NULL AUTO_INCREMENT , 
 `user` LONGTEXT NOT NULL , `healthbot` LONGTEXT NOT NULL ,
  `date` DATETIME NOT NULL , PRIMARY KEY (`id`)) 
  ENGINE = InnoDB; 

CREATE TABLE `scsj3483`.`question` 
( `id` INT NOT NULL AUTO_INCREMENT , 
`question` LONGTEXT NOT NULL ,
 `answer` LONGTEXT NOT NULL , PRIMARY KEY (`id`)) 
 ENGINE = InnoDB; 