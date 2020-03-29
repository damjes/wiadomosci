<?php

function czytajKonfigi($f3) {
	echo '<p>Czytam konfigi... ';
	$f3->config('app/sciezki.ini');
	$f3->config('konfig.ini');
	echo 'OK</p>';
}

