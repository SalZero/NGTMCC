<?php
	$m = new MongoClient();
	echo "Connection to the database successful";
	
	$db = $m -> TYIT_229632;
	echo "<br>Database TYIT_229632 selected";
	$collection = $db -> TYITCOL1;
	echo "<br>Collection php selected successfully";
	
	$collection -> update(array(
		"title" => "Php"),array('$set' => array(
			"title" => "Mongodb",
			"likes" => 50,
			"URL" => "http://www.mongodb.com",
			"by" => "NoSQL")));
	echo "<br>Document updated successfully";
	$cursor = $collection -> find();
	echo "<br>Updated Document";
	
?>
			