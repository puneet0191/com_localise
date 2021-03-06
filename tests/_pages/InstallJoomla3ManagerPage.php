<?php
/**
 * @package     Joomla
 * @subpackage  Page Class
 * @copyright   Copyright (C) 2012 - 2014 All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
/**
 * Class InstallJoomla3ManagerPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.0
 */
class InstallJoomla3ManagerPage
{
	// Include url of current page
	public static $URL = '/installation/index.php';

	public static $installSampleData = "//input[@value='Install Sample Data']";

	public static $dbType = "#jform_db_type";

	public static $dbHost = "#jform_db_host";

	public static $dbUsername = "#jform_db_user";

	public static $dbPassword = "#jform_db_pass";

	public static $dbName = "#jform_db_name";

	public static $dbPrefix = "#jform_db_prefix";

	public static $siteName = "#jform_site_name";

	public static $adminEmail = "#jform_admin_email";

	public static $adminUser = "#jform_admin_user";

	public static $adminPassword = "#jform_admin_password";

	public static $adminPasswordConfirm = "#jform_admin_password2";

}