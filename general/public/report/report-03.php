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
                <h3>Report</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<ul class="breadcrumb-list">
                <li><i class="fa fa-dashboard"></i> <a href="../home/index.php">Home</a></li>
                <li class="active">Report</li>
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
                 <h3 style="margin-top: 0px;">Report</h3>
                <div class="box panel-body box-danger">
                
                <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                
                <p>Please leave your contact details so we can contact you if needed.
  Already have a account? <a href="#">Sign in </a> to skip the personal details</p>
               
               <div class="row ">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<label><strong>First name*</strong></label><br>
					<input type="text" class="form-control">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<label><strong>Email address*</strong></label><br>
					<input type="text" class="form-control">
			</div>
			</div>
            
            <hr>
            
            <label for="exampleInputFirstname1">Title report:</label>
            <input type="email" class="form-control" id="exampleInputFirstname1">
            <br>

				<p style=" color:gray;">Report type: [Report type]</p>
                
                <div class="row body-box">
                 <div class="col-xs-12 col-sm-6 col-md-6">
                 Date and time:
                 </div>
                 <div class="col-xs-12 col-sm-6 col-md-6">
                 dd-mm-yy:mm
                 </div> 
                </div>
                
                <label for="exampleInputLastnameprefix1">Description:</label>
                <textarea class="form-control" rows="5" style="width:100%"></textarea>
                <br>
                
                <div class="btn-pull-left"><button class="btn btn-info btn-sm">Submit</button></div>
                
                </div>
                </div>
               
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
