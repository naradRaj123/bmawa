<?php

	/**
	 * 
	 */
	class FranchaiseAdmin 
	{
		
		// Franchais list end
		function ViewFrancaiseList()
		{
			include('include/config/dbconnection.php');

			$sql = "SELECT * FROM franch_regi";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();

			while($data=$stmt->fetch()) { ?>

				<tr class="text-gray-700 dark:text-gray-400" >
					<td class="px-4 py-3">
						<div class="flex items-center text-sm">
							<div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
								<img class="object-cover w-full h-full rounded-full" src="../user-images/<?php echo $data['image']; ?>" alt="Client Image" loading="lazy" />
								<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
							</div>
							<div>
								<p class="font-semibold"><?php echo $data['name']; ?></p>
								
							</div>
						</div>
					</td>
					<td class="px-4 py-3 text-sm"><?php echo @$data['address']; ?></td>
					<td class="px-4 py-3 text-sm"><?php echo @$data['mobile']; ?></td>
					<td class="px-4 py-3 text-sm"><?php echo @$data['email']; ?></td>
					<td class="px-4 py-3 text-sm"><?php echo @$data['pan_card']; ?></td>
					<td class="px-4 py-3 text-sm"><?php echo @$data['state']; ?></td>
					<td class="px-4 py-3 text-sm"><?php echo @$data['account_no']; ?></td>
					<td class="px-4 py-3 text-xs">

						<?php if(@$data['status']!=0) { ?>

							<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
								Approved
							</span>

						<?php } else{ ?>
							<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-green-100">
								Pending
							</span>

						<?php } ?>



					</td>
					<td class="px-4 py-3 text-sm">
						
						<a href="add-franchaise.php?id=<?php echo @$data['id']; ?>" class="p-2  bg-blue-700 rounded-md text-white ">Edit</a>
						<a href="franchaiselist.php?del_id=<?php echo @$data['id']; ?>" class="bg-red-700 p-2 rounded-md text-white" >Delete</a>
					</td>
				</tr>


			<?php }


		}
		// Franchais list end



		// Get Franchaise Members list
		function GetFranchaise($id){
			include('include/config/dbconnection.php');

			$sql = "SELECT * FROM franch_regi WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $id]);
			return	@$user = $stmt->fetch();

		}



		// update franchaise function start
		function UpdateFranchaise($id){

			if(isset($_POST['updateData'])){
				include('include/config/dbconnection.php');

				function slugify($text, string $divider='-'){
					$text=preg_replace('~[^\pL\d]+~u', $divider, $text);
					$text=iconv('utf-8', 'us-ascii//TRANSLIT', $text);
					$text=preg_replace('~[^-\w]+~', '',$text);
					$text=trim($text,$divider);
					$text=preg_replace('~-+~', $divider, $text);
					$text=strtolower($text);
					if(empty($text)){
						return 'n-a';
					}
					return $text;
				}

				$name=$_POST['fname'];
				$mobile=$_POST['mobileNo'];
				$address=$_POST['address'];
				$state=$_POST['state'];
				$panCard=$_POST['pancard'];
				$accountNo=$_POST['accountNo'];
				$amount=$_POST['amount'];
				$email=$_POST['email'];
				$status=$_POST['status'];
				$userSlug=slugify($name);

				// user images
				// $Images=$_FILES['userImage'];
				// $imgName=$Images['name'];
				// $tmpName=$Images['tmp_name'];
				// $user_img_path='./user-images/'.$imgName;

				// signature
				// $singImg=$_FILES['sigImg'];
				// $sigImgName=$singImg['name'];
				// $sigtmpName=$singImg['tmp_name'];
				// $sig_path='./user-signature/'.$sigImgName;

				try{
					$sql="UPDATE franch_regi set name =:a ,slug =:b ,mobile =:c , address=:d , state=:e , pan_card =:f , account_no =:g , amount =:h , email=:i , status=:j where id=:id";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$name,':b'=>$userSlug,':c'=>$mobile,':d'=>$address,':e'=>$state, ':f'=>$panCard, ':g'=>$accountNo , ':h'=>$amount , ':i'=>$email , ':j'=>$status , ':id'=>$id));

					if($result){
						
						header('location:franchaiselist.php?status=sucess');
					}

				}catch(PDOException  $e){
					echo $e->getMessage();
				}

			}


		}
		// update franchaise function end


		// delete franchaise 
		function DeleteFranchaise($id){
			include('include/config/dbconnection.php');
			$sql = "DELETE FROM franch_regi WHERE id = :id";
			$stmt = $pdo->prepare($sql);


			if ($stmt->execute([':id' => $id])) {
				return true;
				exit();
			} else {
				return false;
				exit();
			}
		}
		// delete function end


	}



?>