<?php
    
    require_once('include/class/Franchaise.php');
    $FranchaiseObj=new Franchaise;
    $FranchaiseObj->FranchaiseRegister();

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
                            <h1>registration</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">registration</a></li>
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
        REGISTRATION START
    =====================================-->
    <section class="registration mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="login_area register_area">
                        <h3>Register New Account</h3>
                        <h5>Welcome Back !! Register To Your new Accout</h5>
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" name="fname" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="phone"></i></span>
                                        <input type="number" name="mobileNo" placeholder="Mobile No">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" name="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="map-pinned"></i></span>
                                        <input type="text" name="state" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="id-card"></i></span>
                                        <input type="text" name="pancard" placeholder="Pan Card">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="notebook-pen"></i></span>
                                        <input type="Number" name="accountNo" placeholder="Account No">
                                    </div>
                                </div>

                                 <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="image"></i></span>
                                        <input type="file" name="userImage" style="background:#fff;" >
                                    </div>
                                    <span>Please Upload  Your Image</span>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="indian-rupee"></i></span>
                                        <input type="text" name="amount"  placeholder="Amount" style="background:#fff;" >
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="signature"></i></span>
                                        <input type="file"  name="sigImg" style="background:#fff;" >

                                    </div>
                                    <span>Please Upload  Signature</span>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-key"></i></span>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I Agree with the
                                                <a href="#">Terms & conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <button type="submit" name="register" class="common_btn">register Now </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <span class="or">or</span>
                        <p>Don't Have An Account? <a href="login.php">sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        REGISTRATION END
    =====================================-->


    <!--=====================================
        FOOTER START
    =====================================-->
   <?php require_once 'footer.inc.php' ; ?>