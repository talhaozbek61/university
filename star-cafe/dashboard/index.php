<?php
session_start();
include("../db.php");
include("components/router.php");
if(!$_SESSION)
    header('Location: ../login.php'); 
else{
    if(isset($_GET["link"]))
    $page=$_GET["link"];   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio"></script>
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/favicon-16x16.png">
    <link rel="manifest" href="../image/site.webmanifest">
    <link rel="mask-icon" href="../image/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Star Cafe Dashboard</title>
</head>

<body>
    <?php
    // Header
    include('components/header.php');
    //    Main
    echo "<main class='mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8'>";

    include($content);
    
    echo "</main>";
    // Footer
    include('components/footer.php');
    ?>

</body>

</html>