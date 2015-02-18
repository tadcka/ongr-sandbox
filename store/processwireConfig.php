<?php

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * ProcessWire 2.x
 * Copyright (C) 2014 by Ryan Cramer
 * Licensed under GNU/GPL v2, see LICENSE.TXT
 *
 * http://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 */
$config->debug = false;

/*** INSTALLER CONFIG ********************************************************************/

/**
 * Installer: Database Configuration.
 */
$config->dbHost = 'localhost';
$config->dbName = 'ongr_processwire_test';
$config->dbUser = 'root';
$config->dbPass = 'root';
$config->dbPort = '3306';

/**
 * Installer: User Authentication Salt.
 *
 * Must be retained if you migrate your site from one server to another.
 */
$config->userAuthSalt = '557f8e441b6ac6888fb62a08902f660a';

/**
 * Installer: File Permission Configuration.
 */
$config->chmodDir = '0755';
$config->chmodFile = '0644';

/**
 * Installer: Time zone setting.
 */
$config->timezone = 'Europe/Vilnius';
