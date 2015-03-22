<?php

/* Config */

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\SwiftmailerServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

/* Routes */

$app->get('/', function() use ($app) {
    return $app['twig']->render('index.twig', array(
        
    ));
});

$app->get('/answer/{name}/{answer}', function ($name, $answer) use ($app) {
    $request = $app['request'];

    $message = \Swift_Message::newInstance()
        ->setSubject('[YourSite] Feedback')
        ->setFrom(array('noreply@yoursite.com'))
        ->setTo(array('thomas.pob@gmail.com'))
        ->setBody("lalalal");

    $app['mailer']->send($message);

    return $name." ".$answer;
});

$app->run();
