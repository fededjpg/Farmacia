<?php

class Database
{
	public static function connect()
	{
		$db = new mysqli('localhost', 'root', '22101998J@rr', 'farmacia');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}
