<?php

// include database 

$servername = "localhost";
$username = "developertes";
$password = "HL@2021test";
$dbname = "hla";

//

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//table users - id (int), name (varchar 255), email (varchar 255), token (MD5 varchar 255), created (datetime)
$user = "INSERT INTO users (id,name,email,token,created)VALUES('00003','Nurul Farah Atiqah','nurulfarahatiqah34@gmail.com','b4a3a48795595af525772777b4b3b86e','26-10-2021 15:55')";

//table locations - id, user_id (int), district (varchar 255), state (varchar 255),country (varchar 255)
$location = "INSERT INTO location(location_id,id,district,state,country)VALUES(00001,00003,'Pekan','Pahang','Malaysia')";



if ($conn->query($user) === TRUE && $conn->query($location) === TRUE ) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
