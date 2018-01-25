<?php
//var_dump($_POST);
$name = $_REQUEST['name'];
$points = $_REQUEST['points'];
$date = $_REQUEST['date'];
print_r($_REQUEST);
$name0 = $name['0'];
$name1 = $name['1'];
$name2 = $name['2'];
$name3 = $name['3'];
$name4 = $name['4'];
$name5 = $name['5'];
$name6 = $name['6'];
$name7 = $name['7'];
$name8 = $name['8'];
$name9 = $name['9'];
$name10 = $name['10'];
$name11 = $name['11'];
$name12 = $name['12'];
$name13 = $name['13'];

$points0 = $points['0'];
$points1 = $points['1'];
$points2 = $points['2'];
$points3 = $points['3'];
$points4 = $points['4'];
$points5 = $points['5'];
$points6 = $points['6'];
$points7 = $points['7'];
$points8 = $points['8'];
$points9 = $points['9'];
$points10 = $points['10'];
$points11 = $points['11'];
$points12 = $points['12'];
$points13 = $points['13'];

$con = mysql_connect("localhost", "pcars","64752272","") or die('Could not connect: ' . mysql_error());
       mysql_select_db("pcars", $con);     
   	$result0 = mysql_query("SELECT * FROM leader WHERE Name = '$name0' ");
	mysql_query("UPDATE leader SET $date = '$points0' WHERE Name = '$name0'");

   	$result1 = mysql_query("SELECT * FROM leader WHERE Name = '$name1' ");
mysql_query("UPDATE leader SET $date = '$points1' WHERE Name = '$name1'");

   	$result2 = mysql_query("SELECT * FROM leader WHERE Name = '$name2' ");
mysql_query("UPDATE leader SET $date = '$points2' WHERE Name = '$name2'");

   	$result3 = mysql_query("SELECT * FROM leader WHERE Name = '$name3' ");
mysql_query("UPDATE leader SET $date = '$points3' WHERE Name = '$name3'");

   	$result4 = mysql_query("SELECT * FROM leader WHERE Name = '$name4' ");
mysql_query("UPDATE leader SET $date = '$points4' WHERE Name = '$name4'");

   	$result5 = mysql_query("SELECT * FROM leader WHERE Name = '$name5' ");
mysql_query("UPDATE leader SET $date = '$points5' WHERE Name = '$name5'");

   	$result6 = mysql_query("SELECT * FROM leader WHERE Name = '$name6' ");
mysql_query("UPDATE leader SET $date = '$points6' WHERE Name = '$name6'");

   	$result7 = mysql_query("SELECT * FROM leader WHERE Name = '$name7' ");
mysql_query("UPDATE leader SET $date = '$points7' WHERE Name = '$name7'");

   	$result8 = mysql_query("SELECT * FROM leader WHERE Name = '$name8' ");
mysql_query("UPDATE leader SET $date = '$points8' WHERE Name = '$name8'");

 	$result9 = mysql_query("SELECT * FROM leader WHERE Name = '$name9' ");
mysql_query("UPDATE leader SET $date = '$points9' WHERE Name = '$name9'");

   	$result10 = mysql_query("SELECT * FROM leader WHERE Name = '$name10' ");
mysql_query("UPDATE leader SET $date = '$points10' WHERE Name = '$name10'");	

   	$result11 = mysql_query("SELECT * FROM leader WHERE Name = '$name11' ");
mysql_query("UPDATE leader SET $date = '$points11' WHERE Name = '$name11'");

   	$result12 = mysql_query("SELECT * FROM leader WHERE Name = '$name12' ");
mysql_query("UPDATE leader SET $date = '$points12' WHERE Name = '$name12'");

   	$result13 = mysql_query("SELECT * FROM leader WHERE Name = '$name13' ");
mysql_query("UPDATE leader SET $date = '$points13' WHERE Name = '$name13'");
	
date;

?>
