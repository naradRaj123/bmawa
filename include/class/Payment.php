<?php

	/**
	 * 
	 */
	require('razorpay-sample-project/razorpay-php/Razorpay.php'); // Load Razorpay SDK
			use Razorpay\Api\Api;	
	class Payment
	{

		private $api_key = 'rzp_test_6m5EFshHcmM2o1';
		private $api_secret = 'HxglzG5XHEPtZOP6e9eulqQv';

		// pay now
		function PayNow()
		{
			
			$api = new Api($this->api_key, $this->api_secret);

        try {
            // Create an order with the specified amount and currency
            $order = $api->order->create([
                'amount' => 9900, // Amount in paise (₹99.00)
                'currency' => 'INR',
                'receipt' => 'order_receipt_12asa3'
            ]);

            // Get the order ID to pass it to the frontend
            $order_id = $order->id;

            // Set your callback URL (optional, typically set in the frontend)
            $callback_url = "http://localhost:bmawa/";

            // Return or echo necessary details to be used in the frontend
            return [
                'order_id' => $order_id,
                'callback_url' => $callback_url,
            ];
        } catch (\Exception $e) {
            // Handle exceptions such as connection errors
            echo 'Razorpay Error: ' . $e->getMessage();
        }



		}
		// pay now


	}

	// Execute the payment process when the form is submitted
if (isset($_POST['pay_now'])) {
    $payment = new Payment();
    $payment->PayNow();
}

?>