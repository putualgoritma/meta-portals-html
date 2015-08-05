<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."professional/public/profile/expertise.php"; ?>
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
                        <li class="active">Expertise</li>
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
                 <!-- Tab panes -->
  <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    
    <label>Create unique profiles for the following discipline</label>
    
    <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <label class="checkbox"><input type="checkbox"/> Discipline 1</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 2</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 3</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 4</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 5</label>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <label class="checkbox"><input type="checkbox"/> Discipline 6</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 7</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 8</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 9</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 10</label>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <label class="checkbox"><input type="checkbox"/> Discipline 11</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 12</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 13</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 14</label>
    <label class="checkbox"><input type="checkbox"/> Discipline 15</label>
    </div>
    </div>
    <div class="clear">&nbsp;</div>
    
    <label>Please select your main discipline</label>
    <select class="form-control select">
        <option>Discipline</option>
        <option>Discipline 1</option>
        <option>Discipline 2</option>
        <option>Discipline 3</option>
     </select>
    <div class="clear">&nbsp;</div>
    
    <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Questions about the main discipline</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
               <label>1.The first question (in this example an open question) about the chosen main discipline.</label>
				<textarea class="form-control" rows="5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</textarea>
                <hr>
               <label>2.The second question (in this example an open question) about the chosen main discipline.</label>
               <textarea class="form-control" rows="5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</textarea> 
               <hr>
               <label>3.The third question (in this example an multiple choice question) about the chosen main discipline.</label>
               <div class="row">
               <div class="col-xs-12 col-sm-3 col-md-3">
               <label class="checkbox">
                <input type="radio" name="Option" value="option"> Option 1
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 2
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 3
                </label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                <label class="checkbox">
                <input type="radio" name="Option" value="option"> Option 4
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 5
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 6
                </label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                <label class="checkbox">
                <input type="radio" name="Option" value="option"> Option 7
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 8
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 9
                </label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                <label class="checkbox">
                <input type="radio" name="Option" value="option"> Option 10
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 11
                </label>
                <label class="checkbox">
                <input type="radio" name="option" value="option"> Option 12
                </label>
                </div>
                </div>
                <hr>
                
                <label>4.The fourth question (in this example an open question) about the chosen main discipline.</label>
                <select class="form-control select">
                    <option>Option 16</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                <br>
                <hr>
                <label>5.The fifth question (in this example an multiple choice question) about the chosen main discipline.</label>
                <div class="row clearfix">
                <div class="col-xs-12 col-sm-6 col-md-3">
                <label class="checkbox">
                <input type="radio" name="Option1" value="option1"> Option 1
                </label>
                <label class="checkbox">
                <input type="radio" name="option1" value="option1"> Option 2
                </label>
                <label class="checkbox">
                <input type="radio" name="option1" value="option1"> Option 3
                </label>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                <label class="checkbox">
                <input type="radio" name="Option1" value="option1"> Option 4
                </label>
                <label class="checkbox">
                <input type="radio" name="option1" value="option1"> Option 5
                </label>
                <label class="checkbox">
                <input type="radio" name="option1" value="option1"> Option 6
                </label>
                </div>
                </div>
                <div class="clear">&nbsp;</div>
                <hr>
                <label>6.The sixth question (in this example an open question) about the chosen main discipline.</label>
                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                <br>
                <hr>
                <label>7.The seventh question (in this example an open question) about the chosen main discipline.</label>
                <form id="demoform6" action="#" method="post">
				<select multiple="multiple" size="10" name="duallistbox_demo6[]">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                        <option value="option4" selected="selected">Option 4</option>
                        <option value="option5">Option 5</option>
                        <option value="option6">Option 6</option>
                        <option value="option7">Option 7</option>
                        <option value="option8"selected="selected">Option 8</option>
                        <option value="option9"selected="selected">Option 9</option>
                        <option value="option0">Option 10</option>
                    </select>
                </form>
                <hr>
                <label>8.The eighth question (in this example an open question) about the chosen main discipline.</label>
                <div class="col-lg-3 col-md-12">
                <label class="checkbox-inline">
				<input type="checkbox" name="option" value="option1" checked> Option1
                </label>
                <label class="checkbox-inline">
					 <input type="checkbox" name="option" value="option2"> Option2
                     </label>
                     <label class="checkbox-inline">
					 <input type="checkbox" name="option" value="option3" checked>  Option3
                     </label>
                 </div>    
				<div class="clear">&nbsp;</div>
                <hr>
                <label>9. The ninth question (in this example an open question) about the chosen main discipline.</label>
                <input type="text" class="form-control" placeholder=""> 
                <hr>
                <label>10.The tenth question (in this example an open question) about the chosen main discipline.</label>
                <input type="text" class="form-control">



                
                </div>
              </li>
            
            </ul>
          </li>
        <li class="treeview active">
          <a href="#">
            <span>Questions about selected discipline</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">&nbsp;
                </div>
              </li>
            </ul>
          </li>
        <li class="treeview active">
          <a href="#">
            <span>Questions about selected discipline</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><div class="panel-body">
              &nbsp;
              </div></li>
            </ul>
          </li>
          <li class="treeview active">
          <a href="#">
            <span>Questions about selected discipline</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><div class="panel-body">
              &nbsp;
              </div></li>
            </ul>
          </li>
        
        
        
        </ul>
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
