
<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>  Online Book Store  </title>
	<link rel="stylesheet" type="text/css" href="MyProject.css" >
   <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>

<?php
  $db=mysql_connect("localhost","root","");
  mysql_select_db("online book store");
?>

<div id="head">
<div id="reg"><label id="sign">
 

<?php 

  $email="";
  $first="";
    if(isset($_POST['Register'])){
        $first=$_POST['fname'];
        $last=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];

      $sql="insert into register(First,Last,Email,Password)values('$first','$last','$email','$password')";
      if(mysql_query($sql)){
       
      echo "Hello! $first" ; 

    
       } 
    }
      else{
      if(isset($_POST['Signin'])){  
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql=mysql_query("select first from register where Email='$email' and Password='$password'");
            if($row=mysql_fetch_array($sql)){
                ?>
          <label>
             <?php
                echo "Hello!";
            echo  $row['First'];  
            $_SESSION['sar'] = $row['First'];

            ?>
       </label>
       <?php
        
            }
          }
            
              ?>
            
              <?php
            };
?> 

</label>
</div>
   


<div id="contain">
   <article id="mainpage">
   	 
    <div >
      <img src="image/logo2.png" width="700px"; height="250px";>
    </div>
   </article>

   

    
     


    <div id="topmenu">
   	<ul>
   		<li id="hover"> <a href="Signin.php"                 > Sign in          </a> </li>     &nbsp &nbsp
   		<li> <a href=" Register.php"              >  Register        </a> </li>    &nbsp &nbsp
        <li> <a onclick="logoutConfirm()" href=" UserLogout.php"              >  Logout       </a> </li>

		
   		
   	</ul>
   </div>   <br>



     <form id="search-form_3"  action="search.php" method="post">

    <input type="text" class="search_3" name="term" />
    <input type="hidden" name="email" value="<?php echo $email ?>"/>
    <input type="submit" name="submit"  class="submit_3" value="Search" />  
  

    </form>

    



   <nav id="mainmenu">
   	<ul>
   	<li > <a href="MyProject.php"       > Home           </a> </li>     &nbsp &nbsp
   	<li> <a href="AboutUs.html"       > AboutUs        </a> </li>     &nbsp &nbsp
		<li> <a href="NewProduct.php"    > NewProduct     </a> </li>     &nbsp &nbsp
		<li> <a href="MyAccount.html"     > MyAccount      </a> </li>

      
		
   		
   	</ul>

   </nav>
      
         

   <aside id="sidebar">
   <ul>
   <li class="back">Categaries</li>  <br>
        <ul>
        	
        	<li><a href="Novel.php?email=<?php echo $email ?>&first=<?php echo $first ?>"      >Novel      </a></li> 
        	<li><a href="It.php?email=<?php echo $email ?>&first=<?php echo $first ?>"         >It    </a></li> 
        	<li><a href="Technology.php?email=<?php echo $email ?>&first=<?php echo $first ?>" >Technology</a></li> 
        
        	
        </ul>
        <br>
   
   <li id="ba" class="back">Authors </li>	  <br>
         <ul>
        	
        	<li><a href="DeepakNayer.php?email=<?php echo $email ?>&first=<?php echo $first ?>"         >DeepakNayer      </a></li> 
        	<li><a href="Kannathasan.php?email=<?php echo $email ?>&first=<?php echo $first ?>"          >Kannathasan      </a></li> 
        	<li><a href="Vairamuththu.php?email=<?php echo $email ?>&first=<?php echo $first ?>"        >Vairamuththu      </a></li> 
       
        	
        	
        </ul>
   	

   	</ul>
   </aside>

   <aside id="sidebar2">
   <ul>

   
   <li class="back">Important Links</li>  <br>
        <ul>
        	 
        	<li><a style="text-align: left;" href="AboutUs.html"      >AboutUs      </a></li> 
        	<li><a href="ContactUs.html"    >ContactUs    </a></li> 
        	<li><a href="PrivacyNotice.html">PrivacyNotice</a></li> 
        	<li><a href="SeeMap.html"       >SeeMap       </a></li> 
        	
        </ul>
        <br>
   <li class="back"> Informations </li>  <br>
        <ul>
        	
        	<li><a href="PrivacyNotice.html">PrivacyNotice</a></li> 
        	<li><a href="SeeMap.html"       >SeeMap       </a></li> 
        </ul>
        <br>
   
   	

   	</ul>
   </aside>
	
</div>   <br>
      <div  id="welcome">
      	  <p><h2> <em>Hello!</em> Welcome to Online Book Store</h2></p>
      </div>
     


     <!-- front image -->

            <div>
        <!DOCTYPE html>

<head>
  <title>Slide2</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Cssslider" />
  
  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->

</head>
<body style="margin:auto">
  
  <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
    <li><img src="data1/images/e.jpg" alt="e" title="e" id="wows1_0"/></li>
    <li><img src="data1/images/front1.jpg" alt="front1" title="front1" id="wows1_1"/></li>
    <li><img src="data1/images/front3.jpg" alt="front3" title="front3" id="wows1_2"/></li>
    <li><a href="http://wowslider.com/vi"><img src="data1/images/front8.jpg" alt="bootstrap slider" title="front8" id="wows1_3"/></a></li>
    <li><img src="data1/images/logo2.png" alt="logo2" title="logo2" id="wows1_4"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="e"><span><img src="data1/tooltips/e.jpg" alt="e"/>1</span></a>
    <a href="#" title="front1"><span><img src="data1/tooltips/front1.jpg" alt="front1"/>2</span></a>
    <a href="#" title="front3"><span><img src="data1/tooltips/front3.jpg" alt="front3"/>3</span></a>
    <a href="#" title="front8"><span><img src="data1/tooltips/front8.jpg" alt="front8"/>4</span></a>
    <a href="#" title="logo2"><span><img src="data1/tooltips/logo2.png" alt="logo2"/>5</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">cssslider</a> by WOWSlider.com v8.7</div>
  <div class="ws_shadow"></div>
  </div>  
  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>
  <!-- End WOWSlider.com BODY section -->

</body>

      </div>
         
        <!-- <table >  -->


        <div style="border:none;">
  <img src="image/logo.png" style="width: 700px; height: 150px">
       </div>
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
  <!-- </table>  -->
   

     <?php
     include("TableDesign.php");
      ?>

     

      <footer id="foo">
  <marquee>     <h2>Copy rights @reekanse.com </h2> </marquee>
   </footer>
   
</html>