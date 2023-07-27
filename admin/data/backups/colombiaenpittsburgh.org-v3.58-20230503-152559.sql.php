-- <?php die('This is not a program file.'); exit; ?>


--
-- Table structure for table `#TABLE_PREFIX#__accesslist`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#__accesslist`;

CREATE TABLE `#TABLE_PREFIX#__accesslist` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `userNum` int unsigned NOT NULL,
  `tableName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessLevel` tinyint unsigned NOT NULL,
  `maxRecords` int unsigned DEFAULT NULL,
  `randomSaveId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#__accesslist`
--

INSERT INTO `#TABLE_PREFIX#__accesslist` VALUES("1","1","all","9",NULL,"1234567890");

--
-- Table structure for table `#TABLE_PREFIX#__email_templates`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#__email_templates`;

CREATE TABLE `#TABLE_PREFIX#__email_templates` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `template_id` mediumtext COLLATE utf8mb4_unicode_ci,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `from` mediumtext COLLATE utf8mb4_unicode_ci,
  `reply-to` mediumtext COLLATE utf8mb4_unicode_ci,
  `to` mediumtext COLLATE utf8mb4_unicode_ci,
  `cc` mediumtext COLLATE utf8mb4_unicode_ci,
  `bcc` mediumtext COLLATE utf8mb4_unicode_ci,
  `subject` mediumtext COLLATE utf8mb4_unicode_ci,
  `html` mediumtext COLLATE utf8mb4_unicode_ci,
  `placeholders` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#__email_templates`
--


--
-- Table structure for table `#TABLE_PREFIX#__log_audit`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#__log_audit`;

CREATE TABLE `#TABLE_PREFIX#__log_audit` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `dateLogged` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `audit_event` mediumtext COLLATE utf8mb4_unicode_ci,
  `event_source` mediumtext COLLATE utf8mb4_unicode_ci,
  `url` mediumtext COLLATE utf8mb4_unicode_ci,
  `user_cms` mediumtext COLLATE utf8mb4_unicode_ci,
  `user_web` mediumtext COLLATE utf8mb4_unicode_ci,
  `remote_addr` mediumtext COLLATE utf8mb4_unicode_ci,
  `http_user_agent` mediumtext COLLATE utf8mb4_unicode_ci,
  `additional_data` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#__log_audit`
--

INSERT INTO `#TABLE_PREFIX#__log_audit` VALUES("1","2023-05-03 15:25:28","Login: Success","","http://colombiaenpittsburgh.org/admin/admin.php","Array\n(\n    [num] => 1\n    [username] => jdancisin\n    [_tableName] => accounts\n)\n","Array\n(\n    [num] => 1\n    [username] => jdancisin\n    [_tableName] => accounts\n)\n","74.98.226.216","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36","{\"username\":\"jdancisin\"}");

--
-- Table structure for table `#TABLE_PREFIX#__media`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#__media`;

CREATE TABLE `#TABLE_PREFIX#__media` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#__media`
--


--
-- Table structure for table `#TABLE_PREFIX#_about_us`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_about_us`;

CREATE TABLE `#TABLE_PREFIX#_about_us` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `id` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_about_us`
--


--
-- Table structure for table `#TABLE_PREFIX#_accounts`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_accounts`;

CREATE TABLE `#TABLE_PREFIX#_accounts` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `fullname` mediumtext COLLATE utf8mb4_unicode_ci,
  `email` mediumtext COLLATE utf8mb4_unicode_ci,
  `username` mediumtext COLLATE utf8mb4_unicode_ci,
  `password` mediumtext COLLATE utf8mb4_unicode_ci,
  `lastLoginDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `expiresDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `neverExpires` tinyint unsigned NOT NULL,
  `isAdmin` tinyint unsigned NOT NULL,
  `disabled` tinyint unsigned NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_accounts`
--

INSERT INTO `#TABLE_PREFIX#_accounts` VALUES("1","2023-05-03 15:25:15","0","2023-05-03 15:25:15","0","Jason Dancisin","jdancisin@gmail.com","jdancisin","$sha1$f6b7bcac3364a17d98c21e1eac15c471c2585fb8","2023-05-03 15:25:28","0000-00-00 00:00:00","1","1","0");

--
-- Table structure for table `#TABLE_PREFIX#_amigos`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_amigos`;

CREATE TABLE `#TABLE_PREFIX#_amigos` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `url` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_amigos`
--


--
-- Table structure for table `#TABLE_PREFIX#_announcements`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_announcements`;

CREATE TABLE `#TABLE_PREFIX#_announcements` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `removeDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category` mediumtext COLLATE utf8mb4_unicode_ci,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci,
  `additional_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `link` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_announcements`
--


--
-- Table structure for table `#TABLE_PREFIX#_archive_menugroup`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_archive_menugroup`;

CREATE TABLE `#TABLE_PREFIX#_archive_menugroup` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_archive_menugroup`
--


--
-- Table structure for table `#TABLE_PREFIX#_auction_page`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_auction_page`;

CREATE TABLE `#TABLE_PREFIX#_auction_page` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_auction_page`
--


