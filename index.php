<?php
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');

update_option('siteurl', 'https://wordpress-render-dev.onrender.com');
update_option('home', 'https://wordpress-render-dev.onrender.com');

echo "✅ URL’s zijn ingesteld. Verwijder deze code en zet de originele index.php terug.";
