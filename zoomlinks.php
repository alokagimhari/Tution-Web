<?php
	session_start();
?>
<?php 


//Database
include_once('config.php');
//function
include_once('zoom_function.php');


//Show All Button
$result = fun::AllButton($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Links Page</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<style>
    .links {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        background-color: white;
    }

    .links td, .links th {
        border: 1px solid black;
        padding: 8px;
    }


    .links tr:hover {background-color: #ddd;}

    .links th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        color: black;
    }
    </style>    
	
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
		<a href="#">Zoom Links</a>
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
		
            <h3>
            All Zoom Button Links
            </h3>
        
            <table class="links">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Url</th>
                <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if(!empty($result)){
            $i = 1;
            foreach ($result as $row) {
            ?>
            
                <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><a href="<?= $row['link']; ?>"> <?= $row['link']; ?></a></td>
                <td><?= $row['date']; ?></td>
                </tr>
                <?php }} ?>
            </tbody>
            </table>
        
  

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