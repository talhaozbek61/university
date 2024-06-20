<?php
include("functions.php");

if(isset($_GET["id"]) && isset($_GET["categories"]) && isset($_GET["name"]) && isset($_GET["image"]) && isset($_GET["price"])){
    
    $id = $_GET["id"];
    $categories = $_GET["categories"];
    $name = $_GET["name"];
    $price = $_GET["price"];
    $image = $_GET["image"];
    
    if(!empty($id) && !empty($categories) && !empty($name) && !empty($image) && !empty($price)){
    $editSQL = "UPDATE $categories SET name = '$name', image = '$image', price = '$price' WHERE id = '$id'";
    $edit = mysqli_query($con,$editSQL);
    if($edit){
        succesAlert();
        header("refresh:1;url=index.php?link=$categories");
    }
    else
    errorAlert();
    }
    else
    errorAlert();
}