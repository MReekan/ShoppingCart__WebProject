<?php
		//Connection for database
		include 'conn.php';
		//Select Database
		$sql = "SELECT * FROM deepaknayer";
		$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>delete kids</title>
</head>
<body>
		<h1 align="center"><em>Book Details</em></h1>
		<table border="1" align="center" style="line-height:25px;">
		<tr>
		<th>BookId</th>
		<th>Name</th>
		<th>image</th>
		<th>Author_Name</th>
		<th>price</th>
		<th>Quantity</th>
		<!--<th>Edit</th>-->
		<th>Delete</th>
		</tr>

		<?php
		//Fetch Data form database
		if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		?>

			<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php	echo "<img height='150' width='150' src='deepaknayer/".$row['image']."'>"; ?></td>
						<td><?php echo $row['author_name']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['quantity']; ?></td>
						
			<!--Edit option -->
			<!--<td><a href="edit.php?edit_id=<?php #echo $row['empid']; ?>" alt="edit" >Edit</a></td>-->
			<!-- Delete Buttion -->
			<td><input type="button" onClick="deleteme(<?php echo $row['id']; ?>)" name="Delete" value="Delete"></td>
			</tr>


<script language="javascript">
		function deleteme(delid)
		{
			if(confirm("Do you want Delete!")){
				//sometimes become a error 
			window.location.href='DeleteDeepaknayer.php?del_id=' +delid+''; 
			return true;
		}
		} 
</script>
<?php
}
}
else
{
?>
<tr>
<th colspan="1">There's No data found!!!</th>
</tr>
<?php
}
?>
</table>


</body>
</html>