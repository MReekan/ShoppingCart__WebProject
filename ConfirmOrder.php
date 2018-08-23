<!DOCTYPE html>
<html>
<head>
	<title>Delivery Product</title>
  <style type="text/css">
    #in{
      background-color: red;
    }
  </style>
</head>
<body style=" background-color: rgb(100,100,100);">

  <div style="text-align: center; background-color: rgb(150,180,100);">
  	<h1><em> Where to you want your order Delivered?</em></h1>
  </div>
  <?php

   include("db.php");

    $email=$_POST['email'];
    ?>

     <?php
     
    

  $sql="SELECT * from cart where Email='$email'";
   $result=$mysqli->query($sql);

            if($row=mysqli_fetch_array($result)) {
                //$email=$row['email'];
                
            
             $email= $row['Email'];

        }

 ?>


  
    <form action="check.php" method="post">
    
    <input type="email" name="email" value="<?php echo "$email"; ?>" >EmailAddress 
   <br> <br>
    <input type="text" name="country" placeholder="enter your country" required="">  
     Country   <br> <br>
   
     <input type="text" name="address" placeholder="enter your address" required="">
     Address    <br> <br>
   
      <input type="text" name="city" placeholder="enter your city" required="">
      City   <br> <br>
   
   <input type="text" name="province" placeholder="enter your province" required="">
    Province   <br> <br>
  
     <input type="number" name="number" placeholder="enter your mobile number" required="" data-validation="number" >
     MobliePhone  <br> <br>
   <br> <br>
   <input id="in" type="submit" name="checkout" value="checkout">
  </form>

       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

</script>
</body>
</html>