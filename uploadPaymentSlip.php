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
		<h3>Payment Slip Upload </h3></br>
		<img src="images/index.jpg"  alt="dashboard student" class=""><br/>

        <form action="uploadPayment.php" method="post" enctype="multipart/form-data">
        <br><b>Upload the payment receipt here:<b><br><br>
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>

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