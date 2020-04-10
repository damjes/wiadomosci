<?php

class Model {
	static function utworzPolaczenie(Base $f3) {
		$dsn = $f3->get('db.dsn');
		$user = $f3->get('db.user');
		$haslo = $f3->get('db.haslo');

		$baza = new DB\SQL($dsn, $user, $haslo);
		$f3->set('db.polaczenie', $baza);
	}

	static function zaladujSchematy(Base $f3) {
		$polaczenie = $f3->get('db.polaczenie');
		$schemat = new DB\SQL\Schema($polaczenie);

		User::zaladujSchemat($schemat);
		Wiadomosc::zaladujSchemat($schemat);
	}
}