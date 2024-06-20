<?php
    include("../db.php");
    session_start();
    if(!$_SESSION)
    header('Location: ../login.php');
    else{
        include("utils/edit-about-control.php");
        $found = "SELECT * FROM about";
        $data = mysqli_query($con, $found);
        $row = mysqli_fetch_array($data);
        if($row){
            $title = $row["title"];
            $image = $row["image"];
            $firstParagraph = $row["firstParagraph"];
            $secondParagraph = $row["secondParagraph"];
            $lastParagraph = $row["lastParagraph"];
            $phone = $row["phone"];
            $email = $row["email"];
            $instagram = $row["instagram"];
            $twitter = $row["twitter"];
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

    <title>Star Cafe Edit Users</title>
</head>

<body>
    <?php 
        include("components/header.php");
    ?>
    <form class="mx-auto max-w-2xl px-6 py-12" action="#" method="GET">
        <div class="space-y-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Edit About Page</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <!-- Title -->
                <div class="sm:col-span-3">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <div class="mt-2">
                        <input type="text" name="title" id="title"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required value="<?php echo $title ?>">
                    </div>
                </div>
                <!-- Image Url-->
                <div class="sm:col-span-3">
                    <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image
                        Url</label>
                    <div class="mt-2">
                        <input type="text" name="image" id="image"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required value="<?php echo $image ?>">
                    </div>
                </div>

                <!-- First Paragraph -->
                <div class="sm:col-span-6">
                    <label for="firstParagraph" class="block text-sm font-medium leading-6 text-gray-900">First
                        Paragraph</label>
                    <div class="mt-2">
                        <textarea rows="4" name="firstParagraph" id="firstParagraph"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required><?php echo $firstParagraph ?></textarea>
                    </div>
                </div>
                <!-- Second Paragraph -->

                <div class="sm:col-span-3">
                    <label for="secondParagraph" class="block text-sm font-medium leading-6 text-gray-900">Second
                        Paragraph</label>
                    <div class="mt-2">
                        <textarea rows="4" name="secondParagraph" id="secondParagraph"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required><?php echo $secondParagraph ?></textarea>
                    </div>
                </div>
                <!-- Last Paragraph -->
                <div class="sm:col-span-3">
                    <label for="lastParagraph" class="block text-sm font-medium leading-6 text-gray-900">Last
                        Paragraph</label>
                    <div class="mt-2">
                        <textarea rows="4" name="lastParagraph" id="lastParagraph"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?php echo $lastParagraph ?></textarea>
                    </div>
                </div>
                <!-- Phone -->
                <div class="sm:col-span-3">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                    <div class="mt-2">
                        <input type="text" name="phone" id="phone"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required value="<?php echo $phone ?>">
                    </div>
                </div>
                <!-- Email -->
                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="text" name="email" id="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required value="<?php echo $email ?>">
                    </div>
                </div>
                <!-- Instagram -->
                <div class="sm:col-span-3">
                    <label for="instagram" class="block text-sm font-medium leading-6 text-gray-900">Instagram
                        Url</label>
                    <div class="mt-2">
                        <input type="text" name="instagram" id="instagram"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="<?php echo $instagram ?>">
                    </div>
                </div>
                <!-- Twitter-->
                <div class="sm:col-span-3">
                    <label for="twitter" class="block text-sm font-medium leading-6 text-gray-900">Twitter
                        Url</label>
                    <div class="mt-2">
                        <input type="text" name="twitter" id="twitter"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            value="<?php echo $twitter ?>">
                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="index.php?link=about"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                <button type='submit'
                    class='rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>Save</button>
            </div>
        </div>
    </form>
    <?php 
        include("components/footer.php");
    ?>
</body>

</html>