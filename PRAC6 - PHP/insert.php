<?php
	$m = new MongoClient();
	echo "Connection to the database successful";
	
	$db = $m -> TYIT_229632;
	echo "<br>Database TYIT_229632 selected";
	$collection = $db -> TYITCOL1;
	echo "<br>Collection php selected successfully";
	
	$document = array(
		"title" => "Php",
		"description" => "database",
		"likes" => 52,
		"URL" => "https://www.mongo.com",
		"by" => "NoSQL");
	$collection -> insert($document);
	echo "<br>Document inserted successfully";
?>