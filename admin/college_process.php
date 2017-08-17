<?php include ("../classes/Controller.php");
$obj=new Controller;
$obj->login_check();
?>
<?php 
if(isset($_POST["cat_id"])){
	$cat_id=$obj->cleaner($_POST["cat_id"]);
	if($obj->cus_delete("colleges",$cat_id,"id")){
		echo true;
		}else{
			echo false;
			}
	}
	
//auto load	
if(isset($_POST["autoload_id"])){
	$cat_id=$obj->cleaner($_POST["autoload_id"]);
	echo $obj->getName($cat_id);
	}
		
?>