<?php

	/**
	 * 
	 */
	class Enquiry 
	{
		
		function SendEnqury()
		{
			if(isset($_POST['send'])){ 

				include('include/config/dbconfig.php');

				$name=$_POST['name'];
				$mobile=$_POST['mobile'];
				$amount=$_POST['amount'];
				$state=$_POST['state'];
				$email=$_POST['email'];
				$message=$_POST['message'];

				if($mobile!=""){
					try{
						$sql = "INSERT INTO enquiry(name, mobile, amount, state, email, message) VALUES(:a, :b, :c, :d, :e , :f)";
						$r = $pdo->prepare($sql);
						$result = $r->execute(array(':a' => $name,':b' => $mobile,':c' => $amount,':d' => $state,':e' => $email , ':f'=> $message));
						if($result){
							header('location:index.php?status=send');
						}
					}catch(PDOException  $e){
						echo $e->getMessage();
					}

				}	

			}

		}
		//end enqury function


	}


?>