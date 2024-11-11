<?php


	/**
	 * 
	 */
	class FranchProduct 
	{
		
		// start add product fn 
		function AddFranchProduct($franch_id)
		{
			if(isset($_POST['addProduct'])){
				include 'include/config/dbconnection.php';

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


				$productName=$_POST['pro_name'];
				$productPrice=$_POST['pro_price'];
				$productSlug=slugify($productName);
				$productStatus=$_POST['pro_status'];

				$productImage=$_FILES['pro_image'];
				$productImageName=rand(1111,9999).$productImage['name'];
				$tmpName=$productImage['tmp_name'];

				$pathh="../franch-product-image/".$productImageName;

				try {
					$sql="INSERT INTO franch_product ( pro_name, pro_slug, pro_price , pro_image , pro_status ,franch_id) VALUES(:a,:b, :c, :d, :e, :f)";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$productName , ':b'=>$productSlug , ':c'=>$productPrice , ':d'=>$productImageName , ':e'=>$productStatus , ':f'=>$franch_id));
					if($result){
						move_uploaded_file($tmpName,$pathh);
						header('location:productlist.php');
					}
				} catch (PDOException $e) {
					echo $e->getMessage();
				}

			}
			
		}
		// end product fn


		// start view product fn
		function ViewAllFranchProduct($franch_id)
		{
			include 'include/config/dbconnection.php';
			$sql = "SELECT * FROM franch_product WHERE franch_id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $franch_id]);
			$rowCount=$stmt->rowCount();
			if($rowCount>0){
				while($fDataProd=$stmt->fetch()){ ?>
					<tr class="text-gray-700 dark:text-gray-400">
						<td class="px-4 py-3">
							<div class="flex items-center text-sm">
								<div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
									<img class="object-cover w-full h-full rounded-full" src="../franch-product-image/<?php echo $fDataProd['pro_image']; ?>" alt="Client Image" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold"><?php echo $fDataProd['pro_name']; ?></p>
									
								</div>
							</div>
						</td>
						<td class="px-4 py-3 text-sm">₹ <?php echo $fDataProd['pro_price']; ?></td>
						<td class="px-4 py-3 text-xs">
							<?php if($fDataProd['pro_status']!=0) { ?>
								<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
									Active
								</span>
							<?php } else{ ?> 
								<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
									Deactive
								</span>
							<?php } ?>
						</td>
						<td class="px-4 py-3 text-sm">
							<a href="add-product.php?eid=<?php echo $fDataProd['id']; ?>" class="btn bg-green-700 text-white p-2 rounded-md ">Edit</a>
							<a href="" class="btn bg-red-700 text-white p-2 rounded-md ">Delete</a>

						</td>
					</tr>
				<?php	} 
			}else{ ?>
				
				<td class="px-4 py-3 text-sm  ">No Data Available</td>
				
			<?php } 
		} // end view function of franchiase product



		// Get data by Id function
		function FranchProductById($franch_id)
		{	
			include 'include/config/dbconnection.php';
			$sql = "SELECT * FROM franch_product WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $franch_id]);
			return	@$FranchproductData = $stmt->fetch();
		}
		// Get data by id function end


		// update data of franchaise by id
		function UpdateProductById($id,$franch_id)
		{	
			if(isset($_POST['updateProduct'])){
				include 'include/config/dbconnection.php';

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

				$productName=$_POST['pro_name'];
				$productPrice=$_POST['pro_price'];
				$productSlug=slugify($productName);
				$productStatus=$_POST['pro_status'];

				try{
					$sql="UPDATE franch_product set pro_name =:a ,pro_slug =:b ,pro_price =:c , pro_status=:d  where id =:id AND franch_id =:franch_id ";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$productName,':b'=>$productSlug,':c'=>$productPrice,':d'=>$productStatus , ':franch_id'=>$franch_id , ':id'=>$id));

					if($result){
						
						header('location:add-product.php');
					}

				}catch(PDOException $e){
					echo $e->getMessage();
				}

				
			}
		}


	} // end class function


?>