<?php
	$m = new MongoClient();
	echo "Connection to the database successful";
	
	$db = $m -> TYIT_229632;
	echo "<br>Database TYIT_229632 selected";
	$collection = $db -> TYITCOL1;
	echo "<br>Collection selected successfully";
	
	$cursor = $collection -> find();
	
	echo "<br>Document<br>";
	
	foreach($cursor as $document)
	{
		echo $document["title"]."<br>";
		echo $document["description"]."<br>";
		echo $document["URL"]."<br>";
		echo $document["by"]."<br>";
	}
?>