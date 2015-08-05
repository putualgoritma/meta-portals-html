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
                <section class="content-header col-md-12">
                    <div class="breadcrumb">
                    <div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<ul class="breadcrumb-list">
                <li><i class="fa fa-dashboard"></i> <a href="../../../general/public/home/index.php">Home</a></li>
                <li><a href="../index.php">Blog Home</a></li>
                        <li class="active">Category Name</li>
                        </ul>
                                            </div>
                    </div>

                    </div>
                </section>
                <!-- Content Header (Page header) -->
                <div>&nbsp;</div>
                <?php include('../../../components/public/banner.php'); ?>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="box panel-body box-danger">
                
                <div class="row body-box">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <strong>Choose an other:</strong>
                </div>
                
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <select class="select form-control">
                 <option>Category</option>
                    <option>Date</option>
                    <option>Important</option>
                    <option>Name</option>
                  </select>	 
                </div>
                </div>       
                
                
                <div class="row body-box">

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<strong>Sort by</strong>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<select class="select form-control">
 <option>...</option>
	<option>Date</option>
    <option>Important</option>
    <option>Name</option>
  </select>	 
			</div>
			 
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<select class="select form-control">
 <option>...</option>
	<option>Date</option>
    <option>Important</option>
    <option>Name</option>
  </select>	 
			</div>
			
<div class="col-md-3 col-sm-12 col-xs-12 visible-xs">
<select class="selectpicker">
 <option>...</option>
	<option>Date</option>
    <option>Important</option>
    <option>Name</option>
  </select>	 
			</div>
			</div>     
            
            <hr>
            
            <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
   <img class="img-responsive" src="../../../img/blog3.jpg" >
  </div>

			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<a href="../posts/posts.php"><strong>[Title blog post]</strong></a><br>
			
				GivenName FamilyNamePrefix FamilyName [age]<br>
				<strong>FunctionName</strong><br>
				Publication date: [date] <br>
				<input id="input-id" type="number" class="rating" min=1 max=5 value="3" data-size="xs" disabled="true" data-show-clear="false" data-show-caption="false"> 
                
                <p>Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas <a href="#">Read more</a></p>
                <form><label><strong>tags</strong></label><br>
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
				</form>
				</div>
				
			</div>
            
            
            <hr>
            
            
            <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
   <img class="img-responsive" src="../../../img/blog4.jpg" >
  </div>

			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<a href="../posts/posts.php"><strong>[Title blog post]</strong></a><br>
			
				GivenName FamilyNamePrefix FamilyName [age]<br>
				<strong>FunctionName</strong><br>
				Publication date: [date] <br>
				<input id="input-id" type="number" class="rating" min=1 max=5 value="3" data-size="xs" disabled="true" data-show-clear="false" data-show-caption="false"> 
                
                <p>Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas <a href="#">Read more</a></p>
                <form><label><strong>tags</strong></label><br>
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
				</form>
				</div>
				
			</div>

            <div class="row body-box">
<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-6  col-sm-offset-6">
<b>Number of results</b>
</div>

<div class="col-md-2 col-sm-2 col-xs-12 pull-right">
<select class="select form-control">
 <option>20</option>
	<option>Date</option>
    <option>Important</option>
    <option>Name</option>
  </select>	 
			</div>
			</div>
            
            <div>&nbsp;</div>
            
            <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
            
            
            
                     
            
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
