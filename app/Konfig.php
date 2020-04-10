<?php

class Konfig {
	static function czytajKonfigi(Base $f3) {
		$f3->config('app/sciezki.ini');
		$f3->config('konfig.ini');
	}
}

