<?php include('../../../components/config.php'); ?><? $preview_link="#"; ?>
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
                        <li><a href="../index.php">Company Home</a></li>
                        <li class="active">Product details</li>
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
                
                <div class="box box-body">
                <div class="row body-box">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <embed width="300" height="215" src="http://www.youtube.com/embed/d1cianvOyJU" frameborder="0" allowfullscreen></embed>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>From:[price][currency]/item excl.VAT</p>
                <p>To:[price][currency]/item excl.VAT</p>
                <p>From:[price][currency]/item excl.VAT</p>
                <p>To:[price][currency]/item excl.VAT</p>
                
                </div>
            	</div>
                <div class="pull-right"><button class="btn btn-info"><i class="fa fa-shopping-cart"></i> +</button></div>
            	<div class="clear">&nbsp;</div>
                <hr>
                
                <label><strong>Order for</strong></label>
                <br>
                <input type="text" class="form-control" placeholder="">
                <br>
                <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
                <br>
                <p>Press ENTER to add a tag</p>
                
                <button id="delete" class="btn btn-danger">Remove All Tags</button>
                
                <hr>
                
                <p>Category: [Category]</p>
                
                <hr class="clear">
                <label><strong>Long product description:</strong></label>
                <br>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                
                <hr>
                <label><strong>Specs:</strong></label>
                <br>
				<p>[Specs 1] , [Specs 2], [Specs 3], [Specs 4], [Specs 5]</p>
                <hr>
                
                <label><strong>Tags:</strong></label>
                <br>
				<input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">

                <div class="clear">&nbsp;</div>
                <div class="btn-pull-right">
                <form action="products-overview.php" method="post"><button type="submit" id="delete" class="btn btn-info"><i class="fa fa-undo"></i> Back to product overview</button></form></div>
                <div class="clear">&nbsp;</div>
                </div>
                  </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                                <?php include('../../../components/private/menus/preview_menu_private.php'); ?>
                
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 box box-body">
                <strong style="font-size:24px;"><i class="fa fa-shopping-cart"></i> My applications</strong>
                <div>&nbsp;</div>
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-7 pull-left">
                        [Product Name] 
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-5 pull-right">
                        [Price] <i class="fa fa-trash-o"></i><br>
                    </div>
                </div>
                <div class="row">
              <div class="col-lg-7 col-md-12 col-sm-7 pull-left">
                        [Product Name] 
                    </div>
              <div class="col-lg-5 col-md-12 col-sm-5 pull-right">
                        [Price] <i class="fa fa-trash-o"></i><br>
                    </div>
                </div>
                <div class="row">
              <div class="col-lg-7 col-md-12 col-sm-7 pull-left">
                        [Product Name] 
                    </div>
              <div class="col-lg-5 col-md-12 col-sm-5 pull-right">
                        [Price] <i class="fa fa-trash-o"></i><br>
                    </div>
                </div>
                
                <hr>
                
                <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-6 pull-left">
                    Subtotal: 
                </div>
              <div class="col-lg-6 col-md-12 col-sm-6 pull-right">
                    [currency][Price]<br>
                </div>
            </div>
                <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-6 pull-left">
                    VAT:
                </div>
              <div class="col-lg-6 col-md-12 col-sm-6 pull-right">
                    [currency][Price]<br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6 pull-left">Total incl. VAT:</div> 
                <div class="col-lg-6 col-md-12 col-sm-6 pull-right" style="padding-right:15px;">[currency][Price]</div><br><br>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="pull-left"><a href="../../../Shoppingcart.php">View cart</a></div> 
                    <div class="pull-right" style="padding-right:15px;"><a href="#">Check out</a></div><br>
                </div>
            </div>
                
                 
                </div>
                
                                
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
