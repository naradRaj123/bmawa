<?php

include('include/config/dbconfig.php');
include('include/class/MasterSetting.php');
require('razorpay-php-2/Razorpay.php');
use Razorpay\Api\Api;

$api_key = 'rzp_test_6m5EFshHcmM2o1'; 
$api_secret = 'HxglzG5XHEPtZOP6e9eulqQv';
$api = new Api($api_key, $api_secret);

$MasterSettingObj=new MasterSetting();




?>


<?php require_once 'header.inc.php' ; ?>
    <!--=====================================
        TOPBAR END
        =====================================-->


        <!-- navbar section menu  start-->
        <?php require_once 'navbar.inc.php' ; ?>
        <!-- navbar section menu end -->


        <!-- banner section start -->
        <section class="banner">
            <div class="row banner_slider">
                <div class="col-12">
                    <div class="single_slider" style="background: url(images/banner_img_1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-md-8">
                                    <div class="single_slider_text wow fadeInUp" data-wow-duration="1s">
                                        <h5>welcome To Bamava</h5>
                                        <h1>Grow Up Your Skin
                                            With The Power Of
                                            Natural <span>Service!!</span></h1>
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmt
                                            mod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul class="d-flex flex-wrap">
                                                <li>
                                                    <a class="common_btn" href="#">get started</a>
                                                </li>
                                                <li>
                                                    <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                                    href="https://youtu.be/xsnCYCEbdr4">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <span>Intro Video</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single_slider" style="background: url(images/banner_img_2.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-md-8">
                                    <div class="single_slider_text wow fadeInUp" data-wow-duration="1s">
                                        <h5>welcome To Bamava</h5>
                                        <h1>Glow Your Face And Vitality With Our Best <span>Service!!</span></h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmt
                                        mod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <a class="common_btn" href="#">get started</a>
                                            </li>
                                            <li>
                                                <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                                href="https://youtu.be/xsnCYCEbdr4">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <span>Intro Video</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="single_slider" style="background: url(images/banner_img_3.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-8">
                                <div class="single_slider_text wow fadeInUp" data-wow-duration="1s">
                                    <h5>welcome To Bamava</h5>
                                    <h1>Make Your Look Even More Perfect With Our <span>Salon.</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmt
                                    mod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a class="common_btn" href="#">get started</a>
                                        </li>
                                        <li>
                                            <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                            href="https://youtu.be/xsnCYCEbdr4">
                                            <i class="fas fa-play"></i>
                                        </a>
                                        <span>Intro Video</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- banner section end -->

    <!-- notification section -->
    <section class="container-fluid div-notification" style="background: #0e9d54;">

        <div class="row">
            <div class="col-3 col-lg-1  col-sm-2  pt-2  text-light" style="background: #fb6303;">
                <p class="notification" style="font-weight: 500;color: #fff; margin-bottom: 5px;"> Notification </p>
            </div>
            <div class="col-9 col-lg-11  col-sm-10  pt-2 notice">

                <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="5">
                    <span style="color: white; margin-left:8px;"> 

                        BMAWA Beauty Makeup Artist Welfare Association. * Hair, Makeup, Skin, Course, Seminar, Workshop, Talent Show, Exibition, Beauty Fashion Products, * # BMAWA Beauty Makeup Artist Welfare Association All Service For Beauty Makeup Hair Skin Care BMAWA FEAST 2024 Beauty Fashion Feast start on 6 April 2024 workshop seminar fashion show talent show service exhibition &amp; other program

                    </span>
                </marquee>

            </div>
        </div>
    </section>
    <!-- notification section -->





    <!-- about section start -->
    <section class="about mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="row">
                        <div class="col-12">
                            <div class="section_heading heading_left mb_25">
                                <h5>About Us</h5>
                                <h3>Welcome to Bamava</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="about_text">
                                <div class="about_text_center">
                                    <p>BEAUTY MAKEUP ARTIST WELFARE ASSOCIATION is recognized by the Government of India under Section 7(2), 8(1) and registered with the Ministry of Corporate Affairs in 2022, this is the best because we are the 1st non-profit organization under the Beauty Makeup field registered by the Government of India, so we are in this field.</p>
                                    <div class="about_text_center_user d-flex flex-wrap">
                                        <div class="about_text_center_user_img">
                                            <img src="images/about_small_img.png" alt="about" class="img-fluid w-100">
                                        </div>
                                        <div class="about_text_center_user_text">
                                            <h3>David Smith <span>(CEO Of Banfax Spa Salon)</span></h3>
                                            <div class="about_text_center_user_call d-flex flex-wrap">
                                                <span><i class="fas fa-phone-alt"></i></span>
                                                <p>Call For Booking Appointment details: <a
                                                    href="callto:1234567890">+435
                                                6789 4321</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="description">We are ready to help every member related to the field without any greed.  We have a team of talented artists for training, through which we conduct classes, seminars, workshops from time to time to students and others, and provide products related to this field without any profit.  They also do many other types of cooperative work.</p>
                            <p class="description">Our objective is to take the beauty makeup field to higher heights from today's level and to promote the artists and products of this field and to give new topics or new updates to every artist by organizing seminars/workshops.</p>
                            <a class="common_btn mt_25" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                <div class="about_img">
                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/xsnCYCEbdr4">
                        <i class="fas fa-play"></i>
                    </a>
                    <img src="images/about_img_1.jpg" alt="about us" class="img-fluid-100 large_img_1">
                    <img src="images/about_img_2.jpg" alt="about us" class="img-fluid-100 large_img_2">
                    <img src="images/about_img_3.jpg" alt="about us" class="img-fluid-100 large_img_3">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->





<!-- services section start -->
<section class="services mt_115 xs_mt_70" style="background: url(images/background_shapes.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="1s">
                <div class="section_heading heading_left mb_35">
                    <h5>Our Product</h5>
                    <h3>Explore Popular Product</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <?php 
            $sql = "SELECT * FROM product ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while($proData=$stmt->fetch()){ 
            $productName = $proData['name'];
            $product_id=$proData['id'];
            $productPrice = $proData['product_price'];

            ?>
            <div class="col-lg-4 wow  fadeInUp" data-wow-duration="1s">
                <div class="services_item ">
                    <div class="services_img">
                        <img src="Product-image/<?php echo $proData['pro_image']; ?>" alt="services" class="img-fluid w-100">
                        <!-- <a href="#"><i class="fas fa-heart"></i></a> -->
                    </div>
                    <div class="services_text">
                        <a class="title" href=""><?php echo $proData['name']; ?></a>
                        <p class="d-flex align-items-center"> <i data-lucide="indian-rupee" style="height:18px;" ></i> <?php echo $proData['product_price']; ?></p>
                        <?php if(!empty($_SESSION['CUSTOMER_LOGIN_ID'])) { ?>
                        <button class="buy_btn" href="" onclick="startPayment(<?php echo $product_id; ?>,<?php echo $productPrice; ?>)"   value="Pay" name="submit" >Buy Now</button>
                    <?php } else { ?>
                        <button class="buy_btn" href="" onclick="LoginBtn()"   value="Pay" name="submit" >Buy Now</button>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script type="text/javascript">
                function startPayment(product_id,amount) {
                    var options = {
                        key: "rzp_test_6m5EFshHcmM2o1", 
                        amount: amount*100, 
                        currency: "INR",
                        name: "BMAWA Beauty and Makeup Artist Welfare Association",
                        description: "Test transaction",
                        image: "images/blogo.png",
                        // order_id: "order_IluGWxBm9U8zJ8",
                        "handler":function(response){
                            // console.log(response)
                            // snd data another page
                            $.ajax({
                                type:'post',
                                url:'payment_process.php',
                                data: {
                                    action:'payment_process',
                                    payment_id: response.razorpay_payment_id,
                                    amount: <?php echo $productPrice; ?>,
                                    productId:product_id,
                                    userId:<?php echo $_SESSION['CUSTOMER_LOGIN_ID']; ?>
                                },
                                success:function(result){
                                    // console.log("demo"+result);
                                    window.location.href = 'dashboard.php';
                                }
                            })
                        } ,
                        theme: {
                            "color": "#3399cc"
                        },
                        callback_url: "http://localhost/bmawa/index.php"
                    };
                    var rzp = new Razorpay(options);
                    rzp.open();
                }
            </script>
            <?php 


        } 


        ?>


    </div>
    <a class="common_btn" href="">All Product</a>
</div>
</section>
<!-- services section end -->


<!-- feature section start -->
<section class="futured_services mt_115 xs_mt_70">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                <div class="section_heading mb_50 xs_mb_55">
                    <h5>What We're Offering</h5>
                    <h3> Services</h3>
                </div>
            </div>
        </div>
        <div class="row futured_slider wow fadeInUp" data-wow-duration="1s">

            <div class="col-lg-4">
                <div class="featured_service_single border Services_single">
                    <div class="servicce_imgDiv">
                        <img src="Service_img/QRCode (7).png">
                    </div>
                    <div class="description_div">
                        <h3>Testing</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia .</p>
                        <button class=" mt-4 buy_btn" href="">Book</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="featured_service_single border Services_single">
                    <div class="servicce_imgDiv">
                        <img src="Service_img/QRCode (7).png">
                    </div>
                    <div class="description_div">
                        <h3>Testing</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia .</p>
                        <button class=" mt-4 buy_btn" href="">Book</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="featured_service_single border Services_single">
                    <div class="servicce_imgDiv">
                        <img src="Service_img/QRCode (7).png">
                    </div>
                    <div class="description_div">
                        <h3>Testing</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia .</p>
                        <button class=" mt-4 buy_btn" href="">Book</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="featured_service_single border Services_single">
                    <div class="servicce_imgDiv">
                        <img src="Service_img/QRCode (7).png">
                    </div>
                    <div class="description_div">
                        <h3>Testing</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia .</p>
                        <button class=" mt-4 buy_btn" href="">Book</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="featured_service_single border Services_single">
                    <div class="servicce_imgDiv">
                        <img src="Service_img/QRCode (7).png">
                    </div>
                    <div class="description_div">
                        <h3>Testing</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia .</p>
                        <button class=" mt-4 buy_btn" href="">Book</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- feature section end -->


<!-- why section start -->
<section class="why_choose mt_115 xs_mt_70">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-6 col-md-10 wow fadeInUp" data-wow-duration="1s">
                <div class="section_heading heading_left mb_25">
                    <h5>Why Choose Us</h5>
                    <h3>Why You Choose Our Bonfax Spa Salon</h3>
                </div>
                <div class="why_choose_text">
                    <p>Excepteur sint occaecat cupidatat non proident,sunt inculpk qui officia deserunt mollit anim
                    id est laborum.sed do eiusmod.</p>
                    <ul>
                        <li>
                            <h4>Qualified Staff</h4>
                            <span>Duis aute irure dolor in Cillumr reprehenderit in voluptate.</span>
                        </li>
                        <li>
                            <h4>Relax Zones</h4>
                            <span>Duis aute irure dolor in Cillumr reprehenderit in voluptate.</span>
                        </li>
                        <li>
                            <h4>Variety Of Care</h4>
                            <span>Duis aute irure dolor in Cillumr reprehenderit in voluptate.</span>
                        </li>
                        <li>
                            <h4>Herbal Product</h4>
                            <span>Duis aute irure dolor in Cillumr reprehenderit in voluptate.</span>
                        </li>
                    </ul>
                    <a class="common_btn mt_25" href="#">read more</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-sm-8 col-md-8 col-xxl-6 wow fadeInUp" data-wow-duration="1s">
                <div class="why_choose_img">
                    <div class="large_img">
                        <img src="images/why_choose_img_1.jpg" alt="why choose" class="img-fluid w-100">
                    </div>
                    <div class="small_img">
                        <img src="images/why_choose_img_2.jpg" alt="why choose" class="img-fluid w-100">
                    </div>
                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/xsnCYCEbdr4">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why chooes section end -->


<!-- work start step section start -->
<section class="work mt_115 xs_mt_70">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                <div class="section_heading mb_85 xs_mb_30">
                    <h5>3 Easy Step</h5>
                    <h3>How It works?</h3>
                </div>
            </div>
        </div>
        <div class="work_text_area">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="work_single first">
                        <h4>Meeting</h4>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="work_single second">
                        <h4>Treatment</h4>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="work_single third">
                        <h4>Finalizing</h4>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work start step section end -->


<!-- Gallary section start -->
<section class="gallery mt_85 xs_mt_35">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-10 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                <div class="section_heading heading_left mb_35 xs_mb_30">
                    <h5>Our Gallery</h5>
                    <h3>Let's See Our Gallery</h3>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                <div class="gallery_filter">
                    <button class="active" type="button" data-filter="*">ahow all</button>
                    <button type="button" data-filter=".hair">Hair Cut</button>
                    <button type="button" data-filter=".body">Body Clean</button>
                    <button type="button" data-filter=".message">Massage</button>
                    <button type="button" data-filter=".face">Face Massage</button>
                </div>
            </div>
        </div>
        <div class="row grid">
            <div class="col-lg-4 col-sm-6 hair message wow fadeInUp" data-wow-duration="1s">
                <div class="gallery_item">
                    <a class="venobox" data-gall="gallery01" href="images/gallery_img_1.jpg">
                        <img src="images/gallery_img_1.jpg" alt="gallery1" class="img-fluid w-100">
                        <div class="gal_img_overlay">
                            <h4>Faciale Massage</h4>
                            <p>Duis auteirure dolor in reprehenderit</p>
                        </div>
                        <span><i class="fas fa-eye"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 body face wow fadeInUp" data-wow-duration="1s">
                <div class="gallery_item">
                    <a class="venobox" data-gall="gallery01" href="images/gallery_img_2.jpg">
                        <img src="images/gallery_img_2.jpg" alt="gallery1" class="img-fluid w-100">
                        <div class="gal_img_overlay">
                            <h4>Faciale Massage</h4>
                            <p>Duis auteirure dolor in reprehenderit</p>
                        </div>
                        <span><i class="fas fa-eye"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 hair message wow fadeInUp" data-wow-duration="1s">
                <div class="gallery_item">
                    <a class="venobox" data-gall="gallery01" href="images/gallery_img_3.jpg">
                        <img src="images/gallery_img_3.jpg" alt="gallery1" class="img-fluid w-100">
                        <div class="gal_img_overlay">
                            <h4>Faciale Massage</h4>
                            <p>Duis auteirure dolor in reprehenderit</p>
                        </div>
                        <span><i class="fas fa-eye"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 body face wow fadeInUp" data-wow-duration="1s">
                <div class="gallery_item">
                    <a class="venobox" data-gall="gallery01" href="images/gallery_img_4.jpg">
                        <img src="images/gallery_img_4.jpg" alt="gallery1" class="img-fluid w-100">
                        <div class="gal_img_overlay">
                            <h4>Faciale Massage</h4>
                            <p>Duis auteirure dolor in reprehenderit</p>
                        </div>
                        <span><i class="fas fa-eye"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 hair wow fadeInUp" data-wow-duration="1s">
                <div class="gallery_item first">
                    <a class="venobox" data-gall="gallery01" href="images/gallery_img_5.jpg">
                        <img src="images/gallery_img_5.jpg" alt="gallery1" class="img-fluid w-100">
                        <div class="gal_img_overlay">
                            <h4>Faciale Massage</h4>
                            <p>Duis auteirure dolor in reprehenderit</p>
                        </div>
                        <span><i class="fas fa-eye"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 body message wow fadeInUp" data-wow-duration="1s">
                <div class="gallery_item">
                    <a class="venobox" data-gall="gallery01" href="images/gallery_img_1.jpg">
                        <img src="images/gallery_img_1.jpg" alt="gallery1" class="img-fluid w-100">
                        <div class="gal_img_overlay">
                            <h4>Faciale Massage</h4>
                            <p>Duis auteirure dolor in reprehenderit</p>
                        </div>
                        <span><i class="fas fa-eye"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallary section end -->


<!-- counter section start -->
<section class="counter_section mt_105 xs_mt_55 " style="background: url(images/counter_bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="single_counter">
                    <div class="single_counter_center">
                        <h2>
                            <span class="counter">378</span>
                        </h2>
                    </div>
                    <p>Worldwide Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="single_counter">
                    <div class="single_counter_center">
                        <h2>
                            <span class="counter">835</span>
                        </h2>
                    </div>
                    <p>Wellness & Spa</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="single_counter">
                    <div class="single_counter_center">
                        <h2>
                            <span class="counter">712</span>
                        </h2>
                    </div>
                    <p>Happy Customers</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="single_counter">
                    <div class="single_counter_center">
                        <h2>
                            <span class="counter">75</span>
                        </h2>
                    </div>
                    <p>Awards Winner</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter section start -->





    <!--=====================================
        TESTIMONIAL START
        =====================================-->
        <section class="testimonial mt_115 xs_mt_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                        <div class="section_heading mb_35">
                            <h5>our testimonial</h5>
                            <h3>What Our Clients Says</h3>
                        </div>
                    </div>
                </div>
                <div class="row testi_slider wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xl-4">
                        <div class="single_testimonial">
                            <div class="single_testimonial_img">
                                <img src="images/client_1.jpg" alt="client" class="img-fluid w-100">
                            </div>
                            <div class="single_testimonial_text">
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p class="cliect_comment">
                                    Duis aute irure dolor in reprehenderit into volupjl
                                    tate velit esse cillum dolore eu fugiat nulla partr
                                    iatur sunt in culp qui officia deserunt mollit
                                </p>
                                <h3 class="title">Courtney Henry</h3>
                                <p class="designation">Sr. UX/UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single_testimonial">
                            <div class="single_testimonial_img">
                                <img src="images/client_2.jpg" alt="client" class="img-fluid w-100">
                            </div>
                            <div class="single_testimonial_text">
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p class="cliect_comment">
                                    Duis aute irure dolor in reprehenderit into volupjl
                                    tate velit esse cillum dolore eu fugiat nulla partr
                                    iatur sunt in culp qui officia deserunt mollit
                                </p>
                                <h3 class="title">Rishmika Lane</h3>
                                <p class="designation">Software Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single_testimonial">
                            <div class="single_testimonial_img">
                                <img src="images/client_3.jpg" alt="client" class="img-fluid w-100">
                            </div>
                            <div class="single_testimonial_text">
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p class="cliect_comment">
                                    Duis aute irure dolor in reprehenderit into volupjl
                                    tate velit esse cillum dolore eu fugiat nulla partr
                                    iatur sunt in culp qui officia deserunt mollit
                                </p>
                                <h3 class="title">Letitia Shelton</h3>
                                <p class="designation">Content Writter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single_testimonial">
                            <div class="single_testimonial_img">
                                <img src="images/client_2.jpg" alt="client" class="img-fluid w-100">
                            </div>
                            <div class="single_testimonial_text">
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p class="cliect_comment">
                                    Duis aute irure dolor in reprehenderit into volupjl
                                    tate velit esse cillum dolore eu fugiat nulla partr
                                    iatur sunt in culp qui officia deserunt mollit
                                </p>
                                <h3 class="title">Rishmika Lane</h3>
                                <p class="designation">Software Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--=====================================
        TESTIMONIAL END
        =====================================-->


    <!--=====================================
        BLOG START
        =====================================-->
        <section class="blog mt_115 xs_mt_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                        <div class="section_heading mb_35">
                            <h5>Our News & Blogs</h5>
                            <h3>Read Latest News & Blog</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="featured_blog">
                            <div class="featured_blog_img">
                                <img src="images/featured_blog_img.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="featured_blog_text">
                                <ul class="d-flex flex-wrap justify-content-between">
                                    <li><i class="fas fa-user"></i> Dahid Wilson</li>
                                    <li><i class="fas fa-calendar-alt"></i> 05 Nov 2022</li>
                                    <li><i class="fas fa-comment-dots"></i> 12 Comments</li>
                                </ul>
                                <a class="title" href="blog_details.html">The Balance & Harmony Of Body And Mind</a>
                                <p>Quis autem vel eum iure reprehenderit qui ina voluptate trwltl in esse quam nihil
                                    molestiae consequatur vel illum quiint aliquipex
                                eum fugiat quo voluptas nulla pariatur reprehenderit.</p>
                                <a class="read_more_btn" href="blog_details.html">read more <i
                                    class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                                    <div class="single_blog">
                                        <div class="single_blog_img">
                                            <img src="images/blog_img_1.jpg" alt="blog" class="img-fluid w-100">
                                        </div>
                                        <div class="single_blog_text">
                                            <ul class="d-flex flex-wrap justify-content-between">
                                                <li><i class="fas fa-user"></i> Dahid Wilson</li>
                                                <li><i class="fas fa-calendar-alt"></i> 05 Nov 2022</li>
                                                <li><i class="fas fa-comment-dots"></i> 12 Comments</li>
                                            </ul>
                                            <a class="title" href="blog_details.html">Massage Therapy For Anxiety And Stress</a>
                                            <p>Quis autem vel eum iure reprehenderit qui inav
                                                esse quam nihil molestiae consequatur vel illum
                                            eum fugiat quo voluptas nulla pariatur.</p>
                                            <a class="blog_read_btn" href="blog_details.html">read more <i
                                                class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                                        <div class="single_blog">
                                            <div class="single_blog_img">
                                                <img src="images/blog_img_2.jpg" alt="blog" class="img-fluid w-100">
                                            </div>
                                            <div class="single_blog_text">
                                                <ul class="d-flex flex-wrap justify-content-between">
                                                    <li><i class="fas fa-user"></i> Dahid Wilson</li>
                                                    <li><i class="fas fa-calendar-alt"></i> 05 Nov 2022</li>
                                                    <li><i class="fas fa-comment-dots"></i> 12 Comments</li>
                                                </ul>
                                                <a class="title" href="blog_details.html">Skin Care Therapy For Anxiety And
                                                Stress</a>
                                                <p>Quis autem vel eum iure reprehenderit qui inav
                                                    esse quam nihil molestiae consequatur vel illum
                                                eum fugiat quo voluptas nulla pariatur.</p>
                                                <a class="blog_read_btn" href="blog_details.html">read more <i
                                                    class="far fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
    <!--=====================================
        BLOG END
        =====================================-->


        <!-- footer section -->
        <?php require_once 'footer.inc.php' ; ?>

        <!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script> -->
        <script type="text/javascript">

        //  function startPayment(productId){
        //     $.ajax({
        //     url: 'create_order.php', 
        //     type: 'POST',
        //     data: { product_id: productId },
        //     success: function(response) {
        //         // if (response.order_id) {
        //         //     // Order created successfully, start the payment
        //         //     // startPayment(response.amount, response.order_id);
        //         //     console.log(response.amount)
        //         //     console.log(response)
        //         // } else {
        //         //     console.error("Order creation failed:", response.error);
        //         // }
        //         console.log(response);
        //     }
        // });
        // }

            function LoginBtn(){
                if(confirm("Login First ! Do you want to Login !")){
                    window.location.href="userlogin.php";
                }
            }

    </script>