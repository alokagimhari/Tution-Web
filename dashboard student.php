<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Student</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	
	
</head>

<body>

	<header>
		<img src="images/logo.jpg" width="150" height="150" alt="logo1" class="logo"><br/>
        <h2 class="user"><?php 
			echo $_SESSION['user'];		
			?></h2>
		<h1>Tution Web</h1><br/><br/>
		<h2><a href="logout.php">Logout</a></h2>
	</header>
	<hr/>
	
	<center>
	<ul class="menu">
		<li class="menu"><a href="#">Home</a></li>
		<li class="menu"><a href="noticeView.php">Notices</a></li>
		
		<li class="dropdown">
		<a class="timetbl">Course Content</a>
		<div class="types">
		<a href="zoomlinks.php">Zoom Links</a>
		<a href="filesView.php">Reading materials</a>
		</div>
		</li>
				
	</ul>
	</center>
	<hr/>
	<div id="back"><br/>
	<center>
	<fieldset>
		<br/>
		<h3>Dashboard Student </h3></br>
		<img src="images/dashboardstd.jpg" width="100%" height="60%" alt="dashboard student" class=""><br/>

		<button id="addPayment" class="button"><a href="uploadPaymentSlip.php" style="text-decoration:none;">Add Payment to register to Course</a></button>

		<br/><br/><br/><br/>
		
	</fieldset>
	</br>
	</center>
	</div>
	<footer>
	<br/>
	

	<br/>
	</footer>
	
</body>
</html>