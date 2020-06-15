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
  `password` varchar(64)
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
   )VALUES('Root','root');


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