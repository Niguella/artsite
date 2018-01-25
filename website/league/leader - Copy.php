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
.tg .tg-4{background-color:#bbdaff;vertical-align:center}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-5{background-color:#fd6864;vertical-align:top}
.tg .tg-6{background-color:#fe996b;color:#666699;vertical-align:top}
.tg .tg-7{background-color:#fffe65;vertical-align:top}
.tg .tg-8{background-color:#67fd9a;vertical-align:top}
</style>
<body bgcolor=black   text=white><form method="POST" >
<label for="Race"> Date : </label>
  <select id="cmbMake" name="Make" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="0">Select Race</option>
     <option value="Race1">18/05</option>
     <option value="Race2">25/05</option>
     <option value="Race3">01/06</option>
     <option value="Race4">08/06</option>
     <option value="Race5">15/06</option>
     <option value="Race6">22/06</option>
     <option value="Race7">29/06</option>
     <option value="Race8">06/07</option>
     <option value="Race9">13/07</option>
     <option value="Race10">20/07</option>
     <option value="Race11">27/07</option>
     <option value="Race12">03/08</option>
     <option value="Race13">10/08</option>
     <option value="Race14">17/08</option>
 
</select>
<input type="hidden" name="selected_text" id="selected_text" value="" />
<input type="submit" name="submit" value="date"/>
</form>

<?php
//include "host.php";
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$con = mysql_connect("localhost", "pcars","64752272","") or die('Could not connect: ' . mysql_error());
       mysql_select_db("pcars", $con);

// end Session info //

Print "<table  cellpadding=1 class=tg>
			    <tr>
				<th width=100px>Name</th>
				<th width=50px>Points:</th>
				<th width=70px>New:</th>
				</tr>";
			print "</table>";
		
        $result = mysql_query("SELECT * FROM leader ORDER BY Points DESC");
        
            while ($row = mysql_fetch_assoc($result)) {	
			//print $row['Name'];
			$tame = $row['Name'];
			$name = $row['Name'];
			array_push($name);
			//print_r($name);


				echo "<table  cellpadding=1 class=tg>";
                echo "<td class='tg' width=100px lign=left>". $row['Name'] ."</td>";
                echo "<td class='tg' width=50px lign=left>". $row['Points'] ."</td>";
                print "<form action='post.php' method='get'><input type=hidden name=name value=". $name .">
               	<td class='tg' width=70px align=center><input type='text' name='Points' maxlength='2' size='2'></td>";
               
          
          echo " </table>";
          }
          echo  "<input type='submit' name='Submit'  value='Submit' id='array'>"; // id='Points'
          echo "</form>";         
?>
</body>
