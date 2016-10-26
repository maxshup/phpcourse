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

function AddToDb($dbconnection, $queryAdd, $queryUpd)
{
	
 	$statement = $dbconnection->prepare($queryAdd);
 	$statement->execute(array(":lightsabers" => "lightsabers", ":description" => "Electric lightsabers"));
 	$statement = $dbconnection->prepare($queryUpd);
 	$statement->execute();
 	$count = $statement->rowCount();
	return $count;
}

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'maxshup';
$password = 'maxshup';
$queryAdd = "INSERT INTO category(name, description) VALUES(:lightsabers, :description)";
$queryUpd = "UPDATE category SET name = 'Dual-lightsabers', description = 'Epic sabers!' WHERE description = 'Electric lightsabers'";

$connect = dbConnect($dsn, $username, $password);
$add = AddToDb($connect, $queryAdd, $queryUpd);

$result = '';
$inputData = '';
$description = 'Функция обновления записи в БД.';