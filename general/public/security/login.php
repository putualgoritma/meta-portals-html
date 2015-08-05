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
    
<body>
<!-- header logo: style can be found in header.less -->
<?php include('../../../components/public/menus/top_menu_public.php'); ?>
<div class="wrapper-public row-offcanvas row-offcanvas-left">
<section class="login">
<div class="container">
<div class="text-center">
<h2>Connect, share ideas, and discover opportunities.</h2>
</div>
<div class="row clearfix">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
<img src="../../../img/conection.jpg" class="img-responsive">
<div>&nbsp;</div>
</div>
<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">

<div class="text-center"><button onClick="javascript:location.href='../../../professional/private/index.php'" type="submit" class="btn btn-facebook"><i class="fa fa-facebook"></i> Login with Facebook</button></div>
<br>
<div class="text-center"><button onClick="javascript:location.href='../../../professional/private/index.php'" type="submit" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> Login with Linkedin</button></div>

<div class="hr">
<div class="inner">
or</div>
</div>

<section id="services">
<form method="post" action="../../../professional/private/index.php">
<input type="email" class="form-control" id="email" placeholder="Enter email">
<br>
<input type="password" class="form-control" id="password" placeholder="Password">
<br>
<input id="savelogin" name="savelogin" type="checkbox"> Remember me
<div>&nbsp;</div>

<button type="submit" class="btn btn-yellow btn-bt">Login</button>  
<a href="forgot-password.php" class="forgot-password-toggle" id="forgot-password-toggle">Forgot password?</a>  
</form>
</section>

<div class="hr"></div>

<section id="register">
<form action="register-confirmation.php" method="post">
<h3>Get started – it's free.</h3>
<p>Registration takes less than 2 minutes.</p>
<div>&nbsp;</div>
<div class="row">
<div class="col-xs-6"><input type="firstname" class="form-control" id="firstname" size="10" placeholder="First Name"></div> <div class="col-xs-6"><input type="lastname" class="form-control" id="lastname" placeholder="Last Name"></div>
</div>
<br/>
<input type="email" class="form-control" id="email" size="50" placeholder="Enter email">
<br/>
<input type="password" class="form-control" id="password" size="50" placeholder="Password">
<br/>
<p>By clicking Join Now, you agree to Job Portals's User Agreement, Privacy Policy and Cookie Policy.</p>
<div>&nbsp;</div>
<button type="submit" class="btn btn-danger btn-block">Sign up</button>
</form>
</section>
</div>
</div>
</div>
</section>
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
