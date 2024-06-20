    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">Users</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name,
                email and password.</p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <a href=addUsers.php
                class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Add
                Users</a>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-950 sm:pl-0">Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-950">Email
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-950">Password
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-950">Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php 
                        // Calling Customers
                        $allUsers = "select * from users";
                        $users = mysqli_query($con,$allUsers);
                        while($row = mysqli_fetch_array($users)) {
                            $id = $row[0];
                            $name = $row['name'];
                            $email = $row['email'];
                            $password = $row['password'];
                        
                        echo "
                            <tr>
                                <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-800 sm:pl-0'>$name</td>
                                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-800'>$email</td>
                                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-800'>$password</td>
                                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-800 flex md:justify-between gap-x-4'>
                                <a class='text-green-500 hover:text-green-700 inline-flex items-center space-x-2' href=editUsers.php?id=$id>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='size-4'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125' />
                                    </svg>
                                    <span>
                                        Edit
                                    </span>
                                </a>
                            </td> </tr>"; 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>