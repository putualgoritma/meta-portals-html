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
                     <li><i class="fa fa-dashboard"></i> <a href="../../../general/public/home/index.php">Home</a></li>
                     <li><a href="../index.php">Professional Home</a></li>
                     <li class="active">Rate & review</li>
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
                </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="box-user">
                <div class="image">
                <img src="../../../img/lex-den-doop.jpg" class="img-circle" alt="User Image" />
                </div>
                </div>
                </div>
                </div>
                
                
                
                
                
                
                <div class="row clearfix">
                <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="box box-danger">
                
                <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#ratereview" aria-controls="ratereview" role="tab" data-toggle="tab">Rate&Review </a></li>
    <li role="presentation"><a href="#myreviews" aria-controls="myreviews" role="tab" data-toggle="tab">My reviews</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="ratereview">
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
    </div>
    
    <div class="clear">&nbsp;</div>
   <h4>All reviews for [Professional name] ([number of reviews])</h4>
   <div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-top:10px;"><b>Average rating:</b></div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<input id="input-id" type="number" class="rating" min=1 max=5 value="3" data-size="xs" disabled="true" data-show-clear="false" data-show-caption="false"> 
						
						</div>
				</div>
    <div class="clear">&nbsp;</div>
    
    <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Title review]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>[Rating]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Updated on:</strong> [Date]</div>
    </div>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br> </p>
    <p><strong>By:</strong> [Company Name]</p>
    <div class="clear">&nbsp;</div>
    <div class="btn-pull-left"><button class="btn btn-info"><i class="fa fa-file-text"></i> Report</button>
    <button class="btn btn-info"><i class="fa fa-mail-reply"></i> Reply</button></div>
    <div class="clear">&nbsp;</div>
                <hr>
        
       <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Title review]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>[Rating]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Updated on:</strong> [Date]</div>
    </div>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br> </p>
    <p><strong>By:</strong> [Company Name]</p>
    <div class="clear">&nbsp;</div>
    <div class="btn-pull-left"><button class="btn btn-info"><i class="fa fa-file-text"></i> Report</button>
    <button class="btn btn-info"><i class="fa fa-mail-reply"></i> Reply</button></div>
    <div class="clear">&nbsp;</div>
    
        <hr>
        
         <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Title review]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>[Rating]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Updated on:</strong> [Date]</div>
    </div>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br> </p>
    <p><strong>By:</strong> [Company Name]</p>
    <div class="clear">&nbsp;</div>
    <div class="btn-pull-left"><button class="btn btn-info"><i class="fa fa-file-text"></i> Report</button>
    <button class="btn btn-info"><i class="fa fa-mail-reply"></i> Reply</button></div>
    <div class="clear">&nbsp;</div>
    
        <hr>
        
         <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Title review]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>[Rating]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Updated on:</strong> [Date]</div>
    </div>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br> </p>
    <p><strong>By:</strong> [Company Name]</p>
    <div class="clear">&nbsp;</div>
    <div class="btn-pull-left"><button class="btn btn-info"><i class="fa fa-file-text"></i> Report</button>
    <button class="btn btn-info"><i class="fa fa-mail-reply"></i> Reply</button></div>
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
        
        
    </div>
    
    <div role="tabpanel" class="tab-pane" id="myreviews">
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
   
   <h4>All reviews for [Professional name] ([number of reviews])</h4>
   <div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-top:10px;"><b>Average rating:</b></div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<input id="input-id" type="number" class="rating" min=1 max=5 value="3" data-size="xs" disabled="true" data-show-clear="false" data-show-caption="false"> 
						
						</div>
				</div>
    <div class="clear">&nbsp;</div>
    
    <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Title review]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>[Rating]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Updated on:</strong> [Date]</div>
    </div>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <p><strong>By:</strong> [Company Name]</p>
    <div class="clear">&nbsp;</div>
    <div class="btn-pull-left"><button class="btn btn-info"><i class="fa fa-file-text"></i> Report</button>
    <button class="btn btn-info"><i class="fa fa-mail-reply"></i> Reply</button></div>
    <div class="clear">&nbsp;</div>
    
    <hr>
    
    <blockquote style="font-size:14px; margin-left:10px">
		<div class="row">
			<div class="col-xs-7 col-sm-8 col-md-6">
			</div>
			
		</div>


			<div class="row">
			
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<strong>RE:[Title review]</strong>
				</div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <strong>[Rating]</strong></div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<strong>Updated on:</strong>[Date]
				</div>
			</div>
			<br>
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br> 
					</div>
					
			</div>
			<br>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<strong>By:</strong> [Company Name]
			</div>
<div class="btn-pull-left ">
<button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
</div>
<div class="clear">&nbsp;</div>

		</div>
        </blockquote>
        <div>&nbsp;</div>
        <hr>
        
       <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Title review]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>[Rating]</strong></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong>Updated on:</strong> [Date]</div>
    </div>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <p><strong>By:</strong> [Company Name]</p>
    <div class="clear">&nbsp;</div>
    <div class="btn-pull-left"><button class="btn btn-info"><i class="fa fa-file-text"></i> Report</button>
    <button class="btn btn-info"><i class="fa fa-mail-reply"></i> Reply</button></div>
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
        
        
            
   
    
    
  </div>

</div>
                
                
                
                 
                  </div>
    
                  </div>
                  </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <?php include('../../../components/public/menus/left_menu_public.php'); ?>
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