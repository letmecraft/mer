<?php

/* Config */

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\SwiftmailerServiceProvider());


/* Routes */

$app->get('/', function() use ($app) {
    return getTemplate('./views/index.php');
});

$app->get('/answer/{name}/{answer}', function ($name, $answer) use ($app) {
    $request = $app['request'];

    $message = \Swift_Message::newInstance()
        ->setContentType("text/html")
        ->setSubject('Nuova risposta!')
        ->setFrom(array('taki@martinaeyrenato.com' => 'Taki il cane grande'))
        ->setTo(array('thomas.pob@gmail.com', 'mmaddi@gmail.com'))
        ->setBody($name . "ha detto" . $answer . "!");

    $app['mailer']->send($message);

    return $name . " " . $answer;
});

$app->run();

/* Utilitaries */

function getTemplate($file) {

    ob_start(); // start output buffer

    include $file;
    $template = ob_get_contents(); // get contents of buffer
    ob_end_clean();
    return $template;

}