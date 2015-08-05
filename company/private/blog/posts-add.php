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
            <?php include('../../../components/private/menus/top_menu_private.php'); ?>
                

                <!-- Main content -->
                <section class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="../../../general/private/index.php">Home</a></li>
                        <li><a href="../index.php">Company Home</a></li>
                        <li class="active">Post</li>
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
                
                <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#myblogposts" aria-controls="myblogposts" role="tab" data-toggle="tab">My blogposts</a></li>
    <li role="presentation" class="active"><a href="#writeablogpost" aria-controls="writeablogpost" role="tab" data-toggle="tab">Write a blogpost</a></li>
  </ul>  

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="myblogposts">
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
    <li class="treeview active">
    <a href="#">
    <span>My blogposts</span>
    <i class="fa fa-plus-circle pull-right"></i>
    </a>
    <ul class="treeview-menu">
    <li>
    <div class="panel-body">
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
    <img src="http://www.elektrodaily.com/wp-content/uploads/2014/05/question-mark.jpg" class="img-responsive">
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
    <img src="http://www.elektrodaily.com/wp-content/uploads/2014/05/question-mark.jpg" class="img-responsive">
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
    <img src="http://www.elektrodaily.com/wp-content/uploads/2014/05/question-mark.jpg" class="img-responsive">
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
    <img src="http://www.elektrodaily.com/wp-content/uploads/2014/05/question-mark.jpg" class="img-responsive">
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
    </li>
    </ul>
    </li>
    </ul>
    </div>                                                             
    </div>
    
    <div role="tabpanel" class="tab-pane active" id="writeablogpost">
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
    <li class="treeview active">
    <a href="#">
    <span>Write a Blogpost</span>
    <i class="fa fa-plus-circle pull-right"></i>
    </a>
    <ul class="treeview-menu">
    <li>
    <div class="panel-body">
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
     </li>
     </ul>
     </li>
     </ul>
     </div>   
    </div>
    
   
    
    
  </div>

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
