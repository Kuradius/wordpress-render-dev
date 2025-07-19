<?php
/*
Plugin Name: Force HTTPS on Render
Description: Zorgt ervoor dat WordPress alles via HTTPS laadt (fix voor Render)
*/

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}
