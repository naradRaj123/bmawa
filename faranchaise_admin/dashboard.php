<?php require_once 'header.inc.php'; ?>

<!-- aside end -->
<div class="flex flex-col flex-1 w-full">
    <?php require_once 'topbar.inc.php'; ?>

    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Dashboard
            </h2>
            
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card -->
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total clients</p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">6389</p>
                    </div>
                </div>

                <!-- More Cards -->

            </div>

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Client</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">Hans Burger</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">$ 863.45</td>
                                <td class="px-4 py-3 text-xs">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Approved</span>
                                </td>
                                <td class="px-4 py-3 text-sm">6/10/2020</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3">Showing 21-30 of 100</span>
                    <span class="col-span-2"></span>
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                            <ul class="inline-flex items-center">
                                <li>
                                    <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li><button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button></li>
                                <li><button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button></li>
                                <li><button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">3</button></li>
                                <li><button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button></li>
                                <li><span class="px-3 py-1">...</span></li>
                                <li><button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button></li>
                                <li><button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button></li>
                                <li>
                                    <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                        <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- footer -->
<?php require_once 'footer.inc.php'; ?>
