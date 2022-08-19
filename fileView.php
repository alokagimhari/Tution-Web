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
		<li class="menu"><a href="dashboard student.php">Home</a></li>
		<li class="menu"><a href="noticeView.php">Notices</a></li>
		
		<li class="dropdown">
		<a class="timetbl">Course Content</a>
		<div class="types">
		<a href="zoomlinks.php">Zoom Links</a>
			<a href="#">Reading materials</a>
		</div>
		</li>
		
		
	</ul>
	</center>
	<hr/>
	<div id="back"><br/>
	<center>
	<fieldset>
		<br/>
		<h3>Reading materials</h3></br>

        <div class="row">
            <table>
                <thead>
                    <th>ID</th>
                    <th>Filename</th>
                    <th>Size (in KB)</th>
                    <th>Downloads</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php foreach ($files as $file): ?>
                    <tr>
                    <td><?php echo $file['id']; ?></td>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                    <td><?php echo $file['downloads']; ?></td>
                    <td><a href="index.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
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