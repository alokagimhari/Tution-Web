<?php

class fun 
{
    public static function addNew($con)
    {
        if (isset($_POST['link']) &&  isset($_POST['date']) ) {
            $link =$_POST['link']; 
            $date = $_POST['date'];
            $sql = "INSERT INTO zoombutton( link, date) VALUES ('$link', '$date')";

            if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            echo "<script>window.location = 'addButton.php';</script>";
            } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            }

        }
    }
    public static function AllButton($con)
    {
        $sql = "SELECT * FROM zoombutton";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        }
            
    }
    public static function getEdit($con,$id)
    {
        $sql = "SELECT * FROM zoombutton where id = $id";
        $result = mysqli_query($con,$sql);
        $arrrestult = mysqli_fetch_array($result);
        if (!empty($arrrestult)) {
            return $arrrestult;
        }
            
    }
    public static function editButton($con)
    {
        if (isset($_POST['id']) && isset($_POST['elink']) &&  isset($_POST['edate']) ) {
            $id =$_POST['id']; 
            $link =$_POST['elink']; 
            $date = $_POST['edate'];
            $sql = "UPDATE zoombutton SET link='$link',date='$date' WHERE id = $id";

            if ($con->query($sql) === TRUE) {
            echo "record successfully updated";
            echo "<script>window.location = 'addButton.php';</script>";
            } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            }

        }
    }
    public static function deleteButton($con,$id)
    {
        $sql = "DELETE FROM zoombutton WHERE id= $id";
        if ($con->query($sql) === TRUE) {

            echo "<script>window.location = 'addButton.php';</script>";
            echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . $con->error;
        }
    }
    public static function getButton($con)
    {
        $date = date("Y-m-d");
        $sql = "SELECT * FROM zoomButton where date = '$date'";
        $result = mysqli_query($con,$sql);
        $arrrestult = mysqli_fetch_array($result);
        if (!empty($arrrestult)) {
            return $arrrestult;
        }   
    }
}
