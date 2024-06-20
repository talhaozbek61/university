<?php
$allDrinks = "select * from drinks";
$drinks = mysqli_query($con,$allDrinks);
?>
<div class="bg-white">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Drinks</h2>
        <a href="addProducts.php?categories=drinks"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
            Drink</a>
    </div>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <?php
        while($row = mysqli_fetch_array($drinks)) {
            $id = $row[0];
            $name = $row['name'];
            $image = $row['image'];
            $price = $row['price'];
            echo "
                    <div>
                        <div class='aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80'>
                            <img src='$image' alt='$name' class='h-full w-full object-cover object-center lg:h-full lg:w-full'> 
                        </div>
                        <div class='mt-4 flex justify-between'>
                            <div>
                                <h3 class='text-sm font-medium text-gray-900'>
                                    $name
                                </h3>
                            </div>
                            <p class='text-sm font-medium text-gray-900'>
                            $price TL
                            </p>
                        </div>
                        <a href='editProducts.php?id=$id&categories=drinks' class='mt-4 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2'>Edit</a>
                    </div>";
        }
        ?>
    </div>
</div>