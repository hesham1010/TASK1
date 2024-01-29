<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);


$actual_link = "$_SERVER[REQUEST_URI]";
$result = str_replace(['ip', '/', '?'], '', $actual_link);

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/includes/userdetails.php';
$user = new UserDetails($result);
$user->set_data();


