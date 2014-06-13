-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Jun 2014 um 15:20
-- Server Version: 5.5.36
-- PHP-Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `kochabo`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customercustomer_id` int(10) NOT NULL,
  `art` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateprovince` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` bigint(20) NOT NULL,
  `housenumber` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stairway_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `floor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `appartement_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deliveryinformation` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=76 ;

--
-- Daten für Tabelle `address`
--

INSERT INTO `address` (`id`, `customercustomer_id`, `art`, `gender`, `first_name`, `last_name`, `street`, `city`, `country`, `stateprovince`, `zip`, `housenumber`, `stairway_number`, `floor`, `appartement_number`, `deliveryinformation`, `created_at`, `updated_at`, `is_published`, `slug`) VALUES
(45, 44, 'Rechnungsadresse', 'Herr', 'Robert', 'Ginder', 'makigasse', 'Wien', 'Österreich', 'Wien', 1080, '5', '3', '4', '13', '', '2014-05-04 16:50:17', '2014-05-04 16:50:17', 0, NULL),
(48, 74, 'Lieferadresse', 'Herr', 'Mike', 'Röhrer', 'Ganglweg 3', 'Wien', 'Österreich', 'Wien', 1220, '', '', '', '', '<p>Schnell essen</p>\r\n', '2014-05-04 17:59:17', '2014-05-05 08:19:34', 0, NULL),
(50, 70, 'Rechnungsadresse', 'Herr', 'Bernd', 'Obendorfer', '', '', '', '', 0, '', '', '', '', '', '2014-06-11 06:05:17', '2014-06-11 06:05:17', 0, NULL),
(51, 70, 'Lieferaddresse', 'Herr', 'Bernd', 'Obendorfer', '', '', '', '', 0, '', '', '', '', '', '2014-06-11 06:05:17', '2014-06-11 06:05:17', 0, NULL),
(52, 71, 'Lieferaddresse', 'Herr', 'Bernd', 'Obendorfer', 'Hauptstraße', 'Wien', 'Österreich', 'Wien', 1180, '3', '3', '3', '4', '', '2014-06-11 06:06:12', '2014-06-11 12:46:23', 0, NULL),
(53, 71, 'Rechnungsadresse', 'Herr', 'Bernd', 'Obendorfer', 'Hauptstraße', 'Wien', 'Österreich', 'Wien', 1180, '3', '3', '3', '4', '', '2014-06-11 06:06:12', '2014-06-11 12:46:23', 0, NULL),
(73, 72, 'Rechnungsadresse', 'Herr', 'Gast', 'Gast', '', '', '', '', 0, '', '', '', '', '', '2014-06-11 08:38:10', '2014-06-11 08:38:10', 0, NULL),
(75, 72, 'Lieferaddresse', 'Herr', 'Gast', 'Gast', '', '', '', '', 0, '', '', '', '', '', '2014-06-11 08:38:10', '2014-06-11 08:38:10', 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `aktuellerezepte`
--

CREATE TABLE IF NOT EXISTS `aktuellerezepte` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `aktuellerezepte`
--

INSERT INTO `aktuellerezepte` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(5, 'Den perfekt passenden Wein mit dazu bestellen?', '<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Du erh&auml;ltst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualit&auml;tswein zu einem Gericht mit dazu. <strong>Zum Beispiel n&auml;chste Woche mit dabei:</strong></div>\r\n\r\n<h3 style="color:rgb(152, 194, 37); font-style:normal; text-align:start">KROISS Riesling Hackenberg 2012</h3>\r\n\r\n<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n<br />\r\n<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/public/uploads/obstbox.jpg" style="height:248px; width:440px" /></div>\r\n', 'den-perfekt-passenden-wein-mit-dazu-bestellen', '2014-04-01', '2014-04-01 17:08:41', '2014-04-09 17:24:25', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/ckeditor/plugins/doksoft_uploader/userfiles/3_4.jpg" /></p>\r\n'),
(6, 'Kostenlose Lieferung', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n', 'kostenlose-lieferung', '2014-04-02', '2014-04-02 16:38:27', '2014-04-09 17:32:26', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/uploads/doksoft_uploader/13.jpg" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Daten für Tabelle `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `slug`, `category_id`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`, `is_published`) VALUES
(11, 'Blog Post 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ', 'blog-post-11', 2, 'blog, post, 11', 'Blog Post 11', '2014-04-01 15:52:26', '2014-04-01 15:52:26', 1),
(12, 'Blog Post 12', 'In varius volutpat accumsan. Nam rhoncus massa ipsum. In ante erat, vestibulum non neque sit amet, sagittis ultricies risus. Nam iaculis leo risus, at malesuada arcu dictum quis. Nulla blandit mi turpis, nec vestibulum diam suscipit egestas. Aliquam ut mollis nulla. Sed scelerisque, magna vel scelerisque porta, mauris sem varius massa, eget sagittis dui eros id metus. Curabitur imperdiet est tellus, sed rutrum lacus viverra ut. Donec gravida adipiscing tellus sit amet posuere. Duis vel auctor arcu, nec ornare purus. Nulla vehicula, eros quis imperdiet laoreet, libero ipsum porttitor dui, consequat fringilla nulla lectus non elit. ', 'blog-post-12', 2, 'blog, post, 12', 'Blog Post 12', '2014-04-01 15:52:26', '2014-04-01 15:52:26', 1),
(13, 'Blog Post 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ', 'blog-post-13', 3, 'blog, post, 13', 'Blog Post 13', '2014-04-01 15:52:26', '2014-04-01 15:52:26', 1),
(14, 'Blog Post 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ', 'blog-post-14', 3, 'blog, post, 14', 'Blog Post 14', '2014-04-01 15:52:26', '2014-04-01 15:52:26', 1),
(15, 'Tomate – Schneiden und Filetieren', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(54, 54, 54); font-family:muli,helvetica,arial,sans-serif; font-size:17px">Tomaten sind eine beliebte Zutat in vielen Gerichten, sie sind saftig und und geben einem Gericht eine s&uuml;&szlig;-saure Note, je nach Art und Reifegrad. Wenn man wei&szlig;, wie, dann sind Tomaten auch leicht zuzubereiten und auch das Filetieren ist keine Hexerei. Wir zeigen euch, wies geht.</span></p>\r\n', 'tomate-schneiden-und-filetieren', 4, 'Tomaten sind eine beliebte Zutat in vielen Gerichten, sie sind saftig und und geben einem Gericht eine süß-saure Note, je nach Art und Reifegrad. Wenn man weiß, wie, dann sind Tomaten auch leicht zuzubereiten und auch das Filetieren ist keine Hexerei. Wir', 'Blog Post 14', '2014-04-01 15:52:26', '2014-04-06 20:35:01', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `articles_tags`
--

CREATE TABLE IF NOT EXISTS `articles_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `articles_tags_article_id_index` (`article_id`),
  KEY `articles_tags_tag_id_index` (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Daten für Tabelle `articles_tags`
--

INSERT INTO `articles_tags` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(4, 2, 1, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(5, 2, 2, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(6, 3, 1, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(7, 3, 2, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(8, 3, 2, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(9, 4, 4, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(10, 4, 5, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(11, 2, 3, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(12, 5, 5, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(13, 5, 2, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(16, 6, 2, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(17, 7, 1, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(18, 8, 1, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(19, 9, 3, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(20, 9, 1, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(21, 10, 1, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(22, 10, 2, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(23, 10, 3, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(24, 10, 4, '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(25, 10, 5, '2014-04-01 15:52:26', '2014-04-01 15:52:26');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `beispielbox`
--

CREATE TABLE IF NOT EXISTS `beispielbox` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `beispielbox`
--

INSERT INTO `beispielbox` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(5, 'Den perfekt passenden Wein mit dazu bestellen?', '<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Du erh&auml;ltst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualit&auml;tswein zu einem Gericht mit dazu. <strong>Zum Beispiel n&auml;chste Woche mit dabei:</strong></div>\r\n\r\n<h3 style="color:rgb(152, 194, 37); font-style:normal; text-align:start">KROISS Riesling Hackenberg 2012</h3>\r\n\r\n<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n<br />\r\n<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/public/uploads/obstbox.jpg" style="height:248px; width:440px" /></div>\r\n', 'den-perfekt-passenden-wein-mit-dazu-bestellen', '2014-04-01', '2014-04-01 17:08:41', '2014-04-09 17:24:25', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/ckeditor/plugins/doksoft_uploader/userfiles/3_4.jpg" /></p>\r\n'),
(6, 'Kostenlose Lieferung', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n', 'kostenlose-lieferung', '2014-04-02', '2014-04-02 16:38:27', '2014-04-09 17:32:26', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/uploads/doksoft_uploader/13.jpg" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `hinweis` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Daten für Tabelle `calendar`
--

INSERT INTO `calendar` (`id`, `timestamp`, `start`, `end`, `title`, `hinweis`, `created_at`, `updated_at`) VALUES
(8, '2014-05-23 07:45:03', '2014-04-10', '2014-04-10', 'Liefertag', '', '0000-00-00 00:00:00', '2014-05-23 05:43:17'),
(9, '2014-05-23 09:42:36', '2014-05-05', '0000-00-00', 'Liefertag', '', '0000-00-00 00:00:00', '2014-05-23 07:42:36'),
(10, '2014-05-17 09:03:22', '2014-04-09', '2014-04-09', 'Liefertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '2014-05-17 09:03:31', '2014-04-16', '2014-04-16', 'Feiertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '2014-05-17 09:06:46', '2014-04-02', '2014-04-02', 'Feiertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '2014-05-17 09:19:49', '2014-04-01', '2014-04-01', 'Feiertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '2014-05-17 09:24:44', '2014-04-07', '2014-04-07', 'Feiertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '2014-05-21 09:28:26', '2014-04-30', '2014-04-30', 'Feiertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '2014-05-21 09:28:34', '2014-04-08', '2014-04-08', 'Liefertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '2014-05-21 09:28:43', '2014-04-03', '2014-04-03', 'Liefertag', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '2014-05-23 09:05:44', '2014-05-09', '2014-05-09', 'Feiertag', '', '2014-05-23 07:05:44', '2014-05-23 07:05:44'),
(22, '2014-05-23 09:07:49', '2014-05-01', '2014-05-01', 'Feiertag', '', '2014-05-23 07:07:49', '2014-05-23 07:07:49'),
(23, '2014-05-23 09:37:53', '2014-05-07', '2014-05-07', 'Liefertag', '', '2014-05-23 07:37:53', '2014-05-23 07:37:53'),
(24, '2014-05-23 09:40:38', '2014-05-08', '2014-05-08', 'Liefertag', '', '2014-05-23 07:40:38', '2014-05-23 07:40:38'),
(25, '2014-05-23 09:42:41', '2014-04-29', '2014-04-29', 'Feiertag', '', '2014-05-23 07:42:41', '2014-05-23 07:42:41'),
(27, '2014-05-23 09:43:01', '2014-08-08', '2014-08-08', 'Feiertag', '', '2014-05-23 07:43:01', '2014-05-23 07:43:01'),
(28, '2014-05-23 11:24:51', '2014-07-12', '0000-00-00', 'Feiertag', '', '2014-05-23 08:41:14', '2014-05-23 09:24:51'),
(29, '2014-06-11 11:48:58', '2014-06-12', '0000-00-00', 'Feiertag', '', '2014-06-11 09:48:51', '2014-06-11 09:48:58');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(2, 'Gemüse'),
(3, 'Vegetarisch'),
(4, 'Pflanzlich'),
(5, 'Rohkost'),
(10, 'Süßigkeiten');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` text COLLATE utf8_unicode_ci,
  `last_name` text COLLATE utf8_unicode_ci,
  `datetime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kundeseit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abobox` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abolieferung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abotyp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aboweine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abobiere` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anzahlobstboxen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abostatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gruppen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=195 ;

--
-- Daten für Tabelle `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `datetime`, `kundeseit`, `abobox`, `abolieferung`, `abotyp`, `aboweine`, `abobiere`, `anzahlobstboxen`, `abostatus`, `gruppen`, `created_at`, `updated_at`, `is_published`, `gender`) VALUES
(3, 'Bernd', 'Obendorfer', '', '28.04.2014 13:20:38', '2P-3R-C', '05.05.2014', 'Einwöchig', '0', '0', '0', 'Aktiv', 'General', '2014-04-19 02:02:36', '2014-05-04 11:56:55', 1, 'Herr'),
(171, 'Tom', 'Reichel', '', '06.05.2014', '2P-3R-C', '23.04.2014', 'Einwöchig', '1', '1', '1', 'Aktiv', 'General', '2014-05-04 15:59:17', '2014-05-04 16:48:31', 0, 'Herr'),
(172, 'Robert', 'Ginder', '', '23.01.1999', '4P-5R-C', '05.05.2014', 'Einwöchig', '0', '1', '0', 'Aktiv', 'General', '2014-05-04 16:50:17', '2014-05-04 16:50:17', 0, 'Herr'),
(173, 'Maria', 'Holler', '', '07.05.2014', '4P-5R-C', '05.05.2014', 'Einwöchig', '1', '0', '1', 'Aktiv', 'General', '2014-05-04 16:54:38', '2014-05-04 16:54:38', 0, 'Frau'),
(174, 'Herbert', 'Holler', '', '07.05.2014', '4P-5R-C', '05.05.2014', 'Einwöchig', '0', '1', '1', 'Aktiv', 'General', '2014-05-04 16:58:03', '2014-05-04 16:58:03', 0, 'Herr'),
(175, 'Sandra', 'Meier', '', '01.05.2014', '3P-5R-C', '05.05.2014', 'Einwöchig', '1', '0', '1', 'Aktiv', 'General', '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 'Frau'),
(176, 'Dragan', 'Vukic', '', '02.04.2014', '1P-5R-C', '05.05.2014', 'Einwöchig', '1', '0', '1', 'Aktiv', 'General', '2014-05-04 16:59:34', '2014-05-04 16:59:34', 0, 'Herr'),
(178, 'Markus', 'Reh', '', '13.01.1999', '4P-5R-C', '23.04.2014', 'Einwöchig', '0', '1', '1', 'Aktiv', 'General', '2014-05-04 17:51:28', '2014-05-04 19:15:57', 0, 'Herr'),
(179, 'Hans', 'Hahn', '', '03.05.2010', '2P-3R-C', '05.05.2014', 'Einwöchig', '0', '1', '1', 'Aktiv', 'General', '2014-05-04 17:57:59', '2014-05-04 17:59:33', 0, 'Herr'),
(180, 'Jörg', 'Gruber', '', '02.05.2010', '2P-3R-C', '05.05.2014', 'Einwöchig', '1', '1', '1', 'Aktiv', 'General', '2014-05-04 17:58:31', '2014-05-04 17:58:31', 0, 'Herr'),
(181, 'Mike', 'Röhrer', '', '01.02.2010', '4P-3R-C', '10.05.2014', 'Einwöchig', '0', '0', '0', 'Aktiv', 'General', '2014-05-04 17:59:17', '2014-05-04 17:59:17', 0, 'Herr'),
(182, 'mauki', 'Vukic', '', '02.04.2014', '1P-5R-C', '05.05.2014', 'Einwöchig', '1', '0', '1', 'Aktiv', 'Retailer', '2014-05-04 16:59:34', '2014-05-04 16:59:34', 0, 'Herr'),
(183, 'Mauniz', 'Vukic', '', '02.04.2014', '1P-5R-C', '05.05.2014', 'Einwöchig', '1', '0', '1', 'Aktiv', 'Retailer', '2014-05-04 16:59:34', '2014-05-04 16:59:34', 0, 'Herr'),
(184, 'Flocki', 'Vukic', '', '02.04.2014', '1P-5R-C', '05.05.2014', 'Kein Abo', '1', '0', '1', 'Aktiv', 'Retailer', '2014-05-04 16:59:34', '2014-05-04 16:59:34', 0, 'Herr'),
(185, 'Sandra', 'Meier', '', '01.05.2014', '3P-5R-C', '05.05.2014', 'Gesperrt', '1', '0', '1', 'Aktiv', 'General', '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 'Frau'),
(186, 'Mike', 'Röhrer', '', '01.02.2010', '4P-3R-C', '10.05.2014', 'Einwöchig', '0', '0', '0', 'Inaktiv', 'Allianz', '2014-05-04 17:59:17', '2014-05-04 17:59:17', 0, 'Herr'),
(187, 'Sandra', 'Meier', '', '01.05.2014', '3P-5R-C', '05.05.2014', 'Vierwöchig', '1', '0', '1', 'Pausiert', 'Retailer', '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 'Frau'),
(188, 'Richard', 'Meier', '', '01.05.2014', '3P-5R-C', '05.05.2014', 'Vierwöchig', '1', '0', '1', 'Pausiert', 'Deleted', '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 'Frau'),
(189, 'Robert', 'Meier', '', '01.05.2014', '3P-5R-C', '05.05.2014', 'Einmalig', '1', '0', '1', 'Pausiert', 'Keine Mails', '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 'Frau'),
(190, 'Richard', 'Ranz', '', '01.05.2014', '3P-5R-C', '05.05.2014', 'Vierwöchig', '1', '0', '1', 'Pausiert', 'Deleted', '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 'Frau'),
(191, 'Ralsfi', 'Meier', '', '01.05.2014', '3P-5R-C', '05.05.2014', 'Einmalig', '1', '0', '1', 'Pausiert', 'Keine Mails', '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 'Frau'),
(193, 'Bernd', 'Obendorfer', '06 Mai 2014', '', '55dd5', '', 'Vierwöchig', '', '', '', 'Flash Sale Produkt', 'Wholesale', '2014-05-30 12:16:10', '2014-05-30 12:27:26', 0, 'Herr'),
(194, 'Eier', 'Kopf', '31 Mai 2014', 'Immer', 'Keine', 'Klar', 'Zweiwöchig', '1', '2', '3', 'Pausiert', 'Existing Customers', '2014-05-30 12:30:18', '2014-05-30 12:30:18', 0, 'Herr');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deliveryarea`
--

CREATE TABLE IF NOT EXISTS `deliveryarea` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `address_delivery_bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateprovince` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` bigint(20) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `fax` bigint(20) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deliveryinformation` text COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `users_id` int(10) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deliveryinformation_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_delivery` bigint(20) NOT NULL,
  `email_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateprovince_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_delivery` bigint(20) NOT NULL,
  `zip_delivery` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Daten für Tabelle `deliveryarea`
--

INSERT INTO `deliveryarea` (`id`, `user_id`, `address_delivery_bill`, `prefix`, `gender`, `first_name`, `last_name`, `suffix`, `company`, `street`, `city`, `country`, `stateprovince`, `zip`, `telephone`, `fax`, `email`, `latitude`, `longitude`, `deliveryinformation`, `dateofbirth`, `mobile`, `permissions`, `created_at`, `updated_at`, `users_id`, `is_published`, `slug`, `gender_delivery`, `city_delivery`, `company_delivery`, `country_delivery`, `dateofbirth_delivery`, `deliveryinformation_delivery`, `fax_delivery`, `email_delivery`, `first_name_delivery`, `last_name_delivery`, `stateprovince_delivery`, `street_delivery`, `telephone_delivery`, `zip_delivery`) VALUES
(3, 3, 'option1', '', 'male', 'Bernd1', 'Obendorfer', 'Eipeldauerstraße 38', '', 'Eipeldauerstraße 38', 'Wien', 'Eipeldauerstraße 38', 'Eipeldauerstraße 38', 1220, 67033250, 0, 'bernd.obendorfer@chello.at', '', '', '<p>Will essen!! Schnell</p>\r\n', '12.01.1972', 0, NULL, '0000-00-00 00:00:00', '2014-05-04 17:46:51', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(15, 171, 'option1', 'prefix', 'male', 'Tomaaaa', 'Reichel', '', '', '', '', '', '', 0, 680335270, 0, '', '', '', '', '', 0, NULL, '2014-05-04 15:59:17', '2014-05-04 16:43:31', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(16, 172, 'option1', '', 'male', 'Robert', 'Ginder', '', '', '', '', '', '', 0, 675555570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:50:17', '2014-05-04 16:50:17', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(17, 173, 'option1', '', 'male', 'Maria', 'Holler', '', '', '', '', '', '', 0, 660335570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:54:38', '2014-05-04 16:54:38', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(18, 174, 'option1', '', 'male', 'Herbert', 'Holler', '', '', '', '', '', '', 0, 680335570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:58:03', '2014-05-04 16:58:03', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(19, 175, 'option1', '', 'male', 'Sandra', 'Meier', '', '', '', '', '', '', 0, 660335690, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(20, 176, 'option1', '', 'male', 'Dragan', ' 	Vukic', '', '', '', '', '', '', 0, 670332270, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:59:34', '2014-05-04 16:59:34', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(21, 178, 'option1', '', 'male', 'Markus', 'Reh', '', '', '', '', '', '', 0, 670335571, 0, '', '', '', '', '', 0, NULL, '2014-05-04 17:51:28', '2014-05-05 12:15:56', 0, 0, NULL, 'male', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(22, 179, 'option2', '', 'male', 'Hans', 'Hahn', '', '', 'maunzstrasse', 'aaaaaa', 'aaaa', '', 0, 670335570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 17:57:59', '2014-05-05 12:10:58', 0, 0, NULL, 'male', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(23, 180, 'option1', '', 'male', 'Jörg', 'Gruber', '', '', '', '', '', '', 0, 660335896, 0, '', '', '', '', '', 0, NULL, '2014-05-04 17:58:31', '2014-05-05 12:10:29', 0, 0, NULL, 'male', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(24, 181, 'option2', '', 'male', 'Mike', 'Röhrer', '', '--', 'Ganglweg 3', 'Wien', 'Österreich', 'Wien', 1220, 660660660, 6606060633, 'mike.roehrer@chello.at', '', '', '<p>Schnell essen</p>\r\n', '12.01.1972', 0, NULL, '2014-05-04 17:59:17', '2014-05-05 08:19:34', 0, 0, NULL, '', 'Wienx', '-', 'Österreichxx', '13.01.1977', '<p>danke</p>\r\n', 677733, 'ressi.roherer@chello.at', 'Ressi', 'Röhrerx', 'Wienxx', 'Ganglweg 3x', 6677777, 12200),
(25, 182, 'option1', '', 'male', 'Margta', 'Grommelsheim', '', '', 'Radweggasse 8', 'Wien', 'Österreich', 'Wien', 1230, 660335576, 0, '', '', '', '', '', 0, NULL, '2014-05-05 09:03:41', '2014-05-05 12:09:11', 0, 0, NULL, 'female', '', '', '', '', '', 0, '', 'Mike', 'Grommel', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deliveryassign`
--

CREATE TABLE IF NOT EXISTS `deliveryassign` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `address_delivery_bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateprovince` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` bigint(20) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `fax` bigint(20) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deliveryinformation` text COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `users_id` int(10) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deliveryinformation_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_delivery` bigint(20) NOT NULL,
  `email_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateprovince_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_delivery` bigint(20) NOT NULL,
  `zip_delivery` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Daten für Tabelle `deliveryassign`
--

INSERT INTO `deliveryassign` (`id`, `user_id`, `address_delivery_bill`, `prefix`, `gender`, `first_name`, `last_name`, `suffix`, `company`, `street`, `city`, `country`, `stateprovince`, `zip`, `telephone`, `fax`, `email`, `latitude`, `longitude`, `deliveryinformation`, `dateofbirth`, `mobile`, `permissions`, `created_at`, `updated_at`, `users_id`, `is_published`, `slug`, `gender_delivery`, `city_delivery`, `company_delivery`, `country_delivery`, `dateofbirth_delivery`, `deliveryinformation_delivery`, `fax_delivery`, `email_delivery`, `first_name_delivery`, `last_name_delivery`, `stateprovince_delivery`, `street_delivery`, `telephone_delivery`, `zip_delivery`) VALUES
(3, 3, 'option1', '', 'male', 'Bernd1', 'Obendorfer', 'Eipeldauerstraße 38', '', 'Eipeldauerstraße 38', 'Wien', 'Eipeldauerstraße 38', 'Eipeldauerstraße 38', 1220, 67033250, 0, 'bernd.obendorfer@chello.at', '', '', '<p>Will essen!! Schnell</p>\r\n', '12.01.1972', 0, NULL, '0000-00-00 00:00:00', '2014-05-04 17:46:51', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(15, 171, 'option1', 'prefix', 'male', 'Tomaaaa', 'Reichel', '', '', '', '', '', '', 0, 680335270, 0, '', '', '', '', '', 0, NULL, '2014-05-04 15:59:17', '2014-05-04 16:43:31', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(16, 172, 'option1', '', 'male', 'Robert', 'Ginder', '', '', '', '', '', '', 0, 675555570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:50:17', '2014-05-04 16:50:17', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(17, 173, 'option1', '', 'male', 'Maria', 'Holler', '', '', '', '', '', '', 0, 660335570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:54:38', '2014-05-04 16:54:38', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(18, 174, 'option1', '', 'male', 'Herbert', 'Holler', '', '', '', '', '', '', 0, 680335570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:58:03', '2014-05-04 16:58:03', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(19, 175, 'option1', '', 'male', 'Sandra', 'Meier', '', '', '', '', '', '', 0, 660335690, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:58:55', '2014-05-04 16:58:55', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(20, 176, 'option1', '', 'male', 'Dragan', ' 	Vukic', '', '', '', '', '', '', 0, 670332270, 0, '', '', '', '', '', 0, NULL, '2014-05-04 16:59:34', '2014-05-04 16:59:34', 0, 0, NULL, '', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(21, 178, 'option1', '', 'male', 'Markus', 'Reh', '', '', '', '', '', '', 0, 670335571, 0, '', '', '', '', '', 0, NULL, '2014-05-04 17:51:28', '2014-05-05 12:15:56', 0, 0, NULL, 'male', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(22, 179, 'option2', '', 'male', 'Hans', 'Hahn', '', '', 'maunzstrasse', 'aaaaaa', 'aaaa', '', 0, 670335570, 0, '', '', '', '', '', 0, NULL, '2014-05-04 17:57:59', '2014-05-05 12:10:58', 0, 0, NULL, 'male', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(23, 180, 'option1', '', 'male', 'Jörg', 'Gruber', '', '', '', '', '', '', 0, 660335896, 0, '', '', '', '', '', 0, NULL, '2014-05-04 17:58:31', '2014-05-05 12:10:29', 0, 0, NULL, 'male', '', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(24, 181, 'option2', '', 'male', 'Mike', 'Röhrer', '', '--', 'Ganglweg 3', 'Wien', 'Österreich', 'Wien', 1220, 660660660, 6606060633, 'mike.roehrer@chello.at', '', '', '<p>Schnell essen</p>\r\n', '12.01.1972', 0, NULL, '2014-05-04 17:59:17', '2014-05-05 08:19:34', 0, 0, NULL, '', 'Wienx', '-', 'Österreichxx', '13.01.1977', '<p>danke</p>\r\n', 677733, 'ressi.roherer@chello.at', 'Ressi', 'Röhrerx', 'Wienxx', 'Ganglweg 3x', 6677777, 12200),
(25, 182, 'option1', '', 'male', 'Margta', 'Grommelsheim', '', '', 'Radweggasse 8', 'Wien', 'Österreich', 'Wien', 1230, 660335576, 0, '', '', '', '', '', 0, NULL, '2014-05-05 09:03:41', '2014-05-05 12:09:11', 0, 0, NULL, 'female', '', '', '', '', '', 0, '', 'Mike', 'Grommel', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deliverytimes`
--

CREATE TABLE IF NOT EXISTS `deliverytimes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_time_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_time_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nightjump` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=300 ;

--
-- Daten für Tabelle `deliverytimes`
--

INSERT INTO `deliverytimes` (`id`, `user_id`, `name`, `delivery_time_from`, `delivery_time_to`, `nightjump`, `created_at`, `updated_at`, `is_published`) VALUES
(278, 186, 'Lieferzeit 2', '13:30', '15:30', '0', '2014-05-08 13:01:01', '2014-05-09 14:15:50', '0'),
(294, 0, 'asdfsd', '', '', '', '2014-05-10 11:16:17', '2014-05-10 11:16:53', '0'),
(296, 171, 'sdafasdf', '10', '', '', '2014-05-11 17:23:39', '2014-05-11 17:36:27', '0'),
(297, 187, 'aaanb', '', '', '', '2014-05-11 22:11:51', '2014-05-23 03:51:53', '0'),
(298, 204, 'sdafsaf', '', '', '', '2014-06-10 09:32:11', '2014-06-10 09:32:11', '0'),
(299, 204, 'ffff', '', '', '', '2014-06-10 09:37:02', '2014-06-10 09:37:02', '0');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deliveryzipcode`
--

CREATE TABLE IF NOT EXISTS `deliveryzipcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `zip` bigint(20) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Daten für Tabelle `deliveryzipcode`
--

INSERT INTO `deliveryzipcode` (`id`, `user_id`, `zip`, `is_published`, `created_at`, `updated_at`) VALUES
(61, 0, 7060, 0, '2014-05-09 10:54:13', '2014-05-23 10:33:08'),
(65, 187, 5050, 0, '2014-05-09 20:27:44', '2014-05-23 10:21:35'),
(85, 10, 6060, 0, '2014-05-16 17:09:51', '2014-05-16 17:09:51'),
(86, 10, 6666, 0, '2014-05-23 04:12:17', '2014-05-23 04:12:17'),
(87, 187, 5654, 0, '2014-05-23 04:12:24', '2014-05-23 10:26:48');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fbf_newsletter_signups`
--

CREATE TABLE IF NOT EXISTS `fbf_newsletter_signups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fbf_newsletter_signups_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hl_ueberuns` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ct_ueberuns` text COLLATE utf8_unicode_ci NOT NULL,
  `hl_rezepte` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `ct_rezepte` text COLLATE utf8_unicode_ci NOT NULL,
  `hl_contact` text COLLATE utf8_unicode_ci NOT NULL,
  `ct_contact` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `footers`
--

INSERT INTO `footers` (`id`, `hl_ueberuns`, `ct_ueberuns`, `hl_rezepte`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `ct_rezepte`, `hl_contact`, `ct_contact`) VALUES
(7, 'Über uns', 'Du kannst dir die KochAbo-Box wöchentlich oder alle zwei Wochen liefern lassen, und jederzeit pausieren oder stornieren. ', 'Gratis Rezepte\r\n', 'footer', '2014-05-19', '2014-05-19 03:57:04', '2014-05-21 07:28:11', 1, 'Jede Woche zaubern wir in unserer Test-Küche fünf neue fabelhafte Rezepte. Eine gesunde Mischung aus altbewährten Klassikern und kreativen Neu-Entdeckungen.', 'Kontakt', ' <p>Strobachgasse 4/6<br />\r\n1050 Wien<br />\r\nTelefon: 01 544 3900<br />\r\nFax: 01 544 3900/6<br />\r\nE-Mail: <a href="mailto:hilfe@kochabo.at">hilfe@kochabo.at</a><br />\r\n<br />\r\nWir sind f&uuml;r dich da:<br />\r\nMo: 09:00-22:30 | Di - Fr: 09:00 - 18:00test</p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `form_posts`
--

CREATE TABLE IF NOT EXISTS `form_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender_phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `is_answered` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `g1`
--

CREATE TABLE IF NOT EXISTS `g1` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `ordner` text,
  `contributor` text NOT NULL,
  `uploadedOn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=150 ;

--
-- Daten für Tabelle `g1`
--

INSERT INTO `g1` (`id`, `name`, `size`, `type`, `url`, `title`, `description`, `ordner`, `contributor`, `uploadedOn`) VALUES
(55, 'IMG_20121206_182100.jpg', 690483, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(56, 'IMG_20120630_221735.jpg', 252892, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(57, '20130421_120657 (1).jpg', 381882, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(75, '12.jpg', 63231, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(76, '11.jpg', 107229, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(77, '13.jpg', 61093, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(78, '9.jpg', 96899, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(79, '10.jpg', 107442, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(81, '7.jpg', 129491, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(83, '6.jpg', 77270, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(85, '5.jpg', 126843, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(137, 'high-rated-job-3.2.jpg', 92751, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(138, 'high-rated-job-4.2.jpg', 75528, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(139, 'high-rated-job-3.3.jpg', 98489, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(140, 'high-rated-job-4.1.jpg', 108012, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(141, 'high-rated-job-1.jpg', 122669, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(142, 'high-rated-job-4.3.jpg', 126275, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(144, 'high-rated-job-3.1.jpg', 92125, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(146, 'high-rated-job-2.2.jpg', 85554, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(147, 'high-rated-job-1.3.jpg', 140055, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(148, 'high-rated-job-2.3.jpg', 122002, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(149, 'high-rated-job-1.2.jpg', 134509, 'image/jpeg', NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `g2`
--

CREATE TABLE IF NOT EXISTS `g2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `ordner` text,
  `contributor` text NOT NULL,
  `uploadedOn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Daten für Tabelle `g2`
--

INSERT INTO `g2` (`id`, `name`, `size`, `type`, `url`, `title`, `description`, `ordner`, `contributor`, `uploadedOn`) VALUES
(49, '20130504_230205.jpg', 2009898, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(50, '20130411_124937.jpg', 248174, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(51, '20130421_120657.jpg', 381882, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(52, 'IMG_20120824_190333.jpg', 374324, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(53, '20130303_175147.jpg', 423416, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(54, '20130226_230100.jpg', 1840692, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(55, '1x.jpg', 284093, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(56, '20140512_120614.jpg', 612076, 'image/jpeg', NULL, NULL, NULL, NULL, '', ''),
(57, 'googleplusbild.png', 241338, 'image/png', NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `g3`
--

CREATE TABLE IF NOT EXISTS `g3` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `ordner` text,
  `contributor` text NOT NULL,
  `uploadedOn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Daten für Tabelle `g3`
--

INSERT INTO `g3` (`id`, `name`, `size`, `type`, `url`, `title`, `description`, `ordner`, `contributor`, `uploadedOn`) VALUES
(49, '20130504_230205.jpg', 2009898, 'image/jpeg', NULL, NULL, 'h', NULL, '', ''),
(55, 'walmart_grey.png', 3895, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(56, 'vadafone.png', 12196, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(57, 'walmart.png', 4068, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(58, 'vadafone_grey.png', 9046, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(59, 'spinworkx.png', 8625, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(60, 'spinworkx_grey.png', 5663, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(61, 'natural.png', 4575, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(62, 'motogp_grey.png', 5584, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(63, 'gamescast.png', 4212, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(64, 'gamescast_grey.png', 3928, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(65, 'motogp.png', 7027, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(66, 'natural_grey.png', 3928, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(67, 'cocacola.png', 10780, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(68, 'igneus_grey.png', 3270, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(69, 'everyday.png', 8189, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(70, 'cocacola_grey.png', 7091, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(71, 'igneus.png', 3773, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(72, 'everyday_grey.png', 5965, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(73, 'shell.png', 8960, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(74, 'shell_grey.png', 6169, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(75, 'aztec.png', 11977, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(76, 'aztec_grey.png', 9133, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(77, 'cisco_grey.png', 5985, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(78, 'cisco.png', 8039, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(79, 'hp_grey.png', 7296, 'image/png', NULL, NULL, NULL, NULL, '', ''),
(80, 'hp.png', 7536, 'image/png', NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Users', '{"users":1}', '2014-04-17 14:56:15', '2014-04-17 14:56:15'),
(2, 'Admins', '{"admin":1,"users":1}', '2014-04-17 14:56:15', '2014-04-17 14:56:15');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gutschein`
--

CREATE TABLE IF NOT EXISTS `gutschein` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `gutschein`
--

INSERT INTO `gutschein` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(5, 'Den perfekt passenden Wein mit dazu bestellen?', '<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Du erh&auml;ltst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualit&auml;tswein zu einem Gericht mit dazu. <strong>Zum Beispiel n&auml;chste Woche mit dabei:</strong></div>\r\n\r\n<h3 style="color:rgb(152, 194, 37); font-style:normal; text-align:start">KROISS Riesling Hackenberg 2012</h3>\r\n\r\n<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n<br />\r\n<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/public/uploads/obstbox.jpg" style="height:248px; width:440px" /></div>\r\n', 'den-perfekt-passenden-wein-mit-dazu-bestellen', '2014-04-01', '2014-04-01 17:08:41', '2014-04-09 17:24:25', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/ckeditor/plugins/doksoft_uploader/userfiles/3_4.jpg" /></p>\r\n'),
(6, 'Kostenlose Lieferung', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n', 'kostenlose-lieferung', '2014-04-02', '2014-04-02 16:38:27', '2014-04-09 17:32:26', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/uploads/doksoft_uploader/13.jpg" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kochabobox`
--

CREATE TABLE IF NOT EXISTS `kochabobox` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `kochabobox`
--

INSERT INTO `kochabobox` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(5, 'Den perfekt passenden Wein mit dazu bestellen?', '<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Du erh&auml;ltst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualit&auml;tswein zu einem Gericht mit dazu. <strong>Zum Beispiel n&auml;chste Woche mit dabei:</strong></div>\r\n\r\n<h3 style="color:rgb(152, 194, 37); font-style:normal; text-align:start">KROISS Riesling Hackenberg 2012</h3>\r\n\r\n<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n<br />\r\n<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/public/uploads/obstbox.jpg" style="height:248px; width:440px" /></div>\r\n', 'den-perfekt-passenden-wein-mit-dazu-bestellen', '2014-04-01', '2014-04-01 17:08:41', '2014-04-09 17:24:25', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/ckeditor/plugins/doksoft_uploader/userfiles/3_4.jpg" /></p>\r\n'),
(6, 'Kostenlose Lieferung', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n', 'kostenlose-lieferung', '2014-04-02', '2014-04-02 16:38:27', '2014-04-09 17:32:26', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/uploads/doksoft_uploader/13.jpg" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_abotyp`
--

CREATE TABLE IF NOT EXISTS `list_abotyp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `list_abotyp`
--

INSERT INTO `list_abotyp` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'Einmalig', '2014-05-30 12:59:34', '2014-05-30 10:59:34'),
(3, 'Einwöchig ', '2014-05-30 12:59:54', '2014-05-30 10:59:54'),
(4, 'Zweiwöchig', '2014-05-30 13:00:31', '2014-05-30 11:00:31'),
(5, 'Vierwöchig', '2014-05-30 13:01:09', '2014-05-30 11:01:09'),
(6, 'Kein Abo', '2014-05-30 13:00:59', '2014-05-30 11:00:59');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_bundesland`
--

CREATE TABLE IF NOT EXISTS `list_bundesland` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `list_bundesland`
--

INSERT INTO `list_bundesland` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'Wien', '2014-05-30 13:03:04', '2014-05-30 11:03:04'),
(3, 'Niederösterreich', '2014-05-30 13:03:11', '2014-05-30 11:03:11'),
(4, 'Kärnten', '2014-05-30 13:03:19', '2014-05-30 11:03:19'),
(5, 'Salzburg', '2014-05-30 13:03:26', '2014-05-30 11:03:26'),
(6, 'Tirol', '2014-05-30 13:03:40', '2014-05-30 11:03:40'),
(7, 'Steiermark', '2014-05-30 13:03:48', '2014-05-30 11:03:48'),
(8, 'dfdaf', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_currency`
--

CREATE TABLE IF NOT EXISTS `list_currency` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `list_currency`
--

INSERT INTO `list_currency` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'EUR', '2014-05-30 13:03:04', '2014-05-30 11:03:04'),
(3, 'CHF', '2014-05-30 13:03:11', '2014-05-30 11:03:11'),
(4, 'USD', '2014-05-30 13:03:19', '2014-05-30 11:03:19');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_gender`
--

CREATE TABLE IF NOT EXISTS `list_gender` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `list_gender`
--

INSERT INTO `list_gender` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'Herr', '2014-05-30 12:59:34', '2014-05-30 10:59:34'),
(3, 'Frau', '2014-05-30 12:59:54', '2014-05-30 10:59:54');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_gruppe`
--

CREATE TABLE IF NOT EXISTS `list_gruppe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Daten für Tabelle `list_gruppe`
--

INSERT INTO `list_gruppe` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'General', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Wholesale', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Retailer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Existing Customers', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Deleted', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Allianz', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Gesperrt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Keine E-Mails', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Gesperrt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Keine E-Mails', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Top Customer', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_recipe_type`
--

CREATE TABLE IF NOT EXISTS `list_recipe_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `list_recipe_type`
--

INSERT INTO `list_recipe_type` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'Classic', '2014-05-30 12:59:34', '2014-05-30 10:59:34'),
(3, 'Veggie ', '2014-05-30 12:59:54', '2014-05-30 10:59:54'),
(4, 'Vegan', '2014-05-30 13:00:31', '2014-05-30 11:00:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_status`
--

CREATE TABLE IF NOT EXISTS `list_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `list_status`
--

INSERT INTO `list_status` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'Inaktiv', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Aktiv', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Pausiert', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Kein Abo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Gutschein', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Flash Sale Produkt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'ddd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_type`
--

CREATE TABLE IF NOT EXISTS `list_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `list_type`
--

INSERT INTO `list_type` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, 'KochAbo-Box', '2014-05-30 12:59:34', '2014-05-30 10:59:34'),
(3, 'Obstbox', '2014-05-30 12:59:54', '2014-05-30 10:59:54'),
(4, 'Geschenkgutschein', '2014-05-30 13:00:31', '2014-05-30 11:00:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `list_ust`
--

CREATE TABLE IF NOT EXISTS `list_ust` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `list_ust`
--

INSERT INTO `list_ust` (`id`, `bezeichnung`, `created_at`, `updated_at`) VALUES
(1, '20', '2014-05-30 12:59:34', '2014-05-30 10:59:34'),
(3, '19', '2014-05-30 12:59:54', '2014-05-30 10:59:54'),
(7, '2,5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(5, 'Den perfekt passenden Wein mit dazu bestellen?', '<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Du erh&auml;ltst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualit&auml;tswein zu einem Gericht mit dazu. <strong>Zum Beispiel n&auml;chste Woche mit dabei:</strong></div>\r\n\r\n<h3 style="color:rgb(152, 194, 37); font-style:normal; text-align:start">KROISS Riesling Hackenberg 2012</h3>\r\n\r\n<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n<br />\r\n<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/public/uploads/obstbox.jpg" style="height:248px; width:440px" /></div>\r\n', 'den-perfekt-passenden-wein-mit-dazu-bestellen', '2014-04-01', '2014-04-01 17:08:41', '2014-04-09 17:24:25', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/ckeditor/plugins/doksoft_uploader/userfiles/3_4.jpg" /></p>\r\n'),
(6, 'Kostenlose Lieferung', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n', 'kostenlose-lieferung', '2014-04-02', '2014-04-02 16:38:27', '2014-04-09 17:32:26', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/uploads/doksoft_uploader/13.jpg" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `logisticianmanager`
--

CREATE TABLE IF NOT EXISTS `logisticianmanager` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streetno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateprovince` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `country_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactPerson` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=205 ;

--
-- Daten für Tabelle `logisticianmanager`
--

INSERT INTO `logisticianmanager` (`id`, `street`, `streetno`, `city`, `stateprovince`, `zip`, `country_id`, `contactPerson`, `email`, `phone`, `created_at`, `updated_at`, `is_published`, `name`) VALUES
(1, 'Dummy', 'Dummy', 'Dummy', 'Dummy', 0, '', 'Dummy', 'Dummy', 'Dummy', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Bitte Auswahl treffen.'),
(10, 'Golfgasse 3', '\r\n', 'Wien', 'Wien', 1220, 'Österreich', 'Rolf Niemand', 'rolf.niemand@chello.at', '06655565569', '2014-04-19 02:02:36', '2014-05-07 14:11:51', 0, 'Niemand GmbH'),
(171, 'Meiergasse 5', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreich', 'Margit Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics'),
(186, 'Gonzigasse 7', '', 'Insbruck', 'Tirol', 7020, 'Österreich', 'Hr Markus Fritzberger', 'markus.fritzberger@chello.at', '01/504565a', '2014-05-06 19:37:06', '2014-05-11 16:58:05', 0, 'Mutzifatzi GmbH'),
(187, 'franzimaunzgasse 7', '', 'St Pölten', 'Österreich', 5040, 'adsfdsaf', 'Frau Miki', '', '06606060', '2014-05-11 16:59:06', '2014-05-18 16:24:09', 0, 'Arg KG'),
(188, 'Meiergasse 5', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreich', 'Margit Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics'),
(189, 'Gonzigasse 7', '', 'Insbruck', 'Tirol', 8020, 'Österreich', 'Hr Markus Fritzberger', 'markus.fritzberger@chello.at', '01/504565a', '2014-05-06 19:37:06', '2014-05-11 16:58:05', 0, 'Mutzifatzi GmbH'),
(190, 'kauzgasse', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreich', 'Margit Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics'),
(191, 'Rachgasse 4', '\r\n', 'Wien', 'Wien', 1220, 'Österreich', 'Rolf maka', 'rolf.niemand@chello.at', '06655565569', '2014-04-19 02:02:36', '2014-05-07 14:11:51', 0, 'Niemand GmbH'),
(193, 'fuchsgasse 8', '', 'Kärnten', 'Tirol', 7020, 'Österreich', 'Hr Markus Fritzberger', 'markus.fritzberger@chello.at', '01/504565a', '2014-05-06 19:37:06', '2014-05-11 16:58:05', 0, 'mualilaug GmbH'),
(194, 'rudolfgasse 7', '', 'Graz', 'Tirol', 5645, 'Österreich', 'Hr Markus Fritzberger', 'markus.fritzberger@chello.at', '01/504565a', '2014-05-06 19:37:06', '2014-05-11 16:58:05', 0, 'Raunzigmbh GmbH'),
(195, 'franzimaunzgasse 7', '', 'St Pölten', 'Österreich', 5040, 'adsfdsaf', 'Frau Miki', '', '06606060', '2014-05-11 16:59:06', '2014-05-18 16:24:09', 0, 'Arg KG'),
(196, 'Dsdaf', 'asdf', 'sadf', 'dsaf', 0, '', 'afds', 'dsaf', 'dsaf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Bitte Auswahl treffen.'),
(197, 'kauzgasse', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreich', 'Margit Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics'),
(198, 'Gonzigasse 7', '', 'Insbruck', 'Tirol', 8020, 'Österreich', 'Hr Markus Fritzberger', 'markus.fritzberger@chello.at', '01/504565a', '2014-05-06 19:37:06', '2014-05-11 16:58:05', 0, 'Mutzifatzi GmbH'),
(199, 'Meiergasse 5', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreich', 'Margit Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics'),
(200, 'sadfsadf', 'sadfsad', 'dsaf', 'dsafsadfsad', 0, '', 'Ddsafdsa', 'dsafsadf', 'Dudsafdsaf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Bitte Auswahl treffen.'),
(201, 'kauzsgasse', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreich', 'Margit Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics'),
(202, 'fuchsgassse 8', '', 'Kärnten', 'Tirol', 7020, 'Österreich', 'Hr Markus Fritzberger', 'markus.fritzberger@chello.at', '01/504565a', '2014-05-06 19:37:06', '2014-05-11 16:58:05', 0, 'mualilaug GmbH'),
(203, 'kauzgasse', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreissch', 'Margit Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics'),
(204, 'kauzgasse', '\r\n', 'Salzburg Stadt', 'Salzburg', 5020, 'Österreich', 'Margisst Zeigelt', 'm.zweigelt@chello.at', '05/5656569', '2014-05-04 15:59:17', '2014-05-07 14:12:40', 0, 'Zeigelt Logistics');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Daten für Tabelle `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `order`, `parent_id`, `type`, `option`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Start', '/', 1, 0, 'module', 'home', 1, '2014-04-01 15:52:26', '2014-05-23 03:46:48'),
(2, 'News', '/news', 10, 17, 'module', 'news', 1, '2014-04-01 15:52:26', '2014-06-12 07:09:08'),
(3, 'Blog', '/article', 9, 17, 'module', 'blog', 1, '2014-04-01 15:52:26', '2014-06-12 07:09:08'),
(4, 'Kontakt', '/contact', 17, 17, 'module', 'contact', 1, '2014-04-01 15:52:26', '2014-06-12 07:09:08'),
(5, 'Angebote', '/offer', 6, 0, 'module', 'offer', 0, '2014-04-01 15:52:26', '2014-04-20 04:37:42'),
(6, 'Impressum', '/page/4', 7, 0, 'module', NULL, 0, '2014-04-02 16:55:03', '2014-04-20 04:37:42'),
(8, 'Team', '/page/1', 18, 17, 'module', NULL, 1, '2014-04-04 13:32:43', '2014-06-12 07:09:29'),
(9, 'Fotos', '/photo_gallery/1', 11, 17, 'module', NULL, 1, '2014-04-07 09:33:08', '2014-06-12 07:09:08'),
(10, 'Photo Gallery 2', '/photo_gallery/2', 12, 17, 'module', NULL, 0, '2014-04-08 07:47:05', '2014-06-12 07:09:08'),
(11, 'Photo Gallery - Unsere Kunden', '/photo_gallery/3', 13, 17, 'module', NULL, 0, '2014-04-08 07:47:34', '2014-06-12 07:09:08'),
(12, 'Hilfe', '/page/5', 16, 17, 'module', NULL, 1, '2014-04-08 07:52:57', '2014-06-12 07:09:08'),
(13, 'Impressum', '/page/4', 14, 17, 'module', NULL, 1, '2014-04-08 07:53:29', '2014-06-12 07:09:08'),
(14, 'AGB''s', '/page/3', 15, 17, 'module', NULL, 1, '2014-04-08 07:54:01', '2014-06-12 07:09:08'),
(17, 'Sonstiges', '/page/6', 8, 0, 'module', NULL, 1, '2014-04-08 08:26:10', '2014-06-12 07:09:08'),
(18, 'Beispielbox', '/beispielbox', 5, 0, 'custom', NULL, 1, '2014-04-10 06:13:49', '2014-04-11 09:10:19'),
(19, 'So funktioniert''s', '/sofunktioniertes', 2, 0, 'custom', NULL, 1, '2014-04-10 06:23:54', '2014-05-17 07:41:53'),
(20, 'KochAbo-Box', '/kochabobox', 3, 0, 'custom', NULL, 1, '2014-04-10 06:24:50', '2014-04-11 09:10:19'),
(21, 'Obstbox', 'obstbox', 4, 0, 'custom', NULL, 1, '2014-04-10 06:28:05', '2014-04-11 12:04:19'),
(22, 'Mein Konto', 'meinkonto', 19, 0, 'custom', NULL, 1, '2014-04-20 04:36:53', '2014-04-20 04:45:37'),
(23, 'Shop', '/shop', 20, 0, 'custom', NULL, 1, '2014-06-12 07:02:39', '2014-06-12 07:03:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `menus2`
--

CREATE TABLE IF NOT EXISTS `menus2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Daten für Tabelle `menus2`
--

INSERT INTO `menus2` (`id`, `title`, `url`, `order`, `parent_id`, `type`, `option`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Start', '/', 1, 0, 'module', 'home', 1, '2014-04-01 15:52:26', '2014-04-11 09:10:19'),
(2, 'News', '/news', 12, 17, 'module', 'news', 1, '2014-04-01 15:52:26', '2014-04-20 04:37:39'),
(3, 'Blog', '/article', 11, 17, 'module', 'blog', 1, '2014-04-01 15:52:26', '2014-04-20 04:37:45'),
(4, 'Kontakt', '/contact', 8, 0, 'module', 'contact', 1, '2014-04-01 15:52:26', '2014-04-20 04:37:42'),
(5, 'Angebote', '/offer', 6, 0, 'module', 'offer', 0, '2014-04-01 15:52:26', '2014-04-20 04:37:42'),
(6, 'Impressum', '/page/4', 7, 0, 'module', NULL, 0, '2014-04-02 16:55:03', '2014-04-20 04:37:42'),
(8, 'Team', '/page/1', 9, 4, 'module', NULL, 1, '2014-04-04 13:32:43', '2014-04-20 04:37:42'),
(9, 'Fotos', '/photo_gallery/1', 13, 17, 'module', NULL, 1, '2014-04-07 09:33:08', '2014-04-11 09:12:54'),
(10, 'Photo Gallery 2', '/photo_gallery/2', 14, 17, 'module', NULL, 0, '2014-04-08 07:47:05', '2014-04-11 09:12:55'),
(11, 'Photo Gallery - Unsere Kunden', '/photo_gallery/3', 15, 17, 'module', NULL, 0, '2014-04-08 07:47:34', '2014-04-11 09:12:56'),
(12, 'Hilfe', '/page/5', 18, 17, 'module', NULL, 1, '2014-04-08 07:52:57', '2014-04-11 09:10:19'),
(13, 'Impressum', '/page/4', 16, 17, 'module', NULL, 1, '2014-04-08 07:53:29', '2014-04-11 09:10:19'),
(14, 'AGB''s', '/page/3', 17, 17, 'module', NULL, 1, '2014-04-08 07:54:01', '2014-04-11 09:10:19'),
(17, 'Sonstiges', '/page/6', 10, 0, 'module', NULL, 1, '2014-04-08 08:26:10', '2014-04-20 04:37:45'),
(18, 'Beispielbox', 'http://127.0.0.1/laravel/kochabo/beispielbox', 5, 0, 'custom', NULL, 1, '2014-04-10 06:13:49', '2014-04-11 09:10:19'),
(19, 'So funktioniert''s', 'http://127.0.0.1/laravel/kochabo/sofunktioniertes', 2, 0, 'custom', NULL, 1, '2014-04-10 06:23:54', '2014-04-11 09:10:19'),
(20, 'KochAbo-Box', 'http://127.0.0.1/laravel/kochabo/kochabobox', 3, 0, 'custom', NULL, 1, '2014-04-10 06:24:50', '2014-04-11 09:10:19'),
(21, 'Obstbox', 'http://127.0.0.1/laravel/kochabo/obstbox', 4, 0, 'custom', NULL, 1, '2014-04-10 06:28:05', '2014-04-11 12:04:19'),
(22, 'Mein Konto', 'meinkonto', 19, 0, 'custom', NULL, 1, '2014-04-20 04:36:53', '2014-04-20 04:45:37');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 1),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 1),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 1),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
('2013_10_24_070153_create_articles_table', 2),
('2013_10_24_111453_create_pages_table', 2),
('2013_11_06_143600_create_photo_galleries_table', 2),
('2013_11_06_143700_create_photos_table', 2),
('2013_11_10_191159_create_form_posts_table', 2),
('2013_11_14_222615_create_tags_table', 2),
('2013_11_14_224042_create_articles_tags_table', 2),
('2013_11_22_085357_create_settings_table', 2),
('2013_11_27_110650_create_categories_table', 2),
('2013_11_29_083232_create_news_table', 2),
('2013_12_11_124855_create_sliders_table', 2),
('2014_01_13_204110_create_menus_table', 2),
('2013_11_26_091111_create_signups_table', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(7, 'News 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo.<br />\r\n&nbsp;<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img6.jpg" style="height:333px; width:500px" /></p>\r\n', 'news-1', '2014-05-19', '2014-05-19 03:57:04', '2014-05-30 11:15:49', 1, '<p><img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img9.jpg" style="height:333px; width:500px" /></p>\r\n'),
(8, 'New2', '<p>Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img8.jpg" style="height:345px; width:500px" /></p>\r\n', 'new2', '2014-05-21', '2014-05-19 04:01:35', '2014-05-19 07:47:33', 1, '<p><img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img8.jpg" style="height:345px; width:500px" /></p>\r\n'),
(9, 'news 3', '<p>Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper.<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img9.jpg" style="height:333px; width:500px" /></p>\r\n', 'news-3', '2014-05-23', '2014-05-19 04:02:29', '2014-05-19 06:58:38', 1, '<p><img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img6.jpg" style="height:333px; width:500px" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `aktiviert` tinytext NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_2` (`code`),
  KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Daten für Tabelle `newsletters`
--

INSERT INTO `newsletters` (`id`, `user_id`, `email`, `first_name`, `last_name`, `created_at`, `updated_at`, `aktiviert`, `code`) VALUES
(1, 0, 'zorxox@t.at', '', '', '2014-04-30 13:49:46', '2014-04-30 11:49:46', 'aktiviert', 2619934),
(10, 0, 'robdert@gier.at', '', '', '2014-04-30 13:50:02', '2014-04-30 11:50:02', '', 1212768),
(13, 0, 'sd@da.at', NULL, NULL, '2014-04-30 03:46:58', '2014-04-30 03:46:58', '', 1785888),
(14, 0, 'e@e.at', NULL, NULL, '2014-04-30 03:49:35', '2014-04-30 03:49:35', '', 8886413),
(15, 0, 'richard@reini.at', NULL, NULL, '2014-04-30 03:53:03', '2014-04-30 03:53:03', '', 3027038),
(16, 0, 'test7@gemail.com', NULL, NULL, '2014-04-30 04:01:06', '2014-04-30 04:01:06', '', 6150512),
(18, 0, 'w.w@chello.at', NULL, NULL, '2014-04-30 04:05:15', '2014-04-30 04:05:15', '', 9933471),
(20, 0, 'aaaaa@aaa.at', NULL, NULL, '2014-04-30 04:06:04', '2014-04-30 04:06:04', '', 8101196),
(21, 0, 'eeeeee@ee.at', NULL, NULL, '2014-04-30 04:07:07', '2014-04-30 04:07:07', '', 7779541),
(22, 0, 'ssssssd@da.at', NULL, NULL, '2014-04-30 04:07:40', '2014-04-30 04:07:40', '', 1485290),
(23, 0, 'richsard@reini.at', NULL, NULL, '2014-04-30 06:55:32', '2014-04-30 06:55:32', '', 4961853),
(24, 0, 'bernd.obessndorfer@chello.at', NULL, NULL, '2014-04-30 06:56:22', '2014-04-30 06:56:22', '', 4528808),
(26, 0, 'bernd.obggessndoffrfer@chello.at', NULL, NULL, '2014-04-30 06:57:38', '2014-04-30 06:57:38', '', 6327819),
(27, 0, 'aaaaa@aaa.at', NULL, NULL, '2014-04-30 07:10:23', '2014-04-30 07:10:23', '', 3762817),
(30, 0, 'aassssaaa@aaa.at', NULL, NULL, '2014-04-30 07:11:17', '2014-04-30 07:11:17', '', 9851989),
(31, 0, 'ssssssd@da.at', NULL, NULL, '2014-04-30 07:17:26', '2014-04-30 07:17:26', '', 7547302),
(32, 0, 'admaaassain@admin.com', NULL, NULL, '2014-04-30 07:35:40', '2014-04-30 07:35:40', '', 3293762),
(33, 0, 'admaaddaain@admin.com', NULL, NULL, '2014-04-30 09:45:17', '2014-04-30 07:45:17', 'aktiviert', 9363403),
(34, 0, 'sd@da.at', NULL, NULL, '2014-04-30 07:39:02', '2014-04-30 07:39:02', '', 7727050),
(35, 0, 'sdss@da.at', NULL, NULL, '2014-04-30 07:39:54', '2014-04-30 07:39:54', '', 3137512),
(36, 0, 'f@d.at', NULL, NULL, '2014-04-30 07:40:32', '2014-04-30 07:40:32', '', 5435791),
(37, 0, 'aaaaaaa@aaa.at', NULL, NULL, '2014-04-30 07:44:53', '2014-04-30 07:44:53', '', 4477233),
(38, 0, 'testaaaaa@aaa.at', NULL, NULL, '2014-04-30 09:51:35', '2014-04-30 07:51:35', 'aktiviert', 3140258),
(39, 0, 'dsaf@ccc.at', NULL, NULL, '2014-04-30 07:58:05', '2014-04-30 07:58:05', '', 3046875),
(40, 0, 'aa@dd.at', NULL, NULL, '2014-04-30 07:58:21', '2014-04-30 07:58:21', '', 9170227),
(41, 0, 'aa@dd.at', NULL, NULL, '2014-04-30 09:59:06', '2014-04-30 07:59:06', 'aktiviert', 7847290),
(42, 0, 'admsssaaaain@admin.com', NULL, NULL, '2014-04-30 08:03:01', '2014-04-30 08:03:01', '', 883483),
(43, 0, 'test7.mail@chello.at', 'test', 'testtest', '2014-04-30 09:09:58', '2014-04-30 09:09:58', '', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `obstbox`
--

CREATE TABLE IF NOT EXISTS `obstbox` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `obstbox`
--

INSERT INTO `obstbox` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(5, 'Den perfekt passenden Wein mit dazu bestellen?', '<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Du erh&auml;ltst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualit&auml;tswein zu einem Gericht mit dazu. <strong>Zum Beispiel n&auml;chste Woche mit dabei:</strong></div>\r\n\r\n<h3 style="color:rgb(152, 194, 37); font-style:normal; text-align:start">KROISS Riesling Hackenberg 2012</h3>\r\n\r\n<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n<br />\r\n<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/public/uploads/obstbox.jpg" style="height:248px; width:440px" /></div>\r\n', 'den-perfekt-passenden-wein-mit-dazu-bestellen', '2014-04-01', '2014-04-01 17:08:41', '2014-04-09 17:24:25', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/ckeditor/plugins/doksoft_uploader/userfiles/3_4.jpg" /></p>\r\n'),
(6, 'Kostenlose Lieferung', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n', 'kostenlose-lieferung', '2014-04-02', '2014-04-02 16:38:27', '2014-04-09 17:32:26', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/uploads/doksoft_uploader/13.jpg" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `offers`
--

INSERT INTO `offers` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(7, 'test66', '<p>stast</p>\r\n', 'test66', '2014-05-18', '2014-05-18 15:32:58', '2014-05-18 15:38:07', 0, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) NOT NULL,
  `delivery_date` date NOT NULL,
  `order_increment_id` int(10) NOT NULL,
  `deliverable` int(10) NOT NULL,
  `customercustomer_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `order`
--

INSERT INTO `order` (`order_id`, `delivery_date`, `order_increment_id`, `deliverable`, `customercustomer_id`, `created_at`, `updated_at`) VALUES
(1, '2014-06-10', 0, 1, 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2014-06-10', 0, 1, 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2014-06-11', 0, 0, 71, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0000-00-00', 0, 0, 72, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created_at`, `updated_at`, `is_published`) VALUES
(1, 'Team', '<div class="container">\r\n<div class="row team margin-bottom-20">\r\n<div class="col-md-5">\r\n<div class="thumbnail-style">\r\n<h3>Jack Bour <small>Chief Executive Officer</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Toll</li>\r\n	<li>Fein</li>\r\n	<li>Nett gro&szlig;z&uuml;gig und fein</li>\r\n	<li>Nett und fein</li>\r\n	<li>Nett gro&szlig;z&uuml;gig und fein</li>\r\n	<li>Nett gro&szlig;z&uuml;gig fein</li>\r\n	<li>Nett gro&szlig;z&uuml;gig und fein</li>\r\n	<li>Gro&szlig;z&uuml;gig und fein</li>\r\n	<li>Nett gro&szlig;z&uuml;gig und fein</li>\r\n	<li>Freundlich gro&szlig;z&uuml;gig und fein</li>\r\n	<li>Nett Gut und fein</li>\r\n	<li>Nett gro&szlig;z&uuml;gig und fein</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-7">\r\n<div class="margin-bottom-10">&nbsp;</div>\r\n\r\n<p>Acilis quidem rerum facilis est et expedita distinctio estet expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>\r\n&nbsp;\r\n\r\n<div class="tag-box tag-box-v1">\r\n<p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</p>\r\n</div>\r\n\r\n<div class="carousel slide testimonials testimonials-v1" id="testimonials-3">\r\n<div class="carousel-inner">\r\n<div class="item active">\r\n<p>Ducimusqui ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sunt in culpaid delvoe molestias..</p>\r\n\r\n<div class="testimonial-info"><img alt="" src="../uploads/doksoft_uploader/testimonials/img2.jpg" /> Jenny Lawiso <em>Web Developer, Unify Theme.</em></div>\r\n</div>\r\n\r\n<div class="item">\r\n<p>Ducimusqui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sunt in culpaid delvoe molestias..</p>\r\n\r\n<div class="testimonial-info"><img alt="" src="../uploads/doksoft_uploader/testimonials/img1.jpg" /> User <em>Java Developer, Htmlstream</em></div>\r\n</div>\r\n\r\n<div class="item">\r\n<p>Ducimusqui ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sunt in culpaid delvoe molestias..</p>\r\n\r\n<div class="testimonial-info"><img alt="" src="../uploads/doksoft_uploader/testimonials/user.jpg" /> Kate Davenport <em>Web Designer, Google Inc.</em></div>\r\n</div>\r\n</div>\r\n\r\n<div class="carousel-arrow">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="headline">\r\n<h2>Account Directors</h2>\r\n</div>\r\n\r\n<div class="row team margin-bottom-40">\r\n<div class="col-sm-4">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/3.jpg" />\r\n<h3>Kate Metus <small>Project Manager</small></h3>\r\n\r\n\r\n\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-4">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/2.jpg" />\r\n<h3>Porta Gravida <small>VP of Operations</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-4">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/4.jpg" />\r\n<h3>Donec Elit <small>Director, R &amp; D Talent</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="tag-box tag-box-v2">\r\n<p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</p>\r\n</div>\r\n\r\n<div class="margin-bottom-60">&nbsp;</div>\r\n\r\n<div class="headline">\r\n<h2>Other Team Members</h2>\r\n</div>\r\n\r\n<div class="row team margin-bottom-20">\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/1.jpg" />\r\n<h3>Jack Bour <small>Chief Executive Officer</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/3.jpg" />\r\n<h3>Kate Metus <small>Project Manager</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/2.jpg" />\r\n<h3>Porta Gravida <small>VP of Operations</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/4.jpg" />\r\n<h3>Donec Elit <small>Director, R &amp; D Talent</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<hr />\r\n<div class="row team">\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/2.jpg" />\r\n<h3>Jack Bour <small>Chief Executive Officer</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/1.jpg" />\r\n<h3>Kate Metus <small>Project Manager</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/4.jpg" />\r\n<h3>Porta Gravida <small>VP of Operations</small></h3>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>\r\n\r\n<ul>\r\n	<li>Gut</li>\r\n	<li>Nett</li>\r\n	<li>Lieb</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="col-sm-3">\r\n<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/3.jpg" />\r\n<h3>&nbsp;</h3>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '2014-04-01 11:52:26', '2014-05-19 04:23:36', 1),
(3, 'AGB''s', '<!-- Meta --><!-- CSS Global Compulsory--><!-- CSS Implementing Plugins --><!-- CSS Theme -->\r\n<div class="container">\r\n<div class="row-fluid privacy">\r\n<p>&sect;1 Geltungsbereich: F&uuml;r den Vertragsabschluss zwischen der KochAbo Betriebs GmbH (&bdquo;KochAbo&ldquo;) und ihren Kunden gelten ausschlie&szlig;lich die vorliegenden AGB in der jeweils g&uuml;ltigen Fassung, welche auf der Website www.kochabo.at abgerufen werden k&ouml;nnen.</p>\r\n\r\n<ol>\r\n	<li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>\r\n	<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>\r\n	<li>Praesentium voluptatum deleniti atque corrupti quos</li>\r\n	<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>\r\n	<li>Mentum eleifend enim a feugiat distinctio lor</li>\r\n</ol>\r\n&nbsp;\r\n\r\n<h4>Lorem ipsum dolor integer sed arcu</h4>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>\r\n\r\n<p><strong>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</strong></p>\r\n&nbsp;\r\n\r\n<h4>Molestias excepturi sint</h4>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>\r\n\r\n<ul>\r\n	<li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>\r\n	<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>\r\n	<li>Praesentium voluptatum deleniti atque corrupti quos</li>\r\n	<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>\r\n	<li>Mentum eleifend enim a feugiat distinctio lor</li>\r\n	<li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>\r\n	<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>\r\n	<li>Praesentium voluptatum deleniti atque corrupti quos</li>\r\n	<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>\r\n	<li>Mentum eleifend enim a feugiat distinctio lor</li>\r\n</ul>\r\n\r\n<p><em>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</em></p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', '2014-04-06 12:26:33', '2014-04-06 13:03:55', 1),
(4, 'Impressum', '<!-- Meta --><!-- CSS Global Compulsory--><!-- CSS Implementing Plugins --><!-- CSS Theme --><!--/breadcrumbs--><!--=== End Breadcrumbs ===--><!--=== Content Part ===-->\r\n<div class="container">\r\n<div class="row margin-bottom-30">\r\n<div class="col-md-6 md-margin-bottom-40">\r\n<p>Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone. Lorem sequat ipsum dolor lorem sit amet, consectetur adipiscing dolor elit. Unify is an incredibly beautiful responsive Bootstrap Template for It works on all major web.<br />\r\n<br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">KochAbo Betriebs GmbH</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Strobachgasse 4/6</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">1050 Wien<br />\r\n<br />\r\nTelefon: </span><a href="tel:+4315443900" style="color: rgb(20, 27, 7); text-decoration: underline; font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">01 544 3900</a><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Internet: www.kochabo.at</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">E&minus;Mail: hilfe@kochabo.at</span><br />\r\n<br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Gesch&auml;ftsf&uuml;hrer: Michael Str&ouml;ck, Philipp Stangl</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Firmenbuch: </span><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">FN 386806 h</span><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">&nbsp;(Handelsgericht Wien)</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">UID: ATU67487908&nbsp;</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">DVR: 4011336&nbsp;</span><br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Donec id elit non mi porta gravida</li>\r\n	<li>Corporate and Creative</li>\r\n	<li>Responsive Bootstrap Template</li>\r\n	<li>Elit non mi porta gravida</li>\r\n	<li>Award winning digital agency</li>\r\n</ul>\r\n<br />\r\n<!-- Blockquotes -->\r\n<blockquote>\r\n<p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why.</p>\r\n<small>CEO Jack Bour</small></blockquote>\r\n</div>\r\n\r\n<div class="col-md-6 md-margin-bottom-40">\r\n<div class="responsive-video"><iframe frameborder="0" src="http://player.vimeo.com/video/9679622"></iframe></div>\r\n</div>\r\n</div>\r\n<!--/row--><!-- Meer Our Team --></div>\r\n', '2014-04-06 12:29:39', '2014-04-06 13:00:09', 1),
(5, 'Hilfe', '<!-- CSS Global Compulsory--><!-- CSS Implementing Plugins --><!-- CSS Theme --><!-- CSS Implementing Plugins --><!-- CSS Theme -->\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-9">\r\n<div class="headline">\r\n<h2>General Questions</h2>\r\n</div>\r\n\r\n<div class="panel-group acc-v1 margin-bottom-40" id="accordion">\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapseOne">1. Put a bird on it squid single-origin coffee nulla? </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse in" id="collapseOne">\r\n<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapseTwo">2. Oliva pariatur cliche reprehenderit high life accusamus? </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapseTwo">\r\n<div class="panel-body">\r\n<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>\r\n\r\n<ul>\r\n	<li>Donec id elit non mi porta gravida at eget metus..</li>\r\n	<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>\r\n	<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>\r\n	<li>Donec id elit non mi porta gravida at eget metus..</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapseThree">3. Enim eiusmod high life accusamus terry richardson? </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapseThree">\r\n<div class="panel-body">\r\n<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird.</p>\r\n\r\n<ul>\r\n	<li>Donec id elit non mi porta gravida at eget metus..</li>\r\n	<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapseFour">4. Livil anim keffiyeh helvetica craft beer labore wesde brunch? </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapseFour">\r\n<div class="panel-body">Olif moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapseFive">5. Leggings occaecat craft beer farmto tableraw denim? </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapseFive">\r\n<div class="panel-body">\r\n<p>Keffiyeh anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>\r\n\r\n<ul>\r\n	<li>Donec id elit non mi porta gravida at eget metus..</li>\r\n	<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>\r\n	<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>\r\n	<li>Donec id elit non mi porta gravida at eget metus..</li>\r\n	<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>\r\n	<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapseSix">6. Keffiyeh anim keffiyeh helvetica craft beer labore wesse? </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapseSix">\r\n<div class="panel-body">Helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Brunch sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapseSeven">7. Helvetica craft beer labore wes anderson cred nesciu ntlife richardson? </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapseSeven">\r\n<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!--/acc-v1--><!-- End General Questions --><!-- Other Questions -->\r\n\r\n<div class="headline">\r\n<h2>Other Questions</h2>\r\n</div>\r\n\r\n<div class="panel-group acc-v1" id="accordion-1">\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapse-One">Collapsible Group Item #1 </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse in" id="collapse-One">\r\n<div class="panel-body">\r\n<div class="row">\r\n<div class="col-md-4"><img alt="" class="img-responsive" src="http://127.0.0.1/laravel/kochabo/public/assets/img/new/img5.jpg" /></div>\r\n\r\n<div class="col-md-8">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapse-Two">Collapsible Group Item #2 </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapse-Two">\r\n<div class="panel-body">\r\n<div class="row">\r\n<div class="col-md-8">\r\n<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>\r\n\r\n<ul>\r\n	<li>Donec id elit non mi porta gravida at eget metus..</li>\r\n	<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>\r\n	<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>\r\n</ul>\r\n</div>\r\n\r\n<div class="col-md-4"><img alt="" class="img-responsive" src="http://127.0.0.1/laravel/kochabo/public/assets/img/main/6.jpg" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapse-Three">Collapsible Group Item #3 </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapse-Three">\r\n<div class="panel-body">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading">\r\n<h4><a class="accordion-toggle" href="#collapse-Four">Collapsible Group Item #4 </a></h4>\r\n</div>\r\n\r\n<div class="panel-collapse collapse" id="collapse-Four">\r\n<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!--/acc-v1--><!-- End Other Questions --></div>\r\n<!--/col-md-9-->\r\n\r\n<div class="col-md-3"><!-- Contacts -->\r\n<div class="headline">\r\n<h2>Contacts</h2>\r\n</div>\r\n\r\n<ul>\r\n	<li><a href="#">5B Streat, City 50987 New Town US</a></li>\r\n	<li><a href="#">info@example.com</a></li>\r\n	<li><a href="#">1(222) 5x86 x97x</a></li>\r\n	<li><a href="#">http://www.example.com</a></li>\r\n</ul>\r\n<!-- End Contacts --><!-- Business Hours -->\r\n\r\n<div class="headline">\r\n<h2>Business Hours</h2>\r\n</div>\r\n\r\n<ul>\r\n	<li><strong>Monday-Friday:</strong> 10am to 8pm</li>\r\n	<li><strong>Saturday:</strong> 11am to 3pm</li>\r\n	<li><strong>Sunday:</strong> Closed</li>\r\n</ul>\r\n<!-- End Business Hours --><!-- Info Block -->\r\n\r\n<div class="headline">\r\n<h2>Why we are?</h2>\r\n</div>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>\r\n\r\n<ul>\r\n	<li>Odio dignissimos ducimus</li>\r\n	<li>Blanditiis praesentium volup</li>\r\n	<li>Eos et accusamus</li>\r\n</ul>\r\n<!-- End Info Block --><!-- Social -->\r\n\r\n<div class="magazine-sb-social margin-bottom-20">\r\n<div class="headline headline-md">\r\n<h2>Social Icons</h2>\r\n</div>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n<!-- End Social --></div>\r\n<!--/col-md-3--></div>\r\n<!--/row--></div>\r\n<!--/container--><!--=== End Content Part ===-->\r\n\r\n<p>&nbsp;</p>\r\n', '2014-04-07 12:49:28', '2014-04-11 08:16:26', 1),
(6, 'Sonstiges', '       <div class="tab-v2">\r\n                <ul class="nav nav-tabs">\r\n                    <li class="active"><a href="#home-1" data-toggle="tab">Fotos</a></li>\r\n                    <li><a href="#profile-1" data-toggle="tab">Impressum</a></li>\r\n                    <li><a href="#messages-1" data-toggle="tab">AGB''s</a></li>\r\n                    <li><a href="#settings-1" data-toggle="tab">Hilfe</a></li>\r\n                </ul>                \r\n                <div class="tab-content">\r\n                    <div class="tab-pane active" id="home-1">\r\n                        <h4>Photo Gallery 1</h4>\r\n                        <p>Bilder und ClipArt-Objekte können aus vielen verschiedenen Quellen in ein Dokument eingefügt oder kopiert werden. Sie können bei einem Anbieter von ClipArt-Objekten von einer Website heruntergeladen, von einer Webseite kopiert oder aus einem Ordner, in dem Bilder gespeichert sind, eingefügt werden.<br><br>\r\n\r\nSie können auch die Position eines Bilds oder eines ClipArt-Objekts innerhalb des Texts in einem Dokument mithilfe der Befehle Position und Zeilenumbruch ändern.<br><br>\r\n\r\n TIPP   Wenn Sie ein Bild von einem Scanner oder einer Kamera einfügen möchten, verwenden Sie die im Lieferumfang des Scanners oder der Kamera enthaltene Software, um das Bild auf den Computer zu übertragen. Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum <strong>ivamus imperdiet</strong> condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque <strong>fermentum vivamus</strong> imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac felis consectetur id. Donec eget orci metusvivamus imperdiet.</p>   <br>\r\n\r\n <a class="btn-u" href="../photo_gallery/1" style="float: right">Ansehen</a>\r\n                    </div>\r\n\r\n\r\n\r\n\r\n                    <div class="tab-pane" id="profile-1">\r\n                                        \r\n                        <h4>Unser Impressum</h4>\r\n\r\n                        <p>Bal blabll bla datnot. Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, <strong>ac adipiscing nunc.</strong> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac <strong>interdum ullamcorper.</strong></p><br>\r\n\r\n                        <a class="btn-u" href="../page/4" style="float: right">Weiterlesen</a>\r\n                    </div>\r\n\r\n                    <div class="tab-pane" id="messages-1">\r\n                        <h4>Allgemeine Geschäftsbedingungen</h4>\r\n                        <p><img alt="" class="pull-right rgt-img-margin img-width-200" src="assets/img/main/6.jpg"> <strong>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id.</strong> Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id. Donec eget orci metus, ac adipiscing nunc. <strong>Pellentesque fermentum</strong>, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p><br>\r\n\r\n                        <a class="btn-u" href="../page/3" style="float: right">Weiterlesen</a>\r\n\r\n                    </div>\r\n\r\n                    <div class="tab-pane" id="settings-1">\r\n                        <h4>Hilfe</h4>\r\n                        <p><img alt="" class="pull-right rgt-img-margin img-width-200" src="assets/img/main/1.jpg"> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus Dieser Bereich enthält häufig gestellte Fragen (sogenannte FAQ: "Frequently Asked Questions") und die zugehörigen Antworten zunächst zu den Komponenten der Fachanwendung Abwasser (FAA) des LISA. Diese sogenannten FAQ-Listen dienen der unmittelbaren Unterstützung der Anwender der FAA. <br>Die FAQ-Listen enthalten im Wesentlichen folgende Informationen:<br>\r\n\r\nInformationen zum Funktionsumfang<br>       Hinweise zur Bedienung<br>       Allgemeine Tipps zur Arbeit mit der FAA<br>  Hinweise zu bekannten Fehlern und ggf. Workarounds oder Patches hierzu</p>\r\n\r\n<a class="btn-u" href="../page/5" style="float: right">Weiterlesen</a>\r\n                    </div>\r\n                </div>\r\n            </div>', '2014-04-14 08:22:17', '2014-04-14 08:38:46', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `relationship_id` int(10) unsigned NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Daten für Tabelle `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `file_name`, `title`, `pathto`, `file_size`, `type`, `relationship_id`, `path`) VALUES
(19, 0, 'kleineobstbox.png', 'kleineobstbox', '', 53856, 'PhotoGallery', 84, '/filemanager/userfiles/products/kleineobstbox.png'),
(20, 0, 'gro0sseobsrtbox.png', 'gro0sseobsrtbox', '', 66634, 'PhotoGallery', 83, '/filemanager/userfiles/products/gro0sseobsrtbox.png'),
(21, 0, 'singelbox.png', 'singelbox', '', 58252, 'PhotoGallery', 82, '/filemanager/userfiles/products/singelbox.png'),
(22, 0, 'fuerzweibox.png', 'fuerzweibox', '', 67164, 'PhotoGallery', 85, '/filemanager/userfiles/products/fuerzweibox.png'),
(23, 0, 'familienbox.png', 'familienbox', '', 71124, 'PhotoGallery', 86, '/filemanager/userfiles/products/familienbox.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `photo_galleries`
--

CREATE TABLE IF NOT EXISTS `photo_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=87 ;

--
-- Daten für Tabelle `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `products_id`, `title`, `content`, `created_at`, `updated_at`, `is_published`) VALUES
(3, '', 'Anlage_von_Products', 'Products Photo Gallery', '2014-06-03 13:31:12', '2014-06-03 13:31:12', 0),
(81, '', 'Anlage_von_Products', 'Products Photo Gallery', '2014-06-04 07:09:09', '2014-06-04 07:09:09', 0),
(82, '', 'Anlage_von_Products', 'Products Photo Gallery', '2014-06-04 06:47:22', '2014-06-04 06:47:22', 0),
(83, '', 'Anlage_von_Products', 'Products Photo Gallery', '2014-06-04 06:48:57', '2014-06-04 06:48:57', 0),
(84, '', 'Anlage_von_Products', 'Products Photo Gallery', '2014-06-04 06:59:22', '2014-06-04 06:59:22', 0),
(85, '', 'Anlage_von_Products', 'Products Photo Gallery', '2014-06-12 06:33:20', '2014-06-12 06:33:20', 0),
(86, '', 'Anlage_von_Products', 'Products Photo Gallery', '2014-06-12 06:34:14', '2014-06-12 06:34:14', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `photo_galleries_id` int(11) NOT NULL,
  `product_name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `picurl` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `picangelegt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nr_of_recipes` int(10) unsigned NOT NULL,
  `nr_of_persons` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `productlink` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ust` double NOT NULL,
  `recipetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sku` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `standalone` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_tags_article_id_index` (`type`),
  KEY `articles_tags_tag_id_index` (`nr_of_recipes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=87 ;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `user_id`, `photo_galleries_id`, `product_name`, `description`, `picurl`, `picangelegt`, `type`, `nr_of_recipes`, `nr_of_persons`, `price`, `productlink`, `currency`, `ust`, `recipetype`, `sku`, `standalone`, `updated_at`, `created_at`, `is_published`) VALUES
(82, 0, 82, 'Singlebox', 'Rundum-Sorglos-Paket für 3 köstliche Abendessen ', 'singelbox.png', 'ja', 'KochAbo-Box', 1, 1, '34.90', '', 'EUR', 0, 'Classic', '1', 1, '2014-06-12 06:32:13', '2014-06-04 04:59:32', ''),
(83, 0, 83, 'Große Obstbox', 'ca. 5 kg Obst ab 4 Personen 5 bis 6 Sorten Obst ', 'gro0sseobsrtbox.png', 'ja', 'Obstbox', 1, 1, '24.90', '/obstbox', 'EUR', 0, 'Vegan', '1', 1, '2014-06-12 08:01:40', '2014-06-04 06:48:46', ''),
(84, 0, 84, 'Kleine Obstbox', 'ca. 3 kg Obst für 2 bis 3 Personen 5 bis 6 Sorten Obst ', 'kleineobstbox.png', 'ja', 'Obstbox', 1, 1, '18.90', '', 'EUR', 0, 'Vegan', '1', 1, '2014-06-10 01:25:11', '2014-06-04 06:59:12', ''),
(85, 0, 85, 'Für Zwei', 'Für 2 Personen. Dazu passende tolle Rezepte.', 'fuerzweibox.png', 'ja', 'KochAbo-Box', 1, 1, '41.90', '', 'EUR', 0, 'Classic', '1', 1, '2014-06-12 06:35:50', '2014-06-12 06:33:12', ''),
(86, 0, 86, 'Familienbox', 'Für 3-4 Personen. Dazu passende tolle Rezepte.', 'familienbox.png', 'ja', 'KochAbo-Box', 1, 1, '79.90', '', 'EUR', 0, 'Classic', '1', 1, '2014-06-12 06:36:15', '2014-06-12 06:34:01', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `productsy`
--

CREATE TABLE IF NOT EXISTS `productsy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Daten für Tabelle `productsy`
--

INSERT INTO `productsy` (`id`, `name`, `price`, `image`, `info`, `created_at`, `updated_at`) VALUES
(1, 'product-one', 90, 'http://placehold.it/200x200', 'infomartion of product-one', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'product-two', 100, 'http://placehold.it/200x200', 'infomartion of product-two', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'product-three', 120, 'http://placehold.it/200x200', 'infomartion of product-three', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'product-four', 250, 'http://placehold.it/200x200', 'infomartion of product-four', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'product-five', 240, 'http://placehold.it/200x200', 'infomartion of product-five', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'product-six', 200, 'http://placehold.it/200x200', 'infomartion of product-six', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'product-seven', 170, 'http://placehold.it/200x200', 'infomartion of product-seven', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'product-eight', 100, 'http://placehold.it/200x200', 'infomartion of product-eight', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'product-one', 90, 'http://placehold.it/200x200', 'infomartion of product-one', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'product-two', 100, 'http://placehold.it/200x200', 'infomartion of product-two', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'product-three', 120, 'http://placehold.it/200x200', 'infomartion of product-three', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'product-four', 250, 'http://placehold.it/200x200', 'infomartion of product-four', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'product-five', 240, 'http://placehold.it/200x200', 'infomartion of product-five', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'product-six', 200, 'http://placehold.it/200x200', 'infomartion of product-six', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'product-seven', 170, 'http://placehold.it/200x200', 'infomartion of product-seven', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'product-eight', 100, 'http://placehold.it/200x200', 'infomartion of product-eight', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
  `ranking_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` mediumint(8) unsigned NOT NULL,
  `ranking_value` tinyint(4) NOT NULL,
  `ranking_column` tinyint(3) unsigned NOT NULL,
  `judge_id` tinyint(4) NOT NULL,
  `contest_id` mediumint(8) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(15) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`ranking_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `ranking`
--

INSERT INTO `ranking` (`ranking_id`, `entry_id`, `ranking_value`, `ranking_column`, `judge_id`, `contest_id`, `timestamp`, `ip_address`, `text`) VALUES
(1, 2, 1, 1, 1, 1, '2014-05-11 22:54:06', '1.2.3.4', ''),
(2, 3, 2, 2, 1, 1, '2014-05-12 02:39:51', '1.2.3.4', '8050'),
(3, 4, 0, 1, 1, 1, '2014-05-10 23:56:54', '1.2.3.4', ''),
(4, 5, 1, 1, 1, 1, '2014-05-10 23:56:55', '1.2.3.4', ''),
(5, 1, 0, 0, 1, 1, '2014-05-10 23:55:07', '1.2.3.4', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ga_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `ga_code`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Kochabo', 'ga_code', 'meta_keywords', 'meta_description', '0000-00-00 00:00:00', '2014-04-03 14:19:27');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('home') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Slider', 'home', '2014-04-01 19:08:10', '2014-04-01 19:08:10');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sofunktioniertes`
--

CREATE TABLE IF NOT EXISTS `sofunktioniertes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `bild1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `sofunktioniertes`
--

INSERT INTO `sofunktioniertes` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `bild1`) VALUES
(1, 'Lorem Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:00', 0, ''),
(2, 'Lorem Lipsum 2', 'Praesent non turpis facilisis, tincidunt lectus tristique, aliquet quam. Nulla facilisi. Mauris rutrum suscipit elit in tincidunt. Suspendisse potenti. Curabitur sed metus quis arcu aliquam adipiscing. Praesent ultrices nisl suscipit ante suscipit aliquet. Sed enim diam, dictum eget cursus sit amet, porta mollis felis. Donec vestibulum varius felis vel tristique. Donec in adipiscing tortor. Vestibulum dignissim scelerisque ante at aliquet. Cras ultrices metus convallis mi porttitor fermentum.Suspendisse nec velit ut est tristique placerat. Vivamus venenatis nunc id mi facilisis congue. Sed quis ipsum euismod diam aliquet venenatis. Nam nunc diam, tristique at placerat at, ullamcorper ut nunc. Aenean et vulputate augue, nec blandit ligula. Sed venenatis id dolor eu pharetra. Vestibulum tempus justo vitae nunc pellentesque vehicula. Aenean convallis ante vel justo porttitor hendrerit.Etiam sodales est ac porttitor hendrerit. Nullam vulputate arcu fermentum tincidunt gravida. Nunc pulvinar ligula vel justo tincidunt, eget venenatis sapien faucibus. Nam lobortis cursus dolor, sed vehicula sem tempus eget. Duis arcu tellus, vehicula at dapibus id, aliquam eu eros. Aenean eget nibh nunc. Fusce vitae urna in lorem iaculis tincidunt. Aliquam erat volutpat. Sed feugiat odio vitae varius pretium. Nam mattis augue ac lectus pulvinar, quis tempus lacus ornare. Sed nec eros tellus. Cras placerat erat eu odio congue, eget elementum massa aliquam. Ut congue fermentum ante a accumsan.Quisque tincidunt risus et erat varius convallis. Nulla faucibus vehicula libero eu elementum. Mauris elementum imperdiet dolor at faucibus. Praesent luctus convallis condimentum. Nam quis dolor interdum, malesuada sapien rhoncus, bibendum erat. Pellentesque aliquet est in nulla facilisis cursus. Aliquam diam augue, tincidunt eget purus a, tincidunt facilisis neque. Vestibulum hendrerit congue.', 'lorem-lipsum-2', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(3, 'Lorem Lipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elit est, gravida ac arcu et, molestie commodo neque. Proin ut enim consectetur, varius ligula non, viverra diam. Nullam ut sollicitudin libero, nec pretium metus. Nulla sit amet iaculis libero. Maecenas pharetra venenatis libero nec facilisis. Proin nibh eros, tincidunt sed venenatis et, viverra quis ipsum. Ut at viverra lacus, quis convallis tortor. Ut laoreet euismod ante eget mollis. Ut eu sem neque. Aenean accumsan, velit sit amet imperdiet pharetra, magna tortor venenatis nisl, congue condimentum risus nisl eu leo. Integer vestibulum odio at leo euismod, id interdum dui molestie. Praesent laoreet rhoncus nisl quis blandit. Nullam sit amet porttitor nunc. Nam consectetur ullamcorper leo, nec condimentum nisi aliquam interdum. Phasellus sagittis, diam et imperdiet porttitor, erat nisi scelerisque risus, id imperdiet massa felis vel libero. Integer vel sem eu elit fringilla malesuada.Nam consectetur orci quis magna lacinia, in commodo enim ultrices. Cras facilisis feugiat enim quis tempus. Maecenas interdum nibh ut dapibus tempor. Morbi dolor risus, pulvinar nec malesuada nec, euismod ut nisl. Pellentesque pulvinar dictum condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent varius nisl vitae sapien pharetra blandit. In egestas magna non nulla porta, sed hendrerit augue congue. Duis dui felis, sodales eu pharetra eget, viverra in magna. Aenean in adipiscing lorem. Nulla orci ipsum, pharetra ut egestas in, vehicula et justo. Vivamus euismod dui a nulla ornare, at iaculis sem consectetur.', 'lorem-lipsum-3', '2014-04-01', '2014-04-01 15:52:26', '2014-04-09 17:54:01', 0, ''),
(5, 'Den perfekt passenden Wein mit dazu bestellen?', '<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Du erh&auml;ltst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualit&auml;tswein zu einem Gericht mit dazu. <strong>Zum Beispiel n&auml;chste Woche mit dabei:</strong></div>\r\n\r\n<h3 style="color:rgb(152, 194, 37); font-style:normal; text-align:start">KROISS Riesling Hackenberg 2012</h3>\r\n\r\n<div style="color: rgb(87, 85, 86); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-align: justify;">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n<br />\r\n<br />\r\n<img alt="" src="http://127.0.0.1/laravel/kochabo/public/uploads/obstbox.jpg" style="height:248px; width:440px" /></div>\r\n', 'den-perfekt-passenden-wein-mit-dazu-bestellen', '2014-04-01', '2014-04-01 17:08:41', '2014-04-09 17:24:25', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/ckeditor/plugins/doksoft_uploader/userfiles/3_4.jpg" /></p>\r\n'),
(6, 'Kostenlose Lieferung', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial; font-size:13px">Der KROISS Riesling zum Stremellachs mit Gem&uuml;se-Bandnudeln ist eine ausgezeichnete Wahl! In diesem leichten Wei&szlig;en vereinen sich gelber Pfirsich, Ananas und saftiges Steinobst. Seine Feuersteinmineralik, die sch&ouml;ne Frische und das tolle S&auml;urespiel sind beeindruckend knackig und klar.</span><br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:left"><strong>Bestell einfach online</strong> deine KochAbo-Box mit <strong>3 oder 5</strong> k&ouml;stlichen und gesunden <strong>Rezepten</strong>. Du bestimmst f&uuml;r <strong>wie viele Personen (1, 2 oder 4)</strong> du kochen m&ouml;chtest, dann bekommst du alle Rezepte und die Zutaten in der richtigen Menge direkt nach Hause.</p>\r\n\r\n<p style="text-align:left">Du kannst dir die KochAbo-Box w&ouml;chentlich oder alle zwei Wochen liefern lassen, und <strong>jederzeit pausieren oder stornieren</strong>.</p>\r\n\r\n<p style="text-align:left">Wir garantieren 100% Zufriedenheit - das gilt sowohl f&uuml;r unsere Produkte, als auch Lieferung und Kundenservic</p>\r\n', 'kostenlose-lieferung', '2014-04-02', '2014-04-02 16:38:27', '2014-04-09 17:32:26', 1, '<p><img src="\r\n\r\n\r\n\r\n\r\nhttp://127.0.0.1/laravel/kochabo/public/uploads/doksoft_uploader/13.jpg" /></p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Daten für Tabelle `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Rezept', 'rezept', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(2, 'Zubereitung', 'zubereitung', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(3, 'Feinkost', 'feinkost', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(4, 'Fischgericht', 'fischgericht', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(5, 'MongoDB', 'mongodb', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(6, 'Kalorienarm', 'kalorienarm', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(7, 'Vitamine', 'vitamine', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(8, 'Alkoholisch', 'alkoholisch', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(9, 'Getränk', 'getränk', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(10, 'Cocktail', 'cocktail', '2014-04-01 15:52:26', '2014-04-01 15:52:26'),
(11, 'MongoDB f', 'mongodb-f', '2014-05-06 16:08:45', '2014-05-06 16:08:45');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_float` float(10,2) NOT NULL,
  `test_decimal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hl_ueberuns` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ct_ueberuns` text COLLATE utf8_unicode_ci NOT NULL,
  `hl_rezepte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ct_rezepte` text COLLATE utf8_unicode_ci NOT NULL,
  `hl_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ct_contact` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `tests`
--

INSERT INTO `tests` (`id`, `hl_ueberuns`, `ct_ueberuns`, `hl_rezepte`, `ct_rezepte`, `hl_contact`, `ct_contact`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`) VALUES
(1, 'aaa', '<p>ct_ueberuns1</p>\r\n', 'hl_rezepte1', '<p>ct_rezepte2</p>\r\n', 'hl_contact', '<p>ct_contact</p>\r\n', 'WERT', '2014-04-01', '2014-04-01 15:52:26', '2014-04-17 09:32:37', 1),
(2, 'maukaujohn@foo.com', 'ct_ueberuns2', 'hl_rezepte2', '\r\nct_rezepte2', 'hl_contact', '\r\nct_contact	', 'WERT', '2014-04-01', '2014-04-01 15:52:26', '2014-04-16 16:38:30', 1),
(3, 'maukaujohn@foo.com', 'ct_ueberuns3', 'hl_rezepte3', '\r\nct_rezepte2', 'hl_contact', '\r\nct_contact	', 'WERT', '2014-04-01', '2014-04-01 15:52:26', '2014-04-16 16:38:30', 1),
(4, 'maukaujohn@foo.com', 'ct_ueberuns4', 'hl_rezepte4', '\r\nct_rezepte2', 'hl_contact', '\r\nct_contact	', 'WERT', '2014-04-01', '2014-04-01 15:52:26', '2014-04-16 16:38:30', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Daten für Tabelle `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, NULL, 0, 0, 0, NULL, NULL, NULL),
(2, 2, NULL, 0, 0, 0, NULL, NULL, NULL),
(3, 3, NULL, 0, 0, 0, NULL, NULL, '2014-06-09 22:46:54'),
(4, 4, NULL, 0, 0, 0, NULL, NULL, NULL),
(5, 5, NULL, 0, 0, 0, NULL, NULL, NULL),
(6, 6, NULL, 0, 0, 0, NULL, NULL, NULL),
(7, 7, NULL, 0, 0, 0, NULL, NULL, NULL),
(8, 8, NULL, 0, 0, 0, NULL, NULL, NULL),
(9, 20, NULL, 0, 0, 0, NULL, NULL, NULL),
(10, 21, NULL, 0, 0, 0, NULL, NULL, NULL),
(11, 37, NULL, 0, 0, 0, NULL, NULL, NULL),
(12, 38, NULL, 0, 0, 0, NULL, NULL, NULL),
(13, 40, NULL, 0, 0, 0, NULL, NULL, NULL),
(14, 41, NULL, 0, 0, 0, NULL, NULL, NULL),
(15, 34, NULL, 0, 0, 0, NULL, NULL, NULL),
(16, 35, NULL, 0, 0, 0, NULL, NULL, NULL),
(17, 36, NULL, 0, 0, 0, NULL, NULL, NULL),
(18, 39, NULL, 0, 0, 0, NULL, NULL, NULL),
(19, 42, NULL, 0, 0, 0, NULL, NULL, NULL),
(20, 43, NULL, 0, 0, 0, NULL, NULL, NULL),
(21, 44, NULL, 0, 0, 0, NULL, NULL, NULL),
(22, 45, NULL, 0, 0, 0, NULL, NULL, NULL),
(23, 46, NULL, 0, 0, 0, NULL, NULL, NULL),
(24, 47, NULL, 0, 0, 0, NULL, NULL, NULL),
(25, 48, NULL, 0, 0, 0, NULL, NULL, NULL),
(26, 49, NULL, 0, 0, 0, NULL, NULL, NULL),
(27, 50, NULL, 0, 0, 0, NULL, NULL, NULL),
(28, 51, NULL, 0, 0, 0, NULL, NULL, NULL),
(29, 52, NULL, 0, 0, 0, NULL, NULL, NULL),
(30, 53, NULL, 0, 0, 0, NULL, NULL, NULL),
(31, 54, NULL, 0, 0, 0, NULL, NULL, NULL),
(32, 55, NULL, 0, 0, 0, NULL, NULL, NULL),
(33, 56, NULL, 0, 0, 0, NULL, NULL, NULL),
(34, 58, NULL, 0, 0, 0, NULL, NULL, NULL),
(35, 57, NULL, 3, 0, 0, '2014-04-28 05:25:07', NULL, NULL),
(36, 59, NULL, 1, 0, 0, '2014-04-23 21:35:33', NULL, NULL),
(37, 60, NULL, 0, 0, 0, NULL, NULL, NULL),
(38, 61, NULL, 0, 0, 0, NULL, NULL, NULL),
(39, 62, NULL, 0, 0, 0, NULL, NULL, NULL),
(40, 65, NULL, 0, 0, 0, NULL, NULL, NULL),
(41, 67, NULL, 0, 0, 0, NULL, NULL, NULL),
(42, 68, NULL, 0, 0, 0, NULL, NULL, NULL),
(43, 84, NULL, 0, 0, 0, NULL, NULL, NULL),
(44, 85, NULL, 0, 0, 0, NULL, NULL, NULL),
(45, 86, NULL, 0, 0, 0, NULL, NULL, NULL),
(46, 87, NULL, 0, 0, 0, NULL, NULL, NULL),
(47, 88, NULL, 0, 0, 0, NULL, NULL, NULL),
(48, 89, NULL, 0, 0, 0, NULL, NULL, NULL),
(49, 90, NULL, 0, 0, 0, NULL, NULL, NULL),
(50, 91, NULL, 0, 0, 0, NULL, NULL, NULL),
(51, 92, NULL, 0, 0, 0, NULL, NULL, NULL),
(52, 93, NULL, 0, 0, 0, NULL, NULL, NULL),
(53, 94, NULL, 0, 0, 0, NULL, NULL, NULL),
(54, 17, NULL, 0, 0, 0, NULL, NULL, NULL),
(55, 18, NULL, 0, 0, 0, NULL, NULL, NULL),
(56, 19, NULL, 0, 0, 0, NULL, NULL, NULL),
(57, 22, NULL, 0, 0, 0, NULL, NULL, NULL),
(58, 23, NULL, 0, 0, 0, NULL, NULL, NULL),
(59, 24, NULL, 0, 0, 0, NULL, NULL, NULL),
(60, 25, NULL, 0, 0, 0, NULL, NULL, NULL),
(61, 26, NULL, 0, 0, 0, NULL, NULL, NULL),
(62, 27, NULL, 0, 0, 0, NULL, NULL, NULL),
(63, 31, NULL, 0, 0, 0, NULL, NULL, NULL),
(64, 32, NULL, 0, 0, 0, NULL, NULL, NULL),
(65, 33, NULL, 0, 0, 0, NULL, NULL, NULL),
(66, 70, NULL, 0, 0, 0, NULL, NULL, NULL),
(67, 71, NULL, 0, 0, 0, NULL, NULL, NULL),
(68, 72, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` text COLLATE utf8_unicode_ci,
  `date_of_birth` date DEFAULT '0000-00-00',
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `default_billing_address` int(10) NOT NULL,
  `default_shipping_address` int(10) NOT NULL,
  `last_name` text COLLATE utf8_unicode_ci,
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `date_of_birth`, `telephone`, `gender`, `default_billing_address`, `default_shipping_address`, `last_name`, `status`, `created_at`, `updated_at`, `is_published`) VALUES
(1, 'admin@admin.com', '$2y$10$NkEaWuEFQTUBHbgEkrT9zeMsx/eePq7zq/8QU/EeTbRLucyfP3GVm', NULL, 1, NULL, NULL, '2014-04-19 02:14:45', '$2y$10$rxvjqmdYYZT7VBarfa2/s.MK/vP74qFUPMZUHukjKiDz0T2hAoXMm', NULL, 'Bernd', '0000-00-00', '06604258008', '1', 2, 3, 'Obendorfer', '0', '2014-04-17 14:56:15', '2014-06-09 05:07:57', 0),
(3, 'bernd.obendorfer@chello.at', '$2y$10$8AOyQXE.bt4am8Y77Z2WCOOevUxMwZXxG5RV6JazNWi1HAIVjL3wq', NULL, 1, 'Myu4J2vqYDTVIqfoad3CZQCMYnkWisrCyXwVk5IvHV', NULL, '2014-06-12 07:10:50', '$2y$10$Admh8V8Aig0ydMWMH8EgQe1OddhwMKb2DrQNAKU8V8t0HvJiuLfci', NULL, 'Bernd', '1970-01-01', '0660645949459', 'Herr', 0, 0, 'Obendorfer', 'admin', '2014-04-19 02:02:36', '2014-06-12 07:10:50', 0),
(70, '3trasddddhkiller@gmail.com', '$2y$10$ibozmW446pmqfaSElCoFaeEqLrpC/qO.epNbwwE04Ltxonwx2H.eS', NULL, 1, '8a4gcIsh8NS4XL1Y2VMAuZmBwdlf3ZpceOEByFo5ar', NULL, NULL, NULL, NULL, 'Bernd', '1972-01-12', '0660666465565', 'Herr', 0, 0, 'Obendorfer', '', '2014-06-11 06:05:17', '2014-06-11 06:05:17', 0),
(71, '3trashkiller@gmail.com', '$2y$10$mr9J.bN/OKjR4D6NojBcnewvGuF0icR59yGc0gB4xjKyICZrAoAsq', NULL, 1, '1n6yUU3uZXtq86TCerOHcXr6fvsCOrEc1zPyNdKxmi', NULL, NULL, NULL, NULL, 'Bernd', '1972-01-12', '0660666465565', 'Herr', 0, 0, 'Obendorfer', '', '2014-06-11 06:06:12', '2014-06-11 06:06:12', 0),
(72, 'gast@kochabo.com', '$2y$10$9/G9H.LLGboYaQ6lQWhOF.1QqKZ/gHRQDpjCFahCya4BkiUlNwnJm', NULL, 1, 'qwGHXiuRVr0v4LbQZFQkBjX7VIHoG1MhvABo8rcLFx', NULL, '2014-06-11 08:41:12', '$2y$10$wkI06u.fBQ2ZNxvnVgOM2.PZ32E9SNrtfROwWacQpfR57Osc9kiuK', NULL, 'Gast', '2014-06-11', '0660', 'Herr', 0, 0, 'Gast', '', '2014-06-11 08:38:10', '2014-06-11 08:41:12', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usersnewsxxxxxxx`
--

CREATE TABLE IF NOT EXISTS `usersnewsxxxxxxx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` text COLLATE utf8_unicode_ci,
  `last_name` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `produkt` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `produkttyp` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `price_produkt` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `obstbox` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `price_adobstbox` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `wein` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `price_adwein` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `summe` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `terms` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Daten für Tabelle `usersnewsxxxxxxx`
--

INSERT INTO `usersnewsxxxxxxx` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`, `produkt`, `produkttyp`, `price_produkt`, `obstbox`, `price_adobstbox`, `wein`, `price_adwein`, `summe`, `terms`, `status`) VALUES
(1, 'admin@admin.comx', '$2y$10$NkEaWuEFQTUBHbgEkrT9zeMsx/eePq7zq/8QU/EeTbRLucyfP3GVm', NULL, 1, NULL, NULL, '2014-04-19 06:14:45', '$2y$10$rxvjqmdYYZT7VBarfa2/s.MK/vP74qFUPMZUHukjKiDz0T2hAoXMm', NULL, 'Berndx', 'obendorfer', '2014-04-17 18:56:15', '2014-04-24 21:18:41', '0', '0', '0', '', '0', '', '0', '', '', '0'),
(2, 'user@user.com', '$2y$10$zmvpoecmzvkd2xpcQVGx6O6pdTk52r6BPGVyLU20WJBKA.h2fQb3C', NULL, 1, NULL, NULL, '2014-04-17 19:00:06', '$2y$10$sPLU54S3DlArVLx9wYBNHeiGDuv4Jnuq/FvqATNqMPKZBRT4RZRg6', NULL, 'user', 'schorki', '2014-04-17 18:56:15', '2014-04-19 13:09:31', '0', '0', '0', '', '0', '', '0', '', '', '0'),
(57, 'richard@richard.at', '$2y$10$HjuQXFuxZtaGSTtY1lw1Ce5SgZLyizq6lq1OLezaCkeg1zASdHyp.', NULL, 1, 'qMD7LFvDg1fqvhppb0VMXiG3xOLtTlozQxs48a6LRg', NULL, NULL, NULL, NULL, 'Richhard', 'L&ouml;wenherz', '2014-04-24 05:47:20', '2014-04-24 05:47:20', '', '', '', '', '', '', '', '0.00', 'yes', ''),
(58, 'michael.stroeck@kochabo.com', '$2y$10$DJd.FVhBfNWsFFe0har6E.kEGAdSJuFVy8GxMhAqYpGRZMPX05WB.', NULL, 1, 'yeB0Ur2u2tTsYWDBanJQCP9Xw64efOJIWqJKrQVfAV', NULL, '2014-04-24 06:57:49', '$2y$10$r1Tsu8LkZLoHyR6QdQCfW.KrYfVAZPVw.G4zazyCYVcwTPn1tIxGK', NULL, 'Michael', 'Str&ouml;ck', '2014-04-24 06:40:19', '2014-04-24 06:57:49', '', '', '', '', '', '', '', '0.00', 'yes', ''),
(61, 'bernd.obendorfer@gmail.com', '$2y$10$pZasLGTGoXZ3ejSO1s5YTuJDsqOtl89uFlc95L0tYcYpUPkVo6.Ce', NULL, 1, '1bFxrxSmxTNwU2aatxaUdc7smDKiYlJssq4upmfIlm', NULL, '2014-04-24 07:18:43', '$2y$10$BvDJL.uYalW8/rUaYty76OWIqGx9my6MHwShQgkophDzibTuCWSVm', NULL, 'Bernd', 'Obendorfer', '2014-04-24 07:18:29', '2014-04-24 07:18:43', 'F&uuml;r Zwei', 'Classic + 3 Rezepte', '41.90', 'Obstbox', '12.90', 'Wein', '9.90', '41.90', 'yes', ''),
(62, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, '', '', '2014-04-25 07:46:06', '2014-04-25 07:46:06', '', '', '', '', '', '', '', '', '', ''),
(63, 'achtungddta@dd.at', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'asdfas', 'asdfads', '2014-04-25 07:46:19', '2014-04-25 07:46:19', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 2),
(61, 2),
(72, 2),
(85, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
