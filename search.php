<?php 

$connection = mysql_connect("localhost","root","admin");

mysql_select_db("train")or die(mysql_error());


$result = mysql_query("SELECT t_no FROM trains");
 while ($row = mysql_fetch_assoc($result)) {
echo "<div id='link' onClick='addText(\"".$row['username']."\");'>" . $row['username'] . "</div>";  
 }


  ?>