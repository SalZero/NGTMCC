<?php
	$m = new MongoClient();
	echo "Connection to the database successful";
	
	$db = $m -> TYIT_229632;
	echo "<br>Database TYIT_229632 selected";
	$collection = $db -> TYITCOL1;
	echo "<br>Collection php selected successfully";
	
	$collection -> remove(array(
		"title" => "Php"));
	echo "<br>Document deleted successfully";
	$cursor = $collection -> find();
	echo "<br>Updated Document";
	foreach($cursor as $document)
	{
		echo $document["title"]."<br>";
	}
?>