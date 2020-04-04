<?php

function utworzPolaczenie(Base $f3) {
	$dsn = $f3->get('db.dsn');
	$user = $f3->get('db.user');
	$haslo = $f3->get('db.haslo');

	$baza = new DB\SQL($dsn, $user, $haslo);
	$f3->set('db.polaczenie', $baza);
}

function zaladujSchematy(Base $f3) {
	$polaczenie = $f3->get('db.polaczenie');
	$schemat = new DB\SQL\Schema($polaczenie);

	Wiadomosc::zaladujSchemat($schemat);
}