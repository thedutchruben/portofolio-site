CREATE TABLE `portofolio` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(32),
  `url` varchar(64),
  `techniek` varchar(32),
  `datum` date,
  `description` tinytext,
  `commentaar` varchar(16),
  `vieuws` int(10),
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
  `password` varchar(512)
);

CREATE TABLE `errors` (
  `id` int PRIMARY KEY,
  `title` varcha(32),
  `description` tinytext
);

ALTER TABLE `portofolio` ADD FOREIGN KEY (`id`) REFERENCES `images` (`portofolioId`);

ALTER TABLE `author` ADD FOREIGN KEY (`name`) REFERENCES `portofolio` (`author`);


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
   )VALUES(2,'Image to Big','The image size is to big');

         INSERT INTO `errors`(
    `title`,
    `description`
   )VALUES(404,'Page not found','This page is not found');