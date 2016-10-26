<?php

function addToDb($dsn, $username, $password)
{
	try {
		$dbconnection = new PDO($dsn, $username, $password);
	} catch (PDOException $exception) {
		echo $exception->getMessage();
	}
	

	$statement = $dbconnection->query('SHOW TABLES');
	$statement = $dbconnection->prepare("INSERT INTO category(name, description) VALUES(:lightsabers, :description)");
	$statement->execute(array(":lightsabers" => "Пример1", ":description" => "real"));
	$count = $statement->rowCount();
	return $count;
}

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'maxshup';
$password = 'maxshup';

$add = addToDb($dsn, $username, $password);

$result = '';
$inputData = '';
$description = '';
