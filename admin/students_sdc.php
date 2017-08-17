<?php require_once("../classes/main-function.php");
$cobj=new mn;
$cobj->identify();
?>

<?php include ("header.php");?>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../assets/css/pannel.css">
<div class="clear"></div>
<div class="pannel-full">
<div class="pannel-width">

	<div class="main">
<p><a href="add_student.php"><font size="+1" color="#F70C0C"><strong>Click Here</strong></font></a><font color="#0081B8" size="+2"><strong> to add student</strong></font></p>
<br><br>
<?php 
$res=$cobj->fetch_data("students");

if(!empty($res)){?>
<table border="1 thin" cellpadding="5px" cellspacing="3px" width="auto" height="auto" bordercolordark="#7D5D5E" id="tab">
<tr>
<td align="center" width="150px"><font size="+1" color="#000000" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><strong>Name</strong></font></td>
<td align="center" width="85px"><font size="+1" color="#000000" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><strong>Image</strong></font></td>
<td align="center" width="100px"><font size="+1" color="#000000" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><strong>Course</strong></font></td>
<td align="center"><font size="+1" color="#000000" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><strong>Email id</strong></font></td>
<td align="center"  width="85px"><font size="+1" color="#000000" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><strong>Year</strong></font></td>
<td align="center" width="150px"><font size="+1" color="#000000" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><strong>Status</strong></font></td>
</tr>
<?php 	foreach($res as $item){
	?>
	<tr>
    <td align="left"><font size="+1" color="#000000" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><?= $item->name?></font></td>
      <td align="left"><img src="../assets/uploads/<?php echo $item->image?>" width="75px" height="50px"></td>
      <td align="left"><font size="+1" color="#0042C8" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><?= $item->course?></font></td>
      <td align="left"><font size="+1" color="#5E1D1E" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><?= $item->mail?></font></td>
      <td align="left"><font size="+1" color="#0042C8" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><?= $item->year?></font></td>
       <td align="left"><font size="+1" color="#0042C8" face="Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"><a href="edit_profile.php?id=<?php echo base64_encode($item->id)?>">Edit</a> | <a href="delete_user.php?id=<?php echo base64_encode($item->id)?>">delete</a> </font>
      </td>
  </tr>   
	<?php } ?>
</table>

<?php }
else{?> 
 		  <div class="alert alert-warning">
	<font size="+2"><strong>DATA UNAVAILABLE !</strong></font>
</div>
 
 <?php }
?>

</div>
</div>
</div>
<div class="clear"></div>
<?php include ("footer.php");?>