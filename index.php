<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();

$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);

$f3->route('GET /test',
    function() {
        echo 'Test .htaccess';
    }
);

$f3->run();