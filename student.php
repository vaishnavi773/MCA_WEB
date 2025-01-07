<?php
	$a=array("Sneha","Akhila","Shifana","Nayana");
	
	print " array of student";
	echo "<br>  ";
	print_r($a);
	echo "<br><br><br>";
	print "sorted array of student";//ascenting
	echo "<br>";
	asort($a);
	print_r($a);
	echo "<br><br><br>";
	print "unsorted array of student";//decenting
	echo "<br>";

	arsort($a);
	print_r($a);
	
	
?>