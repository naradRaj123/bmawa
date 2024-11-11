<?php  
require_once('include/class/Franchaise.php');

$FranchaiseObj=new Franchaise;
$FranchaiseObj->LoginFranchaise();

?>



<?php require_once 'header.inc.php'; ?>
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
                                <h1>login</h1>
                                <ul>
                                    <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                    <li><a href="#">login</a></li>
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
        LOGIN START
        =====================================-->
        <section class="login mt_120 xs_mt_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 m-auto wow fadeInUp" data-wow-duration="1s">
                        <div class="login_area">
                            <h3>Login Here <?php echo @$_SESSION['LOGIN_ID']; ?> </h3>
                            <h5>Welcome Back !! Login To Your Accout</h5>
                            <span style="color:#000 ;"><?php echo @$msg; ?></span>
                            <form method="post">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="login_input">
                                            <span><i class="fas fa-user"></i></span>
                                            <input type="text" name="email" placeholder="Username Or Email ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="login_input">
                                            <span><i class="fas fa-lock-alt"></i></span>
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="login_input">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Remember Me
                                                    <a href="#">Forgot Password?</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="login_input">
                                            <button type="submit" name="login" class="common_btn">Login Now </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <span class="or">or</span>
                            <!-- <p>Sign In With Social Account</p> -->
                      <!--   <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul> -->
                        <p>Don't Have An Account? <a href="register.php">Create One</a></p>

                        <?php $_SERVER['REQUEST_METHOD']; 
                        @$referer = $_SERVER['HTTP_REFERER'];
                        @$fileName = basename(parse_url($referer, PHP_URL_PATH));
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        LOGIN END
        =====================================-->


    <!--=====================================
        FOOTER START
        =====================================-->
        <?php require_once 'footer.inc.php'; ?>
        <script type="text/javascript">
           <?php if($_GET['auth']=='' ) { ?>
            toastr.warning('Enter Valid Email And Password');
        <?php }elseif ($_GET['auth']=='verify') { ?>
            toastr.error('Your Account Not Verify');
      <?php  }else { ?>
        toastr.warning('Enter Valid Email And Password');
      <?php } ?>
    </script>

    

    <script type="text/javascript">
      <?php if($fileName==='profile.php') { ?>
        toastr.success('Logout Successful');
    <?php } ?>
</script>