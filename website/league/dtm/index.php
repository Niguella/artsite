<style type="text/css">
table.db-table     { border-right:0px #ccc; border-left:0px #ccc; border-bottom:1px solid #ccc; }
table.db-table th  { border-left:1px solid #ccc; border-top:1px solid #ccc; border-bottom:1px solid #ccc;}
table.db-table td  { padding:0px; border-left:0px solid #ccc; border-top:0px solid #ccc; border-bottom:0px solid #ccc; }
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
.tg .tg-1{background-color:#38fff8;vertical-align:top}
.tg .tg-2{background-color:#9698ed;vertical-align:top}
.tg .tg-3{background-color:#67fd9a;vertical-align:top}
.tg .tg-4{background-color:#bbdaff;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-5{background-color:#fd6864;vertical-align:top}
.tg .tg-6{background-color:#fe996b;color:#666699;vertical-align:top}
.tg .tg-7{background-color:#fffe65;vertical-align:top}
.tg .tg-8{background-color:#67fd9a;vertical-align:top}
</style>
<body bgcolor=black   text=white>
<?php
include "tally.php";

$con = mysql_connect("localhost", "pcars","64752272","") or die('Could not connect: ' . mysql_error());
       mysql_select_db("pcars", $con);
       
// calculate totals and update
$result = mysql_query("SELECT Name,Points,Race1,Race2,Race3,Race4,Race5,Race6,Race7,Race8, sum(Race1 + Race2 + Race3 + Race4 + Race5 + Race6 + Race7 + Race8 ) as Total FROM leader1 GROUP BY Name");

Print "<center><table   cellpadding=1 class=tg>
			    <tr>
				<th class=tg-yw4 width=50px >Pos:</th>
				<th class=tg-yw4 width=110px>Name:</th>
				<th class=tg-yw4 width=50px>Points:</th>
				<th class=tg-yw4 width=50px>Race1</th>
				<th class=tg-yw4 width=50px>Race2</th>
				<th class=tg-yw4 width=50px>Race3</th>
				<th class=tg-yw4 width=50px>Race4</th>
				<th class=tg-yw4 width=50px>Race5</th>
				<th class=tg-yw4 width=50px>Race6</th>
				<th class=tg-yw4 width=50px>Race7</th>
<!--
				<th class=tg-yw4 width=50px>Race8</th>

				<th class=tg-yw4 width=50px>Race9</th>
				<th class=tg-yw4 width=50px>Race10</th>
				<th class=tg-yw4 width=50px>Race11</th>
				<th class=tg-yw4 width=50px>Race12</th>
				<th class=tg-yw4 width=50px>Race13</th>
				<th class=tg-yw4 width=50px>Race14</th>
				-->
				</tr>";
print "</table>";

// sql stuff
        //$result = mysql_query("SELECT * FROM leader ORDER BY Points DESC");
        $result = mysql_query("SELECT * FROM leader1 ORDER BY Points DESC");
        $rank = 1;
        
        if (mysql_num_rows($result)) {
            while ($row = mysql_fetch_assoc($result)) {


				Print "<table  cellpadding=1 class=tg>";
                echo "<td class='tg-4' width=50px align=center>{$rank} </td> 
                      <td class='tg-3' width=110px lign=left> {$row['Name']}</td>
                      <td class='tg-5' width=50px align=center> {$row['Points']}</td>
					  <td class='tg-3' width=50px align=center> {$row['Race1']}</td>
					  <td class='tg-7' width=50px align=center> {$row['Race2']}</td>
					  <td class='tg-3' width=50px align=center> {$row['Race3']}</td>
					  <td class='tg-7' width=50px align=center> {$row['Race4']}</td>
					  <td class='tg-3' width=50px align=center> {$row['Race5']}</td>
					  <td class='tg-7' width=50px align=center> {$row['Race6']}</td>
					  <td class='tg-3' width=50px align=center> {$row['Race7']}</td>
					  ";
					  
                $rank++;
               	print "</tr>";

print "</table>";
            }
        }
?>

<br>
<?php
include "team.php";
Print "<center><table   cellpadding=1 class=tg>
			    <tr>
				<th class=tg-yw4 width=50px >Pos:</th>
				<th class=tg-yw4 width=350px>Name:</th>
				<th class=tg-yw4 width=50px>Points:</th>

				</tr>";
print "</table>";

$con = mysql_connect("localhost", "pcars","64752272","") or die('Could not connect: ' . mysql_error());
       mysql_select_db("pcars", $con);
       
// calculate totals and update
        $result = mysql_query("SELECT team, sum(Points) as point from leader1 group by team ORDER BY point DESC");
        $rank = 1;
        
//        if (mysql_num_rows($result)) {
            while ($row = mysql_fetch_assoc($result)) {


				Print "<table  cellpadding=1 class=tg>";
                echo "<td class='tg-4' width=50px align=center>{$rank} </td> 
                      <td class='tg-3' width=350px lign=left> {$row['team']}</td>
                      <td class='tg-5' width=50px align=center> {$row['point']}</td>
					  ";
					  
                $rank++;
               	print "</tr>";

print "</table>";
            }
 //       }
?>

