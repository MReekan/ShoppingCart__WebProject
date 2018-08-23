<?php
 $servername="localhost";
 $username="root";
 $password="";
 $db="online book store";

 $conn=new mysqli($servername,$username,$password,$db);

 if (!$conn) {
 	die("Error on connection".$conn->connect_error);
 }

 ?>
