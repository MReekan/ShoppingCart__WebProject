<?php
include_once("conn.php");
$select = "DELETE from kannathasan where id='".$_GET['del_id']."'";
$query = mysqli_query($conn, $select) or die($select);
header ("Location: KannathasanDelete.php");
?>