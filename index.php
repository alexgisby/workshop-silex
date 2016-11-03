<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new \Silex\Application();
$app['debug'] = true;

//
// Setup Twig
//
$app->register(new \Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__.'/views'
]);

//
// ------------- CONTROLLERS -------------------------
//
$app->get('/hello', function () use ($app) {
    $greeter = new \DemoApplication\Greeter();

    return $app['twig']->render('hello.html.twig', [
        'message' => $greeter->getMessage()
    ]);
});

//
// Run Application
//
$app->run();
