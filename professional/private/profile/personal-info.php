<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."professional/public/profile/about-me.php#info"; ?>
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

    <?php include('../../../components/private/layout/header_css.php'); ?>   
    
	<?php include('../../../components/private/layout/header_js.php'); ?>
    
  </head>

<body>
<!-- header logo: style can be found in header.less -->

<div class="wrapper row-offcanvas row-offcanvas-left">
<?php include('../../../components/private/menus/left_menu_private.php'); ?>
            
            
            <aside class="right-side">
            <?php include('../../../components/private/menus/top_menu_private.php'); ?>
                

                <!-- Main content -->
                <section class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="../../../general/private/index.php">Home</a></li>
                        <li><a href="../index.php">Professional Home</a></li>
                        <li class="active">Personal info</li>
                    </ol>
                </section>
                
                
                
                
                
                
                
                
                <div class="row clearfix">
                <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="box-user-info">
                <div class="row clearfix">
                <div class="col-md-4">
                <p><strong>Name:</strong> Jan-Willem Dijkstra</p>
                <p><strong>Street:</strong> Denfielstraat</p>
                <p><strong>Postcode/City:</strong> 1834 LK</p>
                <p><strong>State:</strong> Noord-Holland</p>
                <p><strong>Country:</strong> The Netherlands</p>
                </div>
                <div class="col-md-4">
                <p><strong>Age:</strong> 45</p>
                <p><strong>Telephone:</strong> 06-89453487</p>
                <p><strong>Mobile:</strong> 06-893487</p>
                <p><strong>Email:</strong> Info@peperkamp.nl</p>
                <p><strong>Availability:</strong> Yes</p>
                </div>
                <div class="col-md-4">
                <p><strong>Date published:</strong> 09/06/2013</p>
                <p><strong>Last updated:</strong> 09/09/2013</p>
                <p><strong>Verified status:</strong> Status</p>
                <p><a href="#">Download vcard</a></p>
                <p><a href="#">Export profile to csv</a></p>
                </div>
                </div>
                </div>
                
                <div class="box panel-body">
                <label><strong>Personal information</strong></label>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>First name</strong></label><br>
					<input type="text" class="form-control" placeholder="Given name">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Last name</strong></label><br>
					<input type="text" class="form-control" placeholder="Family name">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<label><strong>Street</strong></label><br>
					<input type="text" class="form-control" placeholder="Street name">
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<label><strong>Housenumber</strong></label><br>
					<input type="text" class="form-control" placeholder="Housenumber">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Postal code</strong></label><br>
					<input type="text" class="form-control" placeholder="Postal code">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>City</strong></label><br>
					<input type="text" class="form-control" placeholder="City">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Province/County</strong></label><br>
					<input type="text" class="form-control" placeholder="Province/County">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Country</strong></label><br>
					<input type="text" class="form-control" placeholder="Country">
				</div>
				</div>
                <hr>
                
                <label><strong>Contact information</strong></label>
                <br>
				<label><strong>Main email address</strong></label>
                <br>
				<input type="text" class="form-control" placeholder="Main email address">
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Telephone number</strong></label><br>
					<input type="text" class="form-control" placeholder="Telephone number">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Mobile number</strong></label><br>
					<input type="text" class="form-control" placeholder="Mobile number">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Skype</strong></label><br>
					<input type="text" class="form-control" placeholder="Skype">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Facebook messenger</strong></label><br>
					<input type="text" class="form-control" placeholder="Facebook messenger">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Google talk</strong></label><br>
					<input type="text" class="form-control" placeholder="Google talk">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>ICQ</strong></label><br>
					<input type="text" class="form-control" placeholder="ICQ">
				</div>
				</div>
                <div>&nbsp;</div>
                <hr>
                
                <p><strong>Shipping address</strong></p>
                <input class="paymethod" type="checkbox" name="Shipping address" value="false" /> Same as default address
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>First name</strong></label><br>
					<input type="text" class="form-control" placeholder="Given name">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Last name</strong></label><br>
					<input type="text" class="form-control" placeholder="Family name">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<label><strong>Street</strong></label><br>
					<input type="text" class="form-control" placeholder="Street name">
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<label><strong>Housenumber</strong></label><br>
					<input type="text" class="form-control" placeholder="Housenumber">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Postal code</strong></label><br>
					<input type="text" class="form-control" placeholder="Postal code">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>City</strong></label><br>
					<input type="text" class="form-control" placeholder="City">
				</div>
				</div>
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Province/County</strong></label><br>
					<input type="text" class="form-control" placeholder="Province/County">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Country</strong></label><br>
					<input type="text" class="form-control" placeholder="Country">
				</div>
				</div>
                <hr>
                <div class="btn-pull-right"><button type="submit" class="btn btn-danger">Save/Edit</button></div>
                
                
                
                
                
                </div>
    
                              </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <?php include('../../../components/private/menus/preview_menu_private.php'); ?>
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
