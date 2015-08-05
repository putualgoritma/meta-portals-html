<?php include('../../components/config.php'); ?><? $preview_link="#"; ?>
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

    <?php include('../../components/private/layout/header_css.php'); ?>   
    
	<?php include('../../components/private/layout/header_js.php'); ?>
    
  </head>

<body>
<!-- header logo: style can be found in header.less -->
<div class="wrapper row-offcanvas row-offcanvas-left">
<?php include('../../components/private/menus/left_menu_private.php'); ?>

                <aside class="right-side">
                <?php include('../../components/private/menus/top_menu_private.php'); ?>

                <!-- Main content -->
                <section class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> Home</li>
                    </ol>
                </section>
                
                
                
                <div id="content">
		          <div class=""> 
      <br>
		            <style>

.btnkouhai{
	width: 100%!important;
	height: 50px;
}
.btndaikouhai{
	width: 100%!important;
	height: 156px;
}
.btnkouhaibot{
	width: 100%!important;
	height: 50px;
	background-color: grey!important;
}
.compl{
	padding-left: 0px!important;
}
.compr{
	padding-right: 0px!important;
}
h3{
	margin-top: 3px!important;
}
hr{
	margin-top: 3px;
}

	</style>
		            
		            <script>
$( document ).ready(function() {
	$( "#toggledesu" ).click(function() {
	  $( "#hiddenprof").toggle("slow");
	  $( "#hiddendesuprof").toggle("slow");
	  $( "#hiddencomp").toggle("slow");
	  $( "#hiddendesucomp").toggle("slow");
	});
		$( "#toggledesunee" ).click(function() {
	  $( "#hiddenprof").toggle("slow");
	  $( "#hiddendesuprof").toggle("slow");
	  $( "#hiddencomp").toggle("slow");
	  $( "#hiddendesucomp").toggle("slow");
	});
	$( "#toggledesusenpai" ).click(function() {
	  $( "#hiddenprof").toggle("slow");
	  $( "#hiddendesuprof").toggle("slow");
	  $( "#hiddencomp").toggle("slow");
	  $( "#hiddendesucomp").toggle("slow");
	});
		$( "#toggledesuneesenpai" ).click(function() {
	  $( "#hiddenprof").toggle("slow");
	  $( "#hiddendesuprof").toggle("slow");
	  $( "#hiddencomp").toggle("slow");
	  $( "#hiddendesucomp").toggle("slow");
	});		

});

	</script>
      <h1 class="text-center" style="margin-top: 0px;">What do you want to do?</h1>
      <div class="row">
      <div class="col-lg-12">
		            <div class="panel panel-default">
		              <div class="panel-body">
		                <div class="" style="padding-left:0px; width:100%;">
		                  
		                  
		                  <div hidden id="hiddendesuprof">
  <div class="row hidden-xs">
    
    <div class="col-md-4 baka">
      <h3 class="text-center">Set your profile up<hr></h3>
			  </div>	
  
			<div class="col-md-8 baka">
			  <h3 class="text-center">Claim your company<hr></h3>
			  </div>		
</div>
  
<div class="row">		
  
  <div class="col-md-4 baka" id="toggledesu">
    <button class="btn btndaikouhai btn-danger text-center">Professional</button>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="#" method="post"><button class="btn btnkouhai btn-info text-center">Company account</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="../../company/public/profile/claim-company.php" method="post"><button class="btn btnkouhai btn-info text-center">Claim a company</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="../../company/public/profile/rate-review.php" method="post"><button class="btn btnkouhai btn-info text-center">Rate and review</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="#" method="post"><button href="" class="btn btnkouhai btn-info text-center">Shop</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="../../company/public/profile/buyer.php" method="post"><button class="btn btnkouhai btn-info text-center">Buyer</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="../../company/public/profile/supplier.php" method="post"><button class="btn btnkouhai btn-info text-center">Supplier</button></form>
			  </div>	
</div>
		</div>
  
		<div id="hiddendesucomp">
		  
  <div class="row hidden-xs">
    
    <div class="col-md-4 baka">
      <h3 class="text-center">Claim a company<hr></h3>
			  </div>	
  
			<div class="col-md-8 baka">
			  <h3 class="text-center">Change your profile<hr></h3>
			  </div>		
</div>
  
<div class="row">		
  
  <div class="col-md-4 baka" id="toggledesusenpai">
    <button class="btn btndaikouhai btn-info text-center">Company</button>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="../../professional/private/profile/aboutme.php" method="post"><button class="btn btnkouhai btn-danger text-center">Professional profile</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="#" method="post"><button class="btn btnkouhai btn-danger text-center">Marketplace</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="../../professional/private/profile/rate-review.php" method="post"><button class="btn btnkouhai btn-danger text-center">Rate and review</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="../../professional/private/profile/blogs.php" method="post"><button class="btn btnkouhai btn-danger text-center">Blog</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="#" method="post"><button class="btn btnkouhai btn-danger text-center">Dating</button></form>
			  </div>
  
			<div class="col-md-4 baka">
			  <form action="#" method="post"><button class="btn btnkouhai btn-danger text-center">Freelance</button></form>
			  </div>	
</div>
		</div>
  
	
			  <hr>
		                  <div class="row">
		                    <div class="col-md-4 baka">
		                      <form action="../../professional/private/mailbox/inbox.php" method="post"><button class="btn btnkouhai btn-navy text-center" style="color: #FFFFFF;">Inbox</button></form>
				  </div>
  
				<div class="col-md-4 baka">
				  <form action="../../professional/private/jobs/my-applications.php" method="post"> <button class="btn btnkouhai btn-navy text-center" style="color: #FFFFFF;">My applications</button></form>
				  </div>
  
				<div class="col-md-4 baka">
				  <form action="../../professional/private/orders/order-history.php" method="post"><button class="btn btnkouhai btn-navy text-center" style="color: #FFFFFF;">Order history</button></form>
				  </div>
  
				<div class="col-md-4 baka">
				  <form action="../../professional/private/searches/saved-searches.php" method="post"><button class="btn btnkouhai btn-navy text-center" style="color: #FFFFFF;">Saved searches</button></form>
				  </div>
  
				<div class="col-md-4 baka">
				  <form action="../../professional/private/settings/settings.php" method="post"><button class="btn btnkouhai btn-navy text-center" style="color: #FFFFFF;">settings</button></form>
				  </div>
  
				<div class="col-md-4 baka">
				  <form action="" method="post"><button class="btn btnkouhai btn-navy text-center" style="color: #FFFFFF;">job</button></form>
				  </div>				
		  </div>
		  </div>
	  </div>
      </div>
      
      <div>&nbsp;</div>
      
      </div>
      </div>
	              </div></div>
                
                
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
