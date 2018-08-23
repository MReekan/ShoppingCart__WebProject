<!doctype html>
<head>
 <style type="text/css">
    #h{
        text-align: center;
        background-color: #FC345C;
    }
     
     table,tbody,tr,td{
        border: 0.1px solid black;
        margin: 0 auto;
        background-color:#7577CD; 
        text-align: center;
     }
     table,thead,tr,th{
        border: 0.5px solid black;
     }



 </style>

</head>
<body>
<div id="h"> <h1><em>Customer Order Details</em></h1></div>

<?php
	$db=mysql_connect("localhost","root","");
	mysql_select_db("online book store");
?>

<div id="head">
<div id="reg"><label id="sign">








<table class="table-fill">
<thead>
<br>
<br>
<tr>

<th class="text-left">BookName</th>
<th class="text-left">Image</th>
<th class="text-left">UnitPrice</th>
<th class="text-left">Quantity</th>
<th class="text-left">Total Price</th>
<th class="text-left">Email</th>
<th class="text-left">Confirm</th>

</tr>
</thead>
<form action="" method="post">
  <?php
$sql=mysql_query("select * from cart");

while($row=mysql_fetch_array($sql)){
    ?>

	<tbody class="table-hover">
	<tr>
	<td class="table-left"><label><?php echo $row['Name']?></label></td>
	<td class="table-left"><img src="<?php echo 'img/'.$row['Image']?>" height="250" width="200"></td>
	<td class="table-left"><label><?php echo $row['Price']?></label></td>
    <td class="table-left"><label><?php echo $row['Buy']?></label></td>
    <td class="table-left"><label><?php echo $row['Total']?></label>
    <td class="table-left"><label><?php echo $row['Email']?></label></td>
    <input type="hidden" value="$emai=<?php echo "$email";?>" name="email" >
    <input type="hidden" value="<?php echo $row['Name'];?>" name="name">
    <input type="hidden" value="<?php echo $row['Buy'];?>" name="quantity">
    <input type="hidden" value="<?php echo $row['Total'];?>" name="total"></td>
	<td class="table-left"><input type="submit" value="ConfirmOrder" name="buy"></td>
    
	</tr>
	</tbody>
	<?php
 }
?>
</form>
</table>
<?php


?>


</body>
</html>