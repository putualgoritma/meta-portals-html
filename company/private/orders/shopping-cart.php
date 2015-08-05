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
                        <li class="active">Shopping cart</li>
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
                
                <h2 class="product-overview">Products overview</h2>
                <div class="btn-group btn-right" style="margin-top:10px;">
                <button class="btn dropdown-toggle btn-default" data-toggle="dropdown">
                 <span><i class="fa fa-shopping-cart"></i> Shopping Cart <i class="caret"></i></span>
                   </button>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]
                        </div>
                        </div>
                      
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]
                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]
                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]
                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        Subtotal:                </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Currency][Price]
                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        VAT:                </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Currency][Price]
                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        Total incl. VAT:                </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Currency][Price]
                        </div>
                        </div>
                      </li>
                      <div>&nbsp;</div>
                      <li>
             <div class="col-lg-12"><button class="btn btn-danger btn-block">check out</button></div>
            </li>
                                            </ul>
                                        </div>
                                        
                   <div class="clear">&nbsp;</div>
              
               
              <div>
                <div class="btn-pull-left">
                <input type="text" class="form-control" placeholder="Keywords" style="width:100%; margin-top:10px">
                </div>
                
                <div class="btn-pull-left">
                     <button class="btn btn-danger btn-block" style="min-width:60px; margin-top:12px;">Search product(s)</button>
                </div>
                
                <div class="btn-right">
                     <a href="../../../Orderhistory.php" class="btn btn-danger btn-block" style="min-width:60px; margin-top:10px;">View order history</a>
                </div>
                </div>
                    
                
                <div class="clear">&nbsp;</div>
                <div class="box box-body">
                <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                <img src="http://www.elektrodaily.com/wp-content/uploads/2014/05/question-mark.jpg" style="width:215px; height:200px;">
                </div>
			
              <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
					<h4><a href="../../../ProductDetailPage.php">Product title</a></h4>
				Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas erat velit, aliquet vitae consequat eget, sodales et sem. Nam dapibus fringilla nibh ac facilisis. Aliquam ultrices at ipsum in sollicitudin. Etiam pharetra lobortis venenatis. Vestibulum non metus mauris. Aliquam maximus ultrices nisl, at iaculis urna bibendum id. Mauris elit ligula, imperdiet non elit in, ornare auctor leo. Nullam velit ipsum, gravida id ipsum vel, suscipit auctor arcu. Sed iaculis, felis nec dignissim eleifend, erat magna viverra eros, sit amet vehicula purus neque a tellus. Proin id gravida mauris.
                </div>
                </div> 
                
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>From: [currency] [price]/excl. VAT
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>To: [currency] [price]/excl. VAT
                </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>From: [price][currency]/incl. VAT
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>To: [price][currency]/incl. VAT
                </div>
                <div>&nbsp;</div>
                <div class="col-md-12 col-sm-12 col-xs-12 btn-right">
                             <button class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i> +</button>
                </div>
                </div>
                <div class="clear">&nbsp;</div>
                <hr>
                
                <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                <img src="http://www.elektrodaily.com/wp-content/uploads/2014/05/question-mark.jpg" style="width:215px; height:200px;">
                </div>
			
              <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
					<h4><a href="../../../ProductDetailPage.php">Product title</a></h4>
				Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas erat velit, aliquet vitae consequat eget, sodales et sem. Nam dapibus fringilla nibh ac facilisis. Aliquam ultrices at ipsum in sollicitudin. Etiam pharetra lobortis venenatis. Vestibulum non metus mauris. Aliquam maximus ultrices nisl, at iaculis urna bibendum id. Mauris elit ligula, imperdiet non elit in, ornare auctor leo. Nullam velit ipsum, gravida id ipsum vel, suscipit auctor arcu. Sed iaculis, felis nec dignissim eleifend, erat magna viverra eros, sit amet vehicula purus neque a tellus. Proin id gravida mauris.
                </div>
                </div> 
                
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>From: [currency] [price]/excl. VAT
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>To: [currency] [price]/excl. VAT
                </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>From: [price][currency]/incl. VAT
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>To: [price][currency]/incl. VAT
                </div>
                <div>&nbsp;</div>
                <div class="col-md-12 col-sm-12 col-xs-12 btn-right">
                             <div style="color:#FF0000;"><h4>Out of stock</h4></div>
                </div>
                </div>
                <div class="clear">&nbsp;</div>
                <hr>
                
                <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                <img src="http://www.elektrodaily.com/wp-content/uploads/2014/05/question-mark.jpg" style="width:215px; height:200px;">
                </div>
			
              <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
					<h4><a href="../../../ProductDetailPage.php">Product title</a></h4>
				Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas erat velit, aliquet vitae consequat eget, sodales et sem. Nam dapibus fringilla nibh ac facilisis. Aliquam ultrices at ipsum in sollicitudin. Etiam pharetra lobortis venenatis. Vestibulum non metus mauris. Aliquam maximus ultrices nisl, at iaculis urna bibendum id. Mauris elit ligula, imperdiet non elit in, ornare auctor leo. Nullam velit ipsum, gravida id ipsum vel, suscipit auctor arcu. Sed iaculis, felis nec dignissim eleifend, erat magna viverra eros, sit amet vehicula purus neque a tellus. Proin id gravida mauris.
                </div>
                </div> 
                
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>From: [currency] [price]/excl. VAT
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>To: [currency] [price]/excl. VAT
                </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>From: [price][currency]/incl. VAT
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>To: [price][currency]/incl. VAT
                </div>
                <div>&nbsp;</div>
                <div class="col-md-12 col-sm-12 col-xs-12 btn-right">
                             <button class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i> +</button>
                </div>
                </div>
                <div class="clear">&nbsp;</div>
                <hr>
                
                <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;&laquo;</a></li>
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                        <li><a href="#">&raquo;&raquo;</a></li>
                  </ul>                
                <div class="clear">&nbsp;</div>
    			</div>
                  </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <div>
                
                <?php include('../../../components/private/menus/preview_menu_private.php'); ?>
                
				<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 box box-body">
                <strong style="font-size:24px;"><i class="fa fa-shopping-cart"></i> Shopping Cart</strong>
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
