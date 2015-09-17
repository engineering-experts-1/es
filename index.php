<?php

    // boilerplate
    require_once __DIR__ . '/vendor/autoload.php';
    $app = new Silex\Application();
    $app['debug'] = true;

    // paths to application
    $p = __DIR__ . '/web/source/arcmarks_index.php';
    $q = __DIR__ . '/web-es/source/index.html';

    // handles www.arcmarks.com/es requests
    $app->get('/es', function() use($app, $q) {
        return ob($q);
    });

    // handles www.arcmarks.com/name requests
    $app->get('/{name}', function($name) use($app, $p) {
        global $pub_req;
        $pub_req = $name;
        return ob($p);
    });

    // handles www.arcmarks.com requests
    $app->get('/', function() use($app, $p) {
        return ob($p);
    });

    // boilerplate
    $app->run();

    function ob ($path) {
        ob_start();
        include($path);
        $string = ob_get_contents();
        ob_end_clean();
        return $string;
    }