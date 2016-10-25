 CREATE TABLE category ( id_product VARCHAR(128), name VARCHAR(128), description VARCHAR(128), quantity VARCHAR(128)) ENGINE InnoDB;
 
 
 
 INSERT INTO classics(author,title,type,year) VALUES('Charles', 'Little Dorrit', 'Fiction', '1857');
 
 INSERT INTO classics(author,title,type,year) VALUES('Mark Twain','The adventure of Tom Sawyer','Fiction','1876');

 INSERT INTO classics(author,title,type,year) VALUES('Charles Darwin','The Origin of Species','Non-Fiction','1856');
 
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
 
 

 
 

 
 