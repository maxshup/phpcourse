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
 
 



 
 