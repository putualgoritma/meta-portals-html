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
                        <li><a href="../index.php">Professional Home</a></li>
                        <li class="active">Availability</li>
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
                <label><strong>I'm available:</strong></label>
                <br>
                <select class="select form-control">
                    <option>Immediately</option>
                    <option>Tomorrow</option>
                    <option>Over a week</option>
                    <option>Over a month</option>
                  </select>
                <div>&nbsp;</div>
                <hr>
                <label><strong>I'm looking for a:</strong></label>
                <div class="row text-nowrap">
				 <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
					 <input type="checkbox" name="answer" value="answer1"> Permanent full time contract 
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Temporary full time contract
                     <br>
                     <input type="checkbox" name="answer" value="answer5">  Permanent part time contract
                     <br>
                     <input type="checkbox" name="answer" value="answer5">  Temporary part time contract
                     <br>

					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					 <input type="checkbox" name="answer" value="answer2">  Freelance
                     <br>
                     <input type="checkbox" name="answer" value="answer4">  Traineeship
                     <br>
                     <input type="checkbox" name="answer" value="answer6">  Detached
                     <br>
                     <input type="checkbox" name="answer" value="answer6">  Permanently detached
                     <br>

					 </div>
					 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					 <input type="checkbox" name="answer" value="answer2">  On-call worker
                     <br>
                     <input type="checkbox" name="answer" value="answer2">  Internship
                     <br>
                     <input type="checkbox" name="answer" value="answer6">  Volunteer 
                     <br>

					 </div>
		
			</div>
            
            <hr>
            
            <label><strong>Desired duration if applicable:</strong></label>
            <div class="row body-box">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <input type="number" class="form-control bfh-number"/>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
                <strong>to</strong>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <input type="number" class="form-control bfh-number"/>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
                <strong>months</strong>
                </div>
            </div>
            
            <hr>
            
            <label><strong>Available days per week:</strong></label>
            <br>
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <input type="checkbox" name="answer" value="answer6">  Sunday
            <br>
			<input type="checkbox" name="answer" value="answer1"> Monday
            <br>
            <input type="checkbox" name="answer" value="answer5">  Tuesday
            <br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<input type="checkbox" name="answer" value="answer2"> Wednesday
            <br>
            <input type="checkbox" name="answer" value="answer5">  Thursday
            <br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <input type="checkbox" name="answer" value="answer3">  Friday
            <br>
            <input type="checkbox" name="answer" value="answer4">  Saturday
            <br>
            </div>
            </div>
            <hr>
            
            <div class="row body-box">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <strong>I'm available for:</strong>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <input type="number" class="form-control bfh-number"/>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <strong>hours per week</strong>
            </div>
            </div>
            
            <hr>
            
            <label><strong>Desired working hours:</strong></label>
            <div class="row text-nowrap">
				 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					 <input type="checkbox" name="answer" value="answer1"> Regular
                     <br>
                    <input type="checkbox" name="answer" value="answer3">  Evenings
                    <br>
                    <input type="checkbox" name="answer" value="answer5">  Nights
                    <br>
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					 <input type="checkbox" name="answer" value="answer2"> Weekdays
                     <br>
                     <input type="checkbox" name="answer" value="answer4">  Weekends
                     <br>
                     <input type="checkbox" name="answer" value="answer6">  Flexible
                     <br>

					 </div>
					 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					 <input type="checkbox" name="answer" value="answer2"> Fixed
                     <br>
                     <input type="checkbox" name="answer" value="answer2">  Irregular
                     <br>
					<input type="checkbox" name="answer" value="answer6">  Shifts
                    <br>
				 </div>
		
					</div>
                    
                    <hr>
                    
                    <label><strong>I'd like to work within the branches:</strong></label>
                    <select multiple class="form-control">
						<option>Branche 1</option>
						<option>Branche 2</option>
						<option>Branche 3</option>
						<option>Branche 4</option>
						<option>Branche 5</option>
					</select>
                    <div>&nbsp;</div>
                    <label><strong>I'd like to work within the country:</strong></label>
                    <select multiple class="form-control">
						<option>Country 1</option>
						<option>Country 2</option>
						<option>Country 3</option>
						<option>Country 4</option>
						<option>Country 5</option>
					</select>
                    
                    <hr>
                    
                    <div class="row body-box">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 text-nowrap">
                <label><strong>Maximum travel distance</strong></label> <br>
                <select class="select form-control">
             <option>Select a distance</option>
            <option>0 < 5 km</option>
            <option>5 < 10 km</option>
            <option>10 < 15 km</option>
          </select>	 
         </div>
 
 
		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
		<label><strong>Willing to relocate</strong></label> <br>
		<label class="radio-inline">
				<input name="radioGroup" id="radio1" value="option1" type="radio"> Yes
			</label>
			<label class="radio-inline">
				<input name="radioGroup" id="radio1" value="option1" type="radio"> No
			</label>
		</div>
		</div>
        
        <hr>
        
        <label><strong>Work permit EU</strong></label>
        <br>
        <label class="radio-inline">
				<input name="radioGroup" id="radio1" value="option1" type="radio"> Yes
			</label>
			<label class="radio-inline">
				<input name="radioGroup" id="radio1" value="option1" type="radio"> No
			</label>
        	<div>&nbsp;</div>
                
                <div class="btn-pull-right"><button type="submit" class="btn btn-danger">Save/Edit</button></div>
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
