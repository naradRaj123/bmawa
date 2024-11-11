<?php

require_once 'include/config/dbconnection.php';
require_once 'include/class/FranchaiseAdmin.php';

$FranchaisObj=new FranchaiseAdmin;
$FranchaisObj->UpdateFranchaise(@$_GET['id']);

 @$id=$_GET['id'];

 @$franchData=$FranchaisObj->GetFranchaise($id=$_GET['id']);

?>


<?php require_once 'header.inc.php'; ?>

<!-- aside end -->
<div class="flex flex-col flex-1 w-full">
  <?php require_once 'topbar.inc.php'; ?>

  <main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <div class=" flex items-center justify-between ">
        <h2 class="my-6 text-2xl  font-semibold text-gray-700 dark:text-gray-200">
          Add Franchaise
        </h2>
        <a href="franchaiselist.php">
          <button class="bg-[#7e3af2] p-2 rounded-md text-white px-3 ">Franchaise List</button>
        </a>
      </div>

      <!-- New Table -->
      <div class=" rounded-lg shadow-xs">


        <?php if(@$_GET['id']==""){?>

          <!-- add sevices section  start-->
           <div class="  px-6 py-4   ">

          <form method="post">
            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Franchaise Name" type="" name="fname">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Mobile</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Mobile No" type="number" name="mobileNo" />
              </label>
            </div>
          </div>

          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Address</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Franchaise Name" type="" value="" name="address">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">State</span>
                  <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="state">
                    <option>Select State</option>
                    <option>Uttar Pradesh</option>
                  </select>
                </label>
              </div>
          </div>

           <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Pan Card </span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Pan Card" type="" name="pancard" value="">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Account No </span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Account Number" type="" name="accountNo" value="">
              </label>
            </div>
          </div>

          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
             <!--  <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Member  Image </span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Pan Card" type="file" name="name">
              </label>
            </div> -->
            
          </div>

          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="user@gmail.com" type="email" name="email" value="">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Amount</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Amount" type="" name="amount" value="" readonly>
              </label>
            </div>
          </div>

           <div class="w-full mt-3 items-center   justify-between flex-col md:flex-row">
           
            <div class="w-[100%] sm:w-[48%] text-gray-700 dark:text-gray-400">
                <input type="radio" name="status" value="1"  class="text-gray-700 dark:text-gray-400"> Active
                <input type="radio" name="status" value="0" class="text-gray-700 dark:text-gray-400" > Deactive
            </div>
          </div>

          <div class="w-full mt-3 items-center   justify-between flex-col md:flex-row">
           
            <div class="w-[100%] sm:w-[48%]">
              <button type="submit" name="updateData" class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <span>Add Franchaise</span>
              </button>
            </div>
          </div>
        </form>
      </div>
        <!-- add sevices section  start-->
      <?php } else { ?>

        <!-- add sevices section  start-->
        <div class="  px-6 py-4   ">

          <form method="post">
            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Franchaise Name" type="" value="<?php echo $franchData['name']; ?>" name="fname">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Mobile</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Mobile No" type="number" name="mobileNo" value="<?php echo $franchData['mobile']; ?>">
              </label>
            </div>
          </div>

          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Address</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Franchaise Name" type="" value="<?php echo $franchData['address']; ?>" name="address">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">State</span>
                  <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="state">
                    <option>Select State</option>
                    <option>Uttar Pradesh</option>
                  </select>
                </label>
              </div>
          </div>

           <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Pan Card </span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Pan Card" type="" name="pancard" value="<?php echo $franchData['pan_card']; ?>">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Account No </span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Account Number" type="" name="accountNo" value="<?php echo $franchData['account_no']; ?>">
              </label>
            </div>
          </div>

          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
             <!--  <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Member  Image </span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Pan Card" type="file" name="name">
              </label>
            </div> -->
            
          </div>

          <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="user@gmail.com" type="email" name="email" value="<?php echo $franchData['email']; ?>">
              </label>
            </div>
            <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Amount</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Amount" type="" name="amount" value="<?php echo $franchData['amount']; ?>" readonly>
              </label>
            </div>
          </div>

           <div class="w-full mt-3 items-center   justify-between flex-col md:flex-row">
           
            <div class="w-[100%] sm:w-[48%] text-gray-700 dark:text-gray-400">
                <input type="radio" name="status" value="1" <?php if($franchData['status']!=0){ echo 'Checked'; }  ?> class="text-gray-700 dark:text-gray-400"> Active
                <input type="radio" name="status" value="0" class="text-gray-700 dark:text-gray-400" <?php if($franchData['status']==0 || $franchData['status']==null  ){ echo 'Checked'; }  ?>> Deactive
            </div>
          </div>

          <div class="w-full mt-3 items-center   justify-between flex-col md:flex-row">
           
            <div class="w-[100%] sm:w-[48%]">
              <button type="submit" name="updateData" class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <span>Update</span>
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- add sevices section  start-->

    <?php } ?>

  </div>
</div>
</main>
</div>

<!-- footer -->
<?php require_once 'footer.inc.php'; ?>
