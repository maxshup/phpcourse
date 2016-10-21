<?php

function Filearr($booklist) 
{
	$handle = fopen("file.txt", "r");
		while (($buffer = fgets($handle, 1024)) !== false) {
			$booksChunks = explode('|', $buffer);
			$booksChunks = array('title' => $booksChunks[0], 'author' => $booksChunks[1], 'print' => $booksChunks[2], 'status' => $booksChunks[3]);
        	$booklist[] = $booksChunks;
		}
	    //echo "<pre>";
		// print_r($booklist);
		// echo "</pre>";
		fclose($handle);
		return $booklist;
}


function Status($status, $booklist)
{
	
	$books = Filearr($booklist);
	// echo "<pre>";
	// print_r($books);
	// echo "</pre>";
			foreach ($books as $key => $value) {
		 		if ($value['status'] == $status) {
					 echo $value['title'] ."<br>";
				}
			}return $books;	
}
$result = Status(1, '');


function Conclusion()
{
	$handle = fopen("file.txt", "r");
		while (($buffer = fgets($handle, 1024)) !== false) {
			$booksChunks = explode('|', $buffer);
			$booksChunks = array('title' => $booksChunks[0], 'author' => $booksChunks[1],  'print' => $booksChunks[2], 'status' => $booksChunks[3]);
 			$booklist[] = $booksChunks;
        }
        foreach ($booklist as $key => $value) {
        	// echo $value['title'];
        }
        
        return $booklist;

}
$res = Conclusion('');

?>

<!-- <!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Test html</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<style>
		</style>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>Книга</th>
				<th>Автор</th>
				<th>Издательство</th>
				<th>Состояние</th>
			</tr>
			<tr>
				<td><?php  ?></td>
				<td><?php  ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</body>
</html>	
 -->