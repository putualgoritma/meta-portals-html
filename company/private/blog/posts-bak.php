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

    <?php include('../../../components/private/layout/header_css.php'); ?>   
    
	<?php include('../../../components/private/layout/header_js.php'); ?>
    
  </head>

<body>
<!-- header logo: style can be found in header.less -->

<div class="wrapper row-offcanvas row-offcanvas-left">
<?php include('../../../components/private/menus/left_menu_private.php'); ?>
            
            
            
            <aside class="right-side">
            <div class="header">
            <nav class="navbar navbar-static-top" role="navigation">
<div class="row clearfix">
<div class="col-lg-7 col-md-7 col-sm-6 col-xs">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"><i class="fa fa-bars"></i></a>
<div class="navbar-left">
                    <ul class="nav navbar-nav">
                     <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-comments"></i>
                                <span class="label label-info">2</span>                            </a>
<ul class="dropdown-menu">
                                <li class="header">You have 2 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <span class="circle-icon sm bg-info">
                                                    <i class="fa fa-comment-o"></i>
                                                    </span>
                                                </div>
                                                <h4>
                                                    Jane sent you a message
                                                </h4>
                                                <p><i class="fa fa-clock-o"></i> 5 mins</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <span class="circle-icon sm bg-danger">
                                                    <i class="fa fa-comment-o"></i>
                                                    </span>
                                                </div>
                                                <h4>
                                                    Lynda sent you a mail
                                                </h4>
                                                <p><i class="fa fa-clock-o"></i> 2 hours</p>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                    
<!-- Email: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>                            </a>
<ul class="dropdown-menu">
                                <li class="header">You have 4 email</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
<!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="label label-warning">10</span>                            </a>
<ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
<!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>                            </a>
<ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        
          </ul>
                </div>
<!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->                
</div>
<div class="col-md-5 col-md-6 col-sm-6 col-xs text-right">
<ul class="dropdown-flag nav navbar-nav">
<li class="dropdown flag">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../../img/en.png">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul>
                                        <li><a href="#"><img src="../../../img/en.png">
                                <h4>Nederland</h4>
                                                </a>
                                        </li><!-- end message -->
                                        <li><a href="#"><img src="../../../img/gb.png">
                                        <h4>English</h4>
                                            </a>
                                        </li>
                                        <li><a href="#"><img src="../../../img/de.png">
                                        <h4>Deutsch</h4>
                                            </a>
                                        </li>
                                        <li><a href="#"><img src="../../../img/cn.png">
                                        <h4>Chinese</h4>
                                            </a>
                                        </li>
                                         
                                    </ul>
                                </li>
                            </ul>
                        </li>
</ul>
                                        
                                        
              <div class="register"><a href="#"><i class="fa fa-key"></i> <span>Logout</span></a></div>
              
                                        
</div>
</div>
</nav>
</div>
                

                <!-- Main content -->
                <section class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12"><br>
				<div class="breadcrumb panel-body">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <ul class="breadcrumb-list">
                        <li><i class="fa fa-dashboard"></i> <a href="../../../general/private/index.php">Home</a></li>
                        <li><a href="../index.php">Company Home</a></li>
                        <li class="active">Post</li>
                    </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="pull-right">
                    <form action="#" method="post"><button type="submit" class="btn btn-default"><i class="fa fa-globe"></i> <span>published</span></button></form>
                    <form action="../../../blogs/public/posts/post-name.php" method="post"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i> <span>preview</span></button></form>
                    <button type="submit" class="btn btn-info disabled"><i class="fa fa-check-square"></i> <span>Get Verified</span></button>
                    </div>
                    </div>
                </div>
                </div>
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
                
                <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#myblogposts" aria-controls="myblogposts" role="tab" data-toggle="tab">My blogposts</a></li>
    <li role="presentation"><a href="#writeablogpost" aria-controls="writeablogpost" role="tab" data-toggle="tab">Write a blogpost</a></li>
  </ul>

  <!-- Tab panes -->
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
    <div class="btn-pull-right">
    <button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
    <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
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
    <div class="btn-pull-right">
    <button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
    <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
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
    <div class="btn-pull-right">
    <button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
    <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
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
    <div class="btn-pull-right">
    <button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
    <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
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
    <label><strong>Title:</strong></label>
    <input type="text" class="form-control" placeholder="Text input">
    <br>
	<label><strong>Blogpost:</strong></label>
    <textarea class="form-control" rows="10"></textarea>
    <br>
    <label><strong>Tags:</strong></label>
    <br>
    <input type="text" value="Click enter to add a tag" data-role="tagsinput">
    <div>&nbsp;</div>
     <button class="btn btn-danger">Remove All Tag</button>
    <div>&nbsp;</div>
    <hr>
    <label><strong>The post is related to the following Disciplines.</strong></label>
    <br>
    <form id="demoform6" action="#" method="post">
				<select multiple="multiple" size="10" name="duallistbox_demo6[]">
				<option value="option1">Option 1</option>
				<option value="option2">Option 2</option>
				<option value="option3">Option 3</option>
				<option value="option4" selected="selected">Option 4</option>
			</select>
		</form>
        
    <label><strong>The post is related to the following Categories from Discipline 4.</strong></label>
    <form id="demoform7" action="#" method="post">
				<select multiple="multiple" size="10" name="duallistbox_demo7[]">
				<option value="option1">Option 1</option>
				<option value="option2">Option 2</option>
				<option value="option3">Option 3</option>
				<option value="option4" selected="selected">Option 4</option>
			</select>
		</form>
     
     <div>&nbsp;</div>
     <hr>
     <div class="btn-pull-right"><button class="btn btn-info btn-block">Post</button></div>
     <div class="clear">&nbsp;</div>
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
                
                
                
                 
                              </div>
    
                              </div>
                              
                              
                              <div class="col-lg-4 col-md-3 col-sm-12">
                             <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 box">
                            <label>Professional progression</label>
                            <button class="btn btn-block btn-info"><span class="pull-left"><i class="fa fa-save"></i></span> Publish profile</button>
                            <button class="btn btn-block btn-info"><span class="pull-left"><i class="fa fa-undo"></i></span> Preview</button>
                            <button class="btn btn-block btn-info"><span class="pull-left"><i class="fa fa-file-text-o"></i></span> Setting</button>
                            <div>&nbsp;</div>
                            <div class="alert alert-info">
                            <img src="../../../img/verify.jpg" class="img-responsive">
                            </div>
                            
                            <div class="progress xs">
                                 <div class="progress-bar progress-bar-red" style="width: 25%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                  25%
                                 </div>
                             </div>
                             
                             <div class="text-muted"><a href="#">Add your address (+4%)</a></div>
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
