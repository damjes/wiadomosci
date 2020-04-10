<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();
$f3->config('app/aplikacja.ini');

Konfig::czytajKonfigi($f3);
Model::utworzPolaczenie($f3);

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

$f3->route('GET /zaladuj_schematy [cli]',
	function($f3) {
		Model::zaladujSchematy($f3);
	}
);

$f3->run();
