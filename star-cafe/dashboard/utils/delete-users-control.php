<?php
include("functions.php");
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    
        // Check Users
        $checkUsers = "SELECT * FROM users WHERE id = $id";
        $data = mysqli_query($con, $checkUsers);
        $row = mysqli_fetch_array($data);
        
        if($row) {
        $deleteSQL = "DELETE FROM users WHERE id = $id";
        $delete = mysqli_query($con,$deleteSQL);

        // Deletion Process Successful
        if($delete){
            $message="Deletion Process Successful";
            succesAlert();
            header("refresh:1;url=index.php?link=users");
        }

        // Deletion Failed
        else {
            $message="Deletion Failed";
            errorAlert();
            header("refresh:1;url=index.php?link=users");
        }
        }
        // Data Not Found
        else {
            $message="Data Not Found";
            errorAlert();
            header("refresh:1;url=../login.php");
        }
    }
    // Parametre Not Found
    else {
        $message="Parameter Not Found";
        header("refresh:1;url=../login.php");
    }