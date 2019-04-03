<?php

require_once 'vendor/loader.php';
require_once 'config.php';

$loader = new Loader();

spl_autoload_register([$loader, 'load']);