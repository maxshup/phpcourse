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


function Conclusion($handle)
{	
	$arr = Filearr($handle);
	foreach ($arr as $key => $value) {
		echo $value['title']." | "."</br>";
		

	}


	// $booksarr = Filearr($booklist);
	// echo " | Title | "." | Author | "." | Print | "." | status | "."<br>";
	
	// 	$file = implode(' | ', $booksarr[0]);
	// 	$file2 = implode(' | ', $booksarr[1]);
	// 	$file3 = implode(' | ', $booksarr[2]);
	// 	$file4= implode(' | ', $booksarr[3]);
	// 	$file5 = implode(' | ', $booksarr[4]);
	// 	echo $file."<br>". $file2."<br>".$file3."<br>".$file4."<br>".$file5;

		return ;
}
$res = Conclusion('');
