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
                <li class="active">Product details</li>
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
                <div class="box box-body box-danger">
                <div class="row body-box">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <embed width="300" height="215" src="http://www.youtube.com/embed/d1cianvOyJU" frameborder="0" allowfullscreen></embed>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>From:[price][currency]/item excl.VAT</p>
                <p>To:[price][currency]/item excl.VAT</p>
                <p>From:[price][currency]/item excl.VAT</p>
                <p>To:[price][currency]/item excl.VAT</p>
                <label>Amount:</label>
                <br>
                <input type="number" class="form-control bfh-number" value="0"/>
                </div>
            	</div>
            	<div class="clear">&nbsp;</div>
                <hr>
                <div class="row body-box">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Category</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Category]</div>
                </div>
                <hr class="clear">
                <label><strong>Long product description:</strong></label>
                <br>
				<textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</textarea>
                
                <hr>
                <label><strong>Specs:</strong></label>
                <br>
				<textarea class="form-control" rows="5">[Specs 1] , [Specs 2], [Specs 3], [Specs 4], [Specs 5]</textarea>
                <hr>
                
                <label><strong>Tags:</strong></label>
                <br>
				<div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                <i class="fa fa-tag"></i> Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                <i class="fa fa-tag"></i> Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                <i class="fa fa-tag"></i> Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                <i class="fa fa-tag"></i> Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                <i class="fa fa-tag"></i> Cairo
            </a>
          </li>
        
        </ul>
    </div>
                 <div class="clear">&nbsp;</div>
                <div class="btn-pull-left">
                <button type="submit" id="delete" class="btn btn-info"><i class="fa fa-plus"></i> Add to cart</button>
                <button type="submit" id="delete" class="btn btn-info"><i class="fa fa-undo"></i> Back to product overview</button></div>
                <div class="clear">&nbsp;</div>
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
