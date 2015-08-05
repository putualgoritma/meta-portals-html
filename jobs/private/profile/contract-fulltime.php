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
                        <li class="active">Contact fulltime</li>
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
                                    
                    
                    <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#full" aria-controls="home" role="tab" data-toggle="tab">Full time</a></li>
    	<li role="presentation"><a href="#internship" aria-controls="home" role="tab" data-toggle="tab">Internship</a></li>  
    <li role="presentation"><a href="#zzp" aria-controls="profile" role="tab" data-toggle="tab">ZZP</a></li>
    <li role="presentation"><a href="#volunteer" aria-controls="profile" role="tab" data-toggle="tab">Volunteer</a></li>
    </ul>
    
    <div>&nbsp;</div>
    <div class="pull-left"><a href="#">Totaal aantal solicitaties: <span class="badge">42</span></a></div>
                
         <div class="pull-right">share: 
                      <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
                      <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
                    <div class="clear">&nbsp;</div>
    
     <!-- Tab panes -->
  <div class="tab-content">
  
          <div role="tabpanel" class="tab-pane active" id="full">
          <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Type of contract</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>Offered employment</strong></label>
        <br>
		<select class="select form-control">
            <option>Permanent Fulltime</option>
            <option>Tomorrow</option>
            <option>Over a week</option>
            <option>Over a month</option>
          </select>	 
          </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <label><strong>Trial period if applicable</strong></label>
                 <br>
                <select class="select form-control">
            <option>3 months</option>
            <option>Tomorrow</option>
            <option>Over a week</option>
            <option>Over a month</option>
          </select>	 
          </div>
         </div>
         
		<label><strong>Duration</strong></label>
         <br>

         <div class="row body-box">
		<div class="col-xs-12 col-sm-5 col-md-5">
		<select class="select form-control">
    <option>3 months</option>
	<option>Tomorrow</option>
    <option>Over a week</option>
    <option>Over a month</option>
  </select>	 
  </div>
  <div class="col-xs-12 col-sm-2 col-md-2 text-center">
  to
  </div>
  		<div class="col-xs-12 col-sm-5 col-md-5">
		<select class="select form-control">
    <option>12 months</option>
	<option>Tomorrow</option>
    <option>Over a week</option>
    <option>Over a month</option>
  </select>	 
  </div>
  </div>
  
  <label><strong>Desired salary per year based on 40 hours a week</strong></label>
  <br>
  
  <div class="row body-box">
		<div class="col-xs-12 col-sm-3 col-md-3">
			<input type="number" class="form-control bfh-number" value="10" />
		</div>
		<div class="col-xs-12 col-sm-2 col-md-2 text-center">
		to
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3">
			<input type="number" class="form-control bfh-number " value="10" />
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<select class="select form-control">
				<option>Select a currency</option>
				<option>Euro</option>
				<option>Pound</option>
				<option>Turkish Lira</option>
			</select>	 
		</div>
	</div>
    
    <label><strong>Job available to</strong></label>
    <br>
    <div class="row body-box">
     <div class="col-xs-12 col-sm-5 col-md-5">
					 <input type="checkbox" name="answer" value="Permanent full time contract" checked> Permanent full time contract 
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="Freelance" checked>  Freelance
					 </div>
                     </div>  
  <label><strong>Age</strong></label>
  <br>
  <div class="row body-box">
  <div class="col-xs-12 col-sm-4 col-md-4">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 text-center">
				<p >to</p>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
				<div class="col-xs-12 col-sm-2 col-md-2 text-center">
				years
			</div>
            </div>
            
              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Availability</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>Offered employment</strong></label> <br>
                    <select class="select form-control">
                <option>Permanent Fulltime</option>
                <option>Tomorrow</option>
                <option>Over a week</option>
                <option>Over a month</option>
              </select>	 
              </div>
                <div class="col-xs-10 col-sm-3 col-md-3">
                <label><strong>Available for</strong></label>
                <br>
                            <input type="number" class="form-control bfh-number" value="10" />
                        </div>
                        
                            <div class="col-xs-2 col-sm-3 col-md-3">
                            <br>
                            years
                        </div>
             </div>
             
             <label><strong>Days per week</strong></label>
             <br>
             
             <div class="row text-nowrap">
				 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer1"> Monday
					  </div>
					  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Tuesday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer2"> Wednesday
					 </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Thursday
					  </div> 					 
			</div>
            
            <div class="row text-nowrap">
				  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer3">  Friday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer4">  Saturday
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer6">  Sunday
					 </div>
		</div>
        
        <label><strong>Working hours</strong></label>
        <br>
        
        <div class="row">
				 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer1"> Regular
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Weekdays
					 </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Fixed
					 </div>
		
					</div>
	<div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer3">  Evenings
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer4">  Weekends
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2">  Irregular
				</div>
		</div>
	<div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer5">  Nights
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Flexible
					 </div> 
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Shifts
					 </div>
			</div>
              
              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Secondary benefits</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Days per week</strong></label>
              <br>
              <div class="row">
				 <div class="col-xs-12 col-sm-6 col-md-6">
					 <input type="checkbox" name="answer" value="answer1"> Thirteenth month
                     <br>
                     <input type="checkbox" name="answer" value="answer3"> Lease car
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Travel expenses 
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Corporate fitness
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Company phone
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Study budget<br>

                     
                     
                     
					  </div>
					  <div class="col-xs-12 col-sm-6 col-md-6">
				  <input type="checkbox" name="answer" value="answer5">  Incentives
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Lease bicycle
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Holiday allowance
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Childcare compensation
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Company laptop
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Pension<br>

                  

					  </div>
			
					  </div>
                      
                      <input type="checkbox" name="answer" value="answer3">  Other
                      <br>
                      <br>

				 <input type="text" class="form-control" placeholder="Test 2">
                 <br>
                 
                 <div class="row body-box">
								<div class="col-xs-12 col-sm-6 col-md-6">
						<label><strong>Holiday allowance (if selected)</strong></label>
					  <input type="text" class="form-control" placeholder="Test 2"> 
					</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
						<label><strong>Pension (if selected)</strong></label>
						<select class="select form-control">
							<option>Average salary</option>
							<option>Current Type of test B</option>
							<option>Type of test A</option>
					</select>
					</div>
					</div>
              
              </div></li></ul></li>
              
              
              </ul>
              </div>
          </div>
          
           <div role="tabpanel" class="tab-pane" id="internship">
           <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active active">
          <a href="#">
            <span>Type of contract</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>Offered employment</strong></label>
         <br>
		<select class="select form-control">
            <option>Permanent Fulltime</option>
            <option>Tomorrow</option>
            <option>Over a week</option>
            <option>Over a month</option>
          </select>	 
          </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <label><strong>Type of internship</strong></label> <br>
                <select class="select form-control">
            <option>...</option>
            <option>Tomorrow</option>
            <option>Over a week</option>
            <option>Over a month</option>
          </select>	 
          </div>
         </div>
         
         <label><strong>Trial period of applicable</strong></label>
         <br>
         <select class="select form-control">
            <option>3 months</option>
            <option>Tomorrow</option>
            <option>Over a week</option>
            <option>Over a month</option>
          </select>	 
          
          <div>&nbsp;</div>
          
          		<label><strong>Duration</strong></label>

          <div class="row body-box">
		<div class="col-xs-12 col-sm-5 col-md-5">
		<select class="select form-control">
    <option>3 months</option>
	<option>Tomorrow</option>
    <option>Over a week</option>
    <option>Over a month</option>
  </select>	 
  </div>
  <div class="col-xs-12 col-sm-4 col-md-2 text-center">
  to
  </div>
  		<div class="col-xs-12 col-sm-5 col-md-5">
		<select class="select form-control">
    <option>12 months</option>
	<option>Tomorrow</option>
    <option>Over a week</option>
    <option>Over a month</option>
  </select>	 
  </div>
  </div>
  
  <label><strong>Job available to</strong></label>
    <br>
    <div class="row body-box">
     <div class="col-xs-12 col-sm-5 col-md-5">
					 <input type="checkbox" name="answer" value="Permanent full time contract" checked> Permanent full time contract 
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="Freelance" checked>  Freelance
					 </div>
                     </div>  
  <label><strong>Age</strong></label>
  <br>
  <div class="row body-box">
  <div class="col-xs-12 col-sm-4 col-md-4">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 text-center">
				<p >to</p>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
				<div class="col-xs-12 col-sm-2 col-md-2 text-center">
				years
			</div>
            </div>
  
  
         
            
              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Availability</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>Offered employment</strong></label> <br>
                    <select class="select form-control">
                 <option>Select</option>
                <option>Tomorrow</option>
                <option>Over a week</option>
                <option>Over a month</option>
              </select>	 
              </div>
                <div class="col-xs-10 col-sm-3 col-md-3">
                <label><strong>Available for</strong></label>
                <br>
                            <input type="number" class="form-control bfh-number" value="10" />
                        </div>
                        
                            <div class="col-xs-2 col-sm-3 col-md-3">
                            <br>
                            Hours per week
                        </div>
             </div>
             
             <label><strong>Days per week</strong></label>
             <br>
             
             <div class="row text-nowrap">
				 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer1"> Monday
					  </div>
					  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Tuesday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer2"> Wednesday
					 </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Thursday
					  </div> 					 
			</div>
            
            <div class="row text-nowrap">
				  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer3">  Friday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer4">  Saturday
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer6">  Sunday
					 </div>
		</div>
        
        <label><strong>Working hours</strong></label>
        <br>
        
        <div class="row">
				 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer1"> Regular
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Weekdays
					 </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Fixed
					 </div>
		
					</div>
	<div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer3">  Evenings
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer4">  Weekends
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2">  Irregular
				</div>
		</div>
	<div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer5">  Nights
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Flexible
					 </div> 
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Shifts
					 </div>
			</div>
              
              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Secondary benefits</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Days per week</strong></label>
              <br>
              <div class="row">
				 <div class="col-xs-12 col-sm-6 col-md-6">
					 <input type="checkbox" name="answer" value="answer1"> Thirteenth month
                     <br>
                     <input type="checkbox" name="answer" value="answer3"> Lease car
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Travel expenses 
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Corporate fitness
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Company phone
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Study budget<br>

                     
                     
                     
					  </div>
					  <div class="col-xs-12 col-sm-6 col-md-6">
				  <input type="checkbox" name="answer" value="answer5">  Incentives
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Lease bicycle
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Holiday allowance
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Childcare compensation
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Company laptop
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Pension<br>

                  

					  </div>
			
					  </div>
                      
                      <input type="checkbox" name="answer" value="answer3">  Other
                      <br>
                      <br>

				 <input type="text" class="form-control" placeholder="Test 2">
                 <br>
                 
                 <div class="row body-box">
								<div class="col-xs-12 col-sm-6 col-md-6">
						<label><strong>Holiday allowance (if selected)</strong></label>
					  <input type="text" class="form-control" placeholder="Test 2"> 
					</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
						<label><strong>Pension (if selected)</strong></label>
						<select class="select form-control">
							<option>Average salary</option>
							<option>Current Type of test B</option>
							<option>Type of test A</option>
					</select>
					</div>
					</div>
              
              </div></li></ul></li>
              
              
              </ul>
              </div>
          </div>
          
           <div role="tabpanel" class="tab-pane" id="zzp">
           
           <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Type of contract</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>Offered employment</strong></label> <br>
		<select class="select form-control">
        <option>ZZP</option>
        <option>Tomorrow</option>
        <option>Over a week</option>
        <option>Over a month</option>
      </select>	 
      </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
            <label><strong>Trial period of applicable</strong></label> <br>
            <select class="select form-control">
        <option>Select a duration</option>
        <option>Tomorrow</option>
        <option>Over a week</option>
        <option>Over a month</option>
      </select>	 
      </div>
     </div>
     
     <div>&nbsp;</div>
     		<label><strong>Duration</strong></label> <br>

     <div class="row body-box">
		<div class="col-xs-12 col-sm-5 col-md-5">
		<select class="select form-control">
    <option>3 months</option>
	<option>Tomorrow</option>
    <option>Over a week</option>
    <option>Over a month</option>
  </select>	 
  </div>
  <div class="col-xs-12 col-sm-2 col-md-2 text-center">
  to
  </div>
  		<div class="col-xs-12 col-sm-5 col-md-5">
		<select class="select form-control">
    <option>12 months</option>
	<option>Tomorrow</option>
    <option>Over a week</option>
    <option>Over a month</option>
  </select>	 
  </div>
  </div>
     <div>&nbsp;</div>
     
     <label><strong>Indication of salary per month basd on 40 hours a week if applicable</strong></label>
     <br>
     <div class="row body-box">
     <div class="col-xs-12 col-sm-3 col-md-3">
			<input type="number" class="form-control bfh-number" value="10" />
		</div>
		<div class="col-xs-12 col-sm-2 col-md-2 text-center">
		to
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3">
			<input type="number" class="form-control bfh-number " value="10" />
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<select class="select form-control">
				<option>Select a currency</option>
				<option>Euro</option>
				<option>Pound</option>
				<option>Turkish Lira</option>
			</select>	 
		</div>
	</div>
    
    <label><strong>Job available to</strong></label>
    <br>
    <div class="row body-box">
     <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="Permanent full time contract" checked> Male
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="Freelance" checked>  Female
					 </div>
                     </div>
                     <br>

     <label><strong>Age</strong></label>
     <br>
     <div class="row">
     <div class="col-xs-12 col-sm-3 col-md-3">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 text-center">
				<p >to</p>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
				<div class="col-xs-12 col-sm-3 col-md-2 text-center">
				years
			</div>
		
		</div>
    
              </div>
              </li>
              </ul>
              </li>
              
              
              <li class="treeview active">
          <a href="#">
            <span>Availability</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>When can the professional start</strong></label><br>
		<select class="select form-control">
    <option>Select</option>
	<option>Tomorrow</option>
    <option>Over a week</option>
    <option>Over a month</option>
  </select>	 
  </div>
	<div class="col-xs-12 col-sm-3 col-md-3">
	<label><strong>Available for</strong></label>
    <br>
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
				<div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <br>
				Hours per week
			</div>
 </div>	
 
 <label><strong>Days per week</strong></label>
 <br>
 <div class="row text-nowrap">
				 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer1"> Monday
					  </div>
					  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Tuesday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer2"> Wednesday
					 </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Thursday
					  </div> 					 
			</div>
            
           <div class="row body-box">
				  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer3">  Friday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer4">  Saturday
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer6">  Sunday
					 </div>
		</div> 
        <br>

        <label><strong>Working hours</strong></label>
        <br>
        <div class="row">
				 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer1"> Regular
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Weekdays
					 </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Fixed
					 </div>
		
					</div>
 		<div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer3">  Evenings
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer4">  Weekends
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2">  Irregular
				</div>
		</div>
        
        <div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer5">  Nights
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Flexible
					 </div> 
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Shifts
					 </div>
			</div>
 
              
              </div>
              </li>
              </ul>
              </li>
              
              
              
              <li class="treeview active">
          <a href="#">
            <span>Secondary benefits</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Days per week</strong></label>
              <br>
              <div class="row">
				 <div class="col-xs-12 col-sm-6 col-md-6">
					 <input type="checkbox" name="answer" value="answer1"> Thirteenth month
                     <br>
                     <input type="checkbox" name="answer" value="answer3"> Lease car
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Travel expenses 
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Corporate fitness
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Company phone
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Study budget<br>

                     
                     
                     
					  </div>
					  <div class="col-xs-12 col-sm-6 col-md-6">
				  <input type="checkbox" name="answer" value="answer5">  Incentives
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Lease bicycle
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Holiday allowance
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Childcare compensation
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Company laptop
                  <br>
                  <input type="checkbox" name="answer" value="answer5">  Pension<br>

                  

					  </div>
			
					  </div>
                      
                      <input type="checkbox" name="answer" value="answer3">  Other
                      <br>
                      <br>
				 <input type="text" class="form-control" placeholder="Test 2">
                 <br>
                 
                 <div class="row body-box">
								<div class="col-xs-12 col-sm-6 col-md-6">
						<label><strong>Holiday allowance (if selected)</strong></label>
					  <input type="text" class="form-control" placeholder="Test 2"> 
					</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
						<label><strong>Pension (if selected)</strong></label>
						<select class="select form-control">
							<option>Average salary</option>
							<option>Current Type of test B</option>
							<option>Type of test A</option>
					</select>
					</div>
					</div>
              
              </div></li></ul></li>
              
              </ul>
              </div>
              
              
          </div>
          
          <div role="tabpanel" class="tab-pane" id="volunteer">
          <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Type of contract</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>Offered employment</strong></label> <br>
		<select class="select form-control">
        <option>Permanent Fulltime</option>
        <option>Tomorrow</option>
        <option>Over a week</option>
        <option>Over a month</option>
      </select>	 
      </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
            <label><strong>Trial period of applicable</strong></label> <br>
            <select class="select form-control">
        <option>Select a duration</option>
        <option>Tomorrow</option>
        <option>Over a week</option>
        <option>Over a month</option>
      </select>	 
      </div>
     </div>
     
     		<label><strong>Duration</strong></label> <br>
     <div class="row body-box">
		<div class="col-xs-12 col-sm-5 col-md-5">
		<select class="select form-control">
            <option>3 months</option>
            <option>Tomorrow</option>
            <option>Over a week</option>
            <option>Over a month</option>
          </select>	 
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 text-center">
          to
          </div>
                <div class="col-xs-12 col-sm-5 col-md-5">
                <select class="select form-control">
            <option>12 months</option>
            <option>Tomorrow</option>
            <option>Over a week</option>
            <option>Over a month</option>
          </select>	 
          </div>
          </div>
          
          <label><strong>Job available to</strong></label>
          <br>
          <div class="row body-box">
           <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="Permanent full time contract" checked> Male
					  </div>
					 <div class="col-xs-12 col-sm-9 col-md-9">
					 <input type="checkbox" name="answer" value="Freelance" checked>  Female
					 </div>
			</div>
            
            <label><strong>Age</strong></label>
            <br>
            <div class="row body-box">
            <div class="col-xs-12 col-sm-4 col-md-4">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 text-center">
				<p>to</p>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<input type="number" class="form-control bfh-number" value="10" />
			</div>
				<div class="col-xs-12 col-sm-3 col-md-2 text-center">
				years
			</div>
		
		</div>
              
              </div>
              </li>
              </ul>
              </li>
              
              
              <li class="treeview active">
          <a href="#">
            <span>Availability</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
		<label><strong>When can the professional start</strong></label> <br>
		<select class="select form-control">
        <option>Select</option>
        <option>Tomorrow</option>
        <option>Over a week</option>
        <option>Over a month</option>
      </select>	 
      </div>
        <div class="col-xs-10 col-sm-3 col-md-3">
        <label><strong>Available for</strong></label>
                    <input type="number" class="form-control bfh-number" value="10" />
                </div><br>
                    <div class="col-xs-2 col-sm-3 col-md-3 text-center">
                    Hours per week
                </div>
         </div>
         
         <label><strong>Days per week</strong></label>
         <br>
         <div class="row text-nowrap">
				 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer1"> Monday
					  </div>
					  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Tuesday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer2"> Wednesday
					 </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer5">  Thursday
					  </div> 
		
					 
			</div>
        <div class="row">
				  <div class="col-xs-12 col-sm-3 col-md-3">
				  <input type="checkbox" name="answer" value="answer3">  Friday
					  </div>
					 <div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer4">  Saturday
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
					 <input type="checkbox" name="answer" value="answer6">  Sunday
					 </div>
            </div>
            
            <div>&nbsp;            </div>
            
            <label><strong>Working hours</strong></label>
            <br>
            <div class="row">
				 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer1"> Regular
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Weekdays
					 </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2"> Fixed
					 </div>
		
					</div>
	<div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer3">  Evenings
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer4">  Weekends
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer2">  Irregular
				</div>
		</div>
	<div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4">
				  <input type="checkbox" name="answer" value="answer5">  Nights
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Flexible
					 </div> 
					 <div class="col-xs-12 col-sm-4 col-md-4">
					 <input type="checkbox" name="answer" value="answer6">  Shifts
					 </div>
			</div>
            
            
              
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
