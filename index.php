<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require 'vendor/loader.php';
require_once 'config.php';

$loader = new Loader();

spl_autoload_register([$loader, 'autoload']);
