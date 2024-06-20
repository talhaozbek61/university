<?php
include("../db.php");
session_start();
if(!$_SESSION)
header('Location: ../login.php');
else
include("utils/delete-products-control.php");
?>
<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/favicon-16x16.png">
    <link rel="manifest" href="../image/site.webmanifest">
    <link rel="mask-icon" href="../image/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Star Cafe Delete Products</title>
</head>

<body class="h-full">

    <div class="mx-auto max-w-2xl flex items-center justify-center min-h-full">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900">
            <?php echo $message; ?>
        </h1>
    </div>

</body>

</html>