<!DOCTYPE html>
<html>
<head>
<style>
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
$sql = "SELECT * FROM `subwise` WHERE `subject`='programming'";
$result = $conn->query($sql);	
echo '<tr>';
echo '<th>SEMESTER</th>';
echo '<th>GROUP</th>';
echo '<th>ROLL NO</th>';
echo '<th>NAME</th>';
echo '<th>SUBJECT</th>';
echo '<th>NO.OF.DAYS Present</th>';
echo '<th>NO.OF.DAYS Absent</th>';
echo '<th>PERCENT OF ATTENDANCE</th>';
echo '</tr>';
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $semester = 1;
$group = 'CSE';
$roll = $row['rollno'];
$name = $row['name'];
$subject = $row['subject'];
$present = $row['present'];
$absent = $row['absent'];
$percent = $row['percent'];
echo '<tr>';
echo "<td>$semester</td>";
echo "<td>$group</td>";
echo "<td>$roll</td>";
echo "<td>$name</td>";
echo "<td>$subject</td>";
echo "<td>$present</td>";
echo "<td>$absent</td>";
echo "<td>$percent</td>";
echo '</tr>';
    }
 $conn->close();
?>
</table>
</div>
</body>
</html>
