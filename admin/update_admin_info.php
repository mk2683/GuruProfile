<?php include ("../classes/Controller.php");
$obj=new Controller;
$obj->login_check();
?>
<?php 
//if(isset($_POST["admin_udpate"])){
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$id=$_SESSION["id"];
	$addr=$_SESSION["addr"];
	
	if($obj->update("admin",array("name"=>$name,"addr"=>$addr,"no"=>$phone),array("id"=>$id))){
		echo true;
		}
		else{
			echo false;
			}
		
	//}
	
?>