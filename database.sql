CREATE TABLE `portofolio` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(32),
  `url` varchar(64),
  `techniek` tinytext,
  `datum` date,
  `description` tinytext,
  `commentaar` varchar(16),
  `weergaven` int(10),
  `author` varchar(64)
);

CREATE TABLE `images` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `portofolioId` int,
  `imageName` varchar(40)
);

CREATE TABLE `author` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(32),
  `name` varchar(64),
  `password` varchar(64),
  `userRank` int(2)
);

CREATE TABLE `errors` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varcha(16),
  `description` tinytext
);

CREATE TABLE `ranks` (
  `int` id PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(16),
  `canCreatePages` boolean,
  `canDeletePages` boolean,
  `canEditPages` boolean,
  `canCreateUsers` boolean,
  `canEditUsers` boolean,
  `canRemoveUsers` boolean
);

CREATE TABLE `design` (
  `portofolioId` int PRIMARY KEY,
  `titleSize` int(16),
  `textSize` int(16),
  `titleColor` varchar(16),
  `textColor` varchar(16),
  `backgroundColor` varchar(16)
);

CREATE TABLE `contact` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `naam` varchar(32),
  `email` varchar(32),
  `bericht` tinytext
);

ALTER TABLE `portofolio` ADD FOREIGN KEY (`id`) REFERENCES `images` (`portofolioId`);

ALTER TABLE `author` ADD FOREIGN KEY (`name`) REFERENCES `portofolio` (`author`);

ALTER TABLE `ranks` ADD FOREIGN KEY (`int`) REFERENCES `author` (`userRank`);

ALTER TABLE `portofolio` ADD FOREIGN KEY (`id`) REFERENCES `design` (`portofolioId`);


INSERT INTO `author`(
    `name`,
     `password`
   )VALUES('Root','0bd81595c97a137995e011f13f140ae09d3caada1811c55c52ddc141d07b0bbfa714a2e4504c5260a6a22be935f12f94e8ed993361c380171cd3db6e56af91ef');
-- Password is rootlogin

   INSERT INTO `errors`(
    `id`,
    `title`,
    `description`
   )VALUES(1,'Image to Big','The image size is to big');

      INSERT INTO `errors`(
    `title`,
    `description`
   )VALUES(2,'Image is no Image','This file format is not a image');

         INSERT INTO `errors`(
    `title`,
    `description`
   )VALUES(3,'No Permission','You dont have permission to see this page');

         INSERT INTO `errors`(
    `title`,
    `description`
   )VALUES(404,'Page not found','This page is not found');