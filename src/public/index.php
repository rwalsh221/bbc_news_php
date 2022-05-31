<?php

declare(strict_types = 1);

use App\PrimaryArticle;
use App\SecondaryArticle;

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

include '../app/GetLorem.php';
include '../app/PrimaryArticle.php';
include '../app/SecondaryArticle.php';

$primaryArticle = new PrimaryArticle();
$secondaryArticle = new SecondaryArticle();

$primaryArticleContent = $primaryArticle->getPrimaryArticleHTML();
$secondaryArticleContent = $secondaryArticle->getSecondaryArticleHTML();

require VIEWS_PATH . 'home.php';