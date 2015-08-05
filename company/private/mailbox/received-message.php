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
                        <li class="active">Received message</li>
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
                
                <div class="box box-body table-responsive">
                <h3>Received message</h3>
                </div>
                <div class="box box-body table-responsive">
                <h4>[Subject of message]</h4>
                <hr>
                <div class="row body-box">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  [First name]
              	</div>
   	           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                 Date and time sent: dd-mm-yyyy hh:mm
               </div>
               </div>
               <hr>
               <p>Lorem ipsum</p>
               <p>dolor sit amet, consectetur adipiscing elit. Curabitur purus ligula, vestibulum vel dignissim non, tincidunt non enim. Morbi tincidunt lacinia enim a rhoncus. Aliquam gravida metus justo, commodo malesuada arcu malesuada vitae. Proin a lectus a dolor placerat aliquam. Vestibulum eget volutpat orci, malesuada consectetur dui. In pellentesque sapien vitae congue pretium. Morbi suscipit id enim imperdiet semper. Maecenas lacinia lobortis urna. Ut viverra, mi ac auctor volutpat, mauris lorem tincidunt felis, facilisis finibus nisi metus eu ligula. Etiam imperdiet, metus accumsan commodo faucibus, lorem nulla efficitur velit, ac tincidunt ante est ac dolor. Praesent non ultrices magna. Nam vel nunc sit amet sapien faucibus vestibulum. Quisque vestibulum ac nulla congue porta. Aenean faucibus gravida aliquet.</p>
               <hr>
               <h5><strong>Contact information</strong></h5>
               <div class="row body-box">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  Mobile number:
              	</div>
   	           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                 [Mobile number]
               </div>
               </div>
               <div class="row body-box">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  Email address:
              	</div>
   	           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                 Email address:
               </div>
               </div>
               <hr>
               <label><strong>RE [insert subject of message] </strong></label>
               <br>
				<textarea class="form-control" rows="5"></textarea><br>
               <hr>
               <div class="btn-pull-right">
               <button class="btn btn-info"><i class="fa fa-envelope"></i> Report message</button>
               <button class="btn btn-info"><i class="fa fa-forward"></i> Forward</button>
                <button class="btn btn-info"><i class="fa fa-trash-o"></i> Delete</button>
                <button class="btn btn-info"><i class="fa fa-reply"></i> Reply</button></div>
                <div class="clear">&nbsp;</div>
                <hr>
                <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                 <div class="clear">&nbsp;</div>
                 <div class="btn-pull-right"><form action="received-message.php" method="post"><button id="sent" class="btn btn-info"><i class="fa fa-undo"></i> Back to inbox</button></form></div>                   
                
                
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
