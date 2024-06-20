<?php
include("functions.php");

if(isset($_GET["title"]) && isset($_GET["image"]) && isset($_GET["firstParagraph"]) && isset($_GET["secondParagraph"]) && isset($_GET["phone"]) && isset($_GET["email"])){
    $title = $_GET["title"];
    $image = $_GET["image"];
    $firstParagraph = $_GET["firstParagraph"];
    $secondParagraph = $_GET["secondParagraph"];
    $lastParagraph = $_GET["lastParagraph"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $instagram = $_GET["instagram"];
    $twitter = $_GET["twitter"];
    
    if(!empty($title) && !empty($image) && !empty($firstParagraph) && !empty($secondParagraph) && !empty($phone) && !empty($email)){
    $editSQL = "UPDATE about SET title = '$title', image = '$image', firstParagraph = '$firstParagraph', secondParagraph = '$secondParagraph', lastParagraph = '$lastParagraph', phone = '$phone', email = '$email', instagram = '$instagram', twitter = '$twitter' WHERE id = '1'";
    $edit = mysqli_query($con,$editSQL);
    if($edit){
        succesAlert();
        header("refresh:1;url=index.php?link=about");
    }
    else
    errorAlert();
    }
    else
    errorAlert();
}