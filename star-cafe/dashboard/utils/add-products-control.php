<?php
include("functions.php");

if(isset($_GET["categories"]) && isset($_GET["name"]) && isset($_GET["image"]) && isset($_GET["price"])){
    $categories = $_GET["categories"];
    $name = $_GET["name"];
    $image = $_GET["image"];
    $price = $_GET["price"];
    
    if(!empty($categories) && !empty($name) && !empty($image) && !empty($price)){

        $saveSQL = "INSERT INTO $categories (id, name, image, price) VALUES (NULL, '$name', '$image', '$price');";
        $save = mysqli_query($con,$saveSQL);
        if($save){
            succesAlert();
            header("refresh:1;url=index.php?link=$categories");
        }
        else
        errorAlert();
    }
    else
    errorAlert();
}