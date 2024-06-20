<?php
include("functions.php");
    if(isset($_GET["id"]) && isset($_GET["categories"])) {
        $id = $_GET["id"];
        $categories = $_GET["categories"];
    
        // Check Product
        $checkProduct = "SELECT * FROM $categories WHERE id = $id";
        $data = mysqli_query($con, $checkProduct);
        $row = mysqli_fetch_array($data);
        
        if($row) {
        $deleteSQL = "DELETE FROM $categories WHERE id = $id";
        $delete = mysqli_query($con,$deleteSQL);

        // Deletion Process Successful
        if($delete){
            $message="Deletion Process Successful";
            succesAlert();
            header("refresh:1;url=index.php?link=$categories");
        }

        // Deletion Failed
        else {
            $message="Deletion Failed";
            errorAlert();
            header("refresh:1;url=index.php?link=$categories");
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