<!DOCTYPE html>
<html>
<head>

  <title>Component Order Form</title>
  <meta content="noindex, nofollow" name="robots">

<link rel="stylesheet" type="text/css" href="Design_Submit.css">
</head>
<body>


 <?php
 include("db.php");
  $email=$_GET['email'];
     
     

      $sql="SELECT * from register where Email='$email'";
      $result=$mysqli->query($sql);
   
            if($row=mysqli_fetch_array($result)) {
                //$email=$row['email'];
                echo "Hello!";
            echo  $row['First'];  
        }

 ?>
 <?php
  
  $name=$_GET['name'];
  $sql="SELECT * FROM it where name='$name'";
    $result=$mysqli->query($sql);
   
    if ($row=mysqli_fetch_array($result)) {
        

                 
                    $name=$row['name'];
                    
                    
                    $price=$row['price'];
                   
                    
                  $image=$row['image'];

                  

                  
    }
    ?>

   <div style="text-align: center; background-color: #4797B1;color: white; font-size: 25px">
     <div style="background-color:#626FE6; color: black">
     <h1>
      <strong><em>Component Order Form</em></strong>
     </h1>
    </div>
    <form action="ItAddToCart.php" method="post">
      Quantity         :
        <select id="qty" name="quantity"  onchange="calc()" required="">

    <option  value="1" selected="selected">1</option>  
    <option  value="2">2</option> 
    <option  value="3">3</option>
    <option  value="4">4</option>
    <option  value="5">5</option>
  
  </select>  &nbsp  
  <br>
  <br>

  <!-- show the UnitPrice -->

           <div style="text-align: center; background-color: #4797B1;">
   UnitPrice:
   <label id="unit">



   <?php
    echo $price;                              
    ?>

  
   </label>
   </div>
      <!-- show the UnitPrice -->


 <div style="text-align: center; background-color: #4797B1; color: white; font-size: 25px">
  <br>
  <br>




  TotalCost :
  <input type="text" name="total" id="total" required=""> <br>
  <input type="hidden" name="email" value="<?php echo $email ?> ">
  <input type="hidden" name="name" value="<?php echo $name?> ">
  <input type="hidden" name="price" value="<?php echo $price?>">
  <input type="hidden" name="image" value="<?php echo $image?>">

  <input class="button2" type="submit" value="AddToCart" required=""  >
  </div></form>
  <br>
  <br>


                      
    
   </div>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

    <script type="text/javascript">
    
   
       
   function calc()
   {
   var totalcost;
   var price;
   var quantity;

   price = $("#unit").text();
   
  var selects = document.getElementById("qty");
  var quantity = selects.options[selects.selectedIndex].value;// will gives u 1
   

   totalcost = price * quantity;
    
  $('#total').val(totalcost );
  //  alert(totalcost);
  }



 

 
</script>




     
    </div>
?>



    

  
    </div>
?>
</body>
</html>