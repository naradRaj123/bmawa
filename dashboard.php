<?php 


require_once 'include/config/dbconfig.php';
require_once 'include/class/Users.php';

$CustomerObj=new Users;
$custeromdata=$CustomerObj->UsersDataById(@$_SESSION['CUSTOMER_LOGIN_ID']);


    // if(@$_SESSION['CUSTOMER_LOGIN_ID']==""){
    //     header('location:userlogin.php');
    // }

?>

<?php require_once 'header.inc.php' ; ?>
    <!--=====================================
        TOPBAR END
        =====================================-->


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
                                <h1>User Dashboard  </h1>
                                <ul>
                                    <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                    <li><a href="#">User Dashboard</a></li>
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
        DASHBOARD START
        =====================================-->
        <section class="dashboard mt_120 xs_mt_70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="dashboard_sidebar" id="sticky_sidebar">
                            <div class="dashboard_sidebar_img">
                                <img src="USER-IMG/<?php echo $custeromdata['image']; ?>" alt="user" class="img-fluid w-100">
                                <label for="upload"><i class="far fa-camera"></i></label>
                                <input type="file" id="upload" hidden>
                            </div>
                            <h3><?php echo $custeromdata['name']; ?></h3>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true"><span><i class="fas fa-user"></i></span> Personal Info</button>
                            
                            <!-- <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-disabled" type="button" role="tab"
                                aria-controls="v-pills-disabled" aria-selected="false"><span><i
                                    class="far fa-images"></i></span> Gallery</button> -->
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false"><span><i
                                        class="fas fa-star"></i></span> My Order</button>

                                        <a href="user-logout.php" class="w-full"><button class="nav-link w-100"><span><i class="fas fa-sign-out-alt"></i></span> Logout</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 wow fadeInUp" data-wow-duration="1s">
                                <div class="dashboard_content">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show  active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab" tabindex="0">
                                        <h2>Welcome</h2>
                                        <div class="personal_area">
                                            <div class="personal_info">
                                                <h4>Personal Information <a class="info_edit_btn">edit</a></h4>
                                                <ul class="personal_info_address">
                                                    <li><span>Name:</span> <?php echo $custeromdata['name']; ?></li>
                                                    <li><span>email:</span> <?php echo $custeromdata['email']; ?></li>
                                                    <li><span>phone:</span> <?php echo $custeromdata['mobile']; ?></li>
                                                    <li><span>Country:</span> india</li>
                                                    <li><span>address:</span> <?php echo $custeromdata['address']; ?></li>
                                                </ul>

                                            </div>

                                            <div class="personal_info_edit">
                                                <h4>Personal Information <a class="info_edit_cancel_btn">cancel</a></h4>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>First Name</label>
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>Last Name</label>
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>email</label>
                                                                <input type="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>phone</label>
                                                                <input type="text" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>Country</label>
                                                                <select id="select_js5">
                                                                    <option value="">Select Country</option>
                                                                    <option value="">japan</option>
                                                                    <option value="">bangladesh</option>
                                                                    <option value="">thailan</option>
                                                                    <option value="">korea</option>
                                                                    <option value="">singapore</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>city</label>
                                                                <select id="select_js6">
                                                                    <option value="">Select city</option>
                                                                    <option value="">dhaka</option>
                                                                    <option value="">barisal</option>
                                                                    <option value="">khulna</option>
                                                                    <option value="">jessore</option>
                                                                    <option value="">dinajpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>zip code</label>
                                                                <input type="text" placeholder="Zip Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="personal_info_edit_single">
                                                                <label>Address</label>
                                                                <input type="text" placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="personal_info_edit_single">
                                                                <label>About Me</label>
                                                                <textarea rows="6" placeholder="My Bio........."></textarea>
                                                                <button type="submit" class="common_btn">save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            <!-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">
                                <h2>Wishlist</h2>
                                <div class="dashboard_wishlist">
                                    <div class="row">
                                        <div class="col-xl-9 col-lg-11">
                                            <div class="services_item">
                                                <div class="services_img">
                                                    <img src="images/service_img_1.jpg" alt="services"
                                                        class="img-fluid w-100">
                                                    <a href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                                <div class="services_text">
                                                    <a class="title" href="#">Facial Therapy</a>
                                                    <p>Duis aute irure dolor in reprehenderit into volupjl
                                                        tate velit esse cillum dolore eu fugiat nulla partr
                                                        iatur sunt in culp qui officia deserunt mollit</p>
                                                    <ul>
                                                        <li><i class="fas fa-play"></i> 5 Sessions</li>
                                                        <li><i class="fas fa-user"></i> 291 Clients</li>
                                                    </ul>
                                                    <div class="services_btn_area">
                                                        <a class="read_btn" href="#">read more</a>
                                                        <p>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>240</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-11">
                                            <div class="services_item">
                                                <div class="services_img">
                                                    <img src="images/service_img_2.jpg" alt="services"
                                                        class="img-fluid w-100">
                                                    <a href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                                <div class="services_text">
                                                    <a class="title" href="#">Candle Message </a>
                                                    <p>Duis aute irure dolor in reprehenderit into volupjl
                                                        tate velit esse cillum dolore eu fugiat nulla partr
                                                        iatur sunt in culp qui officia deserunt mollit</p>
                                                    <ul>
                                                        <li><i class="fas fa-play"></i> 5 Sessions</li>
                                                        <li><i class="fas fa-user"></i> 145 Clients</li>
                                                    </ul>
                                                    <div class="services_btn_area">
                                                        <a class="read_btn" href="#">read more</a>
                                                        <p>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>98</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-11">
                                            <div class="services_item">
                                                <div class="services_img">
                                                    <img src="images/service_img_3.jpg" alt="services"
                                                        class="img-fluid w-100">
                                                    <a href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                                <div class="services_text">
                                                    <a class="title" href="#">Stone Spa </a>
                                                    <p>Duis aute irure dolor in reprehenderit into volupjl
                                                        tate velit esse cillum dolore eu fugiat nulla partr
                                                        iatur sunt in culp qui officia deserunt mollit</p>
                                                    <ul>
                                                        <li><i class="fas fa-play"></i> 5 Sessions</li>
                                                        <li><i class="fas fa-user"></i> 44 Clients</li>
                                                    </ul>
                                                    <div class="services_btn_area">
                                                        <a class="read_btn" href="#">read more</a>
                                                        <p>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>20</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-11">
                                            <div class="services_item">
                                                <div class="services_img">
                                                    <img src="images/service_img_4.jpg" alt="services"
                                                        class="img-fluid w-100">
                                                    <a href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                                <div class="services_text">
                                                    <a class="title" href="#">Body Treatments</a>
                                                    <p>Duis aute irure dolor in reprehenderit into volupjl
                                                        tate velit esse cillum dolore eu fugiat nulla partr
                                                        iatur sunt in culp qui officia deserunt mollit</p>
                                                    <ul>
                                                        <li><i class="fas fa-play"></i> 5 Sessions</li>
                                                        <li><i class="fas fa-user"></i> 49 Clients</li>
                                                    </ul>
                                                    <div class="services_btn_area">
                                                        <a class="read_btn" href="#">read more</a>
                                                        <p>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>38</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination mt_25">
                                        <div class="row">
                                            <div class="col-12">
                                                <nav aria-label="...">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"><i
                                                                    class="fas fa-chevron-double-left"></i></a>
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
                                                            <a class="page-link" href="#"><i
                                                                    class="fas fa-chevron-double-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                <h2>gallery</h2>
                                <div class="dashboard_gallery">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="gallery_item">
                                                <a class="venobox" data-gall="gallery01"
                                                    href="images/gallery_img_1.jpg">
                                                    <img src="images/gallery_img_1.jpg" alt="gallery1"
                                                        class="img-fluid w-100">
                                                    <div class="gal_img_overlay">
                                                        <h4>Faciale Massage</h4>
                                                        <p>Duis auteirure dolor in reprehenderit</p>
                                                    </div>
                                                    <span><i class="fas fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="gallery_item">
                                                <a class="venobox" data-gall="gallery01"
                                                    href="images/gallery_img_2.jpg">
                                                    <img src="images/gallery_img_2.jpg" alt="gallery1"
                                                        class="img-fluid w-100">
                                                    <div class="gal_img_overlay">
                                                        <h4>Faciale Massage</h4>
                                                        <p>Duis auteirure dolor in reprehenderit</p>
                                                    </div>
                                                    <span><i class="fas fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="gallery_item">
                                                <a class="venobox" data-gall="gallery01"
                                                    href="images/gallery_img_3.jpg">
                                                    <img src="images/gallery_img_3.jpg" alt="gallery1"
                                                        class="img-fluid w-100">
                                                    <div class="gal_img_overlay">
                                                        <h4>Faciale Massage</h4>
                                                        <p>Duis auteirure dolor in reprehenderit</p>
                                                    </div>
                                                    <span><i class="fas fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="gallery_item">
                                                <a class="venobox" data-gall="gallery01"
                                                    href="images/gallery_img_4.jpg">
                                                    <img src="images/gallery_img_4.jpg" alt="gallery1"
                                                        class="img-fluid w-100">
                                                    <div class="gal_img_overlay">
                                                        <h4>Faciale Massage</h4>
                                                        <p>Duis auteirure dolor in reprehenderit</p>
                                                    </div>
                                                    <span><i class="fas fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="gallery_item first">
                                                <a class="venobox" data-gall="gallery01"
                                                    href="images/gallery_img_5.jpg">
                                                    <img src="images/gallery_img_5.jpg" alt="gallery1"
                                                        class="img-fluid w-100">
                                                    <div class="gal_img_overlay">
                                                        <h4>Faciale Massage</h4>
                                                        <p>Duis auteirure dolor in reprehenderit</p>
                                                    </div>
                                                    <span><i class="fas fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="gallery_item">
                                                <a class="venobox" data-gall="gallery01"
                                                    href="images/gallery_img_1.jpg">
                                                    <img src="images/gallery_img_1.jpg" alt="gallery1"
                                                        class="img-fluid w-100">
                                                    <div class="gal_img_overlay">
                                                        <h4>Faciale Massage</h4>
                                                        <p>Duis auteirure dolor in reprehenderit</p>
                                                    </div>
                                                    <span><i class="fas fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination mt_25">
                                        <div class="row">
                                            <div class="col-12">
                                                <nav aria-label="...">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"><i
                                                                    class="fas fa-chevron-double-left"></i></a>
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
                                                            <a class="page-link" href="#"><i
                                                                    class="fas fa-chevron-double-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <h2>My Order</h2>
                            <div class="dashboard_review">
                                <div class="service_review_list">

                                    <?php $CustomerObj->UserOrder($_SESSION['CUSTOMER_LOGIN_ID']); ?>

                                    <hr />
                                        <!-- <div class="pagination mt_50">
                                            <div class="row">
                                                <div class="col-12">
                                                    <nav aria-label="...">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#"><i
                                                                        class="fas fa-chevron-double-left"></i></a>
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
                                                                <a class="page-link" href="#"><i
                                                                        class="fas fa-chevron-double-right"></i></a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                           <!--  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">
                                <h2>change password</h2>
                                <div class="dashboard_c_password">
                                    <div class="personal_info_edit">
                                        <form>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="personal_info_edit_single">
                                                        <label>current password</label>
                                                        <input type="password" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="personal_info_edit_single">
                                                        <label>new password</label>
                                                        <input type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="personal_info_edit_single">
                                                        <label>confirm password</label>
                                                        <input type="password" placeholder="Conform Password">
                                                        <button type="submit" class="common_btn">save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        DASHBOARD END
        =====================================-->
        

    <!--=====================================
        FOOTER START
        =====================================-->
        <?php require_once 'footer.inc.php' ; ?>
        
        <?php $_SERVER['REQUEST_METHOD']; 
        @$referer2 = $_SERVER['HTTP_REFERER'];
        echo  @$fileName2 = basename(parse_url($referer2, PHP_URL_PATH));
        ?>
        <script type="text/javascript">
          <?php if($fileName2=='userlogin.php' ) { ?>
            toastr.success('Login Successful');
        <?php } ?>
    </script>