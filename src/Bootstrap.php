<?php
declare(strict_types=1);

namespace NFT;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = 'development';

/**
 * Register the error handler
 */
$whoops = new \Whoops\Run();
if ($environment !== 'production') {
  $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
} else {
  $whoops->pushHandler(function ($e) {
    echo 'TODO: Friendly error page and send an email to the developer';
  });
}
$whoops->register();

/**
 * Setup the request/response objects
 */
$request = new \Http\HttpRequest($_GET,$_POST, $_COOKIE, $_FILES, $_SERVER);
$response = new \Http\HttpResponse();

$response->setContent('<h1>Hello World</h1>');

foreach ($response->getHeaders() as $header) {
  header($header, false);
}

echo $response->getContent();
