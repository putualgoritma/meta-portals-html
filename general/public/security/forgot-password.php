<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."blogs/public/posts/post-name.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Bootstrap</title>

    <?php include('../../../components/public/layout/header_css.php'); ?>
    
	<?php include('../../../components/public/layout/header_js.php'); ?>

  </head>

<body>
<!-- header logo: style can be found in header.less -->
<?php include('../../../components/public/menus/top_menu_public.php'); ?>
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
                <li><i class="fa fa-dashboard"></i> <a href="../home/index.php">Home</a></li>
                <li class="active">Forgot password</li>
                </ul>
                </div>
                    </div>

                    </div>
                </section>
    <div>&nbsp;</div>
                <?php include('../../../components/public/banner.php'); ?>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12">
                      
        <div class="box panel-body box-danger">
          <h2 style="margin-top: 0px;">Forgot password</h2> 
                  
          <p>Please enter your email address below, we will send you an email to reset your password.</p>
                 
          <form role="form">
            <label for="exampleInputFirstname1">Email address</label>
            <div class="input-group">
              <input type="email" class="form-control" id="exampleInputFirstname1" placeholder="Your email address">
            </div>
            <br>
                 
            <a href="forgot-password-confirmation.php" class="btn btn-info col-md-1">Send</a>
          </form>
        </div>
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
