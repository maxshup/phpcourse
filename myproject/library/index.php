<?php

function getTasksMap()
{

	return [
			'loops' => [
				'title' => 'Loops',
				'tasks' => [
				        1,
				        2,
				        3,
				        4,
				        5,
				        6	
			    ]
			],
			'arrays' => [
	    		'title' => 'Arrays',
	    		'tasks' => [
	    		        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12
	    		      
        	   ]
   		    ],
   		    'functions' => [
   		    	'title' => 'Functions',
   		    	'tasks' => [
   		    	  		1, 2, 3, 4, 5
   		    ]	]  		
    ];

	return 
		array(
			"loops" => array(
				"title" => "Loops",
				"tasks" => array(1,2,3,4,5,6)		
			),
			"array1" => array(
	    		"title" => "Arrays1",
	    		"tasks" => array( 1,2,3,4,5,6,7)
        	),
   		);

}

function getTaskTitle($section, $taskNumber)
{
	$tasksMap = getTasksMap();
	//get page title
	$sectionData = $tasksMap[$section];
	$titleChunks = [
    	$sectionData['title'],
    	$taskNumber
	];
	return implode('->', $titleChunks);
}



function getTask($section, $taskNumber)
{
	$tasksMap = getTasksMap();
	$title = getTaskTitle($section, $taskNumber);
	require __DIR__ . '/../tasks/' . $section . '/' . $taskNumber . '.php';
	return [
		'title' => $title, 
		'description' => $description,
		'inputData' => $inputData,
		'result' => $result
	];
}
