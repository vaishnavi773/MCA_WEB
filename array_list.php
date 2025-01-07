<?php
	$fruits=["Apple","Banana","Orange","Grapes"];
	$a=array("pen","pencil","book");
	
	foreach($fruits as $fruit){
		echo $fruit."<br>";
	}
	echo "<br>  ";
	print "array";
	echo "<br><br>";
	print_r($a);
	echo "<br><br><br>";
	print "sorted array";
	echo "<br><br>";
	
	asort($a);
	print_r($a);
	echo "<br><br><br>";
	print "unsorted array";
	echo "<br><br>";
	
	arsort($a);
	print_r($a);
	
	
?>