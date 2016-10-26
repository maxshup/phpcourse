<?php

class Task
{
	public $category; 
	public $title; 
	public $description;
	public $result;

	public function __construct($title, $description, $result)
	{
		$this->category = $category;
		$this->title = $title;
		$this->description = $description;
	}
	public function	run($inputData)
	{
		if (!empty($inputData['hello'])) {
			$count = $inputData['hello'];
		} else {
			$count = 3;
		}
		$result = '';
		for ($i = 0; $i < $count; $i++) {
			$result .= 'Hello World!<br>';
		}
		return $result;
	}
}