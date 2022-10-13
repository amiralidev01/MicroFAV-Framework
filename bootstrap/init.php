<?php

const BASE_PATH = __DIR__ . "/../";

include BASE_PATH . "/vendor/autoload.php";
include BASE_PATH . "/helpers/helpers.php";
$dotenv = \Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();