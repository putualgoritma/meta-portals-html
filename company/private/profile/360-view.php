<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."company/public/profile/360-view.php"; ?>
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
                        <li class="active">360 view</li>
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
                
                <div class="box">
                
                <div class="pull-right">share: 
                <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
                <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
                <div class="clear">&nbsp;</div>
    
                <div class="sidebar accordion">
              <ul class="sidebar-menu">
	            <li class="treeview active">
                  <a href="#">
                <span>Websites and blogs</span>
                <i class="fa fa-plus-circle pull-right"></i>
                </a>
              <ul class="treeview-menu">
                <li>
                  <div class="panel-body link">
                  <label><strong>Url Website</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="URL">
                  <br>
                  <label><strong>Title Website</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="URL">
                  <br>
                  <div class="btn-pull-right"><button id="Add" class="btn btn-info">Add another</button></div>
                  <div class="clear">&nbsp;</div>
                  <hr>
                  
                  <label><strong>Url Webblog</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="URL">
                  <br>
                  <label><strong>Title Webblog</strong></label>
                  <br>
                  <input type="text" style="width:100%;" class="form-control" placeholder="URL">
                  <br>
                  <div class="btn-pull-right">
                  <button id="Add" class="btn btn-info">Add another</button>
                  </div>
                  <div class="clear">&nbsp;</div>

                  </div>
                  </li>
                  </ul>
                  </li>
                  
                  
                  <li class="treeview active">
                  <a href="#">
                <span>Social media</span>
                <i class="fa fa-plus-circle pull-right"></i>
                </a>
              <ul class="treeview-menu">
                <li>
                  <div class="panel-body link">
                  
                 <div class="input-group">

					<input type="text"  class="form-control socialmedia1" placeholder="Select Social media">
					<div class="input-group-btn">		
					<button class="btn btn-info dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></button>
					<ul class="dropdown-menu dropdown-menu-right socialmedia" role="menu">
										<li><a><span class="fa fa-facebook"></span>&nbsp;Facebook URL </a></li> 
										<li><a><span class="fa fa-pinterest"></span>&nbsp;Pinterest URL </a></li>    
										<li><a><span class="fa fa-instagram"></span>&nbsp;Instagram URL</a></li>
                                        <li><a><span class="fa fa-linkedin"></span>&nbsp;Linkedin URL</a></li>
                                        <li><a><span class="fa fa-tumblr"></span>&nbsp;Tumblr URL</a></li>
                                        <li><a><span class="fa fa-twitter"></span>&nbsp;Twitter URL</a></li>
                                        <li><a><span class="fa fa-vk"></span>&nbsp;VK URL</a></li>
                                        <li><a><span class="fa fa-flickr"></span>&nbsp;Flickr URL</a></li>
									</ul>

							</div><!-- /btn-group -->
						</div><br>

                  
                  <div class="btn-pull-right">
                  <button id="Add" class="btn btn-info">Add another</button>
                  </div>
                  
                  </div>
                  </li>
                  </ul>
                  </li>
                  
                  
                  <li class="treeview active">
                  <a href="#">
                <span>Groups and fanpages</span>
                <i class="fa fa-plus-circle pull-right"></i>
                </a>
              <ul class="treeview-menu">
                <li>
                  <div class="panel-body link">
                  
                  <label><strong>Title Linkedin group</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="URL">
                  <br>
                  
                  <label><strong>URL Linkedin group</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="URL">
                  <br>
                  <div class="btn-pull-right">
                  <button id="Add" class="btn btn-info">Add another</button>
                  </div>
                  <div class="clear">&nbsp;</div>
                  
                  <hr>
                  
                  <label><strong>Title Facebook fanpage</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="URL">
                  <br>
                  
                  <label><strong>URL Facebook page</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="URL">
                  <br>
                  
                  <div class="btn-pull-right">
                  <button id="Add" class="btn btn-info">Add another</button>
                  </div>
                  
                  </div>
                  </li>
                  </ul>
                  </li>
                  
                  
                  </ul>
                  </div>
                
                
                  
                </div>
    
                              </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <div>
                
                <?php include('../../../components/private/menus/preview_menu_private.php'); ?>
                

                
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
