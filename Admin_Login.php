<!doctype html>
<head>
<link rel="stylesheet" type="text/css" href="Admin.css" />
</head>
<body >
   
<p align="center">
<a href="Admin.php"></a>
</p>
<div id="center_login">
    
                        <form action="Admin.php" method="post">
                        <div id="sig">
                        <div id="reti"> <h2>Login </h2 ></div></br>
                        </br>
                        <input type="text" placeholder="Enter your email" name="email" required="" data-validation="email"></br>
                        </br>
                        <input type="password" placeholder="Enter your Password" id="pwd" class="masked" name="password" required="" data-validation="strength" 
         data-validation-strength="2" data-validation-error-msg="Password has to be an eight value (must one character)" />
                         </br></br>
                        <div id="regi"><input type="submit" value="Login" name="Login"/></div>
                        </form>
</div>
                       <!--   -->
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