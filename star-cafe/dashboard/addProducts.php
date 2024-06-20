<?php
    include("../db.php");
    session_start();
    if(!$_SESSION){
    header('Location: ../login.php');
    }
    else{
    include("utils/add-products-control.php");
    $categories = $_GET["categories"];
    if(!$categories)
    header("Location: ../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/favicon-16x16.png">
    <link rel="manifest" href="../image/site.webmanifest">
    <link rel="mask-icon" href="../image/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Star Cafe</title>
</head>

<body>
    <?php 
        include("components/header.php");
    ?>
    <form class="mx-auto max-w-2xl px-6 py-12" action="#" method="GET">
        <input type="hidden" name="categories" value="<?php echo $categories ?>">
        <div class="space-y-6">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Add Product</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Product Price</label>
                    <div class="mt-2">
                        <input type="number" name="price" id="price"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>
                <div class="sm:col-span-6">
                    <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Product Image Url
                    </label>
                    <div class="mt-2">
                        <input type="text" name="image" id="image"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="index.php?link=<?php echo $categories ?>"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </div>
    </form>
    <?php 
        include("components/footer.php");
    ?>
</body>

</html>