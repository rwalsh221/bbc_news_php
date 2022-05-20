<?php

declare(strict_types = 1);

use App\GetLorem;
use App\PrimaryArticle;

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

include '../app/GetLorem.php';
include '../app/PrimaryArticle.php';

$getLorem = new PrimaryArticle();

require VIEWS_PATH . 'home.php';