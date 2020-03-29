<?php

function utworzPolaczenie($f3) {
	$dsn = $f3->get('db.dsn');
	$user = $f3->get('db.user');
	$haslo = $f3->get('db.haslo');

	$baza = new \DB\SQL($dsn, $user, $haslo);
	$f3->set('db.polaczenie', $baza);
}

