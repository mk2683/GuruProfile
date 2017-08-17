<?php include ("../classes/Controller.php");
$obj=new Controller;
$obj->login_check();
?>

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
						$result=$obj->fetch_data("teachers",array("id","name","email","inst","qual","exp","no"));
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
 <?php include_once("footer.php");?>               