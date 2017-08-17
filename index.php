<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style>
#section4 {padding-top:30px; width:100%; color: #000; background-color: #fff;}
#back_image1{background-image:url(assets/img/imag.jpg);
	height:550px;
    background-size:cover;}	
</style>
<?php include("header.php");?>

 <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Registered Colleges or Universities</h1>
					</div>
				</div>
			</div>
		</div>
		
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h2>We are leading company</h2>
						<h3>Specializing in Development</h3>
						<p>
							Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. 
						</p>
					
					</div>
				</div>
			</div>
		</div>		
        
        <div class="section">
	    	<div class="container">
				<div class="row">
			
			<ul class="grid cs-style-2">
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="assets/img/inst/usict.png" alt="GGSIPU" width="223px">
						<figcaption style="width:223px;">
							<h3>GGSIPU</h3>
							<a href="portfolio-item0.php">Take a look</a>
						</figcaption>
					</figure>
	        	</div>	
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="assets/img/inst/dtu.jpg" alt="DTU" width="223px">
						<figcaption style="width:223px;">
							<h3>DTU</h3>
							<a href="portfolio-item1.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="assets/img/inst/iitd.png" alt="IIT-D" width="223px">
						<figcaption style="width:223px;">
							<h3>IIT-Delhi</h3>
							<a href="portfolio-item2.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="assets/img/inst/nsit.jpg" alt="NSIT" width="223px">
						<figcaption style="width:223px;">
							<h3>NSIT</h3>
							<a href="portfolio-item3.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="assets/img/inst/mait.png" alt="MAIT" width="223px">
						<figcaption style="width:223px;">
							<h3>MAIT</h3>
							<a href="portfolio-item4.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="assets/img/inst/msit.jpg" alt="MSIT" width="223px">
						<figcaption style="width:223px;">
							<h3>MSIT</h3>
							<a href="portfolio-item5.php">Take a look</a>
						</figcaption>
					</figure>
				</div>
			</ul>

				
				</div>
				
				<ul class="pager">
				  <li><a href="#" style="color:#B77D3C;">Previous</a></li>
				  <li><a href="#" style="color:#B77D3C;">Next</a></li>
				</ul>
				
			</div>
		</div>
<!-- End Page Title-->
<!--registration-->

<div id="section4">
 <h1 style="margin-left:10px; color:#0A6C2B; font-family:lobster;">Institute/University Registration</h1>
  <!-- start banner background  coding -->
	<div id="back_image1" width="100%">
  		
     		
          	<div class="row">
             <div class="col-md-5" style="margin-top:150px; margin-left:10px;">
             <h1 style="color:#31A530; font-weight:600; font-size:60px; margin-top:120px; font-family:Lobster;"> Register Your College Here ! </h1>      
             <br>
             <button type="button" class="btn btn-group-lg btn-primary"><a target="_self" href="camp_register.php" style="color:#FFFFFF;"><span class="glyphicon glyphicon-send"></span> Register! </a></button> &nbsp; &nbsp;&nbsp;<button data-target="#login" data-toggle="modal" class="btn btn-group-lg btn-info" data-backdrop="static"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Teacher Login</button>
             </div>
          	</div>
     	  
  		
	</div>
	<!-- end banner background coding -->
</div>

<!--/registration-->
 <!-- Login Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog" style="padding-top:20px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
          <form id="login" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                	<div class="form-group has-success">
                    	<input type="text" class="form-control" name="uname" placeholder="Enter Username/Email_ID">
                        <span class="err"><?= $err_uname?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="password" class="form-control" name="pwd" placeholder="Enter Password">
                        <span class="err"><?= $err_pwd?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="submit" value="Login" class="btn btn-primary">
                    </div>
                    <div>
                    	
                    </div>
                </form>  
      </div>
    </div>

  </div>
</div>
<!--End login modal-->
<?php include("footer.php");?>