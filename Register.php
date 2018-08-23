<!doctype html>
<head>
<link rel="stylesheet" type="text/css" href="MyProject.css"/>
</style>
</head>
<body>
<p align="center">
<a href="MyProject.php"></a>
</p>
        <div id="center_register">
            <form action="MyProject.php" method="post">
<div id="sig">
<div id="reti"> <h2>Welcome to Register</h2></div><br>
<div id="name">
</br><input type="text" placeholder="Enter your first name" name="fname" required="" data-validation="length alphanumeric" 
         data-validation-length="3-12" 
         data-validation-error-msg="First name has to be an alphanumeric value (3-12 chars)"></div>
<div id="name">
</br><input type="text" placeholder="Enter your last name" name="lname" required="" data-validation="length alphanumeric" 
         data-validation-length="3-12" 
         data-validation-error-msg="Last name has to be an alphanumeric value (3-12 chars)"></div>
</br>
</br>
<input type="email" placeholder="Enter your email" name="email" required="" data-validation="email"><br>
</br>
<input type="password" placeholder="Enter your Password" id="pwd" class="masked" name="password" required=""  data-validation="strength" 
         data-validation-strength="2" data-validation-error-msg="Password has to be an eight value (must one character)" />
<br>
<div id="regi"><input type="submit" value="Register" name="Register" required=""></div>
</div>
</form>
        </div>

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

<?php
    $db=mysql_connect("localhost","root","");
    mysql_select_db("Online Book Store");
?>