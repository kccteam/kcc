<?php

$personal = array(
	'modules'=>array(
		'gii'=>array(
                        // Пароль от генератора
			'password'=>'hackme',
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),
	'components'=>array(
		'db'=>array(
                        // Настройки соединения с MySql
			'connectionString' => 'mysql:host=localhost;dbname=kcc',
			'username' => 'kcc',
			'password' => 'hackme',
		),
	),
);