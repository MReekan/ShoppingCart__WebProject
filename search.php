<!DOCTYPE html>
<html>
<head>
  <title></title>
        <meta content="noindex, nofollow" name="robots">
<link rel="stylesheet" type="text/css" href="Design_Submit.css">
</head>
<body>

</body>
</html>
<?php
 
include("db.php");


    $email=$_POST['email'];
     
     

      $sqll="SELECT * from register where Email='$email'";
      $result=$mysqli->query($sqll);
   
            if($row=mysqli_fetch_array($result)) {
                //$email=$row['email'];
                echo "Hello!";
                $nameeee=$row['First'];
            echo  $row['First'];  
        }
 
?>
 <div style="text-align:center; background-color: #4797B1; color: white;font-size: 25px;">
<?php

   $term = $_POST['term'];
   
 
$sql= "select * from book where name like '%$term%'";
 $result=$mysqli->query($sql);
   ?>
  
   <?php
while ($row = mysqli_fetch_array( $result)){

	     ?>
    	   <div>
         <br>
         <br>
    	   	  <h2><STRONG><EM>Book Details</EM></STRONG></h2>
    	   </div>
    	   <?php

    echo 'ID: '.$row['id'];
    echo '<br/><br/>';
    echo '<br/> Book Name: '.$row['name'];
    echo '<br/><br/>';
    echo '<br/> Author Name: '.$row['author_name'];
    echo '<br/><br/>';
    echo '<br/> Price: '.$row['price'];
    echo '<br/><br/>';
    echo '<br/> AvailableQuantity: '.$row['quantity'];
    echo '<br/><br/>';
    $name=$row['name'];


        ?>
                    <div>
                         <br>
                         <br>
                      <div id="main">
                      <div id="first">
                      <div class="btn">
                      <input class="button2" type="button" value="OrderNow">
                     <?php
if (!empty($nameeee)) { ?>
 <a  href="OrderNow.php?name=<?php echo "$name"; ?>&email=<?php echo $email ?>" >ClickMe</a>
<?php
}else{?>
<a onclick="stop()" href="register.php" >ClickMe</a>
<?php } ?>
                    
   <script type="text/javascript">
       function stop()
       {
        if (confirm("if you want to Order the book goto register now!")) {
            return true;
        }
       }
   </script>
                          </div>
                            </div>
                           </div>
                      
                    </div>
                   
                    <?PHP
    }
    ?>
    </div>
    <?php

    if (empty($name)) {
    	echo "This Book is not found";
    }
     
     
  ?>