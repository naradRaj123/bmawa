<?php
	// include('razorpay-sample-project/razorpay-php/Razorpay.php'); // Include Razorpay SDK
	// use Razorpay\Api\Api;

	/**
	 * 
	 */
	class MasterSetting 
	{

		// private $api_key = 'rzp_test_6m5EFshHcmM2o1'; 
		// private $api_secret = 'HxglzG5XHEPtZOP6e9eulqQv'; 
		

		// view list start
		function ViewPrice()
		{
			include('include/config/dbconfig.php');
			$sql = "SELECT * FROM franch_regi ";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			while(@$user = $stmt->fetch()){ ?>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
					<div class="single_pricing">
						<div class="single_pricing_header">
							<div class="img">
								<img src="images/pricing_img.png" alt="pricing" class="img-fluid w-100">
							</div>
							<div class="text">
								<h3>Comfort Relax</h3>
								<h5>Most Popular</h5>
								<h4>$36.00</h4>
								<span>Per Month/per user</span>
							</div>
						</div>
						<div class="pricing_list">
							<ul>
								<li>Lorem ipsum dolor sit amet</li>
								<li>consectetur adipiscing</li>
								<li>sed do eiusmod</li>
								<li>incididunt ut labore et dol</li>
								<li class="delete">quis nostrud exercitat</li>
								<li class="delete">laboris nisi ut aliquip</li>
								<li class="delete">Excepteur sint occaecat</li>
							</ul>
							<a href="#">choose plan</a>
						</div>
					</div>
				</div>

			<?php }
		}
		// view list end

		//Get All Product
		function GetAllProduct()
		{
			include('include/config/dbconfig.php');
			$sql = "SELECT * FROM product ";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			while($proData=$stmt->fetch()){ 
				?>
				<div class="col-lg-4 wow  fadeInUp" data-wow-duration="1s">
					<div class="services_item ">
						<div class="services_img">
							<img src="Product-image/<?php echo $proData['pro_image']; ?>" alt="services" class="img-fluid w-100">							
						</div>
						<div class="services_text">
							<a class="title" href="service_details.html"><?php echo $proData['name']; ?></a>
							<p class="d-flex align-items-center"> <i data-lucide="indian-rupee" style="height:18px;" ></i> <?php echo $proData['product_price']; ?></p>
							<button class="buy_btn" href="" onclick="startPayment('<?php echo $order_id; ?>', '<?php echo $productPrice; ?>', '<?php echo $productName; ?>')"  id="razorGateway" value="Pay" name="submit" >View</button>
						</div>
					</div>
				</div>
			<?php }
		}


		





	}




?>