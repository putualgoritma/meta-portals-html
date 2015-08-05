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
                        <li><a href="../index.php">Blog home</a></li>
                        <li class="active">Blogger</li>
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
                <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="box panel-body box-danger">
                
                
      <div class="row clearfix">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <img src="../../../img/avatar5.png" class="img-responsive img-circle"/>
          </div>
			<div>&nbsp;</div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		 <i class="fa fa-user"></i> Lex Den Doop
         <h4>Senior Sofwer Developer</h4>
          </div>
          </div>
          <div class="clear">&nbsp;</div>

            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
            commodo ligula eget dolor. Aenean massa. Cum sociis 
            natoque penatibus et magnis dis parturient montes, 
            nascetur ridicul <a class="link">Read more...</a>
            
            <div>&nbsp;</div>
            
            <div><button class="btn btn-info">View blogger</button></div>

                
                
                
                
                 
                              </div>
                              
                              
                              
                              <div class="box panel-body box-danger">
                
                
      
		<div class="row clearfix">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <img src="../../../img/avatar3.png" class="img-responsive img-circle"/>
          </div>
			<div>&nbsp;</div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		 <i class="fa fa-user"></i> Lex Den Doop
         <h4>Senior Sofwer Developer</h4>
          </div>
          </div>
          <div class="clear">&nbsp;</div>

            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
            commodo ligula eget dolor. Aenean massa. Cum sociis 
            natoque penatibus et magnis dis parturient montes, 
            nascetur ridicul <a class="link">Read more...</a>
            
            <div>&nbsp;</div>
            
            <div><button class="btn btn-info">View blogger</button></div>

                 
                              </div>
                              
                              
                              
                              <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                    <div class="clear">&nbsp;</div>
                                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <div>
                 <?php include('../../../components/public/menus/left_menu_public.php'); ?>
                
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 box panel-body box-warning">
                <h3 style="margin: 0px;">Blogs</h3>
                <br>
<p><i>No advanced filters selected...</i></p>

<hr>
<label><strong>Search criteria:</strong></label>
<br>
<input type="text" class="form-control">

<br>
<select class="select form-control">
     <option>Category...</option>
	<option>Date</option>
    <option>Important</option>
    <option>Name</option>
  </select>	
  <div>&nbsp;</div>
<button class="btn btn-info" >Search</button>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h4>Advanced Search</h4><p>
		Search for Blogs
	</div>

</div>
    <hr>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<b>Discipline:</b><br>
	<select multiple class="form-control">
  <option>Discipline 1</option>
  <option>Discipline 2</option>
  <option>Discipline 3</option>
  <option>Discipline 4</option>
  <option>Discipline 5</option>
</select>
	</div>
	</div>
	<br>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<b>Branche:</b><br>
	<select multiple class="form-control">
  <option>Branche 1</option>
  <option>Branche 2</option>
  <option>Branche 3</option>
  <option>Branche 4</option>
  <option>Branche 5</option>
</select>
	</div>
	</div>
	<br>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<b>Location:</b><br>
	<select multiple class="form-control">
  <option>Location</option>
  <option>Location</option>
  <option>Location</option>
  <option>Location</option>
  <option>Location</option>
</select>
	</div>
	</div>
	<br>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		for more filters <a>click here</a>
	</div>
	
	</div>
	<br>
	<div>
		<button class="btn btn-info">Advanced search</button>
	</div>

                </div>
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
