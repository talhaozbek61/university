<?php
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
?>
<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-4">
                <img class="h-full w-full object-cover shadow-2xl rounded-3xl" src="<?php echo $image ?>"
                    alt="<?php echo $title ?>">
            </div>
            <div>
                <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                    <p class="text-base font-semibold leading-7 text-indigo-600">About Us</p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        <?php echo $title ?>
                    </h1>
                    <div class="max-w-xl">
                        <p class="mt-6"><?php echo $firstParagraph ?></p>
                        <p class="mt-8"><?php echo $secondParagraph ?></p>
                        <p class="mt-8"><?php echo $lastParagraph ?></p>
                    </div>
                </div>
                <ul class="mt-10 grid sm:grid-cols-2 gap-10 border-t items-center border-gray-900/10 pt-10">
                    <li>
                        <a href="tel:<?php echo $phone ?>"
                            class="flex items-center justify-start gap-2 text-sm font-semibold leading-6 text-gray-700 hover:text-indigo-600 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6 shrink-0 group-hover:stroke-indigo-600 duration-300">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <span class="text-base font-semibold tracking-tight">
                                <?php echo $phone ?>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?php echo $email ?>"
                            class="flex items-center justify-start gap-2 text-sm font-semibold leading-6 text-gray-700 hover:text-indigo-600 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6 shrink-0 group-hover:stroke-indigo-600 duration-300">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <span class="text-base font-semibold tracking-tight">
                                <?php echo $email ?>
                            </span>
                        </a>
                    </li>
                    <?php 
                    // If there is a Instagram link
                    echo $instagram ? "
                        <li>
                        <a href='$instagram' target='_blank'
                            class='flex items-center justify-start gap-2 text-sm font-semibold leading-6 text-gray-700 hover:text-indigo-600 group duration-300'>
                            <svg class='h-6 w-6 shrink-0 group-hover:fill-indigo-600 duration-300' fill='currentColor'
                                viewBox='0 0 24 24' aria-hidden='true'>
                                <path fill-rule='evenodd'
                                    d='M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z'
                                    clip-rule='evenodd' />
                            </svg>
                            <span class='text-base font-semibold tracking-tight'>
                                Follow on Instagram
                            </span>
                        </a>
                        </li>
                        " : 
                        null;
                    // If there is a Twitter link  -->
                    echo $twitter ? "
                        <li>
                        <a href='$twitter' target='_blank'
                            class='flex items-center justify-start gap-2 text-sm font-semibold leading-6 text-gray-700 hover:text-indigo-600 group'>
                            <svg viewBox='0 0 24 24' aria-hidden='true'
                                class='h-6 w-6 shrink-0 group-hover:fill-indigo-600 duration-300'>
                                <path
                                    d='M13.3174 10.7749L19.1457 4H17.7646L12.7039 9.88256L8.66193 4H4L10.1122 12.8955L4 20H5.38119L10.7254 13.7878L14.994 20H19.656L13.3171 10.7749H13.3174ZM11.4257 12.9738L10.8064 12.0881L5.87886 5.03974H8.00029L11.9769 10.728L12.5962 11.6137L17.7652 19.0075H15.6438L11.4257 12.9742V12.9738Z'>
                                </path>
                            </svg>
                            <span class='text-base font-semibold tracking-tight'>
                                Follow on X
                            </span>
                        </a>
                        </li>
                        " : null;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>