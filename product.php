<?php require_once 'header.inc.php' ; ?>


<!-- navbar section -->
<?php require_once 'navbar.inc.php' ; ?>
<!-- navbar section -->


    <!--=====================================
        BREADCRUMB START
        =====================================-->
        <section class="breadcrumb_area" style="background: url(images/breadcrumb_bg.jpg);">
            <div class="breadcrumb_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_text">
                                <h1>our services</h1>
                                <ul>
                                    <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                    <li><a href="#">services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--=====================================
        BREADCRUMB END
        =====================================-->


    <!--=====================================
        SERVICES PAGE START
        =====================================-->
        <section class="services_page mt_95 xs_mt_45">
            <div class="container">
                <div class="row">

                    <?php 
                    $sql = "SELECT * FROM product ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $rowdata=$stmt->rowCount();
                    if($rowdata){
                        while($proData=$stmt->fetch()){ 
                            $productName = $proData['name'];
                            $product_id=$proData['id'];
                            $productPrice = $proData['product_price'];
                            ?>

                            <div class="col-lg-3 wow  fadeInUp" data-wow-duration="1s">
                                <div class="services_item" style="width:100%;">
                                    <div class="services_img">
                                        <img src="Product-image/<?php echo $proData['pro_image']; ?>" alt="services" class="img-fluid w-100">
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </div>

                                    <div class="services_text">
                                        <a class="title" href=""><?php echo $proData['name']; ?></a>
                                        <ul>
                                            <li><i height="18" data-lucide="indian-rupee"></i> <?php echo $productPrice; ?></li>
                                        </ul>

                                        <div class="services_btn_area">
                                            <div class="d-flex justify-content-start mb-2 ">
                                                <input type="radio" name="payment_method_<?php echo $product_id; ?>" value="cod" style="width: :10%!important;margin-right: 10px;"> Cash on Delivary
                                            </div>
                                            <div class="d-flex justify-content-start mb-2 ">
                                                <input type="radio" name="payment_method_<?php echo $product_id; ?>" value="online" style="width: :10%!important;margin-right: 10px;"> Online
                                            </div>
                                            <button class="buy_btn text-center" onclick="startPayment(<?php echo $product_id; ?>,<?php echo $productPrice; ?>)" >Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                            <script type="text/javascript">
                                function startPayment(product_id,amount) {

                                    var paymentMethod = $('input[name="payment_method_' + product_id + '"]:checked').val();

                                    console.log(paymentMethod);

                                    if(paymentMethod==='cod'){
                                        
                                        $.ajax({
                                            type: 'post',
                                            url: 'payment_process.php',
                                            data: {
                                                action:'cod',
                                                amount: amount,
                                                productId: product_id,
                                                userId: <?php echo $_SESSION['CUSTOMER_LOGIN_ID']; ?>
                                            },
                                            success: function (result) {
                                                toastr.success('Successfully Order done');
                                                $('input[name="payment_method_' + product_id + '"]:checked').prop('checked', false);
                                                // window.location.href = 'product.php';
                                                // alert("order done");
                                            },
                                        });

                                    }else if(paymentMethod==='online'){
                                       let options = {
                                        key: "rzp_test_6m5EFshHcmM2o1", 
                                        amount: amount*100, 
                                        currency: "INR",
                                        name: "BMAWA Beauty and Makeup Artist Welfare Association",
                                        description: "Test transaction",
                                        image: "images/blogo.png",
                                        "handler":function(response){
                                            console.log(response)                            
                                            $.ajax({
                                                type:'post',
                                                url:'payment_process.php',
                                                data: {
                                                    action:'online',
                                                    payment_id: response.razorpay_payment_id,
                                                    amount: <?php echo $productPrice; ?>,
                                                    productId:product_id,
                                                    userId:<?php echo $_SESSION['CUSTOMER_LOGIN_ID']; ?>
                                                },
                                                success:function(result){
                                                  toastr.success('Successfully Order done');
                                                $('input[name="payment_method_' + product_id + '"]:checked').prop('checked', false);
                                             },
                                         })
                                        } ,
                                        theme: {
                                            "color": "#3399cc"
                                        },
                                        callback_url: "http://localhost/bmawa/index.php"
                                    };
                                    let rzp = new Razorpay(options);
                                    rzp.open();
                                }else{
                                    alert("Please chooes Payment Mood !")
                                }

                                    // var options = {
                                    //     key: "rzp_test_6m5EFshHcmM2o1", 
                                    //     amount: amount*100, 
                                    //     currency: "INR",
                                    //     name: "BMAWA Beauty and Makeup Artist Welfare Association",
                                    //     description: "Test transaction",
                                    //     image: "images/blogo.png",
                                    //     "handler":function(response){
                                    //         console.log(response)                            
                                    //         $.ajax({
                                    //             type:'post',
                                    //             url:'payment_process.php',
                                    //             data: {
                                    //                 action:'payment_process',
                                    //                 payment_id: response.razorpay_payment_id,
                                    //                 amount: <?php echo $productPrice; ?>,
                                    //                 productId:product_id,
                                    //                 userId:<?php echo $_SESSION['CUSTOMER_LOGIN_ID']; ?>
                                    //             },
                                    //             success:function(result){
                                    //                window.location.href = 'dashboard.php';
                                    //            },
                                    //        })
                                    //     } ,
                                    //     theme: {
                                    //         "color": "#3399cc"
                                    //     },
                                    //     callback_url: "http://localhost/bmawa/index.php"
                                    // };
                                    // var rzp = new Razorpay(options);
                                    // rzp.open();
                            }
                        </script>
                    <?php } } else {  ?>

                        <h4 class="text-center" style="color:#faa392;">No Data Available ! </h4>
                    <?php } ?>


                </div>
                <!-- <div class="pagination mt_50">
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-double-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">01</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">02</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">03</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-double-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> -->
            </div>
            
        </section>
    <!--=====================================
        SERVICES PAGE END
        =====================================-->


    <!--=====================================
        FOOTER START
        =====================================-->
        <?php require_once 'footer.inc.php' ; ?>