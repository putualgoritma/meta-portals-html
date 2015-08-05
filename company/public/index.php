<?php include('../../components/config.php'); ?><? $preview_link=$root_path."blogs/public/posts/post-name.php"; ?>
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

    <?php include('../../components/public/layout/header_css.php'); ?>
    
	<?php include('../../components/public/layout/header_js.php'); ?>

  </head>

<body>
<!-- header logo: style can be found in header.less -->
<?php include('../../components/public/menus/top_menu_public.php'); ?>
<div class="wrapper-public row-offcanvas row-offcanvas-left">
<div class="container">

                <!-- Main content -->
                <section class="content">
                <section class="content-header col-md-12">
                    <div class="breadcrumb">
                    <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <ul class="breadcrumb-list">
                     <li><i class="fa fa-dashboard"></i> <a href="../../general/public/home/index.php">Home</a></li>
                     <li class="active">Company Home</li>
                        </ul>
                                            </div>
                    </div>

                    </div>
                </section>
                <!-- Content Header (Page header) -->
                <div>&nbsp;</div>
                <?php include('../../components/public/banner.php'); ?>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div class="row clearfix">
				
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">                
                <div class="panel-body panel small-box3">

			<div class="text-center" style="float:left; margin:15px;">
			<img src="../../img/blog3.jpg" class="img-responsive img-circle" width="128" height="128"/>
			</div>
			<div style="margin:15px;">
				<b>Company</b>
				<p>E-Commerce</p>
				<hr>
				<p>06-893487</p>
				<p>Info@peperkamp.nl</p>
				<p>The Netherlands</p>

			</div>	

		</div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="profile/about-us.php">
                <div class="small-box2 bg-purple">
                  <h3>Company profile <i class="fa fa-arrow-circle-right"></i></h3>
                <div class="line-box">&nbsp;</div>
                <div>&nbsp;</div>
                <p>Denfielstraat 25, 1834 LK
                  <br>
				Noord-Holland, The Netherlands.</p>
                <div>&nbsp;</div>
                <img src="../../img/company.jpg" class="img-responsive">
                
                </div>
                </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="profile/claim-company.php">
                <div class="small-box2 bg-teal">
                <h3>Claim this company <i class="fa fa-arrow-circle-right"></i></h3>
                <p><strong>Test Test</strong></p>
                <div class="line-box">&nbsp;</div>
                <div>&nbsp;</div>
                <img src="../../img/company.jpg" class="img-responsive">
                </div>
                </a>
                </div>

                
                

                
                </div>
                </section>
                

</div>
</div>

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

</body>
</html>
