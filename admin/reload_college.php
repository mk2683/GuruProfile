<?php include ("../classes/Controller.php");
$obj=new Controller;
$obj->login_check();
?>

<div class="col-sm-9 table-responsive">
                	<table class="table table-bordered">
                    	<thead>
                        	<tr class="active">
                            	<th>S.No.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
						$result=$obj->fetch_data("colleges",array("id","name","image"));
						if(isset($result)){
						$i=1;
						foreach($result as $row){?>
                        	<tr>
                            	<td><?=$i++?></td>
                                <td><?=$row->name ?></td>
                                <td><?=$row->image ?></td>
                                <td>
                                	<button id="<?=$row->id?>" class="btn btn-danger btn-sm college_trasher"><span class="glyphicon glyphicon-trash"></span>&nbsp;delete</button>
                                    <button data-target="#myUpdater" data-toggle="modal" id="<?=$row->id?>" class="btn btn-success btn-sm college_editor" data-backdrop="static"><span class="glyphicon glyphicon-pencil"></span>&nbsp;edit</button>
                                </td>
                            </tr>
                         <?php }}else{?>
							 <tr>
                             	<th colspan="4">Data not available !!!</th>
                             </tr>
							 <?php }?>   
                        </tbody>
                    </table>
                </div>
 <?php include_once("footer.php");?>               