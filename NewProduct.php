  


  <div style="text-align: center; background-color: rgb(100,100,100);">
    <h1><em>NewProducts Are Here</em></h1>
  </div>

  <link rel="stylesheet" type="text/css" href="MyProject.css" >    
   <?php
    include("db.php");
    $sql="SELECT * FROM book";
    $result=$mysqli->query($sql);
    while ($row=mysqli_fetch_array($result)) {
              ?>
               <table id="change">
              <div  >
              <tr> <td>
                <img src="<?php echo 'img/'.$row['image']?>">
                
                
                     
                    </td>    <td>
                      <?PHP
                      echo $row['price'] ;
                     echo "<br>"; 
                    echo  $row['name'] ;
                     $name=$row['name'];
                    echo "&nbsp &nbsp"; 
                    echo "<br>";  
                    echo "&nbsp &nbsp";

                       ?>
                    <div>

                      <input type="submit" name="BuyNow" value="BuyNow">
                      <a href="singlebookdetail.php?name=<?php echo $name ?>&email=<?php echo $email ?>">ClickMe</a>
                    </div>
                     </td> </tr> 
                    <?PHP 
                    
               ?>
               
              </div>
              </table>
              <?php
    }

   ?>
   

     <?php
     include("TableDesign.php");
      ?>

      <footer id="foo">
  <marquee>     <h2>Copy rights @reekanse.com </h2> </marquee>
   </footer>
   
</html>