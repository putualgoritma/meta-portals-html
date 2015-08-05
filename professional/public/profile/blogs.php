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
                     <li class="active">Blogs</li>
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
                <div class="box panel-body box-danger">
                
                <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#myblogposts" aria-controls="myblogposts" role="tab" data-toggle="tab">My blogposts</a></li>
    <li role="presentation"><a href="#writeablogpost" aria-controls="writeablogpost" role="tab" data-toggle="tab">Write a blogpost</a></li>
  </ul>
  
   <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="myblogposts">
     <div><strong>Filter by:</strong></div>
    <select class="form-control select">
     <option>...</option>
        <option>Date</option>
        <option>Important</option>
        <option>Name</option>
      </select>
    <div class="clear">&nbsp;</div>
    <hr>
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <img src="../../../img/img.jpg" class="img-responsive">
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
    <h4 style="margin-top:0px;"><a href="#">[Blogpost title]</a></h4> 
    Date]   <a href="#">[Blog author]</a> ---- <a href="#">[Discipline]</a><br>
				
			 
				Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
    </div>
    </div>
    
    <div class="clear">&nbsp;</div>
    <hr>
    
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <img src="../../../img/img2.jpg" class="img-responsive">
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
    <h4 style="margin-top:0px;"><a href="#">[Blogpost title]</a></h4> 
    Date]   <a href="#">[Blog author]</a> ---- <a href="#">[Discipline]</a><br>
				
			 
				Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
    </div>
    </div>
    <div class="clear">&nbsp;</div>
    <hr>
    
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <img src="../../../img/img3.jpg" class="img-responsive">
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
    <h4 style="margin-top:0px;"><a href="#">[Blogpost title]</a></h4> 
    Date]   <a href="#">[Blog author]</a> ---- <a href="#">[Discipline]</a><br>
				
			 
				Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
    </div>
    </div>
    <div class="clear">&nbsp;</div>
    <hr>
    
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <img src="../../../img/img4.jpg" class="img-responsive">
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
    <h4 style="margin-top:0px;"><a href="#">[Blogpost title]</a></h4> 
    Date]   <a href="#">[Blog author]</a> ---- <a href="#">[Discipline]</a><br>
				
			 
				Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
    </div>
    </div>
    <div class="clear">&nbsp;</div>
    <hr>
          <div>
          <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        </div>
                                        <div class="clear">&nbsp;</div>
                                                                 
    </div>
    
    
    <div role="tabpanel" class="tab-pane" id="writeablogpost">
    <h3>[Title blog post]</h3>
                 
                 <div class="row">
				<div class="col-md-4 col-ms-12 col-xs-12 ">
				<b>Publication date:</b> [Date]
				</div>
				<div class="col-md-8 col-ms-12 col-xs-12">
					<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs">
				</div>	
                </div>
                
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,<p></p> pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.<p></p> Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.

Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.<p></p> Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla.<p></p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>

<hr>

<label><strong>Tags:</strong></label>
<br>
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

<hr>

<div class="btn-pull-right"><button class="btn btn-danger">Place a comment</button></div>
<div class="clear">&nbsp;</div>
<hr>

<div class="row body-box">
								<div class="col-xs-12 col-sm-2 col-md-3 col-lg-2">
			<img src="../../../img/avatar.png" class="img-responsive">
		</div>
					<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                    <p><strong>[FistName][LastName]</strong></p>
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br> 
					</div>
			</div>
            
            <div class="row body-box">
			<div class="col-md-2 col-sm-2 col-xs-0"></div>
			<div class="col-md-1 col-sm-2 col-xs-0">
			<img src="../../../img/thumbs_up.jpg" ><span class="badge">10</span>
			</div>
			<div class="col-md-1 col-sm-2 col-xs-0">
			<img src="../../../img/thumbs_down.jpg" ><span class="badge">40</span>

</div>
			<div class="col-xs-12 col-sm-6 col-md-2"> 
								<div class="btn btn-danger" >Reply</div>
							</div>
							</div>

                 <div>&nbsp;</div>
                 
                 <div class="row">
			<div class="col-md-3 col-sm-2 col-xs-0"></div>
								<div class="col-xs-12 col-sm-2 col-md-2"style="margin-left:10px; margin-right:10px; margin-bottom:10px">
			<img src="../../../img/avatar2.png" class="img-responsive">
		</div>
					<div class="col-xs-12 col-sm-5 col-md-6">
                    <p><strong>[FirstName][LastName]</strong></p>
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br> 
					</div>
			</div>
            <div>&nbsp;</div>
            <div class="row body-box">

			<div class="col-md-4 col-sm-2 col-xs-0"></div>
			<div class="col-md-1 col-sm-2 col-xs-2">
			<img src="../../../img/thumbs_up.jpg" ><span class="badge">1</span>
			</div>
			<div class="col-md-1 col-sm-2 col-xs-2">
			<img src="../../../img/thumbs_down.jpg" > <span class="badge">10</span></div>

	<div class="col-xs-2 col-sm-2 col-md-2"> 
				<div class="btn btn-danger">Edit</div>
			</div>
								<div class="col-xs-2 col-sm-2 col-md-2"> 
				<div class="btn btn-danger">Delete</div>
			</div>

							</div>
                            <hr>
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
