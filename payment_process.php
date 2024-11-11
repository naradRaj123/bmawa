<?php
// require('razorpay-sample-project/razorpay-php/Razorpay.php');
// use Razorpay\Api\Api;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   echo $action=$_POST['action'];

    if($action==='online'){
    // Get product ID and other necessary details
        $payment_id = $_POST['payment_id'];
        $product_ID=$_POST['productId'];
        $userID=$_POST['userId'];
        $amount=$_POST['amount'];
        
    // Fetch product details from the database to get price
        include('include/config/dbconfig.php');
        $sql = "INSERT INTO orders(payment_id,users_id,product_id,amount, payment_method,payment_status) VALUES(:a , :b, :c , :d,:e ,:f)";
        $r = $pdo->prepare($sql);
        $result = $r->execute(array(':a' => $payment_id ,':b'=>$userID , ':c'=>$product_ID  , ':d'=>$amount , ':e'=>'Online' ,':f'=>'Done'));
    }else if($action==='cod'){
        include('include/config/dbconfig.php');
       $amount = $_POST['amount'];
       $productId = $_POST['productId'];
       $userId = $_POST['userId'];

         // Insert order into the database with COD payment method
       $sql = "INSERT INTO orders(payment_id,users_id,product_id,amount, payment_method,payment_status) VALUES(:a , :b, :c , :d,:e ,:f)";
        $r = $pdo->prepare($sql);
        $result = $r->execute(array(':a' => $payment_id ,':b'=>$userId , ':c'=>$productId  , ':d'=>$amount , ':e'=>'CASH' , ':f'=>'Pending'));

    // Send a confirmation email or notify the user
    // For example, you can email them about the COD order
       // echo "Order placed successfully with Cash on Delivery!";
   }  


}



?>
