<?php
$dbHostname = 'localhost';
$dbUsername = 'maxim';
$dbPassword = 'maxim';
$database = 'market';

$mysqli = new mysqli($dbHostname, $dbUsername, $dbPassword, $database);
if (mysqli_connect_errno($mysqli)) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

$sql = <<<SQL
	SELECT * FROM category
SQL;
$rows = [];
$res = $mysqli->query($sql);
while ($row = $res->fetch_assoc()) {
	$rows[] = var_export($row, true);
	
}

$result = implode('<br>', $rows);
$description = var_dump($rows);
$inputData = '';		