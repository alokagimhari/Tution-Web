<?php
	session_start();
?>
<?php
	include_once 'config.php';
?>
<?php
	if(isset($_POST["sbmt"])){
		$fname=$_POST["stufname"];
		$lname=$_POST["stulname"];
		$gender=$_POST["gender"];
		$email=$_POST["mailadd"];
		$phone=$_POST["contact"];
		$user = $_POST["username"];
		$pwrd = $_POST["password"];
		$_SESSION['error']='';
		$_SESSION['user']='';
	$sql1="SELECT * FROM user where username='$user'";
	$result1=$con->query($sql1);
	if($result1->num_rows>0){
		$_SESSION['error']='Username already exists';
		header("Location:student register.php");		

	}
	else{
		$sql2= "INSERT INTO user (id,username,password)VALUES('','$user','$pwrd')";
		$sql3= "INSERT INTO student (student_No, student_fname, student_lname, gender, student_email, student_phone, username) VALUES ('','$fname', '$lname', '$gender', '$email', '$phone', '$user')";
		
        if(mysqli_query($con, $sql2) && mysqli_query($con, $sql3)){
            $_SESSION['user']=$fname." ".$lname;
            header("Location:dashboard student.php");
        }
        else{
            echo "Try again";
        }
	}
	}
	//close connection
	mysqli_close($con);
		
	

?>