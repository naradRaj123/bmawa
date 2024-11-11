<?php

	/**
	 * 
	 */
	class Services 
	{
		
		// add serices fn start
		function AddService()
		{
			if(isset($_POST['addServices'])){
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

				$serviceName=$_POST['title'];
				$price=$_POST['price'];

				$slugName=slugify($serviceName);

				$servicesImg=$_FILES['serviceImg'];
				$imagName=$servicesImg['name'];
				$tmpName=$servicesImg['tmp_name'];

				$path='../Service_img/'.$imagName;

				move_uploaded_file($tmpName,$path);

				try{
					$sql="INSERT INTO service(title,s_slug,price,image) VALUES(:a ,:b ,:c ,:d)";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$serviceName , ':b'=>$slugName ,':c'=>$price , ':d'=>$imagName));

					if($result){
						header('location:servicelist.php');
					}

				}catch(PDOException $e){
					echo $e->getMessage();
				}


			}
		}
		// add services fn end


		// view services start
		function ViewService()
		{
			include('include/config/dbconnection.php');

			$sql = "SELECT * FROM service ";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();

			while($data=$stmt->fetch()){ ?>
				<tr class="text-gray-700 dark:text-gray-400">
					<td class="px-4 py-3">
						<div class="flex items-center text-sm">
							<div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
								<img class="object-cover w-full h-full rounded-full" src="../Service_img/<?php echo $data['image']; ?>" alt="Client Image" loading="lazy" />
								<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
							</div>
							<div>
								<p class="font-semibold"><?php echo $data['title']; ?></p>

							</div>
						</div>
					</td>
					<td class=" py-3 text-sm flex items-center  "><?php echo $data['price']; ?> <i data-lucide="indian-rupee" class="text-[0.3rem] h-[0.9rem] "></i></td>
					<td class="px-4 py-3 text-xs">
						<?php if($data['status']!=0) { ?>
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

						<a href="add-services.php?edit=<?php echo $data['id']; ?>"  ><i data-lucide="file-pen-line" class="text-blue-700 me-3 "></i></a>
						<a href="servicelist.php?delID=<?php echo $data['id']; ?>"  ><i data-lucide="trash-2" class="text-red-700"></i></a>
					</td>
				</tr>

			<?php } 
		}
		// view Services end


		// Delete Servics function start
		function DeleteService($id)
		{	
			
			include('include/config/dbconnection.php');

			$sql = "SELECT * FROM service WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $id]);
			@$user = $stmt->fetch();

			@$oldImage=$user['image'];
			@$path='../Service_img/'.$oldImage;
			unlink(@$path);

			$del_qry="DELETE FROM service WHERE id =:id";
			$stmt=$pdo->prepare($del_qry);
			if ($stmt->execute([':id' => $id])) {
				return true;
				exit();
			} else {
				return false;
				exit();
			}


		}
		// Delete services function end


		// update services fn start
		function UpdateService($id){
			include('include/config/dbconnection.php');
			include('include/config/function.php');
			// function slugify($text, string $divider='-'){
			// 	$text=preg_replace('~[^\pL\d]+~u', $divider, $text);
			// 	$text=iconv('utf-8', 'us-ascii//TRANSLIT', $text);
			// 	$text=preg_replace('~[^-\w]+~', '',$text);
			// 	$text=trim($text,$divider);
			// 	$text=preg_replace('~-+~', $divider, $text);
			// 	$text=strtolower($text);
			// 	if(empty($text)){
			// 		return 'n-a';
			// 	}
			// 	return $text;
			// }
			
			if(isset($_POST['updateService'])){

				$title=$_POST['title'];
				$price=$_POST['price'];
				$slug=slugify($title);
				$status=$_POST['status'];
				// remove image path of old image 
				$sql = "SELECT * FROM service WHERE id= :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute([':id' => $id]);
				@$serviceData = $stmt->fetch();				

				// get old image path(Data) 
				$oldImageName=$serviceData['image'];
				$removePath="../Service_img".$oldImageName;

				if($_FILES['serviceImg']['name']!=""){
					$image=$_FILES['serviceImg'];
					$imagName=$image['name'];
					$tmpName=$image['tmp_name'];

					// update data of old image
					$path ='../Service_img/'.$imagName;
					move_uploaded_file($tmpName,$path);
					$sql="UPDATE service set title =:a , s_slug =:b ,price =:c , image=:d , status=:e  where id=:id";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$title,':b'=>$slug,':c'=>$price,':d'=>$imagName,':e'=>$status,':id'=>$id));
					if($result){
						unlink($removePath);
						header('location:servicelist.php');
					}

				}else{

					$sql="UPDATE service set title =:a , s_slug =:b ,price =:c , status=:d   where id=:id";
					$r=$pdo->prepare($sql);
					$result=$r->execute(array(':a'=>$title,':b'=>$slug,':c'=>$price,':d'=>$status, ':id'=>$id));
					if($result){
						
						header('location:servicelist.php');
					}

				}



			}


		}
		// update services fn end 

		function ViewServiceById($id)
		{		
			include('include/config/dbconnection.php');
			$sql = "SELECT * FROM service WHERE id= :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $id]);
			return @$serviceData = $stmt->fetch();

		}


	}


?>