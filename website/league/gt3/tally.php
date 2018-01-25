<?php
$con = mysql_connect("localhost", "pcars","64752272","") or die('Could not connect: ' . mysql_error());
       mysql_select_db("pcars", $con);
$result  = mysql_query("SELECT Name, Race1, Race2, Race3, Race4, Race5, Race6, Race7, Race8, Race9, Race10, sum(Race1 + Race2 + Race3 + Race4 + Race5 + Race6 + Race7 + Race8 + Race9 + Race10) as total from leader group by Name");
   if (mysql_num_rows($result)) {
            while ($row = mysql_fetch_assoc($result)) {
	 $name = $row['Name'];
	 $total = $row['total'];
 $sql = "UPDATE leader SET Points = '$total' WHERE Name = '$name'" ;
 
 mysql_select_db('pcars');
            $retval = mysql_query( $sql, $con );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }

 }
}
?>

