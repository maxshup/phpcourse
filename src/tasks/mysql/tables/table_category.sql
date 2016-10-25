 CREATE TABLE category (id VARCHAR(128), name VARCHAR(128), description VARCHAR(128)) ENGINE InnoDB;
 
 
 
$query = "INSERT INTO category(id, name, description) VALUES(:id, :name, :description)";

$statement->execute(array(":id" => "1", ":name" => "Lightsabers", ":description" => "Electric lightsabers."));

$statement->execute(array(":id" => "2", ":name" => "Small Figures", ":description" => "Small figures (Scale 1:10)."));

$statement->execute(array(":id" => "3", ":name" => "Big Figures", ":description" => "Big figures (Scale 1:6)."));

$statement->execute(array(":id" => "4", ":name" => "Costumes", ":description" => "Epic and realistic costumes."));

$statement->execute(array(":id" => "5", ":name" => "Dishes", ":description" => "Cups and dishes."));

$statement->execute(array(":id" => "6", ":name" => "Tshirts", ":description" => "T-shirts for fans."));

$statement->execute(array(":id" => "7", ":name" => "Masks", ":description" => "Masks."));

$statement->execute(array(":id" => "8", ":name" => "Trinkets", ":description" => "This is for you!"));

$statement->execute(array(":id" => "9", ":name" => "Blasters", ":description" => "Very realistic!"));

$statement->execute(array(":id" => "10", ":name" => "Books", ":description" => "Books for all tastes."));
 
////////////////////////////////////////////////////////////////////////// 
 
 SELECT * FROM classics;
 
 SELECT author FROM classics;
 SELECT author,title FROM classics;

 SELECT COUNT(*) FROM classics;  (Смотрит количество строк в таблице)
 
 SELECT DISTINCT author FROM classics;  (Показывает одну запись вместо многих одних и тех же, если они есть..(копии))
 
 DELETE FROM classics WHERE title='Little Dorrit';
 
 SELECT author,title FROM classics WHERE author LIKE "Charles%"; 
 
 SELECT author,title FROM classics WHERE title LIKE "%and%";

 SELECT author,title FROM classics WHERE title LIKE "%Species";

 SELECT author,title FROM classics LIMIT 3; (Выведет первые три строки из таблицы)
 
 SELECT author,title FROM classics LIMIT 1,2; (Выводит две строки,начиная с 1. Пропуская первую строку(0))
 
 


function createProductsCategories($dsn, $username, $password, $query, $id, $name, $descrip, $i)
{
	try {
		$dbconnection = new PDO($dsn, $username, $password);
	} catch (PDOException $exception) {
		echo $exception->getMessage();
	}

	// $query = "INSERT INTO category(name, description) VALUES(:name, :description)";
	// $statement = $dbconnection->prepare("INSERT INTO category(name, description) VALUES(:name, :description)");
	$statement = $dbconnection->prepare($query);
	$statement->execute(array(":id" => $id[$i], ":name" => $name[$i], ":description" => $descrip[$i]));
	$count = $statement->rowCount();
	return $count;
}

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'maxshup';
$password = 'maxshup';

$idArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$nameArray = array('Lightsabers', 'Small Figures', 'Big Figures', 'Costumes', 'Dishes', 'Tshirts', 'Masks', 'Trinkets', 'Blasters', 'Books');
$descripArray = array('Electric lightsabers.', 'Small figures (Scale 1:10).', 'Big figures (Scale 1:6).', 'Epic and realistic costumes.', 'Cups and dishes.', 'T-shirts for fans.', 'Masks.', 'This is for you!', 'Very realistic!', 'Books for all tastes.');

 for ($i = 0; $i < 10; $i++) {

 	foreach ($idArray as $key => $id) {
		do {
			$id = $idArray;
		} while($idArray <= 10);
	}

	foreach ($nameArray as $key => $name) {
		do {
			$name = $nameArray;
		} while($nameArray <= 10);
	}

	foreach ($descripArray as $key => $descrip) {
		do {
			$descrip = $descripArray;
		} while($descripArray <= 10);
    }

	$query = "INSERT INTO category(id, name, description) VALUES(:id, :name, :description)";
	$add = createProductsCategories($dsn, $username, $password, $query, $id, $name, $descrip, $i);
}	
$result = '';
$inputData = '';
$description = '';

 
 