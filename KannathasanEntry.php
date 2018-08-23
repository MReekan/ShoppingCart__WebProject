
  <?php


if (isset($_POST['submit'])) {
    
    if (isset($_FILES['image'])) {

    $target = "kannathasan/" . basename($_FILES['image']['name']);

    
   include("db.php");
    $image = $_FILES['image']['name'];

    $name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
  

    if ($mysqli->query("insert into kannathasan (name, image,author_name,price,quantity) VALUES ('$name','$image','$author_name',
      '$price',' $quantity')")) {

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $_SESSION['msg'] = "uploaded";
        }
    }else {
        $_SESSION['msg'] = "upload Fail"; 
    }  
  }
}
  ?>
 
  <body>
       <form action="" method="post" enctype="multipart/form-data">
<div id="upload">
<div id="add"> <h2 >Entry kannathasan's Books</h2></div><br>
<div id="name">
</br></div>
<div id="name">
</br><input type="text" placeholder="Enter the book name" name="book_name"></div>   &nbsp &nbsp
</br>`
</br>

<input type="file" name="image">   &nbsp &nbsp
<input type="text" placeholder="Enter the  author name" name="author_name"><br>   &nbsp &nbsp
</br>
<br>
<input type="text" name="price" placeholder="Enter the book price">  &nbsp &nbsp
  
 <br>
  </br>
<input type="text" name="quantity" placeholder="Enter the book quantity">  &nbsp &nbsp
<br>
<br>
<div id="sub"><input type="submit" value="submit" name="submit"></div>
</div>


 



</form>

<div>
              
   <?php
    include("db.php");
    $sql="SELECT * FROM kannathasan";
    $result=$mysqli->query($sql);
    while ($row=mysqli_fetch_array($result)) {
              ?>
                 <div style="border: 1px solid black">
                <img src="<?php echo 'kannathasan/'.$row['image']?>"> <br>
                <?PHP
                      echo  $row['name'] ;
                    $name=$row['name'];
                    echo "&nbsp &nbsp"; 
                    echo "<br>";  

                    echo $row['author_name'] ; 
                    echo "&nbsp &nbsp"; 
                    echo "<br>";

                    echo $row['price'] ;
                    echo "&nbsp &nbsp &nbsp &nbsp"; 
                    echo "<br>";

                    echo $row['quantity'] ;
                    echo "&nbsp &nbsp"

                    ?>
                    <div>

                      <input type="submit" name="BuyNow" value="BuyNow">
                      <a href="KannathasanBookDetail.php?name=<?php echo $name ?>">ClickMe</a>
                    </div>
                   
                    <?PHP
                    
               ?>
                <br>
              </div>

              <?php
    }

   ?>
 </div> 
        </div>
    </body>