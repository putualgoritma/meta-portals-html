<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."company/public/profile/deals.php"; ?>
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
                        <li class="active">Deals</li>
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
                
               
    <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Deals</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
				
			<div class="row body-box">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <label><strong>Select Deal to edit</strong></label>
                <select class="select form-control">
                    <option>Select Deal to edit</option>
                    <option>Business case 1</option>
                </select>
            </div>


		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <label><strong>Type of deal</strong></label>
                <select class="select form-control">
                    <option>Discount</option>
                    <option>Business case 1</option>
                </select>
            </div>
        </div>
        
        <div class="row body-box">
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
              <label><strong>Upload Deal image/video</strong></label>
			<input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>
		      </div>
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <br>
		          <input type="text" class="form-control" placeholder="">
		        </div>
		        </div>
        
     	<div style="margin-bottom:10px">
			<img src="../../../img/onze.mensen.jpg" class="img-responsive">
		</div>
        
		<p><strong>Validity</strong></p>

        
        <div class="row body-box">
            <div class="col-xs-12 col-sm-3 col-md-3">
                    From
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                    <input type="text" class="form-control datepicker" placeholder="2013-01-01">
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                    to
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                    <input type="text" class="form-control datepicker" placeholder="2014-01-01">
            </div>
        </div>
        
        <label><strong>Title deal</strong></label>
        <br>
        <input type="text" class="form-control" placeholder="">
        <br>
        
        <label><strong>Description</strong></label>
        <br>
        <textarea class="form-control" rows="5"></textarea>
        <br>

		<p><strong>Price</strong></p>
        <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
				From
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2">
				<input type="text" class="form-control" placeholder="$0.00">
			</div>
			<div class="col-xs-12 col-sm-1 col-md-1">
				For
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2">
				<input type="text" class="form-control" placeholder="$1.00">
                <br>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">					
					<select class="select form-control">
						<option>US Dollars</option>
						<option>Euro</option>
						<option>Business case 1</option>
					</select>
			</div>
            </div>
            <br>
            <label><strong>URL deal if applicable</strong></label>
            <br>
			<input type="text" class="form-control" placeholder="">
            <br>
            
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
            <br>
            Press ENTER to add a tag
            <br>
            <button id="delete" class="btn btn-danger">Remove All Tags</button>
            
            <div>&nbsp;</div>
            
            <div class="btn-pull-right">
            <button class="btn btn-info">Add</button>
            <button class="btn btn-defaultprofdelete">Delete</button>
            </div>
		                  
                  
                  
                </div>
              </li>
            </ul>
          </li>
        
            
            
             
              
              
              
          
              
                 
        
        </ul>
        
        

        
        
    </div>
    <div class="btn-pull-right">
    <button id="loading-example-btn" class="btn btn-info">Edit/save</button>   
    </div>
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
