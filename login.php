
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<script src="js/myScript.js"></script>
	
</head>

<body>
  <header>
	<img src="images/logo.jpg" width="150" height="150" alt="logo1" class="logo"><br/>
	<h1>Tution Web</h1><br/><br/>
	</header>

  <hr/>
	
  <center>
	<ul class="menu">
	<li class="menu"><a href="home.html">Home</a></li>
		<li class="menu"><a href="#">Notices</a></li>
		
		<li class="dropdown">
		<a class="timetbl">Course Content</a>
		<div class="types">
		<a href="#">Zoom Links</a>
			<a href="#">Reading materials</a>
		</div>
		</li>
		
		<li class="menu"><a href="about.html">About Us</a></li>
	</ul>
	</center>
	
	<hr/>
	
	<div id="back"><br/><br/>
	<center>
	<form action="userlogin.php" method="post" autocomplete="off" onsubmit="return validation()">
	   <fieldset>
	   <h2 >Login</h2>
	   
		<p><?php echo $_SESSION['error']."<br/>"; ?></p>
		<label for="uname"><b> Username: </b></label> <br/><br/>
		<input type="text" id="uname" name="userName" placeholder="User name"> <br/><br/>
		  
		<label for="psw"><b> Password: </b></label> <br/><br/>
		<input type="password" id="psw" name="psword"> <br/><br/>
		  
		<input type="submit" id="click" name="btnSubmit" value="Log in"> <br/><br/>
		  
		  
		Not a member? <br/>
		<a href="staff register.html"> Register as staff </a><br/>
		<a href="student register.html"> Register as student </a>
		<br/><br/>
	   </fieldset>
	</form><br/>
	</center>
	</div>
	
	<footer>
	</br>
	
	<br/>
	</footer>
	
</body>