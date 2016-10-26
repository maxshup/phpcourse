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

function tableProductsChange($dbconnection, $queryP ,$name, $description, $price, $i)
{
	$statement = $dbconnection->prepare($queryP);
	$statement->execute(array(":name" => $name[0][$i], ":description" => $description[1][$i], ":picture" => "", ":price" => $price[2][$i]));
	$count = $statement->rowCount();
	return $count;
}

function tableCategoryChange($dbconnection, $queryC, $name, $description, $i)
{
	$statement = $dbconnection->prepare($queryC);
	$statement->execute(array(":name" => $name[0][$i], ":description" => $description[1][$i]));
	$count = $statement->rowCount();
	return $count;
}

function handle($pathName)
{
	$handle = fopen($pathName, "r");
	while (($buffer = fgets($handle)) !== false) {
		$handleChunks = explode("|", $buffer);
		// $handleArray = array($handleChunks);
		$handleArray[] = $handleChunks;
	}
	return $handleArray;


}

function CategoryProduct($connect, $queryC, $queryP, $name, $description, $price, $i)
{
	$pathCategory = "/var/www/html/src/tasks/mysql/products/categories.txt";
	$handleCategory = handle($pathCategory);
	for ($i = 0; $i < count($handleCategory[0]); $i++) {
		foreach ($handleCategory as $key => $name) {
			$name[0] = $handleCategory[0];
		}
		foreach ($handleCategory as $key => $description) {
			$description[1] = $handleCategory[1];
		}
		$tablechangeCategory = tableCategoryChange($connect, $queryC, $name, $description, $i);
	}

	$pathProduct = "/var/www/html/src/tasks/mysql/products/products.txt";
	$handleProduct = handle($pathProduct);	
	for ($i = 0; $i < count($handleProduct[0]); $i++) {
		foreach ($handleProduct as $key => $name) {
			$name[0] = $handleProduct[0];	
		}
		foreach ($handleProduct as $key => $description) {
			$description[1] = $handleProduct[1];	
		}
		foreach ($handleProduct as $key => $price) {
			$price[2] = $handleProduct[2];
		}
		$tablechangeProduct = tableProductsChange($connect, $queryP, $name, $description, $price, $i);	
	}
	
}

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'maxshup';
$password = 'maxshup';
$queryC = "INSERT INTO category(name, description) VALUES(:name, :description)";
$queryP = "INSERT INTO products(name, description, picture, price) VALUES(:name, :description, :picture, :price)";

$connect = dbConnect($dsn, $username, $password);
$categoryProduct = CategoryProduct($connect, $queryC, $queryP, '', '', '', '');	

$result = '';
$inputData = '';
$description = 'Создать категории и продукты, используя функцию создания записи в БД.
По количеству - чем больше, тем лучше. Например, 10 категорий, 20-30 продуктов.';