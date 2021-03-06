<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."jobs/public/profile/description.php"; ?>
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
                        <li class="active">Description</li>
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
                
                <p><strong>We offer a</strong></p>
                
                <div class="row text-nowrap">
              <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" name="answer" value="answer3">  Temporary
              <br>
              <input type="checkbox" name="answer" value="answer3">  Permanent 
              <br>
              <input type="checkbox" name="answer" value="answer6"> Traineeship
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
              <input type="checkbox" name="answer" value="answer3">  full time contract
              <br>
               <input type="checkbox" name="answer" value="answer3">  part time contract
                </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
               <input type="checkbox" name="answer" value="answer4">  Job [Professional]
               <br>
               <input type="checkbox" name="answer" value="answer6">  Project [Freelancer]
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3">
               <input type="checkbox" name="answer" value="answer2">  Internship
               <br>
               <input type="checkbox" name="answer" value="Volunteer" checked>  Volunteer 
            </div>
        </div>
        
        <div>&nbsp;</div>
                
                
                          <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Jobs video </span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              <label><strong>Title video</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="Title">
              <br>
              <label><strong>URL video</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="URL">
              <br>
              
              <label><strong>Preview</strong></label>
              <br>
              <embed width="100%" height="315" src="//www.youtube.com/embed/d1cianvOyJU" frameborder="0" allowfullscreen></embed>
              
              <br>
              <label><strong>Description</strong></label>
              <br>
              <textarea class="form-control" rows="5"></textarea>
              <br>
              
              <label><strong>Tags</strong></label>
              <br>
              <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Pres enter to add tag" data-role="tagsinput">
              
              <br>

				<button id="delete" class="btn btn-danger">Remove All Tags</button>

              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Job info</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Vacancy title</strong></label>
              <br>
              <input type="text" style="width:100%;" class="form-control">
              <br>
              
              <div class="row body-box">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <label><strong>Closing date</strong></label>
               <input data-provide="datepicker" class="form-control">
              </div>
                      <div class="col-xs-12 col-sm-6 col-md-6">
              <label><strong>Select a location</strong></label>
            <select class="select form-control">
              <option>Main company address</option>
              <option>Mustard</option>
              <option>Ketchup</option>
              <option>Relish</option>
            </select> 
            </div>
              </div>
              
              <p><strong>This job is for ... number of hours per week:</strong></p>
              
              <div class="row">
        <div class="col-xs-12 col-sm-2 col-md-2">min:</div>
        <div class="col-xs-12 col-sm-4 col-md-4"><input type="text" class="form-control"></div>
        <div class="col-xs-12 col-sm-2 col-md-2">max:</div>
        <div class="col-xs-12 col-sm-4 col-md-4"><input type="text" class="form-control">
           </div>
          </div>
          
          
          <label><strong>Job description</strong></label>
          <br>
          <textarea class="form-control" rows="5" style="width:100%"></textarea><br>
          
          <label><strong>Responsibilities</strong></label>
          <br>
          <textarea class="form-control" rows="5" style="width:100%"></textarea><br>
          
          <label><strong>Our expectations</strong></label>
          <br>
          <textarea class="form-control" rows="5" style="width:100%"></textarea><br>
          
          <label><strong>Tags</strong></label>
          <br>
          <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Pres enter to add tag" data-role="tagsinput">
          <br>
          
          <button id="delete" class="btn btn-danger">Remove All Tags</button>
          
              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Company info</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Company description (can be altered via profile)</strong></label>
              <br>
              <textarea class="form-control" rows="5"></textarea>
              <br>
              
              <label><strong>Department description</strong></label>
              <br>
              <textarea class="form-control" rows="5"></textarea>
              <br>
              
              <label><strong>Your company tags</strong></label>
              <br>
              <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Pres enter to add tag" data-role="tagsinput">

<button id="delete" class="btn btn-danger">Remove All Tags</button>
              
              </div>
              </li>
              </ul>
              </li>
              
              
               <li class="treeview active">
          <a href="#">
            <span>Vacancy procedure</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              <label><strong>Application description</strong></label>
              <textarea class="form-control" rows="5" style="width:100%"></textarea><br>
              
              <input type="checkbox" id="inlineCheckbox1" value="option1"> Acquisition regarding this vacancy is not appreciated. We urge agencies NOT to contact for this contract
              
              <hr>
              
              <div class="btn-pull-right"><button class="btn btn-info ">Edit/Save</button></div>
              
              </div></li></ul></li>
              
              
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
