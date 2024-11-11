<?php 

require_once 'include/config/dbconnection.php';
require_once 'include/class/Services.php';


@$id=$_GET['edit'];
$ServicesObj=new Services;
$ServicesObj->AddService();
$ServicesObj->UpdateService(@$id);
@$oldData= $ServicesObj->ViewServiceById(@$id=$_GET['edit']);

?>


<?php require_once 'header.inc.php'; ?>

<!-- aside end -->
<div class="flex flex-col flex-1 w-full">
  <?php require_once 'topbar.inc.php'; ?>

  <main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <div class=" flex items-center justify-between ">
        <h2 class="my-6 text-2xl  font-semibold text-gray-700 dark:text-gray-200">
          Add Services
        </h2>
        <a href="servicelist.php">
          <button class="bg-[#7e3af2] p-2 rounded-md text-white px-3 ">Services List</button>
        </a>
      </div>

      <!-- New Table -->
      <div class=" rounded-lg shadow-xs">


        <?php if(@$_GET['edit']==false || @$_GET['edit']=="") { ?>
        <!-- add sevices section  start-->
        <div class="  px-6 py-4   ">
          <form method="post" enctype="multipart/form-data">
            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
                <div class="w-[100%] sm:w-[48%] ">
                 <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Services Name</span>
                  <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Services Name" type="" name="title">
                </label>
              </div>
            </div>

            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
                 <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Price</span>
                  <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Price" type="" name="price">
                </label>
              </div>
            </div>

            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
                <div class="w-[100%] sm:w-[48%] ">
                 <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Services Image</span>
                  <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Price" type="file" name="serviceImg">
                </label>
              </div>
            </div>

            <div class="w-full mt-3 items-center flex  justify-between flex-col md:flex-row">
              <div class="w-[100%] sm:w-[48%] ">
                <button class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="addServices">
                  <span>Add Service</span>
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- add sevices section  start-->

      <?php } else{ ?>

        <!-- add sevices section  start-->
        <div class="  px-6 py-4   ">
          <form method="post" enctype="multipart/form-data">
            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
                <div class="w-[100%] sm:w-[48%] ">
                 <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Services Name</span>
                  <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="<?php echo @$oldData['title']; ?>" placeholder="Services Name" type="" name="title">
                </label>
              </div>
            </div>

            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
                 <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Price</span>
                  <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Price" type="" name="price" value="<?php echo @$oldData['price']; ?>" />
                </label>
              </div>
            </div>

            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
                <div class="w-[100%] sm:w-[48%] ">
                 <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Services Image</span>
                  <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Price" type="file" name="serviceImg">

                  <img src="../Service_img/<?php echo $oldData['image'] ?>" class="w-[80px] h-[80px] " >

                </label>
              </div>
            </div>

            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
                <div class="w-[100%] sm:w-[48%] ">
                 <label class="block mt-4 text-sm">
                    <input type="radio" name="status" value="1" <?php if(@$oldData['status']!=false){ echo "checked" ; } ?>  > Active 
                    <input type="radio" name="status" value="0" <?php if(@$oldData['status']==false || @$oldData['status']=="") { echo "checked" ; } ?> > Dactive 
                </label>
              </div>
            </div>

            <div class="w-full mt-3 items-center flex  justify-between flex-col md:flex-row">
              <div class="w-[100%] sm:w-[48%] ">
                <button class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="updateService">
                  <span>Update </span>
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
