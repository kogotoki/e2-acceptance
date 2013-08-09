SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=NO_AUTO_VALUE_ON_ZERO */;
/*!40101 SET NAMES utf8 */;
CREATE TABLE `e2_Aliases` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `EntityID` int(10) unsigned NOT NULL DEFAULT '0',
  `Alias` varchar(64) NOT NULL DEFAULT '',
  `Stamp` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `e2_Notes` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL DEFAULT '',
  `OriginalAlias` varchar(64) NOT NULL DEFAULT '',
  `Text` text NOT NULL,
  `FormatterID` varchar(32) NOT NULL DEFAULT 'neasden',
  `IsPublished` tinyint(1) NOT NULL DEFAULT '0',
  `IsIssue` tinyint(1) NOT NULL DEFAULT '0',
  `IsCommentable` tinyint(1) NOT NULL DEFAULT '1',
  `IsVisible` tinyint(1) NOT NULL DEFAULT '1',
  `IsFavourite` tinyint(1) NOT NULL DEFAULT '0',
  `Stamp` int(10) unsigned NOT NULL DEFAULT '0',
  `LastModified` int(10) unsigned NOT NULL DEFAULT '0',
  `Offset` int(11) NOT NULL DEFAULT '0',
  `IsDST` tinyint(1) NOT NULL DEFAULT '0',
  `IP` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  FULLTEXT KEY `Title` (`Title`,`Text`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

ALTER TABLE `e2_Notes` DISABLE KEYS;
ALTER TABLE `e2_Notes` ENABLE KEYS;
CREATE TABLE `e2_Comments` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NoteID` int(10) unsigned NOT NULL DEFAULT '0',
  `AuthorName` varchar(255) NOT NULL DEFAULT '',
  `AuthorEmail` varchar(255) NOT NULL DEFAULT '',
  `Text` text NOT NULL,
  `Reply` text NOT NULL,
  `IsVisible` tinyint(1) NOT NULL DEFAULT '1',
  `IsFavourite` tinyint(1) NOT NULL DEFAULT '0',
  `IsReplyVisible` tinyint(1) NOT NULL DEFAULT '0',
  `IsReplyFavourite` tinyint(1) NOT NULL DEFAULT '0',
  `IsAnswerAware` tinyint(1) NOT NULL DEFAULT '1',
  `IsSubscriber` tinyint(1) NOT NULL DEFAULT '0',
  `IsSpamSuspect` tinyint(1) NOT NULL DEFAULT '0',
  `IsNew` tinyint(1) NOT NULL DEFAULT '0',
  `Stamp` int(10) unsigned NOT NULL DEFAULT '0',
  `LastModified` int(10) unsigned NOT NULL DEFAULT '0',
  `ReplyStamp` int(10) unsigned NOT NULL DEFAULT '0',
  `ReplyLastModified` int(10) unsigned NOT NULL DEFAULT '0',
  `IP` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `e2_Keywords` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ParentKeywordID` int(10) unsigned NOT NULL DEFAULT '0',
  `Keyword` varchar(255) NOT NULL DEFAULT '',
  `URLName` varchar(32) NOT NULL DEFAULT '',
  `Description` text NOT NULL,
  `IsFavourite` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `e2_NotesKeywords` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NoteID` int(10) unsigned NOT NULL DEFAULT '0',
  `KeywordID` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `NoteID` (`NoteID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

COMMIT;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
