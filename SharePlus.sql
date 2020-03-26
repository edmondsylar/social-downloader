-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2019 a las 21:23:19
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_browser_graphics`
--

CREATE TABLE `admin_browser_graphics` (
  `Browser` varchar(25) NOT NULL,
  `Access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_device_graphics`
--

CREATE TABLE `admin_device_graphics` (
  `Device` varchar(25) NOT NULL,
  `Access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_graphics`
--

CREATE TABLE `admin_graphics` (
  `graphicsID` int(11) NOT NULL,
  `look` date NOT NULL,
  `Visits` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `chat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_graphics_countries`
--

CREATE TABLE `admin_graphics_countries` (
  `Countries` varchar(255) NOT NULL,
  `Results` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_graphic_visits_month`
--

CREATE TABLE `admin_graphic_visits_month` (
  `sessionIP` char(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audio_download_list`
--

CREATE TABLE `audio_download_list` (
  `id` int(11) NOT NULL,
  `session` varchar(255) CHARACTER SET utf8 NOT NULL,
  `folders_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `file_name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `time_erase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comments` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `key_comments` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email` varchar(120) CHARACTER SET utf8 NOT NULL,
  `time` varchar(20) NOT NULL,
  `ip_user` varchar(20) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `name`, `value`) VALUES
(1, 'theme', 'default'),
(2, 'censored_words', ''),
(3, 'title', 'shareplus - videos'),
(4, 'name', 'Shareplus'),
(5, 'image', 'png'),
(6, 'email_web', 'chuy@gmail.com'),
(7, 'description', 'description'),
(8, 'validation', 'off'),
(9, 'recaptcha', 'off'),
(10, 'recaptcha_key', ''),
(11, 'language', 'english'),
(12, 'terms_of_use', '&lt;h3&gt;&lt;strong&gt;Terms of use&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;strong&gt;&lt;br data-mce-bogus=&quot;1&quot;&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1.&lt;/strong&gt; Terms By accessing SharePlus hereinafter referred to as a website, you agree to comply with these Terms and Conditions of Website Use, all applicable laws and regulations and agree that you are responsible for compliance with applicable local laws.&lt;/p&gt;&lt;p&gt;If you do not agree with any of these terms, it is prohibited to use or access this site.&lt;/p&gt;&lt;p&gt;The materials contained on this site are protected by the applicable laws of copyright and trademarks.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;2.&lt;/strong&gt; Use License Permission is granted to temporarily download a copy of the materials (information or software) on the website for personal and non-commercial use.&lt;/p&gt;&lt;p&gt;This is the granting of a license, not a transfer of title, and under this license you can not:&lt;/p&gt;&lt;p&gt;modify or copy the material;&lt;/p&gt;&lt;p&gt;use the material for any commercial purpose, or to show to the public (commercial or non-commercial);&lt;/p&gt;&lt;p&gt;attempt to modify or reverse engineer the system included in the website;&lt;/p&gt;&lt;p&gt;remove any copyright information or notes from the owner on the materials;&lt;/p&gt;&lt;p&gt;or transfer the material to another person or &quot;copy&quot; the material to another server.&lt;/p&gt;&lt;p&gt;This license will terminate automatically if you violate any of these restrictions and may be terminated by the website at any time.&lt;/p&gt;&lt;p&gt;Upon completion of the viewing of these materials or upon completion of this license, you must destroy any downloaded material in your possession, either in electronic or printed format.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;3.&lt;/strong&gt; Exemption from Liability A.The materials on the website are provided &quot;as is&quot;.&lt;/p&gt;&lt;p&gt;The website makes no warranties, express or implied, and hereby denies and denies all other warranties, including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, intellectual property infringement or other breach of rights.&lt;/p&gt;&lt;p&gt;In addition, the website does not guarantee or make any representation with respect to the accuracy, probable results or reliability of the use of the materials on its Internet website or otherwise related to such materials or any site linked to this site. . B.We do not exercise or promote the infringement of copyright.&lt;/p&gt;&lt;p&gt;All videos on YouTube are the copyright of their respective owners and any copyright infringement resulting from their transfer to other websites such as Facebook, will be the responsibility of the user who performs such action.&lt;/p&gt;&lt;p&gt;We also do not store videos or other material on our servers, the links are cached and after 3 hours they are destroyed, even if the users have not made the download.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;4.&lt;/strong&gt; Limitations In no case shall the website or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profits, or due to business interruption) arising from the use or inability to use the materials, even if the Website or an authorized representative of the website has been notified orally or in writing of the possibility of such damage.&lt;/p&gt;&lt;p&gt;Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;5.&lt;/strong&gt; Reviews and Errata The materials that appear on the website may include technical, typographical or photographic errors.&lt;br&gt;The website does not guarantee that any of the materials on its website are accurate, complete or current.&lt;br&gt;The website may make changes to the materials contained on its website at any time without prior notice.&lt;br&gt;The website does not commit, however, to update the materials.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;6.&lt;/strong&gt; Links The website has not reviewed all the sites linked to its Internet website and is not responsible for the contents of such linked sites.&lt;br&gt;The inclusion of any link does not imply endorsement by the website.&lt;br&gt;The use of any linked website is at the risk of the user.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;7.&lt;/strong&gt; Modifications to the Conditions of use of the Site The website may revise these terms of use at any time without prior notice.&lt;/p&gt;&lt;p&gt;By using this website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;8.&lt;/strong&gt; Law that governs us Any claim related to the website will be governed by the laws of the Republic of India without regard to its conflict of laws provisions.&lt;/p&gt;&lt;p&gt;General terms and conditions applicable to the use of a website.&lt;/p&gt;'),
(13, 'privacy_policy', '&lt;h3 style=&quot;text-align: left;&quot; data-mce-style=&quot;text-align: left;&quot;&gt;Privacy Policy&lt;/h3&gt;&lt;p&gt;What information do we collect and store?&lt;/p&gt;&lt;p&gt;We do not ask or store any type of user information We use cookies?&lt;/p&gt;&lt;p&gt;We use cookies eventually but on SSL secure protocol.&lt;/p&gt;&lt;p&gt;Sell ​​or deliver information to third parties? We do not sell or negotiate or transfer your personal identification to third parties.&lt;/p&gt;&lt;p&gt;It does not include business partners that intervene in the operation of the website, or serve you, since these third parties have agreed to keep this information confidential.&lt;/p&gt;&lt;p&gt;We will release your information when we believe it is appropriate to abide by the law, strengthen our policies, or protect our and others rights, property, or safety. However, visitor information is never provided to third parties for marketing, advertising or other uses.&lt;/p&gt;&lt;p&gt;Privacy Policies only on the Internet These privacy policies apply only to the information collected on our website.&lt;/p&gt;&lt;p&gt;Your consent By browsing and using the services of our website, you adhere to our privacy policy.&lt;/p&gt;&lt;p&gt;Changes to our Privacy Policies If we make changes to our privacy policies, we will update those changes on this page.&lt;/p&gt;&lt;p&gt;Contact Us If you have any questions about this privacy policy, please inform us using this form.&lt;/p&gt;'),
(14, 'help', ''),
(15, 'email', ''),
(16, 'facebook', ''),
(17, 'twitter', ''),
(18, 'yt_api', ''),
(19, 'seo_link', 'on'),
(20, 'comment_system', 'default'),
(21, 'ads_one', '&lt;img src=&quot;https://i.imgur.com/OcYS2Ju.jpg&quot;&gt;&lt;/img&gt;'),
(22, 'ads_two', '&lt;img src=&quot;https://i.imgur.com/OcYS2Ju.jpg&quot;&gt;&lt;/img&gt;'),
(23, 'Languages_panel', 'en'),
(24, 'email', 'user@mail.com'),
(25, 'password', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'smtp_host', ''),
(27, 'smtp_username', ''),
(28, 'smtp_password', ''),
(29, 'smtp_encryption', 'TLS'),
(30, 'smtp_port', ''),
(31, 'verfiti_login', 'd4OXtphkp');
(32, 'copyright', '&lt;h2&gt;Copyright (DMCA)&lt;/h2&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Shareplus respects copyright of all works, and doesn’t allow users to use others’ videos for anything that is against the copyright protection terms and conditions. Any kind of copyright infringement is not allowed on Shareplus.com, and we blacklist all the copyrighted contents from displaying in the search results.&lt;/p&gt;&lt;p&gt;Shareplus complies with the Digital Millennium Copyright Act (DMCA) and promptly suspends Content from access when properly notified.&lt;/p&gt;&lt;p&gt;To file a copyright infringement notification with Shareplus, you will need to send an email that includes substantially the information required by and stated in Section 512(c)(3) of the Digital Millennium Copyright Act.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Required information:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1. Identify yourself as either: a) The owner of a copyrighted work(s), or b) A person &quot;authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.&quot; Include a physical or electronic signature.&lt;/p&gt;&lt;p&gt;2. Identify the copyrighted work claimed to have been infringed.&lt;/p&gt;&lt;p&gt;3. Identify the Content that is claimed to be infringing or to be the subject of the infringing activity and that is to be suspended or access to which is to be disabled, as well as information reasonably sufficient to permit Shareplus to locate the Content. Providing URLs are required to help us locate the Content.&lt;/p&gt;&lt;p&gt;4. Provide contact information that is reasonably sufficient to permit us to contact you, such as an address, telephone number, and a valid email address.&lt;/p&gt;&lt;p&gt;5. State that you have a good faith belief that use of the Content in the manner complained of is not authorized by the copyright owner, its agents, or the law.&lt;/p&gt;&lt;p&gt;6. State that the information in the notification is accurate and under penalty of perjury the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Upon receipt of valid notification, as required by law, we will suspend access to Content from our website.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;  &lt;/strong&gt;&lt;/p&gt;&lt;p&gt;If you have any questions, please contact us at&amp;nbsp;&lt;a href=&quot;mailto:bitdownloader@protonmail.com&quot; data-mce-href=&quot;mailto:bitdownloader@protonmail.com&quot;&gt;user@mail.com&lt;/a&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platform_media`
--

CREATE TABLE `platform_media` (
  `id` int(11) NOT NULL,
  `key_plugin` varchar(11) NOT NULL,
  `platform` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Data_Update` text CHARACTER SET utf8 NOT NULL,
  `version` varchar(255) NOT NULL,
  `Author` varchar(120) CHARACTER SET utf8 NOT NULL,
  `icon` text CHARACTER SET utf8 NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `url_line` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platform_media`
--

INSERT INTO `platform_media` (`id`, `key_plugin`, `platform`, `url`, `Data_Update`, `version`, `Author`, `icon`, `active`, `url_line`) VALUES
(1, 'A2', 'Instagram', 'instagram-videos-downloader', '18-06-2019', '1.4', 'Zhareiv', 'https://i.imgur.com/AGsW88w.png', 1, '\"url_line\":\"/instagram.com/([a-z1-9.-_]+)/\";'),
(2, 'A1', 'YouTube', 'youtube-videos-downloader', '25-08-2019', '2.0', 'zhareiv', 'https://i.imgur.com/BuByWE1.png', 1, '\"url_line\":\"/youtube.com(.+)v=([^&]+)/\"; \"url_line\":\"/m.youtube.com(.+)v=([^&]+)/\"; \"url_line\":\"/youtu.be/([a-z1-9.-_]+)/\"; \"url_line\":\"/youtube.com/embed/([a-z1-9.-_]+)/\";'),
(3, 'A22', 'bandcamp', 'bandcamp-videos-downloader', '10-07-2019', '1.0', 'Zhareiv', 'https://i.imgur.com/uqyh5zc.png', 1, '\"url_line\":\"/([a-z1-9.-_]+)(.+)bandcamp.com/track/([a-z1-9.-_]+)/\";'),
(4, 'A15', 'Pinterest', 'pinterest-videos-downloader', '24-09-2019', '1.6', 'zhareiv', 'https://i.imgur.com/JeNBfzX.png', 1, '\"url_line\":\"/pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.com.mx/pin/([^&]+)/\"; \"url_line\":\"/gr.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/in.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.ie/pin/([^&]+)/\"; \"url_line\":\"/pinterest.it/pin/([^&]+)/\"; \"url_line\":\"/pinterest.ch/pin/([^&]+)/\"; \"url_line\":\"/cz.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/id.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.es/pin/([^&]+)/\"; \"url_line\":\"/pinterest.ca/pin/([^&]+)/\"; \"url_line\":\"/pinterest.co.uk/pin/([^&]+)/\"; \"url_line\":\"/pinterest.ru/pin/([^&]+)/\"; \"url_line\":\"/nl.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/br.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/no.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/tr.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.com.au/pin/([^&]+)/\"; \"url_line\":\"/pinterest.at/pin/([^&]+)/\"; \"url_line\":\"/pl.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.fr/pin/([^&]+)/\"; \"url_line\":\"/ro.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.de/pin/([^&]+)/\"; \"url_line\":\"/pinterest.dk/pin/([^&]+)/\"; \"url_line\":\"/pinterest.nz/pin/([^&]+)/\"; \"url_line\":\"/fi.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/hu.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.jp/pin/([^&]+)/\"; \"url_line\":\"/pinterest.pt/pin/([^&]+)/\"; \"url_line\":\"/ar.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.co.kr/pin/([^&]+)/\"; \"url_line\":\"/pinterest.se/pin/([^&]+)/\"; \"url_line\":\"/sk.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.cl/pin/([^&]+)/\"; \"url_line\":\"/co.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/za.pinterest.com/pin/([^&]+)/\"; \"url_line\":\"/pinterest.ph/pin/([^&]+)/\"; \"url_line\":\"/pin.it/([^&]+)/\";'),
(5, 'A10', 'WWE', 'wwe-videos-downloader', '18-06-2019', '1.4', 'zhareiv', 'https://i.imgur.com/Oq39n4Y.png', 1, '\"url_line\":\"/wwe.com/videos/([a-z1-9.-_]+)/\"; \"url_line\":\"/de.wwe.com/videos/([a-z1-9.-_]+)/\"; \"url_line\":\"/espanol.wwe.com/videos/([a-z1-9.-_]+)/\"; \"url_line\":\"/arabic.wwe.com/videos/([a-z1-9.-_]+)/\";'),
(6, 'A23', 'Break', 'Break-videos-downloader', '10-07-2019', '1.0', 'Zhareiv', 'https://i.imgur.com/ddlCeYq.png', 1, '\"url_line\":\"/break.com/([a-z1-9.-_]+)/\";'),
(7, 'A5', 'FaceBook', 'facebook-videos-downloader', '25-07-2019', '1.6', 'zhareiv', 'https://i.imgur.com/qnFg0N7.png', 1, '\"url_line\":\"/facebook.com/watch/(.+)v=([a-z1-9.-_]+)/\"; \"url_line\":\"/facebook.com/([a-z1-9.-_]+)/\"; \"url_line\":\"/m.facebook.com/([a-z1-9.-_]+)/\"; \"url_line\":\"/web.facebook.com/([a-z1-9.-_]+)/\";'),
(8, 'A3', 'Dailymotion', 'Dailymotion-videos-downloader', '18-06-2019', '1.4', 'zhareiv', 'https://i.imgur.com/tDy4LI7.png', 1, '\"url_line\":\"/dailymotion.com/video/([a-z1-9.-_]+)/\"; \"url_line\":\"/dai.ly/([a-z1-9.-_]+)/\";'),
(9, 'A9', 'imgur', 'imgur-videos-downloader', '18-06-2019', '1.4', 'zhareiv', 'https://i.imgur.com/hBWhmKy.png', 1, '\"url_line\":\"/imgur.com/gallery/([a-z1-9.-_]+)/\";'),
(10, 'A19', 'like', 'likee-videos-downloader', '25-08-2019', '1.1', 'Zhareiv', 'https://i.imgur.com/KsDIqQx.png', 1, '\"url_line\":\"/mobile.like-video.com/s/([a-z1-9.-_]+)/\" \"url_line\":\"/likee.video/([a-z1-9.-_]+)/\" \"url_line\":\"/like.video/([a-z1-9.-_]+)/\";'),
(11, 'A8', 'Liveleak', 'liveleak-videos-downloader', '18-06-2019', '1.4', 'zhareiv', 'https://i.imgur.com/kayDrTR.png', 1, '\"url_line\":\"/liveleak.com/([a-z1-9.-_]+)/\";'),
(12, 'A17', 'ok', 'ok-videos-downloader', '18-06-2019', '1.1', 'Zhareiv', 'https://i.imgur.com/8yKaNF2.png', 1, '\"url_line\":\"/ok.ru/video/([a-z1-9.-_]+)/\";'),
(13, 'A7', 'plays', 'plays-videos-downloader', '18-06-2019', '1.4', 'zhareiv', 'https://i.imgur.com/S3qe2Ot.png', 1, '\"url_line\":\"/plays.tv/video/([a-z1-9.-_]+)/\";'),
(14, 'A11', 'PlayTube', 'playtube-videos-downloader', '18-06-2019', '1.4', 'zhareiv', 'https://i.imgur.com/5ngmEDx.png', 1, '\"url_line\":\"/playtubescript.com/watch/([a-z1-9.-_]+)/\"; \"url_line\":\"/playtubescript.com/embed/([a-z1-9.-_]+)/\";'),
(15, 'B1', 'PornHub', 'pornhub-videos-downloader', '16-09-2019', '1.0', 'zhareiv', 'https://i.imgur.com/2a9D6Nl.png', 1, '\"url_line\":\"/([^&]+)(.+)pornhub.com/([a-z1-9.-_]+)/\";'),
(16, 'A18', 'puhutv', 'puhutv-videos-downloader', '18-06-2019', '1.0', 'Zhareiv', 'https://i.imgur.com/wkmkXoE.png', 1, '\"url_line\":\"/puhutv.com/([a-z1-9.-_]+)/\";'),
(17, 'A20', 'reddit', 'reddit-videos-downloader', '18-06-2019', '1.0', 'Zhareiv', 'https://i.imgur.com/dDkGJQ4.png', 1, '\"url_line\":\"/reddit.com/r/([a-z1-9.-_]+)/comments/([a-z1-9.-_]+)/([a-z1-9.-_]+)/\";'),
(18, 'A21', 'soundcloud', 'soundcloud-videos-downloader', '01-08-2019', '1.1', 'Zhareiv', 'https://i.imgur.com/lIHfjBr.png', 1, '\"url_line\":\"/soundcloud.com/([a-z1-9.-_]+)/\"; \"url_line\":\"/s.soundcloud.com/([a-z1-9.-_]+)/\";'),
(19, 'A24', 'Ted', 'ted-videos-downloader', '10-07-2019', '1.0', 'Zhareiv', 'https://i.imgur.com/EjaLHId.png', 1, '\"url_line\":\"/ted.com/talks/([a-z1-9.-_]+)/\";'),
(20, 'A13', 'TikTok', 'tiktok-videos-downloader', '06-07-2019', '1.5', 'zhareiv', 'https://i.imgur.com/bO21kdQ.png', 1, '\"url_line\":\"/m.tiktok.com/v/([^&]+)/\"; \"url_line\":\"/vm.tiktok.com/([^&]+)/\"; \"url_line\":\"/tiktok.com/share/video/([^&]+)/\"; \"url_line\":\"/tiktok.com/([a-z1-9.-_]+)/video/([^&]+)/\";'),
(21, 'A6', 'tumblr', 'tumblr-videos-downloader', '18-06-2019', '1.5', 'zhareiv', 'https://i.imgur.com/AACxwju.png', 1, '\"url_line\":\"/tumblr.com/([a-z1-9.-_]+)/\"; \"url_line\":\"/line_tumblr.tumblr.com/post/([a-z1-9.-_]+)/\";'),
(22, 'A4', 'vimeo', 'vimeo-videos-downloader', '18-06-2019', '1.4', 'zhareiv', 'https://i.imgur.com/bd2jB2B.png', 1, '\"url_line\":\"/vimeo.com/([a-z1-9.-_]+)/\";'),
(23, 'A16', 'vk', 'vk-videos-downloader', '18-06-2019', '1.1', 'Zhareiv', 'https://i.imgur.com/RRcOzg0.png', 1, '\"url_line\":\"/vk.com/video-([a-z1-9.-_]+)/\"; \"url_line\":\"/vk.com/video([a-z1-9.-_]+)/\";'),
(24, 'A25', 'Twitter', 'twitter-videos-downloader', '18-06-2019', '1.0', 'zhareiv', 'https://i.imgur.com/mMZnZ6P.png', 1, '\"url_line\":\"/twitter.com/([a-z1-9.-_]+)/\"; \"url_line\":\"/mobile.twitter.com/([a-z1-9.-_]+)/\";'),
(25, 'A26', 'lasso', 'lasso-videos-downloader', '03-10-2019', '1.0', 'zhareiv', 'https://i.imgur.com/8vaWJ1s.png', 1, '\"url_line\":\"/lassovideos.com/video/([^&]+)/\";'),
(26, 'A27', 'vmate', 'vmate-videos-downloader', '03-10-2019', '1.0', 'zhareiv', 'https://i.imgur.com/rmdqdFe.png', 1, '\"url_line\":\"/s.vmate.com/([^&]+)/\"; \"url_line\":\"/s.vmate.in/([^&]+)/\";'),
(27, 'A28', 'Aktualne', 'Aktualne-videos-downloader', '04-10-2019', '1.0', 'zhareiv', 'https://i.imgur.com/8vaWJ1s.png', 1, '\"url_line\":\"/video.aktualne.cz/([^&]+)/\"; \"url_line\":\"/sport.aktualne.cz/([^&]+)/\"; \"url_line\":\"/zpravy.aktualne.cz/([^&]+)/\";');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL,
  `category` varchar(11) CHARACTER SET utf8 NOT NULL,
  `image` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) CHARACTER SET utf8 NOT NULL,
  `views` varchar(100) CHARACTER SET utf8 NOT NULL,
  `active` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `report_link`
--

CREATE TABLE `report_link` (
  `id` int(11) NOT NULL,
  `report_link` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `platform` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `ip_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `share_urls`
--

CREATE TABLE `share_urls` (
  `id` int(11) NOT NULL,
  `id_url` varchar(120) CHARACTER SET utf8 NOT NULL,
  `url` varchar(120) CHARACTER SET utf8 NOT NULL,
  `platform` varchar(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `ip_user` varchar(120) CHARACTER SET utf8 NOT NULL,
  `views` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL,
  `facebook` tinyint(255) NOT NULL,
  `twitter` tinyint(255) NOT NULL,
  `whatsapp` tinyint(255) NOT NULL,
  `vk` tinyint(255) NOT NULL,
  `other` tinyint(255) NOT NULL,
  `downloads` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audio_download_list`
--
ALTER TABLE `audio_download_list`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `value` (`value`(255));

--
-- Indices de la tabla `platform_media`
--
ALTER TABLE `platform_media`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `report_link`
--
ALTER TABLE `report_link`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `share_urls`
--
ALTER TABLE `share_urls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `audio_download_list`
--
ALTER TABLE `audio_download_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `platform_media`
--
ALTER TABLE `platform_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `report_link`
--
ALTER TABLE `report_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `share_urls`
--
ALTER TABLE `share_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
