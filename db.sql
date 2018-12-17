-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 07:03 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_members`
--

CREATE TABLE `blog_members` (
  `memberID` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`, `role`) VALUES
(1, 'brenda', '$2y$10$28Mzt7uaFMAaNmPBMWn.vew8sRsEKNN/XI03zrrBDNOF6xXeqdU/.', 'brenda@gmail.com', 'admin'),
(2, 'rono', '$2y$10$FiRSubpaNI0WwBGn3rE2Luqb7iD9YnoIxox22ohF418OCPSOaQ.uS', 'rono@gmail.com', 'sub'),
(3, 'django', '$2y$10$tq7SE7CoGY73M7Nd.uSfVOeSJLj9kxaS1EbZ/P/KT.vIzgT4a2FcK', 'djangounchained@gmail.com', 'editor'),
(4, 'lady', '$2y$10$yrvvHTCqW76LRhn3vqPYVOzuI.2kq.f9Sh6zXGdyncz61xfe1y5Bm', 'lady@gmail.com', 'blogger'),
(5, 'queen', '$2y$10$R0p1dXi7qsxYzhGSzcInveh7ted/iwzN7ZX14e5RfQAC/wvED4zvK', 'queen@gmail.com', 'sub');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `postCategory` varchar(32) NOT NULL,
  `postSubCategory` varchar(32) NOT NULL,
  `postTopic` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`, `postCategory`, `postSubCategory`, `postTopic`) VALUES
(2, 'That Darn Katz!', '<p>Wow! A superpowers drug you can just rub onto your skin? You\'d think it would be something you\'d have to freebase. Fry, you can\'t just sit here in the dark listening to classical music. And yet you haven\'t said what I told you to say! How can any of us trust you?</p>', '<h2>Xmas Story</h2>\r\n<p>It must be wonderful. Does anybody else feel jealous and aroused and worried? Is today\'s hectic lifestyle making you tense and impatient? Soothe us with sweet lies. That\'s right, baby. I ain\'t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him!</p>\r\n<ul>\r\n<li>Goodbye, friends. I never thought I\'d die like this. But I always really hoped.</li>\r\n<li>They\'re like sex, except I\'m having them!</li>\r\n<li>Come, Comrade Bender! We must take to the streets!</li>\r\n</ul>\r\n<h3>Anthology of Interest I</h3>\r\n<p>Hey, whatcha watching? They\'re like sex, except I\'m having them! Well I\'da done better, but it\'s plum hard pleading a case while awaiting trial for that there incompetence. Yes, except the Dave Matthews Band doesn\'t rock. I suppose I could part with \'one\' and still be feared&hellip;</p>\r\n<h4>Teenage Mutant Leela\'s Hurdles</h4>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by \"devil\", I mean Robot Devil. And by \"metaphorically\", I mean get your coat. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! It\'s a T. It goes \"tuh\". I guess if you want children beaten, you have to do it yourself.</p>\r\n<ol>\r\n<li>Spare me your space age technobabble, Attila the Hun!</li>\r\n<li>Well, thanks to the Internet, I\'m now bored with sex. Is there a place on the web that panders to my lust for violence?</li>\r\n</ol>\r\n<h5>The Farnsworth Parabox</h5>\r\n<p>Wow! A superpowers drug you can just rub onto your skin? You\'d think it would be something you\'d have to freebase. We need rest. The spirit is willing, but the flesh is spongy and bruised. It must be wonderful.</p>', '2013-06-05 23:10:35', 'Fiction', 'Rural-Fiction', 'Christmas'),
(3, 'How Hermes Requisitioned His Groove Back', '<p>You\'re going back for the Countess, aren\'t you? Wow! A superpowers drug you can just rub onto your skin? You\'d think it would be something you\'d have to freebase. Now Fry, it\'s been a few years since medical school, so remind me. Disemboweling in your species: fatal or non-fatal? I don\'t want to be rescued. Leela, are you alright? You got wanged on the head.</p>', '<h2>The Luck of the Fryrish</h2>\r\n<p>Professor, make a woman out of me. I am the man with no name, Zapp Brannigan! Good man. Nixon\'s pro-war and pro-family. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. Fry, you can\'t just sit here in the dark listening to classical music.</p>\r\n<ul>\r\n<li>Who are those horrible orange men?</li>\r\n<li>Is today\'s hectic lifestyle making you tense and impatient?</li>\r\n</ul>\r\n<h3>Lethal Inspection</h3>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by \"devil\", I mean Robot Devil. And by \"metaphorically\", I mean get your coat. No. We\'re on the top. Does anybody else feel jealous and aroused and worried? Well I\'da done better, but it\'s plum hard pleading a case while awaiting trial for that there incompetence. It must be wonderful.</p>\r\n<h4>Where No Fan Has Gone Before</h4>\r\n<p>Who are those horrible orange men? Bender, we\'re trying our best. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! Wow! A superpowers drug you can just rub onto your skin? You\'d think it would be something you\'d have to freebase. WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Look, last night was a mistake.</p>\r\n<ol>\r\n<li>I\'m sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in.</li>\r\n<li>Stop it, stop it. It\'s fine. I will \'destroy\' you!</li>\r\n<li>You guys realize you live in a sewer, right?</li>\r\n</ol>\r\n<h5>Fear of a Bot Planet</h5>\r\n<p>Why yes! Thanks for noticing. Hey, guess what you\'re accessories to. Yes, except the Dave Matthews Band doesn\'t rock. Take me to your leader! Daddy Bender, we\'re hungry.</p>', '2013-06-05 23:20:24', 'Agriculture', 'Farming', 'Food'),
(6, 'The Cyber House Rules', '<p>&nbsp;</p>\r\n<p>You guys realize you live in a sewer, right? Uh, is the puppy mechanical in any way? Come, Comrade Bender! We must take to the streets! I daresay that Fry has discovered the smelliest object in the known universe! Good news, everyone! There\'s a report on TV with some very bad news!</p>', '<h2>&nbsp;</h2>\r\n<h2><img src=\"https://cdn.pixabay.com/photo/2017/07/28/09/35/agreement-2548138__340.jpg\" alt=\"cyber house rule\" width=\"509\" height=\"340\" /></h2>\r\n<h2>The Luck of the Fryrish</h2>\r\n<p>Professor, make a woman out of me. I am the man with no name, Zapp Brannigan! Good man. Nixon\'s pro-war and pro-family. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. Fry, you can\'t just sit here in the dark listening to classical music.</p>\r\n<ul>\r\n<li>Who are those horrible orange men?</li>\r\n<li>Is today\'s hectic lifestyle making you tense and impatient?</li>\r\n</ul>\r\n<h3>Lethal Inspection</h3>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by \"devil\", I mean Robot Devil. And by \"metaphorically\", I mean get your coat. No. We\'re on the top. Does anybody else feel jealous and aroused and worried? Well I\'da done better, but it\'s plum hard pleading a case while awaiting trial for that there incompetence. It must be wonderful.</p>\r\n<h4>Where No Fan Has Gone Before</h4>\r\n<p>Who are those horrible orange men? Bender, we\'re trying our best. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! Wow! A superpowers drug you can just rub onto your skin? You\'d think it would be something you\'d have to freebase. WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Look, last night was a mistake.</p>\r\n<ol>\r\n<li>I\'m sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in.</li>\r\n<li>Stop it, stop it. It\'s fine. I will \'destroy\' you!</li>\r\n<li>You guys realize you live in a sewer, right?</li>\r\n</ol>\r\n<h5>Fear of a Bot Planet</h5>\r\n<p>Why yes! Thanks for noticing. Hey, guess what you\'re accessories to. Yes, except the Dave Matthews Band doesn\'t rock. Take me to your leader! Daddy Bender, we\'re hungry.</p>', '2013-06-06 08:28:35', 'Politics', 'Elections', 'Governance'),
(7, 'New World', '<p>This is a sample blog post. These are random words i am wrting.&nbsp;</p>', '<p>Hello, this is random text being entered.&nbsp;</p>', '2018-12-02 18:31:03', '<p>New&nbsp;</p>', '<p>New-Exciting</p>', '<p>Exciting</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_members`
--
ALTER TABLE `blog_members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_members`
--
ALTER TABLE `blog_members`
  MODIFY `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
