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
                        <li class="active">Social media</li>
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
                        
              <p>To draw attention to the job even more, you can post the job at various social media channels. Please choose which channel wish to use.</p>
              
              <label><strong>Tweet Jobs at Twitter</strong></label>
              <br>
              <input type="checkbox" value="Right 1">  companyname
              <br>
              
              <input type="checkbox" value="Right 1">  ecpnl
              <br>
              <br>

              <div class="row body-box">
          <div class="col-xs-12 col-sm-8 col-md-8">
              <input type="text" class="form-control">
          </div>
    
          <div class="col-xs-12 col-sm-4 col-md-4">
              <button class="btn btn-info ">Link account</button>
          </div>
      </div>
      
      <div>&nbsp;</div>
      
      <label><strong>Post job at Facebook</strong></label>
      <br>
      <input type="checkbox" value="Right 1">  ecommercepartnerbv
      <br>
      <br>
      <div class="row body-box">
      <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control" placeholder="Ender a name">
      </div>

      <div class="col-xs-12 col-sm-4 col-md-4">
          <button class="btn btn-info ">Link account</button>
      </div>
      </div>
      
      <div>&nbsp;</div>
      
      <label><strong>Post job at LinkedIn</strong></label>
      <br>
      <input type="checkbox" value="Right 1">  ecommercepartnerbv
      <br>
      <br>
      <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control" placeholder="Ender a name">
      </div>

      <div class="col-xs-12 col-sm-4 col-md-4">
          <button class="btn btn-info ">Link account</button>
      </div>
  </div>
              
              <div>&nbsp;</div>
               <div>&nbsp;</div>
              
              <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
           <input type="checkbox" value="Right 1"> Schedule post until<br>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8">
              <input data-provide="datepicker" class="form-control" style="margin-top:-4px;">
        </div>
    </div>
    
              <div>&nbsp;</div>
               <div>&nbsp;</div>
               
               <label><strong>Sendmessage every</strong></label>
              <br>
              <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" value="Right 1"> Monday<br>
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" value="Right 1"> Tuesday<br>              
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" value="Right 1"> Wednesday<br>            
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" value="Right 1"> Thursday<br>
          </div>
    </div>
    
    <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" value="Right 1"> Friday<br>
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" value="Right 1"> Saturday<br>              
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" value="Right 1"> Sunday<br>            
          </div>
    </div>
                
                <div>&nbsp;</div>
                
                <label><strong>Add a message if applicable</strong></label>
                <br>
                <input type="text" class="form-control" value="Company X is a senior Y. Please have a look ar our job.">
                          
                            
                 </div>
                 
                 <div class="btn-pull-right"><button class="btn btn-info ">Publish</button></div>
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
