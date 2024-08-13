<?php
require "../config.php";

$path = ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$path = "../app/views/$path.php";
$get = FILTER_INPUT(INPUT_GET, "action", FILTER_SANITIZE_SPECIAL_CHARS);

if(!file_exists($path)) {
    require "../app/views/index.php";
} else {
    require $path;
}

if ($get == 'disconnect') {
    unset($_SESSION['user']);
    header('location:/');
}