<?php


	/**
	 * 
	 */
	class Users 
	{
		
		// start user register fn
		function RegisterUser()
		{
			if(isset($_POST['userbtn'])){
				include('include/config/dbconfig.php');

				$name=$_POST['fname'];
				$mobile=$_POST['mobileNo'];
				$address=$_POST['address'];
				$state=$_POST['state'];
				$email=$_POST['email'];
				$password=$_POST['password'];

				// user images
				$Images=$_FILES['userImage'];
				$imgName=rand(1111,9999).$Images['name'];
				$tmpName=$Images['tmp_name'];
				$user_img_path='./USER-IMG/'.$imgName;


				if($mobile!=""){
					try{
						$sql = "INSERT INTO users(name, mobile, address, state, image, email, password) VALUES(:a, :b, :c, :d, :e , :f , :g)";
						$r = $pdo->prepare($sql);
						$result = $r->execute(array(':a' => $name,':b' => $mobile,':c' => $address,':d' => $state, ':e'=>$imgName ,':f' => $email , ':g'=> $password));
						if($result){
							move_uploaded_file($tmpName,$user_img_path);
							header('location:userlogin.php');
						}
					}catch(PDOException  $e){
						echo $e->getMessage();
					}

				}	

			}

		}
		// end register user fn end


		// Login franchaise function
		function LoginUsers()
		{
			if(isset($_POST['loginbtn'])){
				include('include/config/dbconfig.php');
				$userEmail=$_POST['email'];
				$password=$_POST['password'];

				$sql = "SELECT * FROM users WHERE email = :email";
				$stmt = $pdo->prepare($sql);
				$stmt->execute([':email' => $userEmail]);
				$user = $stmt->fetch();
				$row=$stmt->rowCount();
				$msg='';
				if($row>0){
					if ($password == $user['password']) {
						session_start();
						$_SESSION['CUSTOMER_LOGIN_ID'] = $user['id'];
						$_SESSION['CUSTOMER_NAME'] = $user['name'];
						header('Location: dashboard.php');
						exit();
					} else {
						header('Location:userlogin.php?status=error');
						exit();
					}
				}else{
					header('Location:userlogin.php?auth=error');
					exit();
				}
			}
		}
		// Login franchaise function


		// user data by ID
		function UsersDataById($custmerId)
		{
			include('include/config/dbconfig.php');
			$sql = "SELECT * FROM users WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $custmerId]);
			return @$customer = $stmt->fetch();

		}
		// user data by id end

		// user order by user id
		function UserOrder($custmerId) {
			include('include/config/dbconfig.php');

    // Initial query to get orders for a specific user
			$sql = "SELECT * FROM orders WHERE users_id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $custmerId]);
			$rowCount = $stmt->rowCount();

			if ($rowCount) {
				while ($orderData = $stmt->fetch()) { 
					$productID = $orderData['product_id'];

            // Inner join to get product details
					$sql2 = "
					SELECT *
					FROM orders 
					INNER JOIN product ON orders.product_id = product.id 
					WHERE orders.users_id = :id AND orders.product_id = :productId
					";
					$stmt2 = $pdo->prepare($sql2);
					$stmt2->execute([':id' => $custmerId, ':productId' => $productID]);
					$productData = $stmt2->fetch();
					if ($productData) {
						?>

						<div class="single_review">
							<div class="review_img">
								<img src="Product-image/<?php echo $productData['pro_image']; ?>" alt="Product" class="img-fluid w-100">
							</div>
							<div class="review_text">
								<h4><?php echo $productData['name']; ?> 
								<?php if($orderData['delivary_status']==0) { ?>
								<span style="background-color:#ff006dbf; padding:8px;color: #fff;font-size: 12px;border-radius: 5px;font-weight: 600;">Delivery Pending</span>
							<?php } else{ ?>
								<span style="background-color:#2a7224f5; padding:8px;color: #fff;border-radius: 5px;font-weight: 600;font-size: 12px;">Delivered</span>
							<?php } ?> 
							</h4>
							<p class="description">₹ 1200</p>
							<p>Mode of Payment : <?php echo $orderData['payment_method']; ?> </p>
						</div>
					</div>

					<?php
				}
			}
		} else {
			?>
			<p>No Order Available!</p>
			<?php
		}
	}







	} // end users class



?>