

   CREATE TABLE `portofolio` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(32),
  `url` varchar(64),
  `techniek` varchar(32),
  `datum` date,
  `description` text,
  `commentaar` varchar(16),
  `author` varchar(64)
);

CREATE TABLE `images` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `portofolioId` int,
  `imageName` varchar(120)
);

CREATE TABLE `author` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(64),
  `password` varchar(64)
);

ALTER TABLE `portofolio` ADD FOREIGN KEY (`id`) REFERENCES `images` (`portofolioId`);

ALTER TABLE `author` ADD FOREIGN KEY (`name`) REFERENCES `portofolio` (`author`);

INSERT INTO `author`(
    `name`,
     `password`
   )VALUES('Root','root');