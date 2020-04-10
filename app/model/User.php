<?php

class User extends DB\SQL\Mapper {
	static function zaladujSchemat(DB\SQL\Schema $schemat) {
		$tabela = $schemat->createTable('userzy');
		$tabela->addColumn('login')->type($schemat::DT_VARCHAR128);
		$tabela->addColumn('hash')->type($schemat::DT_VARCHAR128);
		$tabela->addColumn('mail')->type($schemat::DT_VARCHAR128);
		$tabela->build();
	}
}