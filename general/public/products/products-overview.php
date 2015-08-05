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
                <li class="active">Product overview</li>
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
                <h2 class="product-overview">Products overview</h2>
                <div class="btn-group btn-right" style="margin-top:10px;">
                <button class="btn dropdown-toggle btn-default" data-toggle="dropdown">
                 <span><i class="fa fa-shopping-cart"></i> Shopping Cart <i class="caret"></i></span>                  </button>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Product Name]                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Price]                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        Subtotal:                </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Currency][Price]                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        VAT:                </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Currency][Price]                        </div>
                        </div>
                      </li>
                      <li>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        Total incl. VAT:                </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        [Currency][Price]                        </div>
                        </div>
                      </li>
                      <div>&nbsp;</div>
                      <li>
             <div class="col-lg-12"><button class="btn btn-warning btn-block">check out</button></div>
            </li>
                  </ul>
                   </div>
                                        
                   <div class="clear">&nbsp;</div>
              
               
              <div>
                <div class="btn-pull-left">
                <input type="text" class="form-control" placeholder="Keywords" style="width:100%; margin-top:10px">
                </div>
                
                <div class="btn-pull-left">
                  <button class="btn btn-info btn-block" style="min-width:60px; margin-top:12px;">Search product(s)</button>
                </div>
                
                <div class="btn-right">
                  <a href="../../../professional/private/orders/order-history.php" class="btn btn-info btn-block" style="min-width:60px; margin-top:10px;">View order history</a>                </div>
                </div>
                    
                
                <div class="clear">&nbsp;</div>
                <div class="box box-body box-danger">
                <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                <img src="../../../img/img5.jpg" class="img-responsive">                
                </div>
			
              <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
					<h4><a href="../../..//ProductDetailPage.php">Product title</a></h4>
				Dit is een stuk tekst bestaande uit precies 160 tekens (incl. spaties en andere tekens) die dient als metabeschrijving en wordt getoond op een overzichtspagina.                </div>
                </div> 
                
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>From: [currency] [price]/excl. VAT                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>To: [currency] [price]/excl. VAT                </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>From: [price][currency]/incl. VAT                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>To: [price][currency]/incl. VAT                </div>
                <div>&nbsp;</div>
                <div class="col-md-12 col-sm-12 col-xs-12 btn-right">
                  <button class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> +</button>
                </div>
                </div>
                <div class="clear">&nbsp;</div>
                <hr>
                
                <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                <img src="../../../img/img4.jpg" class="img-responsive">                </div>
			
              <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
					<h4><a href="../../../ProductDetailPage.php">Product title</a></h4>
				Dit is een stuk tekst bestaande uit precies 160 tekens (incl. spaties en andere tekens) die dient als metabeschrijving en wordt getoond op een overzichtspagina.                </div>
                </div> 
                
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>From: [currency] [price]/excl. VAT                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>To: [currency] [price]/excl. VAT                </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>From: [price][currency]/incl. VAT                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>To: [price][currency]/incl. VAT                </div>
                <div>&nbsp;</div>
                <div class="col-md-12 col-sm-12 col-xs-12 btn-right">
                  <button class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> +</button>
                </div>
                </div>
                <div class="clear">&nbsp;</div>
                <hr>
                
                <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                <img src="../../../img/img3.jpg" class="img-responsive">                </div>
			
              <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
					<h4><a href="../../../ProductDetailPage.php">Product title</a></h4>
				Dit is een stuk tekst bestaande uit precies 160 tekens (incl. spaties en andere tekens) die dient als metabeschrijving en wordt getoond op een overzichtspagina.                </div>
                </div> 
                
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>From: [currency] [price]/excl. VAT                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:grey;">
				<br>To: [currency] [price]/excl. VAT                </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>From: [price][currency]/incl. VAT                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <br>To: [price][currency]/incl. VAT                </div>
                <div>&nbsp;</div>
                <div class="col-md-12 col-sm-12 col-xs-12 btn-right">
                  <button class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> +</button>
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
