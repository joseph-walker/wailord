<?php

require __DIR__ . '/../vendor/autoload.php';

use Predis\Client;
use Slim\{Container, App};

return (function() {
    $config = require __DIR__ . '/config.php';

    $container = new Container();

    $container['redis'] = function() {
        return new Client([
            'host' => 'redis'
        ]);
    };

    return new App($container);
})();
