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
   @require "navbar2.php";
require 'connect.php';
$str='manik';
$num=0;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
	   $sql = "SELECT * FROM `subwise` WHERE `subject`='ITWS'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$num+=1;
	$str.=$num;
$rollno = $row['rollno'];
$name = $row['name'];
$present = $_POST["$str"];
if($present>=75){
	$present=75;
}
$absent = 75-$present;
$percent = (($present)*100)/75;
$sqll = "UPDATE `subwise` SET 
	   `present`='$present',`absent`='$absent',`percent`='$percent' WHERE `subject`='ITWS' AND `rollno`='$rollno'";
if ($conn->query($sqll) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}

    }
} else {
    echo "0 results";
   }
   echo "Record updated succesfully";
   }
  
?>
<body>
<div id='table'><br>
<table style="width:99.9%"border="5">
<form method="POST" action="edit_itws.php">
<?php
include 'connect.php';
$sql = "SELECT * FROM `subwise` WHERE `subject`='ITWS'";
$result = $conn->query($sql);	
echo '<tr>';
echo '<th>SEMESTER</th>';
echo '<th>GROUP</th>';
echo '<th>ROLL NO</th>';
echo '<th>NAME</th>';
echo '<th>SUBJECT</th>';
echo '<th>NO.OF.DAYS Present</th>';
echo '</tr>';
    // output data of each row
	$str='manik';
$num=0;
    while($row = $result->fetch_assoc()) {
		$num+=1;
	$str.=$num;
		$semester=1;
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
echo "<td><input type='int'  name='$str' value=$present></td>";
echo '</tr>';
    }
?>
<input type="submit" name="submit" value="save the changes">
</form>
</table>
</div>
</body>
</html>
