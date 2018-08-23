<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>

<body>
	<?php 
		$past = time() - 100; 
		//this makes the time in the past to destroy the cookie 
		setcookie(ID_my_site, gone, $past); 
		setcookie(Key_my_site, gone, $past); 
		header("Location:Admin_Login.php");
	?>

</body>
</html>