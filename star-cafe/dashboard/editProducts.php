<?php
    include("../db.php");
    session_start();
    if(!$_SESSION)
    header('Location: ../login.php');  
    else{
        include("utils/edit-products-control.php");
        $id = $_GET["id"];
        $categories = $_GET["categories"];
        $found = "SELECT * FROM $categories WHERE id = '$id'";
        $data = mysqli_query($con, $found);
        $row = mysqli_fetch_array($data);
        if($row){
            $name = $row["name"];
            $price = $row["price"];
            $image = $row["image"];
        }
        else{
            $name = "Product Not Found";
            $price = 0;
            $image = "Image Url Not Found";
        }
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

    <title>Star Cafe Edit Products</title>
</head>

<body>
    <?php 
        include("components/header.php");
    ?>
    <form class="mx-auto max-w-2xl px-6 py-12" action="#" method="GET">
        <input type="hidden" name="categories" value="<?php echo $categories ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-semibold leading-7 text-gray-900"><?php echo $name ?></h2>
                    <?php 
                    if($row)
                    echo "
                        <a href='deleteProducts.php?id=$id&categories=$categories' class='flex items-center justify-between group gap-x-2 text-red-600 hover:text-red-400'>
                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='h-5 w-5 flex-none'>
                                <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0' />
                            </svg>
                            <span>Delete</span>
                        </a>
                    "
                  ?>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required value="<?php echo $name ?>">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Product
                            Price</label>
                        <div class="mt-2">
                            <input type="number" name="price" id="price"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required value="<?php echo $price ?>">
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Product Image
                            Url</label>
                        <div class="mt-2">
                            <input type="text" name="image" id="image"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required value="<?php echo $image ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="index.php?link=<?php echo $categories ?>"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                <?php
                if($row){
                    echo"
                <button type='submit' class='rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>Save</button>";
                }
                ?>
            </div>
        </div>
    </form>
    <?php 
        include("components/footer.php");
    ?>
</body>

</html>