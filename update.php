<?php
require "connect.php";
$percent=0;
$roll=0;
while($roll<35){
$roll+=1;
$percent=0;
$sql = "SELECT * FROM `subwise` WHERE `rollno`=$roll ";
$result = $conn->query($sql); 
 while($row = $result->fetch_assoc()) {
	 $name=$row['name'];
	 $percent+= $row['percent'];
 }
 $percent= ($percent)/(5);
 if($percent>=85){
	 $result='Qualified';
 }
 else{
	 $result='Disqualified';
 }
$sqll="UPDATE `overall` SET 
	   `attendance`='$percent',`result`='$result' WHERE `roll`='$roll'";
	    if ($conn->query($sqll) === TRUE) {
        
		  
    } else {
            echo '<span class="error"> "Error: " . $sql . "<br>" . $conn->error</span>'; 
    }

}


?>