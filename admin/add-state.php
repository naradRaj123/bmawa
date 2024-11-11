<?php 

  require_once 'include/config/dbconnection.php';
  require_once 'include/class/Master.php';

  $StateObject=new Master;
  $StateObject->AddState();

  $StateObject->DeleteDate('state',@$_GET['dlId']);

?>



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
      <div class="  rounded-lg shadow-xs">
        <!-- add sevices section  start-->
        <div class="  px-6 py-4   ">
          <form method="post">
          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
            <div class="w-[100%] sm:w-[48%] ">
             <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">State</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="State  Name" type="" name="stateName">
            </label>
          </div>
        </div>
        <div class="w-full mt-3 items-center flex  justify-between flex-col md:flex-row">
          <div class="w-[100%] sm:w-[48%]    ">
            <button class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="save" >
              <span>Add State</span>
            </button>
          </div>
        </div>
        </form>
      </div>
      <!-- add sevices section  start-->

       <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Sr . No</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Action</th>
                
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              <?php echo $StateObject->ViewState(); ?>
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
               
              </ul>
            </nav>
          </span>
        </div>
      </div>


    </div>
  </div>
</main>
</div>

<!-- footer -->
<?php require_once 'footer.inc.php'; ?>
