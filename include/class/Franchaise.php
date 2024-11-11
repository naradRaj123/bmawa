<?php

	/**
	 * 
	 */
	class Franchaise 
	{
		
		// frachaise Register function start
		function FranchaiseRegister()
		{
			if(isset($_POST['register'])){
				include('include/config/dbconfig.php');

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

				$userSlug=slugify($name);

				// user images
				$Images=$_FILES['userImage'];
				$imgName=$Images['name'];
				$tmpName=$Images['tmp_name'];
				$user_img_path='./user-images/'.$imgName;

				// signature
				$singImg=$_FILES['sigImg'];
				$sigImgName=$singImg['name'];
				$sigtmpName=$singImg['tmp_name'];
				$sig_path='./user-signature/'.$sigImgName;

				$amount=$_POST['amount'];
				$email=$_POST['email'];
				$password=$_POST['password'];

				try{

					move_uploaded_file($tmpName,$user_img_path);

					move_uploaded_file($sigtmpName,$sig_path);

					$sql = "INSERT INTO franch_regi(name, slug , address, image, amount, email , password , mobile , state , pan_card , account_no , signature) VALUES(:a, :b, :c, :d, :e , :f , :g , :h , :i , :j , :k , :l  )";
					$r = $pdo->prepare($sql);
					$result = $r->execute(array(':a' => $name,':b' => $userSlug,':c' => $address,':d' =>$imgName,':e' => $amount , ':f'=> $email ,':g'=>$password ,':h'=>$mobile, ':i'=> $state , ':j'=>$panCard , ':k'=>$accountNo , ':l'=>$sigImgName ));
					if($result){
						header('location:register.php?status=send');
					}
				}catch(PDOException  $e){
					echo $e->getMessage();
				}	

			}
		}
		// franchaise Register function end


		// Login franchaise function
		function LoginFranchaise()
		{
			if(isset($_POST['login'])){
				include('include/config/dbconfig.php');
				$userEmail=$_POST['email'];
				$password=$_POST['password'];

				$sql = "SELECT * FROM franch_regi WHERE email = :email";
				$stmt = $pdo->prepare($sql);
				$stmt->execute([':email' => $userEmail]);
				$user = $stmt->fetch();
				$row=$stmt->rowCount();
				$msg='';
				if($row>0){
					if ($password == $user['password']) {

						if($user['status']!=0){
							session_start();
							$_SESSION['LOGIN_ID'] = $user['id'];
							$_SESSION['USER_NAME'] = $user['name'];
							header('Location: profile.php');
							exit();
						}else{
							header('Location:login.php?auth=verify');
							exit();
						}

						
					} else {
						header('Location:login.php?status=error');
						exit();
					}
				}else{
					header('Location:login.php?auth=error');
					exit();
				}
			}
		}
		// Login franchaise function



		// get Franchaise Details by ID
		function Franchaise_userDetails($user_id){
			include('include/config/dbconfig.php');

			$sql = "SELECT * FROM franch_regi WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $user_id]);
			return @$user = $stmt->fetch();
		}

		// Franchaise Details by Id

		// All Franchaise list start
		function FranchaiseList(){
			include('include/config/dbconfig.php');
			$sql = "SELECT * FROM franch_regi WHERE status='1'";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			while($franchaiseData=$stmt->fetch()){ ?>
				<div class="col-lg-6 ">
					<div class="crad-v">
						<div class="row">
							<div class="col-lg-6 col-6 text-center">
								<div class="imglogo-v">
									<img src="images/memberimg/brandlogo.png" class="com-logo">

								</div>
								<div class="com-img" style="width: 60%; margin: auto;">
									<img src="user-images/<?php echo $franchaiseData['image']; ?>">
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="text-vcard">
									<div class="mb-2">
										<div class="cionbox" id="top-vcard">
											<i aria-hidden="true" class="fa fa-user card-icon-new"></i>
										</div>
										<div class="op">
											<strong class="font-bolder-new"><?php echo $franchaiseData['name']; ?></strong><br />
											<span class="mobileno1">Designation</span>
										</div>
									</div>
									<div class="mb-2">
										<div class="cionbox">
											<i aria-hidden="true" class="fa fa-envelope-o card-icon-new"></i>
										</div>
										<div class="op"><?php echo $franchaiseData['email']; ?></div>
									</div>
									<div class="clearfix"></div>
									<div class="mb-2 mt-2  ">
										<div class="cionbox">
											<i aria-hidden="true" class="fa fa-phone card-icon-new"></i>
										</div>
										<div class="op">+91 123456789<br />
											<span class="mobileno1">+91 2345657756</span>
										</div>
									</div>


								</div>
							</div>
						</div>
					</div>
				</div>

			<?php  }

		}
		// All Franchaise list end






	}
	// class end section


?>