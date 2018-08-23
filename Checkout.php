

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="payform.css">
  <title>Pay Form</title>
</head>
<body> 

  <div class="logo">
    <img src="image/logo2.png" alt="" class="weblogo">
  </div>

  <div id="card">
    <h1 align="center">Credit or Debit Card</h1>
<form action="" method="post">
    <div id="cardno">
    <label><b>Card Number</b></label><br>
                        <input type="text" placeholder="Card Number" name="cardnumber" required data-validation="creditcard" data-validation-allowing="visa, mastercard, amex">
    </div>
    <br>

    <label><b>Expiration Date</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Security Code</b></label><br> 
    <div id="cardno1">
                        <input type="text" placeholder="DD/MM/YYYY" name="expirationdate" required  data-validation="date" data-validation-format="dd/mm/yyyy">
                        <input type="text" placeholder="4digits" name="securitycode" required>
    </div>
    <br>

    <label><b>First name</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Last name</b></label><br> 
    <div id="name">
                        <input type="text" placeholder="First name" name="fname" required>
                        <input type="text" placeholder="Last name" name="lname" required>
    </div>
    <br>

    <div align="center">
    <input type="submit" name="submit" value="submit">
    </div>
</form>
  </div>

  <?php

      
  $db=mysql_connect("localhost","root","");
  mysql_select_db("online book store");
    
          


    if(!empty($_POST))
    {

    $cardno     = $_POST['cardnumber'];
    $expiration = $_POST['expirationdate'];
    $code       = $_POST['securitycode'];
    $first      = $_POST['fname'];
    $last       = $_POST['lname'];

    $sql= "INSERT into checkout(cardnumber,expirationdate,securitycode,firstname,lastname) values
     ('$cardno','$expiration','$code','$first','$last')";
    mysql_query($sql);
    header("location:Finish.html");
    }

    
    ?>
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
