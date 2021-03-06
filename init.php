<?php defined('SYSPATH') or die('No direct script access.');

// Are we in test mode?
define("AUTHORIZENET_SANDBOX", Kohana::$config->load('authorizenet.test_mode'));

// Credentials
define("AUTHORIZENET_API_LOGIN_ID", Kohana::$config->load('authorizenet.api_login'));
define("AUTHORIZENET_TRANSACTION_KEY", Kohana::$config->load('authorizenet.transaction_key'));

// Encryption
define("AUTHORIZENET_MD5_SETTING", Kohana::$config->load('authorizenet.md5_setting'));

/**
 * Enable the auto-loader for the Authorize.Net classes.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('AuthorizeNet', 'auto_load'));