--
-- Table structure for table `#TABLE_PREFIX#_banner_announcements`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_banner_announcements`;

CREATE TABLE `#TABLE_PREFIX#_banner_announcements` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `removeDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `link` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_banner_announcements`
--


--
-- Table structure for table `#TABLE_PREFIX#_business_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_business_pages`;

CREATE TABLE `#TABLE_PREFIX#_business_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `nav_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_business_pages`
--


--
-- Table structure for table `#TABLE_PREFIX#_categories`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_categories`;

CREATE TABLE `#TABLE_PREFIX#_categories` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_categories`
--


--
-- Table structure for table `#TABLE_PREFIX#_catleya_recipients`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_catleya_recipients`;

CREATE TABLE `#TABLE_PREFIX#_catleya_recipients` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci,
  `year` mediumtext COLLATE utf8mb4_unicode_ci,
  `short_intro` mediumtext COLLATE utf8mb4_unicode_ci,
  `bio_english` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_catleya_recipients`
--


--
-- Table structure for table `#TABLE_PREFIX#_cep_contacts`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_cep_contacts`;

CREATE TABLE `#TABLE_PREFIX#_cep_contacts` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `info_is_current` tinyint unsigned NOT NULL,
  `first_name` mediumtext COLLATE utf8mb4_unicode_ci,
  `last_name` mediumtext COLLATE utf8mb4_unicode_ci,
  `street_address_1` mediumtext COLLATE utf8mb4_unicode_ci,
  `street_address_2` mediumtext COLLATE utf8mb4_unicode_ci,
  `city` mediumtext COLLATE utf8mb4_unicode_ci,
  `state` mediumtext COLLATE utf8mb4_unicode_ci,
  `zip_code` mediumtext COLLATE utf8mb4_unicode_ci,
  `country` mediumtext COLLATE utf8mb4_unicode_ci,
  `email` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_cep_contacts`
--


--
-- Table structure for table `#TABLE_PREFIX#_colombia`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_colombia`;

CREATE TABLE `#TABLE_PREFIX#_colombia` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `id` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_colombia`
--


--
-- Table structure for table `#TABLE_PREFIX#_community`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_community`;

CREATE TABLE `#TABLE_PREFIX#_community` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_community`
--


--
-- Table structure for table `#TABLE_PREFIX#_contact_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_contact_pages`;

CREATE TABLE `#TABLE_PREFIX#_contact_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `nav_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_contact_pages`
--


--
-- Table structure for table `#TABLE_PREFIX#_delete_me_menugroup`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_delete_me_menugroup`;

CREATE TABLE `#TABLE_PREFIX#_delete_me_menugroup` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_delete_me_menugroup`
--


--
-- Table structure for table `#TABLE_PREFIX#_event_detail_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_event_detail_pages`;

CREATE TABLE `#TABLE_PREFIX#_event_detail_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `url_id` mediumtext COLLATE utf8mb4_unicode_ci,
  `event_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `event_times` mediumtext COLLATE utf8mb4_unicode_ci,
  `location` mediumtext COLLATE utf8mb4_unicode_ci,
  `google_map_embed` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_event_detail_pages`
--


--
-- Table structure for table `#TABLE_PREFIX#_events`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_events`;

CREATE TABLE `#TABLE_PREFIX#_events` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `date` mediumtext COLLATE utf8mb4_unicode_ci,
  `date_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `location` mediumtext COLLATE utf8mb4_unicode_ci,
  `type` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `staging_mode` tinyint unsigned NOT NULL,
  `external_link` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `rsvp_link` mediumtext COLLATE utf8mb4_unicode_ci,
  `google_map_link` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  `archive` tinyint unsigned NOT NULL,
  `photos_link` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_events`
--


--
-- Table structure for table `#TABLE_PREFIX#_events_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_events_pages`;

CREATE TABLE `#TABLE_PREFIX#_events_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `nav_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_events_pages`
--


--
-- Table structure for table `#TABLE_PREFIX#_home_menugroup`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_home_menugroup`;

CREATE TABLE `#TABLE_PREFIX#_home_menugroup` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_home_menugroup`
--


--
-- Table structure for table `#TABLE_PREFIX#_home_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_home_pages`;

CREATE TABLE `#TABLE_PREFIX#_home_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_home_pages`
--


--
-- Table structure for table `#TABLE_PREFIX#_listings`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_listings`;

CREATE TABLE `#TABLE_PREFIX#_listings` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `category` mediumtext COLLATE utf8mb4_unicode_ci,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `website` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_listings`
--


