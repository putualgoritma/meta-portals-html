<?php include('../../components/config.php'); ?><? $preview_link="#"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Bootstrap</title>

	<?php include('../../components/private/layout/header_css.php'); ?>   
    
	<?php include('../../components/private/layout/header_js.php'); ?>   
    
  </head>

<body>
<!-- header logo: style can be found in header.less -->

<div class="wrapper row-offcanvas row-offcanvas-left">

  <?php include('../../components/private/menus/left_menu_private.php'); ?>       
            
            
            <aside class="right-side">
            <?php include('../../components/private/menus/top_menu_private.php'); ?>
                
                

                <!-- Main content -->
                <section class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="../../general/private/index.php">Home</a></li>
                        <li class="active">Company Home</li>
                    </ol>
                </section>
                

                <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="settings/settings.php">
                <div class="small-box bg-purple">
                <h3>Settings</h3>
                <div class="line-box">&nbsp;</div>
                </div>
                </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="statistics/statistics.php">
                <div class="small-box bg-teal">
                <h3>Statistics</h3>
                <div class="line-box">&nbsp;</div>
                </div>
                </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="orders/products-overview.php">
                <div class="small-box bg-github">
                <h3>Products</h3>
                <div class="line-box">&nbsp;</div>
                </div>
                </a>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="orders/order-history.php">
                <div class="small-box bg-green">
                <h3>Orders</h3>
                <div class="line-box">&nbsp;</div>
                </div>
                </a>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="profile/360-view.php">
                <div class="small-box bg-red">
                <h3>Profile</h3>
                <div class="line-box">&nbsp;</div>
                </div>
                </a>
                </div>
                
                </div>
                </section>
                <footer>
<div class="footer-top">
<h3>GLOBAL LAUNCH 2015</h3>
<p>Feature rich community portal aimed at businesses and professionals.</p>
<p>Objective 1: Remove all barriers between supply of and demand for labor.<br>
Objective 2: Improve the quality of the match between companies & professionals.<br>
Objective 3: Quick matching & direct contact; absolutely free!
</p>
<div>&nbsp;</div>
<a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
</div>
<div class="footer-bottom">
<a href="#">All rights reserved</a>
<a href="#">Contact</a>
<a href="#">Imprint</a>
</div>
</footer>
                </aside>

</div>



</body>
</html>
