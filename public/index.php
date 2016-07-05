<?php

$app = require __DIR__ . '/../bootstrap/bootstrap.php';

$app->get('/', function($request, $response, $args) {
    $redis = $this->get('redis');

    $count = $redis->get('count') ?: 0;
    $redis->set('count', $count + 1);

    return $response
        ->getBody()
        ->write('Count: ' . $count);
});

$app->run();
