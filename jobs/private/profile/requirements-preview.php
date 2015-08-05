<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."jobs/public/profile/Requirements3.php"; ?>
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
                        <li class="active">Requirements preview</li>
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
                
                <div class="pull-left"><a href="#">Totaal aantal solicitaties: <span class="badge">42</span></a></div>
                
         <div class="pull-right">share: 
                      <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
                      <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
                    <div class="clear">&nbsp;</div>
                        
                
                          <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Required career and education</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              <label><strong>Total years of work experience</strong></label>
              <br>
              <select class="select form-control">
                 <option>less than 3 years</option>
              <option>more than 3 years</option>
                <option>more than 10 years</option>
                <option>more than 15 years</option>
              </select>
              <br>
              <br>

			<div class="row body-box">
          <div class="col-xs-12 col-sm-6 col-md-6">
         <label><strong>Discipline</strong></label>
            <select class="select form-control">
             <option>Discipline 1</option>
          <option>Dischipline 2</option>
            <option>Dischipline 3</option>
            <option>Dischipline 4</option>
          </select>
         </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <label><strong>Total years of discipline experience</strong></label>
            <select class="select form-control">
             <option>less than 3 years</option>
            <option>more than 3 years</option>
            <option>more than 10 years</option>
            <option>more than 15 years</option>
          </select>
          </div>
          </div>
          
          <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
         <label><strong>Discipline</strong></label>
         <br>
            <select class="select form-control">
             <option>Discipline 1</option>
          <option>Dischipline 2</option>
            <option>Dischipline 3</option>
            <option>Dischipline 4</option>
          </select>
         </div>
        
            <div class="col-xs-12 col-sm-6 col-md-6">
                <label><strong>Total years of discipline experience</strong></label>
                <br>
            <select class="select form-control">
             <option>0-2 years</option>
            <option>2-5 years</option>
            <option>5-10 years</option>
          </select>
          </div>
          </div>
              <br>
				<div class="btn-pull-right"><button id="add" class="btn btn-info ">Add</button></div>
                
                <div class="clear">&nbsp;</div>
                
                <hr>
                
                <label><strong>Top executive if applicable</strong></label>
                <br>
                <select class="select form-control">
                 <option>Executive 1</option>
              <option>Executive 2</option>
                <option>Executive 3</option>
                <option>Executive 4</option>
              </select>
              <br>
<br>

              <label><strong>Required level of education</strong></label>
              <br>
              <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-6">
             <label class="radio">
                    <input name="radioGroup" id="radio1" value="option1" type="radio"> Post doctoral
                    <br>
                    </label>
                    <label class="radio">
                    <input name="radioGroup" id="radio1" value="option1" type="radio"> University of Applied Sciences
                    <br>
                    </label>
                    <label class="radio">
                    <input name="radioGroup" id="radio1" value="option1" type="radio"> Higher General Secondary Education
                    <br>
                    </label>
                    <label class="radio">
                    <input name="radioGroup" id="radio1" value="option1" type="radio"> Vocotional Education
                    <br>
                    </label>
                    <label class="radio">
                     <input name="radioGroup" id="radio1" value="option1" type="radio"> Other
                     </label>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-6">
             <label class="radio">
                    <input name="radioGroup" id="radio1" value="option1" type="radio"> University
                    <br>
                    </label>
                    <label class="radio">
                     <input name="radioGroup" id="radio1" value="option1" type="radio"> Preparatory
                     <br>
                     </label>
                     <label class="radio">
                     <input name="radioGroup" id="radio1" value="option1" type="radio"> Properatory Vocotional Education
                     <br>
                     </label>
                     <label class="radio">
                     <input name="radioGroup" id="radio1" value="option1" type="radio"> Lower education
                     </label>
             </div></div>
             
             
             <input type="text" class="form-control input-sm">
             
             <hr>
             
             <label><strong>Field of study</strong></label>
             <br>
             <select multiple class="form-control">
                        <option>Field of study 1</option>
                        <option>Field of study 2</option>
                        <option>Field of study 3</option>
                        <option>Field of study 4</option>
                        <option>Field of study 5</option>
                      </select>
                      
                      <hr>
                     
               <label><strong>Diplomas and certificates</strong></label>
               <br>
               <input type="text" value="Click enter to add a tag" data-role="tagsinput"><br>
<button id="delete" class="btn btn-danger">Remove All Tags</button>

				<hr>
                
                <label><strong>International experience if applicable</strong></label>
                <br>
                <textarea class="form-control" rows="5"></textarea><br>
                
                <label><strong>Job requirements</strong></label>
                <br>
                <textarea class="form-control" rows="5"></textarea>
                <br>
                
                <label><strong>Required knowledge</strong></label>
                <br>
                <textarea class="form-control" rows="5"></textarea><br>
             
              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Required skills</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Select a language</strong></label>
              <br>
              <div class="input-group">

							<input type="text"  class="form-control langzal" placeholder="English">
							<div class="input-group-btn">
								<button class="btn btn-default disabled" style="opacity:1;"><span id="lang" class=" flag-icon flag-icon-gb"></span></button>
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></button>

									<ul class="dropdown-menu dropdown-menu-right navbarmenu lang" role="menu">
										<li><a class="lang1"><span class="flag-icon flag-icon-nl"></span> Nederlands </a></li> 
										<li><a class="lang2"><span class="flag-icon flag-icon-gb"></span> English </a></li>      
										<li><a class="lang3"><span class="flag-icon flag-icon-de"></span> Deutsch </a></li>
										<li><a class="lang4"><span class="flag-icon flag-icon-dk"></span> Dansk </a></li>    
										<li><a class="lang5"><span class="flag-icon flag-icon-hu"></span> Magyar </a></li>
									</ul>

							</div><!-- /btn-group -->
						</div><!-- /input-group -->
                
						<hr>
                        
                        <p><strong>English</strong></p>
                        <div class="row body-box">			
						 <div class="col-xs-12 col-sm-4 col-md-4">Reading<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-4 col-md-4">Writing<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-4 col-md-4">Speaking<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
				</div>


				<div class="row body-box">
						 <div class="col-xs-12 col-sm-4 col-md-4">Reading<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-4 col-md-4">Writing<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-2 col-md-4">Speaking<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
				</div>
				<hr>
                
                <label><strong>Required driving licence</strong></label>
                
                <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3">
            <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Motorcyle
          </div>

           <div class="col-xs-12 col-sm-3 col-md-3">
            <input type="checkbox" id="inlineCheckbox1" value="option1" > Car
          </div>

           <div class="col-xs-12 col-sm-3 col-md-3">
            <input type="checkbox" id="inlineCheckbox1" value="option1" > Truck
          </div>

           <div class="col-xs-12 col-sm-3 col-md-3">
            <input type="checkbox" id="inlineCheckbox1" value="option1" > Bus
          </div>
        </div>
              
              <hr>
              
              <label><strong>Required skills and competencies</strong></label>
              <br>
              <input type="text" value="Click enter to add a tag" data-role="tagsinput"><br>
              
          <button id="delete" class="btn btn-danger">Remove All Tags</button>
          
              
              </div>
              </li>
              </ul>
              </li>
              
              
              
              </ul>
              </div>
              
              <div class="btn-pull-right">
              <button class="btn btn-info ">Edit/Save</button>
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
