    <?php 
    
    require_once 'include/config/dbconfig.php';
    require_once('include/class/MasterSetting.php');
   @$MasterSettingObj=new MasterSetting;
    

?>



<?php require_once 'header.inc.php' ; ?>


    <!--=====================================
        MENU START
    =====================================-->
   <?php require_once 'navbar.inc.php' ; ?>
    <!--=====================================
        MENU END
    =====================================-->


    <!--=====================================
        BREADCRUMB START
    =====================================-->
    <section class="breadcrumb_area" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>pricing plan</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">pricing</a></li>
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
        PRICING START
    =====================================-->
    <section class="_pricing mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_pricing">
                        <div class="single_pricing_header">
                            <div class="img">
                                <img src="images/pricing_img.png" alt="pricing" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h3>F1</h3>
                                <h5>Most Popular</h5>
                                <h4>₹ 299.00</h4>
                                <!-- <span>Per Month/per user</span> -->
                            </div>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>11% service discount /month</li>
                                <li>15% service discount</li>
                            </ul>
                            <a href="#">choose plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_pricing">
                        <div class="single_pricing_header">
                            <div class="img">
                                <img src="images/pricing_img.png" alt="pricing" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h3>F1</h3>
                                <h5>Most Popular</h5>
                                <h4>₹ 499.00</h4>
                                <!-- <span>Per Month/per user</span> -->
                            </div>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>15% service discount /month</li>
                                <li>20% service discount</li>
                            </ul>
                            <a href="#">choose plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_pricing">
                        <div class="single_pricing_header">
                            <div class="img">
                                <img src="images/pricing_img.png" alt="pricing" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h3>F1</h3>
                                <h5>Most Popular</h5>
                                <h4>₹ 999.00</h4>
                                <!-- <span>Per Month/per user</span> -->
                            </div>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>20% service discount /month</li>
                                <li>25% service discount</li>
                            </ul>
                            <a href="#">choose plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt_110 xs_mt_60">
                <div class="col-xl-8 col-md-10 m-auto">
                    <div class="_pricing_support">
                        <h3>Let's Support</h3>
                        <h4>You Need Our Support,To Have Any Project & Pricing Plans?</h4>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered
                            alteration in some form by injected humour or randomised words which don't look even
                            slightly believable. </p>
                        <a href="#" class="common_btn">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        PRICING END
    =====================================-->


    <!--=====================================
        FOOTER START
    =====================================-->
   <?php require_once 'footer.inc.php' ; ?>