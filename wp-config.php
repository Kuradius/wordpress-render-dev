<?php
define('DB_NAME', 'sql7790806');
define('DB_USER', 'sql7790806');
define('DB_PASSWORD', 'kJTavXkJUN');
define('DB_HOST', 'sql7.freesqldatabase.com:3306');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('WP_HOME', 'https://wordpress-render-dev.onrender.com');
define('WP_SITEURL', 'https://wordpress-render-dev.onrender.com');

define('AUTH_KEY',         'random-key-hier');
define('SECURE_AUTH_KEY',  'random-key-hier');
define('LOGGED_IN_KEY',    'random-key-hier');
define('NONCE_KEY',        'random-key-hier');
define('AUTH_SALT',        'random-key-hier');
define('SECURE_AUTH_SALT', 'random-key-hier');
define('LOGGED_IN_SALT',   'random-key-hier');
define('NONCE_SALT',       'random-key-hier');

$table_prefix = 'wp_';
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
