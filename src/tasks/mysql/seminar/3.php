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

function getDbRows($dbconnection, $query)
{
	$statement = $dbconnection->query($query);
	$statement->setFetchMode(PDO::FETCH_ASSOC);
	$rows = $statement->fetchAll();
	return $rows;
	
}

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'maxim';
$password = 'maxim';

$result = '';
$description = '';
$inputData = '';

$Connect = dbConnect($dsn, $username, $password);

$Rows = getDbRows($Connect, 'SELECT * FROM category');
var_dump($Rows);


