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
                        <li><a href="../index.php">Professional Home</a></li>
                        <li class="active">My application</li>
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
                
                <div class="box panel-body">
                 <!-- Tab panes -->
				<div class="row body-box">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Number] Results</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Sort by: <select class="select">
			  
                  <option>...</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select></div>
                </div>
                <hr>
                
                <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3">
           <img src="../../../img/img.jpg" class="img-responsive" alt="[Job photo]">
          </div>

          <div class="col-xs-12 col-sm-4  col-md-4">
		  <a>[Job title]</a><br>
          [Company Name]<br>
          [PostalCode],[City] <br>
          [Function], [Availability]
          </div>
		  
		  <div class="col-xs-12 col-sm-4  col-md-5">
		  [Application status: [Status]<br>
		  Date application: dd-mm-yyyy<br>
          Suitability: ....% <br>
          Verified Status: [Status]
          </div>

      </div>                 
      
      <div class="clear">&nbsp;</div>
      <button class="btn btn-danger">My application</button> 
      <div class="clear">&nbsp;</div>
      <p><strong>Withdraw application</strong></p>
      <div>
      <select class="select">
				  <option>Selection</option>	
                  <option>...</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select>
             
             <button class="btn btn-danger">Confirm</button></div>
      <div class="clear">&nbsp;</div>          
                
    			</div>
                
                <div class="box panel-body">
                 <!-- Tab panes -->
				
                <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3">
            <img src="../../../img/img2.jpg" class="img-responsive" alt="[Job photo]">
          </div>

          <div class="col-xs-12 col-sm-4  col-md-4">
		  <a>[Job title]</a><br>
          [Company Name]<br>
          [PostalCode],[City] <br>
          [Function], [Availability]
          </div>
		  
		  <div class="col-xs-12 col-sm-4  col-md-5">
		  [Application status: [Status]<br>
		  Date application: dd-mm-yyyy<br>
          Suitability: ....% <br>
          Verified Status: [Status]
          </div>

      </div>                 
      
      <div class="clear">&nbsp;</div>
      <button class="btn btn-danger">My application</button> 
      <div class="clear">&nbsp;</div>
      <p><strong>Withdraw application</strong></p>
      <div>
      <select class="select">
				  <option>Selection</option>	
                  <option>...</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select>
             <button class="btn btn-danger">Confirm</button>
             </div>
      <div class="clear">&nbsp;</div>          
                
    			</div>
                
                
                <div class="box panel-body">
                 <!-- Tab panes -->
				
                <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3">
            <img src="../../../img/img3.jpg" class="img-responsive" alt="[Job photo]">
          </div>

          <div class="col-xs-12 col-sm-4  col-md-4">
		  <a>[Job title]</a><br>
          [Company Name]<br>
          [PostalCode],[City] <br>
          [Function], [Availability]
          </div>
		  
		  <div class="col-xs-12 col-sm-4  col-md-5">
		  [Application status: [Status]<br>
		  Date application: dd-mm-yyyy<br>
          Suitability: ....% <br>
          Verified Status: [Status]
          </div>

      </div>                 
      
      <div class="clear">&nbsp;</div>
      <button class="btn btn-danger">My application</button> 
      <div class="clear">&nbsp;</div>
      <p><strong>Withdraw application</strong></p>
      <div>
      <select class="select">
				  <option>Selection</option>	
                  <option>...</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select>
             <button class="btn btn-danger">Confirm</button>
             </div>
      <div class="clear">&nbsp;</div>          
                
    			</div>
                <div class="btn-pull-left"><button class="btn btn-danger">Back to [Previous page]</button></div>
                
                <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                
                
    
                              </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <div>
                <?php include('../../../components/private/menus/preview_menu_private.php'); ?>
                
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 box">
                <h4 class="box-right">My applications</h4>
                <p><em>No advanced filters selected...</em></p>
                <hr>
                <p><strong>Search criteria:</strong></p>
                <input type="text" class="form-control">
                <br>
                <select class="form-control select">
                 <option>Category...</option>
                <option>Date</option>
                <option>Important</option>
                <option>Name</option>
                  </select>	
                  <div>&nbsp;</div>
                 <button class="btn btn-danger">Search</button> 
                 <div>&nbsp;</div>
                 <h4>Advanced Search</h4>
                 <p>Search for Blogs</p>
                 
                 <p><strong>Discipline:</strong></p>
                 <select multiple class="form-control">
                  <option>Discipline 1</option>
                  <option>Discipline 2</option>
                  <option>Discipline 3</option>
                  <option>Discipline 4</option>
                  <option>Discipline 5</option>
                </select>
                <p><strong>Branche:</strong></p>
                <select multiple class="form-control">
                  <option>Branche 1</option>
                  <option>Branche 2</option>
                  <option>Branche 3</option>
                  <option>Branche 4</option>
                  <option>Branche 5</option>
                </select>
                <p><strong>Location:</strong></p>
                <select multiple class="form-control">
                  <option>Location</option>
                  <option>Location</option>
                  <option>Location</option>
                  <option>Location</option>
                  <option>Location</option>
                </select>
                <div>&nbsp;</div>
                <p>for more filters <a>click here</a></p>
                
                <button class="btn btn-danger" >Advanced search</button>
                
                 
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
