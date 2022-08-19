<?php
	session_start();
?>
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Files Page</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	
	
</head>

<body>

	<header>
		<img src="images/logo.jpg" width="150" height="150" alt="logo1" class="logo"><br/>
        <h2 class="user"><?php 
			echo $_SESSION['user'];		
			?></h2>
		<h1>Tution Web</h1><br/><br/>
		<h2><a href="logout.php" name="logout">Logout</a></h2>
	</header>
	<hr/>
	
	<center>
	<ul class="menu">
		<li class="menu"><a href="dashboard staff.php">Home</a></li>
		<li class="menu"><a href="noticeViewStaff.php">Notices</a></li>
		
		<li class="dropdown">
		<a class="timetbl">Course Content</a>
		<div class="types">
		<a href="zoomlinksStaff.php">Zoom Links</a>
			<a href="fileViewStaff.php">Reading materials</a>
		</div>
		</li>
				
	</ul>
	</center>
	<hr/>
	<div id="back"><br/>
	<center>
	<fieldset>
		<br/>
		<h3>Add Reading materials</h3></br>

        <div class="container">
      <div class="row">
        <form action="filesLogic.php" method="post" class="formfile" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" class="fileInput" name="myfile"> <br><br>
          <button type="submit" class="button" name="save">Upload</button>
        </form>
      </div>

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