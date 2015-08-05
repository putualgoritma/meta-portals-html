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
                <li><i class="fa fa-dashboard"></i> <a href="index.php">Home</a></li>
                <li class="active">Professional search saved</li>
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
                <p><strong>Name search</strong></p>
                 <div class="row">
					<div class="col-md-6 col-xs-12 col-sm-6">
						Criterium 1:
					</div>
					<div class="col-md-6 col-xs-12 col-sm-6">
						Value 1
					</div>
				</div>
                <br>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 2:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 2
				</div>
                </div>
                <br>
				<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 3:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 3
				</div>
                </div>
                <br>
				<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 4:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 4
				</div>
                </div>
                <br>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
						Date last search is made:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
						[Date]
				</div>
                </div>
                <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                                Date saved:
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                                [Date]
                        </div>
                </div>
                <br>
                <input type="checkbox" id="inlineCheckbox1" value="option1"> When new matches are found, update me via my inbox. 
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-2">
		 			<input name="radioGroup" id="radio1" value="option1" type="radio"> Directly
				</div>
				<div class="col-md-6 col-xs-12 col-sm-2">
		 			<input name="radioGroup" id="radio1" value="option1" type="radio"> After 48 hours
				</div>
				
                </div>
                <div>&nbsp;</div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Edit name</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Search again</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Edit criteria</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Remove search</button></div>
                
                <div class="clear">&nbsp;</div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Save preference</button></div>
                <div class="clear">&nbsp;</div>
                
                <hr>
                
                <p><strong>Name search</strong></p>
                 <div class="row">
					<div class="col-md-6 col-xs-12 col-sm-6">
						Criterium 1:
					</div>
					<div class="col-md-6 col-xs-12 col-sm-6">
						Value 1
					</div>
				</div>
                <br>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 2:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 2
				</div>
                </div>
                <br>
				<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 3:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 3
				</div>
                </div>
                <br>
				<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 4:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 4
				</div>
                </div>
                <br>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
						Date last search is made:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
						[Date]
				</div>
                </div>
                <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                                Date saved:
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                                [Date]
                        </div>
                </div>
                <br>
                <input type="checkbox" id="inlineCheckbox1" value="option1"> When new matches are found, update me via my inbox. 
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-2">
		 			<input name="radioGroup" id="radio1" value="option1" type="radio"> Directly
				</div>
				<div class="col-md-6 col-xs-12 col-sm-2">
		 			<input name="radioGroup" id="radio1" value="option1" type="radio"> After 48 hours
				</div>
				
                </div>
                <div>&nbsp;</div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Edit name</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Search again</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Edit criteria</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Remove search</button></div>
                
                <div class="clear">&nbsp;</div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Save preference</button></div>
                <div class="clear">&nbsp;</div>
                
                
                <hr>
                
                <p><strong>Name search</strong></p>
                 <div class="row">
					<div class="col-md-6 col-xs-12 col-sm-6">
						Criterium 1:
					</div>
					<div class="col-md-6 col-xs-12 col-sm-6">
						Value 1
					</div>
				</div>
                <br>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 2:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 2
				</div>
                </div>
                <br>
				<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 3:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 3
				</div>
                </div>
                <br>
				<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
					Criterium 4:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
					Value 4
				</div>
                </div>
                <br>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6">
						Date last search is made:
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6">
						[Date]
				</div>
                </div>
                <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                                Date saved:
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                                [Date]
                        </div>
                </div>
                <br>
                <input type="checkbox" id="inlineCheckbox1" value="option1"> When new matches are found, update me via my inbox. 
                <div>&nbsp;</div>
                <div class="row">
				<div class="col-md-6 col-xs-12 col-sm-2">
		 			<input name="radioGroup" id="radio1" value="option1" type="radio"> Directly
				</div>
				<div class="col-md-6 col-xs-12 col-sm-2">
		 			<input name="radioGroup" id="radio1" value="option1" type="radio"> After 48 hours
				</div>
				
                </div>
                <div>&nbsp;</div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Edit name</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Search again</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Edit criteria</button></div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Remove search</button></div>
                
                <div class="clear">&nbsp;</div>
                <div class="btn-pull-left"><button class="btn btn-info btn-block">Save preference</button></div>
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
