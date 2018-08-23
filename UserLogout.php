<?php 


?>
<script language="javascript">
logoutConfirm();
    function logoutConfirm()
    {
    	
		      if(confirm("do you want to logout")){ 

		      	<?php 
session_start();

		      	 $_SESSION['sar'] =NULL;
		      ?>
		     		window.location.href='MyProject.php'; 
		     		return true;
		    	}
    } 
</script>
