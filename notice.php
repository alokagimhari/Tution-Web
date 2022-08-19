<?php
	session_start();
?>
<?php
  //include form submission script
include 'upload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notices Upload</title>
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
		<h3>Add New Notice </h3></br>
		<?php
    	if(!empty($statusMsg)){ ?>
    	<p class="status 
    	<?php 
    		echo $status; 
    	?>">
    	<?php 
    		echo $statusMsg;
    	?>	
    	</p>
		<?php } ?>
		
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<label>Select Notice:</label>
			<input type="file" name="image">
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