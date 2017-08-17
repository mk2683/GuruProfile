<?php include_once ("../classes/Controller.php");
$obj=new Controller;
$obj->login_check();
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/footer-distributed.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../assets/css/signup-form.css">
<script src="../assets/jquery/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/jquery/jquery-3.2.0.min.js"></script>

<style>
 html,
        body,
        .view {
            height: 100%;
        }

        footer.page-footer {
            background-color: #1C2331;
            margin-top: 0;
        }
        	
#section4 {padding-top:70px; width:100%;}


.footer-icons{
	margin-top: 25px;
}

.footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}
</style>
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php" style="color:#F1F1F1; font-size:19px; font-weight:lighter; font-variant:small-caps;">Guru<span style="color:#7AAEDF;">Profile</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="teachers.php">Teacher's</a></li>
                    <li><a href="college.php">Institute's</a></li>
                    <li><a href="search_teacher.php">Search Teacher</a></li>
                    <li><a href="edit.php">Profile</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> </span> Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
