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
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12">
                    <div class="breadcrumb">
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <ul class="breadcrumb-list">
                     <li><i class="fa fa-dashboard"></i> <a href="../../general/public/home/index.php">Home</a></li>
                     <li class="active">Professional Home</li>
                        </ul>
                                            </div>
                    </div>

                    </div>
                </section>
				
                <div>&nbsp;</div>
                <?php include('../../components/public/banner.php'); ?>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                
                <div class="row clearfix">
				
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">                
                <div class="panel-body panel small-box3">

			<div class="text-center" style="float:left; margin:15px;">
			<img src="../../img/lex-den-doop.jpg" class="img-responsive img-circle"/>
			</div>
			<div style="margin:15px;">
				<b>Professional</b>
				<p>E-Commerce</p>
				<hr>
				<p>06-893487</p>
				<p>Info@peperkamp.nl</p>
				<p>The Netherlands</p>

			</div>	

		</div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="profile/about-me.php">
                <div class="small-box2 bg-purple">
                <h3>My professional profile <i class="fa fa-arrow-circle-right"></i></h3>
                <div class="progress" style="width:100%;margin-bottom:0px;">
					<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; background-image:none; background-color:#5A607A;color:white;">		
					<b>&nbsp40%&nbspProfile&nbspprogress </b>
					</div>
				</div>
                <div class="line-box">&nbsp;</div>
                <div>&nbsp;</div>
                <p>&nbsp;</p>
                <img src="../../img/professional.jpg" class="img-responsive">
                </div>
                </a>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <?php include('../../components/public/menus/left_menu_public.php'); ?>
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
