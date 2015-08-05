<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."company/public/profile/jobs.php"; ?>
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
                        <li class="active">Jobs</li>
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
                
                <div class="pull-right">share: 
                <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
                <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
                <div class="clear">&nbsp;</div>
                


                <div class="row body-box">
<div class="col-md-2 col-xs-12 col-sm-2">
<a href="#" class="btn btn-info btn-block">Post a job</a>
</div>
<div class="col-md-3 col-xs-12 col-sm-3">
<a href="#" class="btn btn-info btn-block">Post a project</a>
</div>

  <div class="col-xs-12 col-sm-offset-2 col-md-offset-2 col-sm-2 col-md-2" >
   Filter by:
  </div>
   <div class="col-xs-12 col-sm-3 col-md-offset-0 col-md-3">
    
              <select class="select form-control">
			  
                  <option>...</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select>  
			 </div>
			 </div>
             
             
             <hr>
             
             <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <img src="../../../img/img.jpg" alt="[Company photo]" class="img-responsive"><br>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
          <p style="color:grey;">[Job Title]</p>
          [Start date] - [Expiration date]<br>
          [StreetName] [HouseNumber] [Suffix] <br>
          [PostalCode], [City]<br>
          </div>

          <div class="col-xs-12 col-sm-offset-2 col-sm-3 col-md-offset-1 col-md-3">
              <select class="select form-control">
                  <option>[Job status]</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select>  
          </div>
      </div>
      
      <p><strong>Job Description:</strong>
      <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis atoque penatibus et magnis dis parturient montes, nascetur ridicul <a>Read more...</a>
      
      <div>&nbsp;</div>
      
      <div class="btn-pull-right"><button class="btn btn-info">Edit</button> <button class="btn btn-info">Delete</button></div>
                        
              </div>
              
              
               <div class="box panel-body">
               <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <img src="../../../img/img2.jpg" alt="[Company photo]" class="img-responsive"><br>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
          <p style="color:grey;">[Job Title]</p>
          [Start date] - [Expiration date]<br>
          [StreetName] [HouseNumber] [Suffix] <br>
          [PostalCode], [City]<br>
          </div>

          <div class="col-xs-12 col-sm-offset-2 col-sm-3 col-md-offset-1 col-md-3">
              <select class="select form-control">
                  <option>[Job status]</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select>  
          </div>
      </div>
      
      <p><strong>Job Description:</strong>
      <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis atoque penatibus et magnis dis parturient montes, nascetur ridicul <a>Read more...</a>
      
      <div>&nbsp;</div>
      
      <div class="btn-pull-right"><button class="btn btn-info">Edit</button> <button class="btn btn-info">Delete</button></div>
               </div>
               
               
               <div class="box panel-body">
               <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <img src="../../../img/img3.jpg" alt="[Company photo]" class="img-responsive"><br>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
          <p style="color:grey;">[Job Title]</p>
          [Start date] - [Expiration date]<br>
          [StreetName] [HouseNumber] [Suffix] <br>
          [PostalCode], [City]<br>
          </div>

          <div class="col-xs-12 col-sm-offset-2 col-sm-3 col-md-offset-1 col-md-3">
              <select class="select form-control">
                  <option>[Job status]</option>
                  <option>...</option>
                  <option>....</option>
                  <option>.....</option>
             </select>  
          </div>
      </div>
      
      <p><strong>Job Description:</strong>
      <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis atoque penatibus et magnis dis parturient montes, nascetur ridicul <a>Read more...</a>
      
      <div>&nbsp;</div>
      
      <div class="btn-pull-right"><button class="btn btn-info">Edit</button> <button class="btn btn-info">Delete</button></div>
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
