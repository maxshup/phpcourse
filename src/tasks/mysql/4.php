<?php

function dbConnect($dsn, $username, $password)
{
	try {
		$dbconnection = new PDO($dsn, $username, $password);
	} catch (PDOException $exception) {
		$dbconnection = NULL;
	}
	return $dbconnection;
}

function updateTables($dbconnection, $queryUpd)
{
	$statement = $dbconnection->prepare($queryUpd);
 	$statement->execute();
 	$count = $statement->rowCount();
	return $count;
}

$queryArray = [];

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'maxshup';
$password = 'maxshup';
$queryUpd = "UPDATE category SET name = 'Dual-lightsabers', description = 'Plasma lightsaber' WHERE name = 'lightsabers'";

$connect = dbConnect($dsn, $username, $password);
$update = updateTables($connect, $queryUpd);

$result = '';
$inputData = '';
$description = 'С помощью функции обновления обновите 2 категории и 5 продуктов.';