<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."company/public/profile/supplier.php"; ?>
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
                        <li class="active">Supplier</li>
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
            <span>Trade capacity</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
				
			<label><strong>Trade & market</strong></label>
            <br>
            <div class="col-md-10 col-xs-10 col-sm-10 text-center" style="border:2px solid;">
		world map<br><BR><br><br><BR><br>
	</div>
    
    <div class="clear">&nbsp;</div>
    
    <label><strong>Main Markets</strong></label>
    <br>
    <table class="table table-bordered">
          <tr>
            <td><b>Main markets</b></td>
            <td><b>Total revenue</b></td>
            <td><b>Main products</b></td>
          </tr>

          <tr>
            <td>Mid east</td>
            <td>[Precentage]</td>
            <td>[Main product]</td>
          </tr>

          <tr>
               <td>Eastern Europe</td>
            <td>[Precentage]</td>
            <td>[Main product]</td>
          </tr>

          <tr>
              <td>Western Europe</td>
            <td>[Precentage]</td>
            <td>[Main product]</td>
          </tr>

          <tr>
              <td>Northern Europe</td>
            <td>[Precentage]</td>
            <td>[Main product]</td>
          </tr>

          <tr>
               <td>North America</td>
            <td>[Precentage]</td>
            <td>[Main product]</td>
          </tr>

          <tr>
              <td>South America</td>
            <td>[Precentage]</td>
            <td>[Main product]</td>
          </tr>

          <tr>
               <td>Southeast Asia</td>
            <td>[Precentage]</td>
            <td>[Main product]</td>
          </tr>
        </table>
        
        <div>&nbsp;</div>
        
        <div class="row body-box">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <label><strong>Export</strong></label>
        <br>
        <div class="input-group">
        <input type="text" class="form-control" placeholder=""><span class="input-group-addon">%</span>
        </div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
         <label><strong>Nearest port</strong></label>
         <br>
          <input type="text" class="form-control" placeholder="">
        </div>
           </div>
        
     
                  
                  
                  
                </div>
              </li>
            </ul>
          </li>
        <li class="treeview active">
          <a href="#">
            <span>Trade ability</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              <label><strong>Average leadtime</strong></label>
              <br>
               <input type="text" class="form-control" placeholder="">
               
               <div>&nbsp;</div>

               <label><strong>Description</strong></label>
               <br>
               <textarea class="form-control" rows="5" style="max-width:750px" placeholder=""></textarea>
               
               <div>&nbsp;</div>
               
               license photo
               <br>
               <input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>


                </div>
              </li>
            </ul>
            </li>
            
            
             <li class="treeview active">
          <a href="#">
            <span>Production capacity</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              
              <p><strong>Factory information</strong></p>
              
              <label><strong>Factory size</strong></label>
              <br>
              <select class="select form-control">
							<option>Selection</option>
							<option>small</option>
							<option>large</option>
					</select>
              <div>&nbsp;</div>
              <div class="row body-box">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<label><strong>Factory location</strong></label>
        <br>
        <input type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
         <label><strong>No. of production lines</strong></label>
         <br>
			<input type="number" class="form-control bfh-number" />
        </div>
        </div>
        
        <label><strong>Contract manufacturing</strong></label>
        <br>
        <input type="text" class="form-control" placeholder="">
        <div>&nbsp;</div>
        
        <label><strong>Product price range</strong></label>
        <div class="row">
            <div class="col-md-2 col-xs-12 col-sm-2">
          From:
          </div>
          <div class="col-md-2 col-xs-12 col-sm-2">
           <input type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-1 col-xs-12 col-sm-1">
          to: 
          </div>
          <div class="col-md-2 col-xs-12 col-sm-2">
          <input type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-5 col-xs-12 col-sm-5">
           <select class="select form-control">
                  <option>Currency</option>
                  <option>Dollars</option>
                  <option>Euros</option>
                  <option>.....</option>
             </select> 
       </div>
  </div>
        
              
              </div>
              </li>
              </ul>
              </li>
              
              
              <li class="treeview active">
          <a href="#">
            <span>R&D capacity</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              <label><strong>Research & Development</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="">
              
              <div>&nbsp;</div>
              
              <p>Equipment and Facilities</p>
              
              
              
              license photo
              <br>
              <input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>
              
              
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
