<?php
  
    require_once 'include/config/dbconnection.php';
    require_once 'include/class/Master.php';

   

    $MasterObj=new Master;
    



?>

<?php require_once 'header.inc.php'; ?>

<!-- aside end -->
<div class="flex flex-col flex-1 w-full">
  <?php require_once 'topbar.inc.php'; ?>

  <main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <div class=" flex items-center justify-between ">
      <h2 class="my-6 text-2xl  font-semibold text-gray-700 dark:text-gray-200">
        Product List
      </h2>
      <a href="add-product.php">
      <button class="bg-[#7e3af2] p-2 rounded-md text-white px-3">Add Product</button>
      </a>
      </div>

      <!-- New Table -->
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Product Name</th>
                <th class="px-4 py-3">Customer Name</th>
                <th class="px-4 py-3">Mobile</th>
                <th class="px-4 py-3">Payment Method</th>
                <th class="px-4 py-3">Delivary Status</th>
                <th class="px-4 py-3">Amount</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <?php $MasterObj->ViewProduct(); ?>
            </tbody>
          </table>
        </div>

        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
          <span class="flex items-center col-span-3">Showing 21-30 of 100</span>
          <span class="col-span-2"></span>
          <!-- Pagination -->
          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
              <ul class="inline-flex items-center">
                <li>
                  <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous"></button>
                </li>
                <li>
                  <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
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
