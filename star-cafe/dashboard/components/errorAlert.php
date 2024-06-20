<div aria-live="assertive" class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6"
    id="errorAlert">
    <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
        <div
            class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="p-4">
                <div class="flex items-center">
                    <div class="flex w-0 flex-1 justify-between gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5 stroke-red-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        <p class="w-0 flex-1 text-sm font-medium text-red-400">
                            Failed to save!
                        </p>
                    </div>
                    <div class="ml-4 flex flex-shrink-0">
                        <button type="button"
                            class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            onclick="closeAlert()">
                            <span class="sr-only">Close</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const alert = document.getElementById("errorAlert").classList;

function closeAlert() {
    alert.add('hidden');
}
setTimeout(() => {
    alert.add('hidden');
}, 3000)
</script>