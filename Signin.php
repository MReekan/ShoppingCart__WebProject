<!doctype html>
<head>
<link rel="stylesheet" type="text/css" href="MyProject.css" />
</head>
<body >
  
<p align="center">
<a href="MyProject.php"></a>
</p>
<div id="center_form">
    
                        <form action="MyProject.php" method="post">
                        <div id="sig">
                        <div id="reti"> <h2>Welcome to Sign in </h2 ></div></br>
                        </br>
                        <input type="email" placeholder="Enter your email" name="email" required="" data-validation="email"></br>
                        </br>
                        <input type="password" placeholder="Enter your Password" id="pwd" class="masked" name="password" required="" data-validation="strength" 
         data-validation-strength="2" data-validation-error-msg="Password has to be an eight value (must one character)" />
                        
                          </br></br>
                        <div id="regi"><input type="submit" value="Sign in" name="Signin" required="" /></div>
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