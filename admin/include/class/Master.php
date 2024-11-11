<?php

	/**
	 * 
	 */
	class Master 
	{
		
		// add State
		function AddState()
		{
			if(isset($_POST['save'])){
				include('include/config/dbconnection.php');
				$stateName=$_POST['stateName'];
				try{
					$sql="INSERT INTO state(name) VALUES(:a)";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$stateName));
					if($result){
						header('location:add-state.php');
					}
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}
		}
		// add state


		// view state
		function ViewState()
		{
			include('include/config/dbconnection.php');
			$sql = "SELECT * FROM state ";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$id=1;
			while($stateData=$stmt->fetch()){ ?>
				<tr class="text-gray-700 dark:text-gray-400">
					<td class="px-4 py-3">
						<div class="flex items-center text-sm">
							<div>
								<p class="font-semibold"><?php echo $id++; ?></p>

							</div>
						</div>
					</td>
					<td class="px-4 py-3 text-sm"><?php echo $stateData['name']; ?></td>

					<td class="px-4 py-3 text-sm"> <a href="add-state.php?dlId=<?php echo $stateData['id']; ?>" class="text-red-700"> <i data-lucide="trash-2"></i></a></td>
				</tr>

			<?php	}
		}
		// view state


		// Delete Function
		function DeleteDate($tableName ,$id)
		{
			include('include/config/dbconnection.php');
			$del_qry="DELETE FROM $tableName WHERE id =:id";
			$stmt=$pdo->prepare($del_qry);
			if ($stmt->execute([':id' => $id])) {
				return true;
				exit();
			} else {
				return false;
				exit();
			}
		}
		// Delete function end


		// Add Product Category
		function AddProductCategory(){
			if(isset($_POST['save'])){
				include('include/config/dbconnection.php');
				include('include/config/function.php');
				$stateName=$_POST['categoryName'];
				$categoryslug=slugify($stateName);
				try{
					$sql="INSERT INTO pro_category(categ_name, category_slug) VALUES(:a , :b)";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$stateName , ':b'=>$categoryslug));
					if($result){
						header('location:add-category.php');
					}
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}
		}
		// Add product Category end

		// view product category
		function ViewProductCategory()
		{
			include('include/config/dbconnection.php');
			$sql = "SELECT * FROM pro_category ";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$id=1;
			while($cateData=$stmt->fetch()){ ?>
				<tr class="text-gray-700 dark:text-gray-400">
					<td class="px-4 py-3">
						<div class="flex items-center text-sm">
							<div>
								<p class="font-semibold"><?php echo $id++; ?></p>

							</div>
						</div>
					</td>
					<td class="px-4 py-3 text-sm"><?php echo $cateData['name']; ?></td>

					<td class="px-4 py-3 text-sm"> <a href="add-category.php?cId=<?php echo $cateData['id']; ?>" class="text-red-700"> <i data-lucide="trash-2"></i></a></td>
				</tr>

			<?php	}
		}
		// view product category

		// DropDown start fn
		function DropDown($tableName)
		{
			include('include/config/dbconnection.php');
			$sql = "SELECT * FROM $tableName";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			while($selectData=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
				<option value="<?php echo @$selectData['id']; ?>"><?php echo @$selectData['name']; ?></option>
			<?php	} 
		}
		// DropDown End fn

		// Selected Drop down
		function SelectedDropDown($tableName,$id)
		{
			include('include/config/dbconnection.php');
			$sql = "SELECT * FROM $tableName ";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			while ($slData=$stmt->fetch()) { ?>
				<option value="<?php echo @$slData['id']; ?>" selected><?php echo @$slData['name']; ?></option>
		<?php }
		}
		// Selected Drop Down



		// Add Product start
		function AddProduct()
		{
			if(isset($_POST['addProduct'])){
				include('include/config/dbconnection.php');
				include('include/config/function.php');

				$productName=$_POST['proName'];
				$productPrice=$_POST['proPrice'];
				$productCate=$_POST['proCategory'];
				$slug=slugify($productName);
				$status=$_POST['status'];

				$productImg=$_FILES['proImg'];
				$imgName=rand(1111,9999).$productImg['name'];
				$tmpName=$productImg['tmp_name'];

				$path='../Product-image/'.$imgName;

				try{	
					$sql="INSERT INTO product(name, pro_slug, product_price , pro_image , pro_status ,category_id) VALUES(:a,:b , :c , :d, :e , :f)";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$productName , ':b'=>$slug , ':c'=>$productPrice , ':d'=>$imgName , ':e'=>$status , ':f'=>$productCate));
					if($result){
						move_uploaded_file($tmpName,$path);
						header('location:productlist.php');
					}
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}

		}
		// Add Product end


		// view product fn start
		
		function ViewProduct()
		{
			include('include/config/dbconnection.php');
			$sql = "SELECT * FROM product";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$id=1;

			while($pdata=$stmt->fetch()){ ?>

				<tr class="text-gray-700 dark:text-gray-400">
					<td class="px-4 py-3">
						<div class="flex items-center text-sm">
							<div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
								<img class="object-cover w-full h-full rounded-full" src="../Product-image/<?php echo $pdata['pro_image']; ?>" alt="Client Image"loading="lazy" />
								<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
							</div>
							<div>
								<p class="font-semibold"><?php echo $pdata['name']; ?></p>
								
							</div>
						</div>
					</td>
					<td class="px-4 py-3 text-sm flex items-center  "><i data-lucide="indian-rupee" class="h-[20px]" ></i> <?php echo $pdata['product_price']; ?> </td>
					<td class="px-4 py-3 text-xs">
						<?php if($pdata['pro_status']!=0) { ?>
							<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
								Approved
							</span>
						<?php } else { ?>
							<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
								Pending
							</span>
						<?php } ?>
					</td>
					<td class="px-4 py-3 text-sm flex items-center">

						<a href="add-product.php?edit=<?php echo $pdata['id']; ?>"><i data-lucide="notebook-pen" class="me-2 text-[blue] "></i></a>
						<a href=""><i data-lucide="trash-2" class="me-2 text-[red] "></i></a>

					</td>
				</tr>
			<?php }

		}
		// view product fn end

		function GetDataById($tableName ,$id)
		{
			include('include/config/dbconnection.php');
			$sql = "SELECT * FROM $tableName WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $id]);
			 return 	@$productData = $stmt->fetch();
		}


		// add pricing
		




	}



?>