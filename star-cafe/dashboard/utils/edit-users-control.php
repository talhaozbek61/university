<?php
include("functions.php");

if(isset($_GET["id"]) && isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["password"])){
    
    $id = $_GET["id"];
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    
    if(!empty($id) && !empty($name) && !empty($email) && !empty($password)){
    $editSQL = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = '$id'";
    $edit = mysqli_query($con,$editSQL);
    if($edit){
        succesAlert();
        header("refresh:1;url=index.php?link=users");
    }
    else
    errorAlert();
    }
    else
    errorAlert();
}