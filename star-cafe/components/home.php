<?php
$allFoods = "select * from foods ORDER BY id DESC LIMIT 4";
$foods = mysqli_query($con,$allFoods);
$allDrinks = "select * from drinks ORDER BY id DESC LIMIT 4";
$drinks = mysqli_query($con,$allDrinks);
?>
<div class="bg-white">
    <!-- Foods -->
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Foods</h2>
        <a href="index.php?link=foods" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500">All
            Foods <span aria-hidden="true">&rarr;</span></a>
    </div>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <?php
        while($row = mysqli_fetch_array($foods)) {
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
                            <p class='mt-1 text-sm text-gray-500'>Foods</p>
                        </div>
                        <p class='text-sm font-medium text-gray-900'>
                        $price TL
                        </p>
                    </div>
                </div>";
        }
        ?>
    </div>

    <!-- Drinks -->
    <div class="flex items-center justify-between mt-16">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Drinks</h2>
        <a href="index.php?link=drinks"
            class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500">All Drinks <span
                aria-hidden="true">&rarr;</span></a>
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
                            <p class='mt-1 text-sm text-gray-500'>Drinks</p>
                            </div>
                            <p class='text-sm font-medium text-gray-900'>
                            $price TL
                            </p>
                        </div>
                    </div>";
        }
        ?>
    </div>
</div>