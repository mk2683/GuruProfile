<?php 
if(!isset($_GET['id']) || empty($_GET['id'])){
	die("Programe error try<br><a href='students_sdc.php'>try again</a>");
	}
	
require_once("../classes/main-function.php");
$cobj=new mn;
$cobj->identify();
	
$decode_id=base64_decode($_GET['id']);	
$cobj->delete('teachers',$decode_id,'teachers.php');
?>