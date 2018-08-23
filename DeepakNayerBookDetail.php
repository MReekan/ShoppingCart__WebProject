<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
      <meta content="noindex, nofollow" name="robots">
<link rel="stylesheet" type="text/css" href="Design_Submit.css">
</head>
<body>
</body>


   <!-- confirm order -->

   <!-- confirm order -->
</html>
<?php
      include("db.php");
     $email=$_GET['email'];
     
     

      $sqll="SELECT * from register where Email='$email'";
      $result=$mysqli->query($sqll);
   
            if($row=mysqli_fetch_array($result)) {
                //$email=$row['email'];
                echo "Hello!";
                $nameeee=$row['First'];
            echo  $row['First'];  
        }

            
            
  
         
   
    
    $name=$_GET['name'];
    $sql="SELECT * FROM deepaknayer where name='$name'";
    $result=$mysqli->query($sql);
    ?>
    <div style="text-align: center; background-color: #3498DB; color: white ; font-size:25px">
    <?php
    if ($row=mysqli_fetch_array($result)) {
           ?>
           <div style="background-color: #F03861; color: black">
             <br>
             <br>
              <h2><STRONG><EM>Book Details</EM></STRONG></h2>
           </div>
           <?php


                     echo "BookName     :"; 
                    echo  $row['name'] ;
                    $name=$row['name'];
                    echo "&nbsp &nbsp"; 
                    echo "<br>"; 
                    echo "<br>";

                    echo "BookId    :";  
                    echo $row['id'] ; 
                    echo "&nbsp &nbsp"; 
                    echo "<br>";
                    echo "<br>";

                    echo "AuthorName   :";  
                    echo $row['author_name'] ; 
                    echo "&nbsp &nbsp"; 
                    echo "<br>";
                    echo "<br>";

                    echo "Price     :"; 
                    echo $row['price'] ;
                    echo "&nbsp &nbsp";
                    echo "<br>";
                    echo "<br>";

                    echo "AvailableQuantity     :"; 
                    echo $row['quantity'] ;

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
 <a  href="DeepakNayerOrderNow.php?name=<?php echo "$name"; ?>&email=<?php echo $email ?>" >ClickMe</a>
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
?>

</body>
</html>