<?php

include PATH.'/Base.class.php';
include PATH.'/functions.php';

if (! Base::connect('mysql', ['host' => DB_HOST, 'user' => DB_USER, 'pass' => DB_PASS, 'base' => DB_BASE, 'charset' => DB_CHARSET]))
{
	die('Error connecting to database.');
}

Base::query('SET sql_mode = ""');

session_start();
