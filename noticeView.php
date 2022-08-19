<?php
	session_start();
?>
<?php 
// Include the database configuration file  
require_once 'config.php'; 
 
// Get image data from database 
$result = $con->query("SELECT image FROM notice ORDER BY uploaded DESC"); 
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Notices Page</title>
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
		<li class="menu"><a href="dashboard student.html">Home</a></li>
		<li class="menu"><a href="#">Notices</a></li>
		
		<li class="dropdown">
		<a class="timetbl">Course Content</a>
		<div class="types">
		<a href="zoomlinks.php">Zoom Links</a>
			<a href="fileView.php">Reading materials</a>
		</div>
		</li>
		
		
	</ul>
	</center>
	<hr/>
	<div id="back"><br/>
	<center>
	<fieldset>
		<br/>
		<h3>Notices Page </h3></br>

	    <?php if($result->num_rows > 0){ ?> 
        <div class="gallery"> 
            <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="600" height="450"/> 
            <?php } ?> 
         </div> 
        <?php }else{ ?> 
        <p class="status error">Image(s) not found...</p> 
        <?php } ?>
        <br/><br/>
		
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





