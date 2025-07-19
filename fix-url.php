<?php
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');

update_option('siteurl', 'https://wordpress-render-dev.onrender.com');
update_option('home', 'https://wordpress-render-dev.onrender.com');

echo "Site URL en Home URL zijn nu correct ingesteld.";
