<?php

class Wiadomosc extends DB\SQL\Mapper {
	static function zaladujSchemat(DB\SQL\Schema $schemat) {
		$tabela = $schemat->createTable('wiadomosci');
		$tabela->addColumn('tytul')->type($schemat::DT_TEXT);
		$tabela->addColumn('tresc')->type($schemat::DT_TEXT);
		$tabela->build();
	}
}