--
-- Table structure for table `#TABLE_PREFIX#_main_feed`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_main_feed`;

CREATE TABLE `#TABLE_PREFIX#_main_feed` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `category` mediumtext COLLATE utf8mb4_unicode_ci,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `sticky` tinyint unsigned NOT NULL,
  `status` mediumtext COLLATE utf8mb4_unicode_ci,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `time_info` mediumtext COLLATE utf8mb4_unicode_ci,
  `location_info` mediumtext COLLATE utf8mb4_unicode_ci,
  `google_map` mediumtext COLLATE utf8mb4_unicode_ci,
  `image_includes_title_and_date` tinyint unsigned NOT NULL,
  `image_border` tinyint unsigned NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `additional_details` mediumtext COLLATE utf8mb4_unicode_ci,
  `link` mediumtext COLLATE utf8mb4_unicode_ci,
  `link_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `hide_form` tinyint unsigned NOT NULL,
  `form_title` mediumtext COLLATE utf8mb4_unicode_ci,
  `form_code` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_main_feed`
--


--
-- Table structure for table `#TABLE_PREFIX#_miscellaneous_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_miscellaneous_pages`;

CREATE TABLE `#TABLE_PREFIX#_miscellaneous_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `show_form` tinyint unsigned NOT NULL,
  `form_code` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_miscellaneous_pages`
--


--
-- Table structure for table `#TABLE_PREFIX#_news`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_news`;

CREATE TABLE `#TABLE_PREFIX#_news` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `url` mediumtext COLLATE utf8mb4_unicode_ci,
  `source` mediumtext COLLATE utf8mb4_unicode_ci,
  `archive` tinyint unsigned NOT NULL,
  `cep_news` tinyint unsigned NOT NULL,
  `cep_article_content` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_news`
--


--
-- Table structure for table `#TABLE_PREFIX#_notes`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_notes`;

CREATE TABLE `#TABLE_PREFIX#_notes` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `url` mediumtext COLLATE utf8mb4_unicode_ci,
  `source` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_notes`
--


--
-- Table structure for table `#TABLE_PREFIX#_pages_menu`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_pages_menu`;

CREATE TABLE `#TABLE_PREFIX#_pages_menu` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_pages_menu`
--


--
-- Table structure for table `#TABLE_PREFIX#_pittsburgh`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_pittsburgh`;

CREATE TABLE `#TABLE_PREFIX#_pittsburgh` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `id` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_pittsburgh`
--


--
-- Table structure for table `#TABLE_PREFIX#_post_categories`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_post_categories`;

CREATE TABLE `#TABLE_PREFIX#_post_categories` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_post_categories`
--


--
-- Table structure for table `#TABLE_PREFIX#_sidebar_ads`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_sidebar_ads`;

CREATE TABLE `#TABLE_PREFIX#_sidebar_ads` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `link` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_sidebar_ads`
--


--
-- Table structure for table `#TABLE_PREFIX#_site_sections`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_site_sections`;

CREATE TABLE `#TABLE_PREFIX#_site_sections` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `nav_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `hero_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `url` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `show_in_nav` tinyint unsigned NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_site_sections`
--


--
-- Table structure for table `#TABLE_PREFIX#_special_announcements`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_special_announcements`;

CREATE TABLE `#TABLE_PREFIX#_special_announcements` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `removeDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `link` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_special_announcements`
--


--
-- Table structure for table `#TABLE_PREFIX#_support_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_support_pages`;

CREATE TABLE `#TABLE_PREFIX#_support_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `nav_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_support_pages`
--


--
-- Table structure for table `#TABLE_PREFIX#_uploads`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_uploads`;

CREATE TABLE `#TABLE_PREFIX#_uploads` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `order` int unsigned NOT NULL,
  `createdTime` datetime NOT NULL,
  `tableName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fieldName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recordNum` int DEFAULT NULL,
  `filePath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` int unsigned NOT NULL,
  `height` int unsigned NOT NULL,
  `filesize` mediumtext COLLATE utf8mb4_unicode_ci,
  `preSaveTempId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mediaNum` mediumtext COLLATE utf8mb4_unicode_ci,
  `thumbFilePath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbUrlPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbWidth` int unsigned NOT NULL,
  `thumbHeight` int unsigned NOT NULL,
  `thumbFilePath2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbUrlPath2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbWidth2` int unsigned NOT NULL,
  `thumbHeight2` int unsigned NOT NULL,
  `thumbFilePath3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbUrlPath3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbWidth3` int unsigned NOT NULL,
  `thumbHeight3` int unsigned NOT NULL,
  `thumbFilePath4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbUrlPath4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbWidth4` int unsigned NOT NULL,
  `thumbHeight4` int unsigned NOT NULL,
  `info1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_uploads`
--


--
-- Table structure for table `#TABLE_PREFIX#_volunteer_pages`
--

DROP TABLE IF EXISTS `#TABLE_PREFIX#_volunteer_pages`;

CREATE TABLE `#TABLE_PREFIX#_volunteer_pages` (
  `num` int unsigned NOT NULL AUTO_INCREMENT,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdByUserNum` int unsigned NOT NULL,
  `updatedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedByUserNum` int unsigned NOT NULL,
  `dragSortOrder` int unsigned NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `nav_text` mediumtext COLLATE utf8mb4_unicode_ci,
  `permalink` mediumtext COLLATE utf8mb4_unicode_ci,
  `hidden` tinyint unsigned NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `sidebar` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `#TABLE_PREFIX#_volunteer_pages`
--


-- Dump completed on 2023-05-03 15:25:59 +0000

