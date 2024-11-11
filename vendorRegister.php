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
                            <h1>Vendor Register</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">Vendor</a></li>
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
                        <h5>Welcome Back !! Register To Your new Account</h5>
                        <form>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="phone"></i></span>
                                        <input type="number" placeholder="Mobile No">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="map-pin-house"></i></span>
                                        <input type="text" placeholder="Address">
                                    </div>
                                </div>
                                 <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i data-lucide="image"></i></span>
                                        <input type="file"  placeholder="Address" style="background:#fff;" >
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-envelope"></i></span>
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-key"></i></span>
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>
                               <!--  <div class="col-xl-12">
                                    <div class="login_input">
                                        <span><i class="fas fa-lock-alt"></i></span>
                                        <input type="password" placeholder="Confirm Password">
                                    </div>
                                </div> -->
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
                                        <button type="submit" class="common_btn">register Now </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <span class="or">or</span>
                        
                        
                        <p>Don't Have An Account? <a href="login.html">sign in</a></p>
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