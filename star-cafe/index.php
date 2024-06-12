<?php
include("components/router.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Star Cafe</title>
</head>
<body>
    <?php 
    include("components/header.php");
    ?>
    <main class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8">
    <?php
    include($content);
    ?>
    </main>
    <?php 
    include("components/footer.php");
    ?>
</body>
</html>