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
                    $sql = "SELECT * FROM service ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $rowdata=$stmt->rowCount();
                    if($rowdata){
                    while($sData=$stmt->fetch()){ 
                        ?>

                        <div class="col-lg-3 wow  fadeInUp" data-wow-duration="1s">
                            <div class="services_item" style="width:100%;">
                                <div class="services_img">
                                    <img src="Service_img/<?php echo $sData['image']; ?>" alt="services" class="img-fluid w-100">
                                    
                                </div>
                                <div class="services_text">
                                    <a class="title" href=""><?php echo $sData['title']; ?></a>

                                    <ul>

                                        <li><i height="18" data-lucide="indian-rupee"></i> <?php echo $sData['price']; ?></li>
                                    </ul>
                                    <div class="services_btn_area">
                                        <a class="buy_btn text-center" href="service_details.html">Book Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>

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
            <!-- <div class="categories mt_115 xs_mt_70">
                <div class="container">
                    <div class="row">
                        <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                            <div class="section_heading mb_35">
                                <h5>Top Categories</h5>
                                <h3>Explore Categories</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_1.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Aroma Therapy</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_2.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Sauna Relax</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_3.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Facials</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_4.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Mineral Baths</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_5.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Body Treatments</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_6.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Waxing</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_7.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Massage</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="single_categories">
                                <span>
                                    <img src="images/category_icon_8.png" alt="category" class="img-fluid w-100">
                                </span>
                                <h4>Geothermal Spa</h4>
                                <p>Lorem ipsum dolor sit amet consectetur into adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
    <!--=====================================
        SERVICES PAGE END
        =====================================-->


    <!--=====================================
        FOOTER START
        =====================================-->
        <?php require_once 'footer.inc.php' ; ?>