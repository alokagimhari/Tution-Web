<?php 
// Include the database configuration file  
require_once 'config.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $con->query("INSERT into notice (image, uploaded) VALUES ('$imgContent', NOW())"); 
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                header("Location: noticeViewStaff.php");
                // Display status message 
                echo $statusMsg;
            }else{ 
                $statusMsg = "File upload failed, please try again. Be considerate about the file size."; 
                echo $statusMsg;
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            echo $statusMsg;
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
        echo $statusMsg;
    } 
} 


?>