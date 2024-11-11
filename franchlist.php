<?php
    
    require_once 'include/config/dbconfig.php';
    require_once 'include/class/Franchaise.php';

    $FranchaiseObj=new Franchaise;


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
                                <h1>Franchaise List</h1>
                                <ul>
                                    <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                    <li><a href="#">Franchaise</a></li>
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
        FRANCHAISE LIST PAGE START
        =====================================-->
       <section class="services_page mt_95 xs_mt_45">
    <div class="container">
        <div class="row">
             <!--  card 2 -->
    
            <?php $FranchaiseObj->FranchaiseList(); ?>            

           
           
        </div>
    </div>
</section>





    <!--=====================================
        FRANCHAISE LIST PAGE END
        =====================================-->


    <!--=====================================
        FOOTER START
        =====================================-->
        <?php require_once 'footer.inc.php' ; ?>