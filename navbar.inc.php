<?php

require_once('include/config/dbconfig.php');
require_once('include/class/Enquiry.php');
require_once('include/class/Franchaise.php');

$EnquryObj=new Enquiry;
$EnquryObj->SendEnqury();





?>

<nav class="navbar navbar-expand-lg main_menu">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/b_logo.png" alt="BonFax" class="logoImg" height="80" style="width:80%;" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fal fa-bars menu_icom"></i>
        <i class="fal fa-times menu_close"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav m-auto">





            <?php if(@$_SESSION['LOGIN_ID']=='') { ?>
                <?php if(empty($_SESSION['CUSTOMER_LOGIN_ID'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">about us </a>
                </li>
            <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="pricing.php">pricing</a></li>
                        <li><a href="gallery.php">gallery</a></li>
                        <li><a href="privacy_policy.php">privacy policy</a></li>
                        <li><a href="terms_condition.php">terms and condition</a></li>
                    </ul>
                </li>
                <?php if(@$_SESSION['CUSTOMER_LOGIN_ID']==""){ ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Vendor<i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="vendorRegister.php">Vendor List</a></li>
                        <li><a href="vendorRegister.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </li> -->
            <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Franchaise<i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="franchlist.php">Franchaise List</a></li>
                        <?php if(@$_SESSION['CUSTOMER_LOGIN_ID']==""){ ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    <?php } ?>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="blog_list.php">blog </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">contact</a>
                </li>
            <?php } else{ ?>

                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>

            <?php } ?>
            
        </ul>
        <ul class="menu_right d-flex flex-wrap">
            <?php if(empty($_SESSION['CUSTOMER_LOGIN_ID'])) { ?>
            <li>
                <a href="userlogin.php" class="menu_search"><i data-lucide="user-round"></i></a>
            </li>
        <?php } ?>
            <li>
                <?php if(@$_SESSION['LOGIN_ID']!="" || @$_SESSION['LOGIN_ID']!=0) { ?>
                    <a class="reservation" href="faranchaise_admin/dashboard.php" >Dashboard</a></li>
                <?php } else{ ?>
                    <?php if(@$_SESSION['CUSTOMER_LOGIN_ID']!=""){ ?>
                        <a class="reservation" href="dashboard.php" >Profile</a></li>
                    <?php } else { ?>
                    <a class="reservation" href="#" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Enquiry</a></li>
                <?php } } ?>
                <!-- <li><a href="login.php"><i class="fas fa-user"></i></a></li> -->
            </ul>
        </div>
    </div>
</nav>

<div class="reservation">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Enquiry for Franchaise</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="reservation_for" >
                    <input name="name" class="reservation_input mb-2" type="text" placeholder="Name">
                    <input name="mobile" class="reservation_input mb-2" type="text" placeholder="Enter Your Mobile No">
                    <input class="reservation_input mb-2" name="amount" type="text" placeholder="Enter Your Budget ">
                    <select class="reservation_input mb-2 border " id="select_js" name="state">
                        <option value="">Select State</option>
                        <option value="up">Uttar Pradesh</option>s
                        <option value="maharastra">Maharastra</option>

                    </select>
                    <input class="reservation_input mb-2" type="email" name="email" placeholder="Enter Your Email">

                    <textarea rows="5" name="message" placeholder="Message"></textarea>
                    <button class="common_btn" name="send" type="submit">submit now</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
</div>