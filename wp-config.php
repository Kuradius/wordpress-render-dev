<?php

// ** Database instellingen ** //
define('DB_NAME', 'sql7790806');
define('DB_USER', 'sql7790806');
define('DB_PASSWORD', 'kJTavXkJUN');
define('DB_HOST', 'sql7.freesqldatabase.com:3306');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');



// ** Authentication Unique Keys and Salts. **
define('AUTH_KEY',         'random-key-hier');
define('SECURE_AUTH_KEY',  'random-key-hier');
define('LOGGED_IN_KEY',    'random-key-hier');
define('NONCE_KEY',        'random-key-hier');
define('AUTH_SALT',        'random-key-hier');
define('SECURE_AUTH_SALT', 'random-key-hier');
define('LOGGED_IN_SALT',   'random-key-hier');
define('NONCE_SALT',       'random-key-hier');

// ** Tabel prefix ** //
$table_prefix = 'wp_';

// ** Debug-modus ** //
define('WP_DEBUG', false);

// ** Absolute pad naar WordPress-directory ** //
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

// ** Zet WordPress in gang ** //
require_once(ABSPATH . 'wp-settings.php');
