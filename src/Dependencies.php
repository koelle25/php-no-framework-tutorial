<?php
declare(strict_types=1);

namespace NFT;

$injector = new \Auryn\Injector();

$injector->alias(\Http\Request::class, \Http\HttpRequest::class);
$injector->share(\Http\HttpRequest::class);
$injector->define(\Http\HttpRequest::class, [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias(\Http\Response::class, \Http\HttpResponse::class);
$injector->share(\Http\HttpResponse::class);

// Either Mustache OR Twig!
$injector->alias(\NFT\Template\Renderer::class, \NFT\Template\MustacheRenderer::class);
$injector->define(\Mustache_Engine::class, [
    ':options' => [
        'loader' => new \Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
        ]),
    ],
]);

return $injector;
