<?php

try {
$dsn = 'mysql:host=localhost;dbname=market';
$username = 'maxim';
$password = 'maxim';
$db = new PDO($dsn, $username, $password);
$statement = $db->query('SELECT * FROM category');
$statement->setFetchMode(PDO::FETCH_ASSOC);
$rows = $statement->fetchAll();
var_dump($rows);
} catch (PDOException $exception) {
	echo 'Error! Message: ' . $exeption->getmessage() . ' Code: ' . $exception->getCode();

}
$description = '';
$inputData = '';
$result ='';