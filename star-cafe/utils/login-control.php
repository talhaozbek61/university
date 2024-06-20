<?php
session_start();
if(isset($_POST["email"]) && isset($_POST["password"])){
    $email=$_POST['email'];
	$password=$_POST['password'];
    $find="SELECT * FROM users where email = '$email' AND password = '$password'";
    $result=mysqli_query($con,$find);
	if(mysqli_num_rows($result) > 0)
	{
        $_SESSION['email'] = $email;
        header("Location:dashboard/index.php");
    }
	else
	{
        $error =  "<p class='text-sm text-red-500 text-center mb-3'>These credentials do not match our records.</p>" ;
	}
}