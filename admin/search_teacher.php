<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$college=$obj->cleaner($_POST["cllg"]);

	
	$result=$obj->fetch_data_search("teachers",array("id","name","email","inst","qual","exp","no"),$college);
	
	echo "<script> alert('Form Should be filled correctly')</script>";
	
}

?>

<?php include ("header.php");?>

<style>
#result{ padding-top:50px; background-color:#fff;}
#search{ padding-top:60px; background-color:#fff;}
</style>
<!--Search-->	
<div class="container">
	<div class="row">
    <!--search coding-->
	<div class="col-md-6" id="search" style="border-radius:5%; margin-left:12%; box-shadow: 10px 10px 5px grey; #boxshadow {
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
	   <form method="post" role="form" id="search-form" autocomplete="off" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" enctype="multipart/form-data">
         
         <div class="form-header">
         	<h3 class="form-title"><i class="fa fa-search"></i> Search</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              submitted
              </div>
           <!--College Name-->           
         	  <div class="form-group">
                    <div class="input-group">
                   <div class="input-group-addon"><i class="fa fa-university"></i></div>
                   	   <select name="cllg" class="form-control">
                            <?php 
								$res=$obj->fetch_data("colleges",array("id","name"));
								if($res){
									foreach($res as $row){?>
                                	<option value="<?=$row->id?>"><?=$row->name?></option>
                                <?php }}?>    
                         </select>
                    </div>
                   <span class="help-block" id="error" style="color:#FF0004;"></span>
              </div>
              <!--<div class="form-group">   </div>-->
			<!--/Required Blood Group-->        
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-primary">
                 <span class="glyphicon glyphicon-search"></span> Search
                 </button>
            </div>


            </form>
	</div>

	<!--/Search coding-->
            
    </div>
</div>
<!--/Search-->

<!--Result-->
<div class="container-fluid" style="padding-top:30px; width:100% !important;">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="glyphicon glyphicon-eye"></span>&nbsp;Teacher</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <div class="row reload_cat">
            	<div class="col-sm-12 table-responsive">
                	<table class="table table-bordered">
                    	<thead>
                        	<tr class="active">
                            	<th>S.No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Institute</th>
                                <th>Qualification</th>
                                <th>Experience</th>
                                <th>Contact no.</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
						if(isset($result)){
						$i=1;
						foreach($result as $row){?>
                        	<tr>
                            	<td><?=$i++?></td>
                                <td><?=$row->name ?></td>
                                <td><?=$row->email ?></td>
                                <td><?=$row->inst ?></td>
                                <td><?=$row->qual ?></td>
                                <td><?=$row->exp ?></td>
                                <td><?=$row->no ?></td>
                                <td>
                                	<button id="<?=$row->id?>" class="btn btn-danger btn-sm cat_trasher"><span class="glyphicon glyphicon-trash"></span>&nbsp;delete</button>
                                    <button data-target="#myCateUpdater" data-toggle="modal" id="<?=$row->id?>" class="btn btn-success btn-sm category_editor" data-backdrop="static"><span class="glyphicon glyphicon-pencil"></span>&nbsp;edit</button>
                                </td>
                            </tr>
                         <?php }}else{?>
							 <tr>
                             	<th colspan="8">Data not available !!!</th>
                             </tr>
							 <?php }?>   
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
<!--/Result-->

<?php include ("footer.php");?>