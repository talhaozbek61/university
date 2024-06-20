<div class="bg-white">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-gray-900">Welcome</h2>
        <button onclick="loginOut()"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login
            Out</button>
    </div>

    <div class="mt-6 space-y-12 lg:grid lg:grid-cols-4 lg:gap-6 lg:space-y-0">
        <div class="group relative">
            <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-85 sm:h-64">
                <img src="../image/person.jpg" alt="Add Users" class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-medium text-gray-800">
                <a href="index.php?link=users">
                    <span class="absolute inset-0"></span>
                    Users
                </a>
            </h3>
        </div>
        <div class="group relative">
            <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-85 sm:h-64">
                <img src="https://d2eiylesx4iyph.cloudfront.net/files/8lkb3zxjm-mozaik-kek.jpg"
                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                    class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-medium text-gray-800">
                <a href="index.php?link=foods">
                    <span class="absolute inset-0"></span>
                    Foods
                </a>
            </h3>
        </div>
        <div class="group relative">
            <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-85 sm:h-64">
                <img src="https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-31_720x720.png"
                    alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                    class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-medium text-gray-800">
                <a href="index.php?link=drinks">
                    <span class="absolute inset-0"></span>
                    Drinks
                </a>
            </h3>
        </div>
        <div class="group relative">
            <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-85 sm:h-64">
                <img src="../image/about.jpg"
                    alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                    class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-medium text-gray-800">
                <a href="index.php?link=about">
                    <span class="absolute inset-0"></span>
                    About Us
                </a>
            </h3>
        </div>
    </div>
</div>
<!-- JS -->
<script>
function loginOut() {
    window.location.href = 'utils/login-out.php';
}
</script>