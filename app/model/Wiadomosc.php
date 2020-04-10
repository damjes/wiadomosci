<?php

class Wiadomosc extends DB\SQL\Mapper {
	static function zaladujSchemat(DB\SQL\Schema $schemat) {
		$tabela = $schemat->createTable('wiadomosci');
		$tabela->addColumn('nadawca')->type($schemat::DT_INT);
		$tabela->addColumn('adresat')->type($schemat::DT_INT);
		$tabela->addColumn('tytul')->type($schemat::DT_VARCHAR512);
		$tabela->addColumn('tresc')->type($schemat::DT_TEXT);
		$tabela->build();
	}
}