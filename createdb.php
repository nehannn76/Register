<?php
 // DB connection info
 

     $conn = mysqli_connect("172.30.179.150","user0J1","8FVLofLqcBKWYjQJ");
	if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	 $sql = "CREATE DATABASE mydb";

if(mysqli_query($conn, $sql)){
    echo "Database demo created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?> 
 