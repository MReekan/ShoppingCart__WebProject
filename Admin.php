<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Online Book Store</title>
	<link rel="stylesheet" type="text/css" href="Admin.css" >
	<link rel="stylesheet" type="text/css" href="ProductEntryDesign.css">
 
</head>
<body>

       
     <?php 

     $db=mysql_connect("localhost","root","");
       mysql_select_db("online book store");
    
       
        $email=$_POST['email'];
        $password=$_POST['password'];

      $sql="INSERT into admin_login(Email,Password)values('$email','$password')";
      mysql_query($sql);
      

     
      ?> 

   
<div id="contain">


    <div >
      <img src="image/logo.png" width="700px"; height="250px";>
    </div>
   


   <nav id="mainmenu">
   	<ul>
	<li> <a href="ProductEntry.php"      > ProductEntry          </a> </li>     &nbsp &nbsp
	<li> <a href="ProductDelete.php"     > ProductDelete          </a> </li>     &nbsp &nbsp
	<li> <a href="VeiwOrders.php"        > VeiwOrders             </a> </li>     &nbsp &nbsp
	<li> <a href="Logout.php"            > Logout                 </a> </li>
   		
   	</ul>
   </nav>


      <aside>
      	
                  <div class="menu1">
  					<button class="roombtn">BookNameEntryCatogory</button>
  					<div class="room-content">
    					<a href="NovelEntry.php">Novel</a>
    					<a href="ItEntry.php">It</a>
    					<a href="TechnologyEntry.php">Technology</a>
    					
  					</div>

				</div>


				 <div class="menu1">
  					<button class="roombtn">AuthorNameEntryCatogory</button>
  					<div class="room-content">
    					<a href="DeepakNayerEntry.php">DeepakNayer</a>
    					<a href="KannathasanEntry.php">Kannathasan</a>
    					<a href="VairamuththuEntry.php">Vairamuththu </a>
    					
  					</div>

				</div>  


				   <div class="menu">
  					<button class="roombtn">BookNameDeleteCatogory</button>
  					<div class="room-content">
    					<a href="NovelDelete.php">Novel</a>
    					<a href="ItDelete.php">It</a>
    					<a href="TechnologyDelete.php">Technology</a>
    					
  					</div>

				</div>  


				 <div class="menu">
  					<button class="roombtn">AuthorNameDeleteCatogory</button>
  					<div class="room-content">
    					<a href="DeepakNayerDelete.php">DeepakNayer</a>
    					<a href="KannathasanDelete.php">Kannathasan</a>
    					<a href="VairamuththuDelete.php">Vairamuththu </a>
    					
  					</div>

				</div>

      </aside>

      <div>
        <!DOCTYPE html>
<html>
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
</html>
      </div>
      

   

   <footer id="foo">
	<marquee> 		<h2>Copy rights @reekanse.com </h2> </marquee>
  </footer>
</body>