<?php
	
	/**
	 * 
	 */
	class Enquiry 
	{
		
		// Enquiry Data function
		function EnquiryList()
		{
			include('include/config/dbconnection.php');

			$sql = "SELECT * FROM enquiry";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			 // echo	@$user = $stmt->fetch();

			 while($data=$stmt->fetch()){ ?>

			 	<tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    
                    <div>
                      <p class="font-semibold"><?php echo $data['name']; ?></p>
                      <p class="text-xs text-gray-600 dark:text-gray-400"></p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm"><?php echo $data['mobile']; ?></td>
                <td class="px-4 py-3 text-sm"><?php echo $data['amount']; ?></td>
                <td class="px-4 py-3 text-sm"><?php echo $data['state']; ?></td>
                <td class="px-4 py-3 text-sm"><?php echo $data['email']; ?></td>
                <td class="px-4 py-3 text-sm"><?php echo $data['message']; ?></td>
                <td class="px-4 py-3 text-xs">
                	<?php if($data['message']==1) { ?>
                  <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    Approved
                  </span>
              <?php } else { ?>
              		<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-red-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    Pending
                  </span>
              <?php } ?>
                </td>
                
                <td class="px-4 py-3 text-sm text-center">
                	<a href="" class=" p-2 rounded-md text-white bg-red-400 ">Delete</a>
                </td>

              </tr>

			 <?php }



		}
		// Enquiry data function


	}


?>