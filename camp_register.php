<?php include_once("classes/Controller.php");
$obj=new Controller;
$obj->stop_access_login();
?>

<?php
$image_err=$name_err="";
$success="";
if($_SERVER['REQUEST_METHOD']=="POST"){
	
	
		$type=$_FILES["data"]['type'];
		$position=strpos($type,"/")+1;
		$tot_len=strlen($type);
		$rem_len=$tot_len-($position);
		$clean_type=substr($type,$position,$rem_len);
		
		$error=$_FILES["data"]['error'];
		$size=$_FILES["data"]['size'];
		$tmp=$_FILES["data"]['tmp_name'];
		
		$fl=$_FILES["data"]["name"];
		
		if($error>0){
		die("something error");
		}
	else{
		$path="assets/uploads/".$fl;
		if(file_exists($path)){
			$image_err="image already exists"; 
			}
			else{
				if($clean_type=="png" || $clean_type=="jpg" || $clean_type=="jpeg"){
					//if($size<(1024*500)){
		if(move_uploaded_file($tmp,$path)){
			echo "file uploaded scuccessfully";
			}
				//}
				/*else{
					$image_err="file size Should be below 100KB";
					return false;
					}*/
				}
				else
				{$image_err="file type error occurred";
				return false;}
			}
	}
	
	
		$name=$obj->cleaner($_POST["name"]);
		
		if(empty($name_err) && empty($image_err)){
			if($obj->cllg_existance("colleges",$name)){
				if($obj->bind_insert("colleges",array("",$name,$fl))){
					$success="Successfully Registered";
				}
				}
			else{
				$name_err="already exists";
				}	
			}
		
	}
?>
<style>
#camp{padding-top:50px; background-color:#fff;}

</style>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
<?php include ("header.php");?>
<!--menu header coding-->

<!--Donor Body coding-->
<div class="container">
	<div class="col-md-8" id="camp" style="border-radius:5%; margin-left:15%; box-shadow: 10px 10px 5px grey; #boxshadow {
    position: relative;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    background: white;
}

#boxshadow img {
    width: 100%;
    border: 1px solid #8a4419;
    border-style: inset;
}

#boxshadow::after {
    content: '';
    position: absolute;
    z-index: -1; /* hide shadow behind image */
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); 
    width: 70%; 
    left: 15%; /* one half of the remaining 30% */
    height: 100px;
    bottom: 0;
}">
	       
         <!-- form start -->
         <form method="post" role="form" id="register-form" autocomplete="off" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" enctype="multipart/form-data">
         
         <div class="form-header">
         	<h3 class="form-title"><i class="fa fa-university"></i> Institute/University Registration</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              submitted
              </div>
              <!--Name-->      
         	  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                  <input name="name" type="text" class="form-control" required placeholder="Institution Name">
                   </div>
                   <span class="help-block" id="error" style="color:#FF0004;"><?= $name_err?></span>
              </div>
              <!--/Name-->
                            
              <!--image-->     
              <div class="form-group">
              <label for="image" style="color:#764F50; font-family:lobster; font-size:16px;">Upload Image:</label>
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></div>
                   <input name="data" type="file" class="form-control" required placeholder="Institute/University Logo">
                   </div> 
                   <span class="help-block" id="error" style="color:#FF0004;"><?= $image_err?></span>                     
              </div>
              <!--/image-->
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Register !
                 </button>
             
            </div>


            </form>
            
           
    </div>
</div>
<!--/Donor Body-->
<?php include ("footer.php");?>