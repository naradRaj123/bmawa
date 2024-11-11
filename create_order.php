<?php

require('razorpay-php-2/Razorpay.php');
use Razorpay\Api\Api;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	include('include/config/dbconfig.php');

	$productId=$_POST['product_id'];
	$stmt = $pdo->prepare("SELECT * FROM product WHERE id = ?");
	$stmt->execute([$product_id]);
	$product = $stmt->fetch();

	if($product){
		$orderData = [
        'amount' => $product['product_price'] * 100, // Amount in paise
        'currency' => 'INR',
        'receipt' => 'order_rcptid_' . $product['id']
    ];
    $razorpayOrder = $api->order->create($orderData);
    echo json_encode(['order_id' => $razorpayOrder['id'], 'amount' => $orderData['amount']]);
}

echo json_encode(['productId' => $productId]);


}




?>