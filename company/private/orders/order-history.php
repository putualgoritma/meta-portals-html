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
                        <li class="active">Order history</li>
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
                <p><strong>Order history</strong></p>
                 <div class="row body-box">
                <div class="col-xs-12 col-sm-3 col-md-3">View order details[date]</div> 
                <div class="col-xs-12 col-sm-3 col-md-3">Items orderd:[...]</div>
                <div class="col-xs-12 col-sm-3 col-md-4">Cost:[Currency$][total price]incl. VAT</div>
                <div class="col-xs-12 col-sm-3 col-md-2 btn-right">
                         <button class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> +</button>
                    </div>
                </div>
                <br>
                <div class="row body-box">
                <div class="col-xs-12 col-sm-3 col-md-3">View order details[date]</div> 
                <div class="col-xs-12 col-sm-3 col-md-3">Items orderd:[...]</div>
                <div class="col-xs-12 col-sm-3 col-md-4">Cost:[Currency$][total price]incl. VAT</div>
                <div class="col-xs-12 col-sm-3 col-md-2 btn-right">
                         <button class="btn btn-info btn-sm" ><i class="fa fa-shopping-cart"></i> +</button>
                    </div>
                </div>
				<br>
                <div class="row body-box">
                <div class="col-xs-12 col-sm-3 col-md-3">View order details[date]</div> 
                <div class="col-xs-12 col-sm-3 col-md-3">Items orderd:[...]</div>
                <div class="col-xs-12 col-sm-3 col-md-4">Cost:[Currency$][total price]incl. VAT</div>
                <div class="col-xs-12 col-sm-3 col-md-2 btn-right">
                         <button class="btn btn-info btn-sm" ><i class="fa fa-shopping-cart"></i> +</button>
                    </div>
                </div>
                <br>
                <div class="row body-box">
                <div class="col-xs-12 col-sm-3 col-md-3">View order details[date]</div> 
                <div class="col-xs-12 col-sm-3 col-md-3">Items orderd:[...]</div>
                <div class="col-xs-12 col-sm-3 col-md-4">Cost:[Currency$][total price]incl. VAT</div>
                <div class="col-xs-12 col-sm-3 col-md-2 btn-right">
                         <button class="btn btn-info btn-sm" ><i class="fa fa-shopping-cart"></i> +</button>
                    </div>
                </div>
                
                <div>&nbsp;</div>
                <div class="btn-pull-left"><button class="btn btn-info btn-sm">back to products overview</button></div>
                <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
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
