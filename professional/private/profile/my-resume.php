<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."professional/public/profile/my-resume.php"; ?>
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
                        <li class="active">My resume</li>
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
       <div class="btn-pull-left">
   <button class="btn btn-danger btn-block">Import from LinkedIn</button>
   </div> 
   <div class="btn-pull-left">
   <button class="btn btn-danger btn-block">Import from Facebook</button>
   </div>              

    
    <div class="clear">&nbsp;</div>
        
    <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Education</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
               <select class="form-control select">
						<option>[Education] [Institute Name]</option>
						<option>BIM</option>
						<option>CMD</option>
						<option>I</option>
					</select>
                <hr>
               <label>Period</label>
               <div class="row body-box">
               <div class="col-xs-12 col-sm-1 col-md-1">
					From 				
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input data-provide="datepicker" class="form-control" placeholder="09-1997">  					
				</div>
					<div class="col-xs-12 col-sm-1 col-md-1 text-center">
					to 
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input data-provide="datepicker" class="form-control" placeholder="08-2001">					
				</div>
               </div>
               <div class="clear">&nbsp;</div>
               <div class="row body-box">
               <div class="col-xs-12 col-sm-2 col-md-2">
					Current year:  				
				</div>
                <div class="col-xs-12 col-sm-4 col-md-4">
					<input type="number" class="form-control bfh-number" min="1" value="1">  					
				</div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-md-offset-1 col-sm-offset-1">
					<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1" checked> Graduated
                    </label>
				</div>
               </div>
               <hr>
               
               <div class="row body-box">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<label><b>Name institute</b></label>
					<input type="text" class="form-control" placeholder="University of x">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6">
					<label><b>Field of Study</b></label>
					<input type="text" class="form-control" placeholder="Education x">
				</div>
			</div>
            <hr>
               <label>Level of education</label>
               <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio"> Post doctoral
					</label>
                    <label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio"> University of Applied Sciences
					</label>
                    <label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio"> Preparatory University 
					</label>
                    <label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio" checked> University
					</label>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio"> Higher General Secondary Education
					</label>
                    <label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio"> Preparatory Vocotional Education 
					</label>
                    <label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio"> Vocational Educational
					</label>
                    <label class="radio">
						<input name="radioGroup" id="radio1" value="option1" type="radio"> Lower Educational
					</label>
				</div>
                </div>
                <div>&nbsp;</div>
               <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button>
               <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
				<div class="clear">&nbsp;</div>

                
                </div>
              </li>
            
            </ul>
          </li>
        <li class="treeview active">
          <a href="#">
            <span>Diplomas and certificates</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              <label><strong>Diploma title</strong></label>
              <input class="form-control" type="text" >
              <br>
              <label><strong>Diploma title</strong></label>
              <input type="dateofbirth" class="form-control datepicker" id="datepicker" size="50" placeholder="date">
              <br>
              <label><strong>TAG Diploma's</strong></label>
              <br>
              <input type="text" value="Click enter to add a tag" data-role="tagsinput">
              <div>&nbsp;</div>
              <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove All Tag</button>
                </div>
              </li>
            </ul>
          </li>
        <li class="treeview active">
          <a href="#">
            <span>Work experience</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><div class="panel-body">
             <label><strong>Name company</strong></label>
             <input type="text" class="form-control">
             <hr>
             <label><strong>Url of company</strong></label>
             <input type="text" class="form-control">
             <hr>
             <label><strong>Within the discipline</strong></label>
             <select class="form-control select">
					<option>Select a discipline</option>
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
              <hr>
              <p><strong>Period</strong></p>
                <div class="row body-box">
               <div class="col-xs-12 col-sm-1 col-md-1">
					From 				
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input data-provide="datepicker" class="form-control" placeholder="dd/mm/yyyy">  					
				</div>
					<div class="col-xs-12 col-sm-1 col-md-1 text-center">
					to 
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5">
					<input data-provide="datepicker" class="form-control" placeholder="dd/mm/yyyy">					
				</div>
               </div>
               <hr>
               <label><strong>Function</strong></label>
                <input type="text" class="form-control">
                <hr>
                <label><strong>Description</strong></label>
                <textarea class="form-control" rows="5"></textarea>
                <hr>
                <label><strong>Responsibilities</strong></label>
                <textarea class="form-control" rows="5"></textarea>
                <hr>
                <label><strong>Results</strong></label>
                <textarea class="form-control" rows="5"></textarea>
                <hr>
                <label><strong>Top executive</strong></label>
                <select class="form-control select">
					<option>Select a discipline</option>
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
                <hr>
                <label><strong>Tags</strong></label>
                <br>
                <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                <div>&nbsp;</div>
              <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button>
               <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
				<div class="clear">&nbsp;</div>
              </div></li>
            </ul>
          </li>
          <li class="treeview active">
          <a href="#">
            <span>Skills</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><div class="panel-body">
              <label><strong>Select a language</strong></label>
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
                 
                 <label><strong>English</strong></label>
                 <div class="row">			
						 <div class="col-xs-12 col-sm-4 col-md-4">Reading<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-4 col-md-4">Writing<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-4 col-md-4">Speaking<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
				</div>
                <hr>
                        
                <label><strong>French</strong></label>    
                 <div class="row">			
						 <div class="col-xs-12 col-sm-4 col-md-4">Reading<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-4 col-md-4">Writing<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
					
						 <div class="col-xs-12 col-sm-4 col-md-4">Speaking<input id="input-1" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
				</div>   
                <hr>
                <label><strong>I am</strong></label>
                <div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> A Windows user</label>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> A Linux user</label>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> A Mac user</label>
					</div>
				</div>
                       
                 <hr>
                 <label><strong>Computerprograms</strong></label>
                 
                 <div class="col-xs-12 col-sm-12 col-md-10">
					<form id="demoform" action="#" method="post">
						<select multiple="multiple" size="10" name="duallistbox_demo1[]">
							<option value="option1">Adobe Bridge</option>
							<option value="option2">Adobe Dreamweaver</option>
							<option value="option3">Adobe acrobat</option>
							<option value="option4">Adobe Fireworks</option>
							<option value="option5">Adobe Flash</option>
							<option value="option6">Microsoft Excel</option>
							<option value="option7">Adobe Photoshop</option>
							<option value="option8">Adobe Illustrator</option>
							<option value="option9">Microsoft Word</option>
							<option value="option0">Adobe Indesign</option>
						</select>
				</form>
				<script>
    var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox();
    $("#demoform").submit(function() {
      alert($('[name="duallistbox_demo1[]"]').val());
      return false;
    });
  </script>
					</div>
   <div class="clear">&nbsp;</div>              
   <hr>
   
   <p><strong>General Skills</strong></p>
   <input type="text" value="Click enter to add a tag" data-role="tagsinput">
   <div>&nbsp;</div>
    <button class="btn btn-danger">Remove All Tag</button>          
    
    <hr>
    
    <p><strong>Soft Skills</strong></p>
    <input type="text" value="Click enter to add a tag" data-role="tagsinput">
    <div>&nbsp;</div>
    <button class="btn btn-danger">Remove All Tag</button> 
                 
                  
              
              </div></li>
            </ul>
          </li>
			
            
            <li class="treeview active">
          <a href="#">
            <span>Personal</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><div class="panel-body">
            <p><strong>Marital status</strong></p>
            <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-2">
						<label class="radio-inline">
				<input name="radioGroup" id="radio1" value="option1" type="radio"> Single
			</label> 
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label class="radio-inline">
				<input name="radioGroup" id="radio2" value="option1" type="radio"> Cohabiting
			</label>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label class="radio-inline">
				<input name="radioGroup" id="radio3" value="option1" type="radio" checked> Married
			</label>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label class="radio-inline">
				<input name="radioGroup" id="radio4" value="option1" type="radio"> Divorced
			</label>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label class="radio-inline">
				<input name="radioGroup" id="radio5" value="option1" type="radio"> Widow
			</label>  
					</div>
				</div>
                
            <hr>
            
            <input type="checkbox" id="reply" value="option1"> Children
					
					<div class="replycontent" style="display:none;">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-9 hidden-xs">
					<b>Number of children</b> <input type="number" class="form-control bfh-number" style="max-width:80px;"/>
						</div>
											<div class="col-xs-12 col-sm-12 col-md-9 visible-xs">
					<b>Number of children</b> <input type="number" class="form-control bfh-number" style="width:100%;"/>
						</div>
				</div>
				</div>  
                
                <hr>  
                
            <label><strong>Hobbies</strong></label><br>
            <input type="text" value="Click enter to add a tag" data-role="tagsinput">
              <div>&nbsp;</div>
                                   <button class="btn btn-danger">Remove All Tag</button>  
            <hr>
            
            <label><strong>Interests</strong></label>
            <br>
            <input type="text" value="Click enter to add a tag" data-role="tagsinput">
            <div>&nbsp;</div>
             <button class="btn btn-danger">Remove All Tag</button> 
             <hr>
             <label><strong>Sport</strong></label>
             <br>
            <input type="text" value="Click enter to add a tag" data-role="tagsinput">
            <div>&nbsp;</div>
             <button class="btn btn-danger">Remove All Tag</button> 
             <hr>
             <label><strong>Side activities</strong></label>
             <br>
            <input type="text" value="Click enter to add a tag" data-role="tagsinput">
            <div>&nbsp;</div>
             <button class="btn btn-danger">Remove All Tag</button> 
               <hr>
             <label><strong>Voluntary work</strong></label>
             <textarea class="form-control" rows="5"></textarea>
               <hr>
               
              <input type="checkbox" id="reply" value="option1"> Accolades
              
              <div class="replycontent" style="display:none;">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10">
					Kind of accolade<br>
						<input type="text" class="form-control"> 
					</div>
				</div><br>
				
								<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10">
						Description accolade<br>
						<textarea class="form-control" rows="5" style="max-width:750px"></textarea>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-2 text-center" style="text-align:left;">
						Awarded in 
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
					<input type="text" class="form-control"> 
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 text-center" style="text-align:left;">
						by:
					</div>	
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						First name<br>
						<input type="text" class="form-control">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						Last name prefix<br>
						<input type="text" class="form-control">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						Last name<br>
						<input type="text" class="form-control"><br>
					</div>
				</div>
		</div>  
        <div class="clear">&nbsp;</div>                  
                                   
             <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button>
               <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>                     
                
            </div>
            </li>
            </ul>
            </li> 
            
             <li class="treeview active">
          <a href="#">
            <span>Other </span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><div class="panel-body">
            <label><strong>Trade associations</strong></label>
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
            <div>&nbsp;</div>
								<button class="btn btn-danger">Remove All Tag</button>
            <hr>
            <label><strong>Professional associations</strong></label>
            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
            <div>&nbsp;</div>
								<button class="btn btn-danger">Remove All Tag</button>
            <hr>
            
            
            <label class="checkbox-inline"><input type="checkbox" id="reply" value="option1"> Publications</label>
            <label class="checkbox-inline"><input type="checkbox" id="reply" value="option1"> Patents</label>
            <label class="checkbox-inline"><input type="checkbox" id="reply" value="option1"> Accolades</label>
            <label class="checkbox-inline"><input type="checkbox" id="reply" value="option1"> References</label>
            
            <hr>
            
            <label><strong>Email address</strong></label>
            <input type="text" class="form-control">
            <hr>
            <label><strong>Phone number</strong></label>
            <input type="text" class="form-control">
            <hr>
            <label><strong>Description reference</strong></label>
            <textarea class="form-control" rows="5"></textarea>
			
            
            </div>
            </li>
            </ul>
            </li>       
        
        
        </ul>
    </div> 
    <div class="clear">&nbsp;</div>
    <div class="btn-pull-right"><button class="btn btn-danger">Save/Edit</button></div>  
    <div class="clear">&nbsp;</div>
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
