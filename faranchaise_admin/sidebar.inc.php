<?php 
  
$currentPath = $_SERVER['REQUEST_URI'];
$data=explode('/', $currentPath);
$pagename=end($data);

include 'include/config/dbconnection.php';

// echo $_SESSION['USER_NAME'];

?>

<aside class="z-20 hidden  w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0" style="background: #000; padding: 0 8px;">
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a class="ml-6 text-lg font-bold text-gray-200 dark:text-gray-200" href="#"><?php echo $_SESSION['USER_NAME']; ?></a>
          <ul class="mt-6 " style="padding:0 10px;">
            <li class="relative px-6 py-3  rounded-lg text-white " 
            <?php if($pagename==='dashboard.php') { ?> style="background-color:#7e3af2 ;" <?php } ?>  >
              <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="dashboard.php" >
                <i data-lucide="house" class="text-white"></i>
                <span class="ml-4 text-white ">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul style="padding:0 10px;">
            <li class="relative px-6 py-3 mt-3  rounded-lg text-white " 
            <?php if($pagename==='order.php') { ?> style="background-color:#7e3af2 ;" <?php } ?>  >
              <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="dashboard.php" >
                <i data-lucide="shopping-basket" class="text-white"></i>
                <span class="ml-4 text-white ">Order </span>
              </a>
            </li>

            <li class="relative  py-2 " x-data="{ isPagesMenuOpen: false }">
              <button class="flex items-center ps-5 p-3 rounded-lg  w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="isPagesMenuOpen = !isPagesMenuOpen" aria-haspopup="true" <?php if($pagename==='add-product.php' || $pagename=='productlist.php' ) { ?> style="background-color:#7e3af2 ;" <?php } ?> >
                  <i data-lucide="shopping-cart" class="text-white me-3"></i>
                  <span class="text-white ">Product</span>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a class="w-full" href="add-product.php">Add Product</a>
                  </li>
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a class="w-full" href="productlist.php">View Product</a>
                  </li>
                 
                </ul>
              </template>
            </li>

          </ul>
          
        </div>
      </aside>
      <!-- Mobile sidebar -->

      <!-- Backdrop -->
        
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#"><?php echo $_SESSION['USER_NAME']; ?></a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
              <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="dashboard.php" >
      
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul style="padding:0 10px;">
            <li class="relative px-6 py-3 mt-3  rounded-lg text-white " 
            <?php if($pagename==='order.php') { ?> style="background-color:#7e3af2 ;" <?php } ?>  >
              <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="dashboard.php" >
                <i data-lucide="shopping-basket" class="text-white"></i>
                <span class="ml-4 text-white ">Order </span>
              </a>
            </li>

            <li class="relative  py-2 " x-data="{ isPagesMenuOpen: false }">
              <button class="flex items-center ps-5 p-3 rounded-lg  w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="isPagesMenuOpen = !isPagesMenuOpen" aria-haspopup="true" <?php if($pagename==='add-product.php' || $pagename=='productlist.php' ) { ?> style="background-color:#7e3af2 ;" <?php } ?> >
                  <i data-lucide="shopping-cart" class="text-white me-3"></i>
                  <span class="text-white ">Product</span>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a class="w-full" href="add-product.php">Add Product</a>
                  </li>
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a class="w-full" href="productlist.php">View Product</a>
                  </li>
                 
                </ul>
              </template>
            </li>

          </ul>
          
        </div>
      </aside>