<?php

function utworzPolaczenie($f3) {
	echo '<p>Ładuję połączenie... ';
	$dsn = $f3->get('db.dsn');
	echo $dsn;
	$user = $f3->get('db.user');
	$haslo = $f3->get('db.haslo');

	$baza = new \DB\SQL($dsn, $user, $haslo);
	$f3->set('db.polaczenie', $baza);
	echo 'OK</p>';
}

