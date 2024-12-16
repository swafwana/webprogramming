<?php
$servername="localhost";
$username="root";
$password="";
$dbname="connection";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
else
{
	echo "connection succesful.<br>"; 	
}
//SQL to create table
$sql="CREATE TABLE IF NOT EXISTS MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR (30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if ($conn->query($sql)===TRUE)
{
	echo "Table MyGuests created successfully";
}
else
{
	echo"Error creating table:" .$conn->error;
}

$sql_insert="INSERT INTO MyGuests(id,firstname,lastname,email,reg_date)
VALUES(45,'AYSHA','JANAM','aysha@gmail.com', '2024-12-16 00:00:00')";
if ($conn->query($sql_insert) === TRUE)
{
    echo "New record created successfully.";
} else 
{
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>	