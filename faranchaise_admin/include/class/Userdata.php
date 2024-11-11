<?php
	
	/**
	 * 
	 */
	class Userdata 
	{
		
		function UserDataById($user_id)
		{
			include('include/config/dbconnection.php');

			$sql = "SELECT * FROM franch_regi WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $user_id]);
			return @$user = $stmt->fetch();
		}
	}



?>