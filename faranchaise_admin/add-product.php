<?php

include 'include/config/dbconnection.php';
include 'include/class/FranchProduct.php';

$FranchObj=new FranchProduct;
$FranchObj->AddFranchProduct(@$_SESSION['LOGIN_ID']);

// Get  function By Id
$franchUpdata=$FranchObj->FranchProductById(@$_GET['eid']);

$FranchObj->UpdateProductById($id=$franchUpdata['id'] ,@$_SESSION['LOGIN_ID'] )


?>

<?php require_once 'header.inc.php'; ?>

<!-- aside end -->
<div class="flex flex-col flex-1 w-full">
  <?php require_once 'topbar.inc.php'; ?>

  <main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <div class=" flex items-center justify-between ">
        <h2 class="my-6 text-2xl  font-semibold text-gray-700 dark:text-gray-200">
          Add Product
        </h2>
        <a href="productlist.php">
          <button class="bg-[#7e3af2] p-2 rounded-md text-white px-3 ">Product List</button>
        </a>
      </div>

      <!-- New Table -->
      <div class=" rounded-lg shadow-xs">

        <!-- add sevices section  start-->
        <div class="  px-6 py-4   ">

          <form method="post" enctype="multipart/form-data">
            <div class=" flex w-full items-center  justify-between flex-col md:flex-row " >
              <div class="w-[100%] sm:w-[48%] ">
               <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Product Name</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Product Name" type="" name="pro_name" value="<?php echo $franchUpdata['pro_name']; ?>">
                <input type="hidden" value="<?php echo $_SESSION['LOGIN_ID']; ?>" name="franch_ID">
              </label>
            </div>

            <div class="w-[100%] sm:w-[48%] ">
             <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Product Price</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Price" type="" value="<?php echo $franchUpdata['pro_price']; ?>" name="pro_price">
            </label>
          </div>
          
        </div>

        <div class="mt-4"> 
          <label class="block mt-2 text-sm">Product Status</label>
         <input type="radio" name="pro_status" value="1" <?php if($franchUpdata['pro_status']!=0) { echo 'checked'; } ?> > Active 
         <input type="radio" name="pro_status" value="0" <?php if($franchUpdata['pro_status']==0 || $franchUpdata['pro_status']!=1) { echo 'checked'; } ?>> Deactive
       </div>

       <div class="w-full mt-3 items-center flex  justify-between flex-col md:flex-row">
        <div class="w-[100%] sm:w-[48%]">
          <label class="block  text-sm">
            <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Services Name" type="file" name="pro_image">
            <img src="../franch-product-image/<?php echo $franchUpdata['pro_image']; ?>" height="100" width="100" >
          </label>
        </div>

        <div class="w-[100%] sm:w-[48%]    ">
          <?php if(@$_GET['eid']!="") { ?>
            <button class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="updateProduct">
            <span>Update Product</span>
          </button>

          <?php } else{ ?>
            <button class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="addProduct">
            <span>Add Product</span>
          </button>
         <?php } ?> 
          
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
