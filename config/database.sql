-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `text` text NULL,
  `textAddImage` char(1) NOT NULL default '',
  `textAlt` varchar(255) NOT NULL default '',
  `textSize` varchar(64) NOT NULL default '',
  `textImagemargin` varchar(128) NOT NULL default '',
  `textImageUrl` varchar(255) NOT NULL default '',
  `textCaption` varchar(255) NOT NULL default '',
  `textFloating` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
