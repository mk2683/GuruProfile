
<?php include ("header.php");?>
 <!-- Page Content -->
        <div class="container-fluid" style="padding-top:50px; width:100% !important;">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="glyphicon glyphicon-eye"></span>&nbsp;View Category</h1>
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
            </div>

        </div>
    
  <!--updater modal-->  
 <!-- Modal -->
<div id="myCateUpdater" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
          <form id="category_updater_form">
              <div class="form-group">
                <input type="text" name="update_cat_name" id="update_cat_name" class="form-control">
                <input type="hidden" id="update_cat_id" name="update_cat_id">
              </div>  
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
          </form>    
      </div>
    </div>

  </div>
</div>
<?php include ("footer.php");?>