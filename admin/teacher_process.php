<?php include ("../classes/Controller.php");
$obj=new Controller;
$obj->login_check();
?>
<?php 
if(isset($_POST["cat_id"])){
	$cat_id=$obj->cleaner($_POST["cat_id"]);
	if($obj->cus_delete("teachers",$cat_id,"id")){
		echo true;
		}else{
			echo false;
			}
	}
	
//auto load	
if(isset($_POST["autoload_id"])){
	$cat_id=$obj->cleaner($_POST["autoload_id"]);
	echo $obj->getCategoryName($cat_id);
	}
	
if(isset($_POST["update_cat_id"])){
	$cat_id=$obj->cleaner($_POST["update_cat_id"]);
	$cat_name=$obj->cleaner($_POST["update_cat_name"]);
	if($obj->update("teachers",array("name"=>$cat_name),array("id"=>$cat_id))){
		echo true;
		}
	}
		
?>