<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/' :
    require __DIR__ . '/public/index.php';
    break;
  case '' :
    require __DIR__ . '/public/index.php';
    break;
  case '/vkhod' :
    require __DIR__ . '/public/vkhod.php';
    break;
  case '/zayavka' :
    require __DIR__ . '/public/zayavka.php';
    break;
  default:
    http_response_code(404);
    require __DIR__ . '/public/404.php';
    break;
}
