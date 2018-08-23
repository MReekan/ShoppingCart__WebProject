<?php
$db=mysql_connect("localhost","root","");
  mysql_select_db("online book store");
    
    $email     = $_POST['email'];
    $country = $_POST['country'];
    $address       = $_POST['address'];
    $city      = $_POST['city'];
    $province       = $_POST['province'];
    $phone       = $_POST['number'];
    echo $phone;

    $sql= "INSERT into delivery(Email,Country,Address,City,Province,MobilePhone) values('$email','$country','$address','$city','$province', '$phone' )";
    mysql_query($sql);
    
   header("location:Checkout.php");

    ?>