<div class="bg-white">
    <div>
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Drinks</h2>
    </div>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
    <?php
        $product = "
                      <div>
                            <div class='aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80'>
                                <div class='h-80 w-full'></div>
                                <!-- <img src=' alt='Image Alt' class='h-full w-full object-cover object-center'> -->
                            </div>
                            <div class='mt-4 flex justify-between'>
                                <div>
                                    <h3 class='text-sm text-gray-700'>
                                        Product Name
                                    </h3>
                                </div>
                                <p class='text-sm font-medium text-gray-900'>Price</p>
                            </div>
                        </div>";
        $products = array_fill(0, 8, $product);        
        foreach ($products as $product) {
            echo $product;
        }
        ?>
    </div>
  </div>
