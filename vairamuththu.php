
<!DOCTYPE html>
<html>
<head>
  <title>NovelBook</title>

    <style type="text/css">
       
    
  #change{
    float: left;
    height: 330px;
    width: 330px;
    padding: 10px;
    margin: 50px;
    border:2px solid black;
    background-color: #476D7C;

  }

  #heading{
    text-align: center;
    background-color: #5A5D9D;
    font-size: 20px;
  }


    </style>
</head>
<body>

   <?php
  $db=mysql_connect("localhost","root","");
  mysql_select_db("online book store");
?>

<div id="head">
<div id="reg"><label id="sign">
 

<?php 


    /*if(isset($_POST['Register'])){
        $first=$_POST['fname'];
        $last=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];

      $sql="insert into register(First,Last,Email,Password)values('$first','$last','$email','$password')";
      if(mysql_query($sql)){

      echo "Hello! $first" ; 
      
       } 
    }
      else{*/

         $email=$_GET['email'];
         $first=$_GET['first'];
         
      $sql=mysql_query("select first from register where Email='$email'");
            if($row=mysql_fetch_array($sql)){
              
                echo "Hello!";
            echo  $first;  
           
            }
      
?> 

</label>
</div>

   <div id="heading"><h1><em>Vairamuththu Books</em></h1> </div>



<div>
 
              
   <?php
   $sql=mysql_query("select * from vairamuththu");
    
    while ($row=mysql_fetch_array($sql)) {
              ?>
              <table id="change">
                 <div >
                 <tr> <td>
                <img src="<?php echo 'vairamuththu/'.$row['image']?>"> 

                  </td>    <td>
                <?PHP
                     echo  $row['name'] ;
                     $name=$row['name'];
                    echo "&nbsp &nbsp"; 
                    echo "<br>";  
                    
                    echo $row['price'] ;
                    echo "&nbsp &nbsp";

                    ?>
                    <div>

                      <input type="submit" name="BuyNow" value="BuyNow">
                      <a href="VairamuththuBookDetail.php?name=<?php echo $name ?>&email=<?php echo $email ?>">ClickMe</a>
                    </div>
                   </td> </tr> 
                    <?PHP  
                    
               ?>
                
              </div>
              </table>
              <?php
    }

   ?>
 </div> 
          
    </body>

          <footer>
  <marquee>     <h2>Copy rights @reekanse.com </h2> </marquee>
   </footer>
</html>    