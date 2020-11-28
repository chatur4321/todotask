<?php 

include("main.php");

$obj = new connection();

$userid = $_GET['id'];

$sql = $obj->delete($userid);

$result = $sql;

if($sql){
	header("location:primemember.php");
}
 
 
?>