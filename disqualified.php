<!DOCTYPE html>
<html>
<head>
<style>
.lose{
	color:#FF0000;
}
#table{
   margin-top:30px;
   font-size:20px;
   text-transform: uppercase;
   }
</style>
</head>
<?php
   @require "navbar1.php";
require 'connect.php';
?>
<body>
<div id='table'><br>
<table style="width:99.9%"border="5">
<?php
include 'connect.php';
include 'update.php';
$sql = "SELECT * FROM `overall` WHERE `attendance`<85";
$result = $conn->query($sql);	
echo '<tr>';
echo '<th>SEMESTER</th>';
echo '<th>GROUP</th>';
echo '<th>ROLL NO</th>';
echo '<th>NAME</th>';
echo '<th>PERCENT</th>';
echo '<th>RESULT</th>';
echo '</tr>';
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $semester = 1;
$group = 'CSE';
$roll = $row['roll'];
$name = $row['names'];
$subject = $row['attendance'];
$present = $row['result'];
echo '<tr>';
echo "<td>$semester</td>";
echo "<td>$group</td>";
echo "<td>$roll</td>";
echo "<td>$name</td>";
echo "<td>$subject</td>";
echo "<td class=\"lose\">$present</td>";
echo '</tr>';
    }
 $conn->close();
?>
</table>
</div>
</body>
</html>
