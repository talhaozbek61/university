<?php
include("functions.php");

if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["password"])){
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    
    if(!empty($name) && !empty($email) && !empty($password)){

        // Check Email
        $checkEmail = "SELECT * FROM users WHERE email LIKE '$email' ";
        $data = mysqli_query($con, $checkEmail);
        $row = mysqli_fetch_array($data);

        if(!$row){

        $saveSQL = "INSERT INTO users (id, name, email, password) VALUES (NULL, '$name', '$email', '$password');";
        $save = mysqli_query($con,$saveSQL);
        if($save){
            succesAlert();
            header("refresh:1;url=index.php?link=users");
        }
        else
        errorAlert();
        }
        else
        errorAlert();
    }
    else
    errorAlert();
}