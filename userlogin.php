<?php
  	session_start();
 ?>
 <?php
   //linking the configuration file
   require_once 'config.php';
?>
<?php   
  
   
       //check whether submit button pressed or not
       if(isset($_POST['btnSubmit'])){
		   
		   $username=$_POST['userName'];
		   $password=$_POST['psword'];
	   
       $sql="SELECT * FROM user where username='$username' AND password='$password'";
	   $result=$con->query($sql);
	
	   if (!(strcmp($username, "admin") && strcmp($password, "admin"))){
		echo "Admin yes";
	 header("Location: admin dashboard.php");
	 }else if($result->num_rows>0){
		   	   //read data
		   while($row=$result->fetch_assoc()){
			  $_SESSION['username'] = $row['username']; 
		   }
		   echo "User yes";
		   $sql1="SELECT staff_fname,staff_lname FROM staff where username='$username'";
		   $result1=$con->query($sql1);
		   $sql2="SELECT student_fname,student_lname FROM student where username='$username'";
		   $result2=$con->query($sql2);
		   if($result1->num_rows>0){
				//read data
				while($row1=$result1->fetch_assoc()){
					$_SESSION['user']=$row1['staff_fname']." ".$row1['staff_lname'];
				}
				echo "staff yes";
				header("Location: dashboard staff.php");
			
		  	}
	   	  	else if($result2->num_rows>0){
			  	//read data
				while($row1=$result2->fetch_assoc()){
					$_SESSION['user']=$row1['student_fname']." ".$row1['student_lname'];
				}
				echo "student yes";
				header("Location: dashboard student.php");
			
		 	}  
			else{
				$_SESSION['user']="";
			}
		
		}   
       
       else{
			session_destroy();//destroy the session 
			$_SESSION['error'] = "Invalid Username and password";
			header("Location:login.php");//redirect to login page
       }
   }
       //close the database connection
       //$con->close();
   
?>