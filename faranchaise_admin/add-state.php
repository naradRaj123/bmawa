<?php require_once 'header.inc.php'; ?>

<!-- aside end -->
<div class="flex flex-col flex-1 w-full">
  <?php require_once 'topbar.inc.php'; ?>

  <main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <div class=" flex items-center justify-between ">
      <h2 class="my-6 text-2xl  font-semibold text-gray-700 dark:text-gray-200">
        Add State
      </h2>
      <a href="statelist.php">
      <button class="bg-[#7e3af2] p-2 rounded-md text-white px-3 ">State List</button>
      </a>
      </div>

      <!-- New Table -->
      <div class=" rounded-lg shadow-xs">

        <!-- add sevices section  start-->
        <div class="  px-6 py-4   ">

          <form method="">
          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
            <div class="w-[100%] sm:w-[48%] ">
             <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Services Name</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Services Name" type="" name="">
            </label>
          </div>
          <div class="w-[100%] sm:w-[48%] ">
            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Service Category</span>
              <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option>Select Category</option>
                <option>Hair</option>
                <option>Skin</option>
                <option>Make</option>
              </select>
            </label>
          </div>
        </div>

        <div class="w-full mt-3 items-center flex  justify-between flex-col md:flex-row">
          <div class="w-[100%] sm:w-[48%]">
            <label class="block  text-sm">
              
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Services Name" type="file" name="">
            </label>
          </div>

          <div class="w-[100%] sm:w-[48%]    ">

            <button class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              <span>Add Service</span>
            </button>
          </div>
        </div>
        </form>
      </div>
      <!-- add sevices section  start-->


    </div>
  </div>
</main>
</div>

<!-- footer -->
<?php require_once 'footer.inc.php'; ?>
