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
                        <li><a href="../index.php">Company Home</a></li>
                        <li class="active">Settings</li>
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
                
                 <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>General settings</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <label><strong>Enter an alternate email address.</strong></label>
                                <br>
                                <input type="text" class="form-control" placeholder="Alternate_address@website.com">
                                <br>
                                
                                <div class="row body-box">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<label><strong>Change language</strong></label>
                   <br>
					<select class="select form-control"  data-size="auto">
							<option>[current language]</option>
							<option>English</option>
							<option>Dutch</option>
							<option>Turkish</option>
                    </select>
                    </div>
	
				<div class="col-xs-12 col-sm-6 col-md-6">
					<label><strong>Time zone</strong></label>
                    <br>
					<select class="select form-control"  data-size="auto">
							<option>[Current time zone]</option>
							<option>GMT  0:00</option>
							<option>GMT +1:00</option>
							<option>GMT +2:00</option>
                    </select>
                    </div>
                </div>
                
                <hr>
                
                <p><strong>Change password</strong></p>
                
                <label><strong>Enter current password *</strong></label>
                <br>
                <input type="text" class="form-control">
                <br>
                
                <label><strong>Enter new password *</strong></label>
                <br>
                <input type="text" class="form-control">
                <br>
                
                <label><strong>Confirm new password *</strong></label>
                <br>
                <input type="text" class="form-control">
                
                                
                                
                                
                                
                                   
                          </div>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Privacy Settings</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                               	
                                <p>Prefered privacy settings can be adjusted via individual pages, but can alsobe altered via this page with the menu's below<br>
			Privacy settings can be specified by selecting the prefered option within the menu.</p>
            
            
            <p><strong>Tab Personal info</strong></p>
            
            <div class="row body-box">
            <div class="col-xs-12 col-sm-6 col-md-6">
                [Name of collapsible element]
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
            <select class="select form-control" data-size="auto">
                <option>Employers I have applied to</option>
                <option>Anwb</option>
                <option>ING</option>
                <option>Stagemeesters</option>
            </select>
            </div>
            </div>
            
            <hr>
            
            <p><strong>Tab About me</strong></p>
            
            <div class="row body-box">
            <div class="col-xs-12 col-sm-6 col-md-6">
                [Name of collapsible element]
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <select class="select form-control"  data-size="auto">
                <option>Public</option>
                <option>Option1</option>
                <option>Option2</option>
                <option>Option3</option>
            </select>
            </div>
            </div>
            
            
            <div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Public</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
	
		</div>
			 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		<hr>
        
        
  <p><strong>Tab Resume</strong></p>
  
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Employers only</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>	
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>	
		</div>
	
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Employers only</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>	
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Employers only</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>	
		</div>
		
		</div>
		 
				<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Employers only</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>	
		</div>
		
		</div>
	<hr>
		
		
			<p><strong>Tab Upload</strong></p>
            
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Only me</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Only me</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Only me</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		<hr>
		<p><strong>Tab 360 view</strong></p>
                    
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
		<select class="select form-control"  data-size="auto">
			<option>Public</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		</div>
		
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone when signed in</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Public</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone when signed in</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Public</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		<hr>
					
        
       <p><strong>Tab Portfolio</strong></p>
                    
                    
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
<select class="select form-control"  data-size="auto">
			<option>Employers only</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Everyone I have applied to</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
		 
		<div class="row body-box">
		<div class="col-xs-12 col-sm-6 col-md-6">
			[Name of collapsible element]
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<select class="select form-control"  data-size="auto">
			<option>Employers only</option>
			<option>Option1</option>
			<option>Option2</option>
			<option>Option3</option>
		</select>
		</div>
		
		</div>
        
        
            
                                        
                                </div>
                                </li>
                                   </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Rightsmanagements</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><div class="panel-body">
                                <p><strong>Add co-owner</strong></p>
                                
                                <div class="row body-box">
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                <label><strong>First name</strong></label>
                               <input type="text" class="form-control" placeholder="Enter First name">
                        
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                <label><strong>Last name</strong></label>
                        <input type="text" class="form-control" placeholder="Enter Last name">
                                </div>
                                </div>
                                
                                
                                <div class="row body-box">
                            <div class="col-md-6 col-xs-12 col-sm-6">
                            <label><strong>Email Address</strong></label>
                           <input type="text" class="form-control" placeholder="Enter an email address">
                    
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6">
                            <label><strong>Title</strong></label>
                    <input type="text" class="form-control" placeholder="Co-owner title">
                            </div>
                        </div>
                        
                        
                        <p><strong>Select rights</strong></p>
                        
                        <div class="row">  	   
                <div class="col-md-4 col-xs-12 col-sm-4">
                <input type="checkbox" value="Right 1"> Right 1<br>
                <input type="checkbox" value="Right 1"> Right 2<br>
                <input type="checkbox" value="Right 1"> Right 3<br>
                
                
                        </div>
                             <div class="col-md-4 col-xs-12 col-sm-4">
                <input type="checkbox" value="Right 1"> Right 4<br>
                <input type="checkbox" value="Right 1"> Right 5<br>
                <input type="checkbox" value="Right 1"> Right 6<br>
                
                
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                <input type="checkbox" value="Right 1"> Right 7<br>
                <input type="checkbox" value="Right 1"> Right 8<br>
                <input type="checkbox" value="Right 1"> Right 9<br>
                 </div>
                </div>
                
                <div class="btn-pull-right"><button class="btn btn-info">Add</button></div>
                <div class="clear">&nbsp;</div>
                
                <p><strong>Existing co-owners</strong></p>
                
                <div class="row body-box">
        
		<div class="col-xs-12 col-sm-12 col-md-1" style="margin-right:20px; margin-bottom:10px">
			<img src="../../../img/avatar5.png" style="width:70px; height:73px;">
		</div>


			<div class="col-xs-12 col-sm-12 col-md-4">
				
					<b style="margin-top:0px;"><a href="#" class="link">Johannes Pellisier</a></b><br><Br>
                <button class="btn btn-info"><span><i class="glyphicon glyphicon-trash"></i></span>
                            </button>
					  <button class="btn btn-info" ><i class="glyphicon glyphicon-pause"></i>
                            </button>
                  <button class="btn btn-info" ><i class="glyphicon glyphicon-pencil"></i>
                            </button>

				
	
			</div>
                
                
                
            	<div class="col-xs-12 col-sm-12 col-md-1" style="margin-right:20px; margin-bottom:10px">
			<img src="../../../img/avatar2.png" style="width:70px; height:73px;">
		</div>


			<div class="col-xs-12 col-sm-12 col-md-5">
				
					<b style="margin-top:0px;"><a href="#" class="link">Johannes Pellisier</a></b><br><Br>
                <button class="btn btn-info"><span><i class="glyphicon glyphicon-trash"></i></span>
                            </button>
					  <button class="btn btn-info" ><i class="glyphicon glyphicon-pause"></i>
                            </button>
                  <button class="btn btn-info" ><i class="glyphicon glyphicon-pencil"></i>
                            </button>

				
	
			</div>    
                			</div>
                            
                            
                            <div class="row body-box">
        
		<div class="col-xs-12 col-sm-12 col-md-1" style="margin-right:20px; margin-bottom:10px">
			<img src="../../../img/avatar3.png" style="width:70px; height:73px;">
		</div>


			<div class="col-xs-12 col-sm-12 col-md-4">
				
					<b style="margin-top:0px;"><a href="#" class="link">Johannes Pellisier</a></b><br><Br>
                <button class="btn btn-info"><span><i class="glyphicon glyphicon-trash"></i></span>
                            </button>
					  <button class="btn btn-info" ><i class="glyphicon glyphicon-pause"></i>
                            </button>
                  <button class="btn btn-info" ><i class="glyphicon glyphicon-pencil"></i>
                            </button>

				
	
			</div>
                
                
                
            	<div class="col-xs-12 col-sm-12 col-md-1" style="margin-right:20px; margin-bottom:10px">
			<img src="../../../img/avatar.png" style="width:70px; height:73px;">
		</div>


			<div class="col-xs-12 col-sm-12 col-md-5">
				
					<b style="margin-top:0px;"><a href="#" class="link">Johannes Pellisier</a></b><br><Br>
                <button class="btn btn-info"><span><i class="glyphicon glyphicon-trash"></i></span>
                            </button>
					  <button class="btn btn-info" ><i class="glyphicon glyphicon-pause"></i>
                            </button>
                  <button class="btn btn-info" ><i class="glyphicon glyphicon-pencil"></i>
                            </button>

				
	
			</div>    
			</div>
                                
                                
                                
                                
                                
                                </div></li>
                            </ul>
                        </li>
                    
                    <li class="treeview active">
                            <a href="#">
                                <span>Notifications</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <div class="panel-body">
                               	<p><strong>Notify me when</strong></p>
                                <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                             <input type="checkbox" name="option" value="option1"> A business case/whitepaper has been downloaded
                                             
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <select class="form-control select"  data-size="auto">
                                                        <option>Immediately</option>
                                                    <option>Once a day</option>
                                                    <option>Once a week</option>
                                                    <option>Once a month</option>
                                </select>
                                </div>
                                            
                                        </div>
                                         
                                 <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                             <input type="checkbox" name="option" value="option1"> Someone has responded to a vacancy
                                             
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <select class="form-control select"  data-size="auto">
                                                        <option>Immediately</option>
                                                    <option>Once a day</option>
                                                    <option>Once a week</option>
                                                    <option>Once a month</option>
                                </select>
                                </div>
                                            
                                        </div>
                                         
                                 <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                             <input type="checkbox" name="option" value="option1"> A company co-owner has been added
                                             
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <select class="form-control select"  data-size="auto">
                                                        <option>Immediately</option>
                                                    <option>Once a day</option>
                                                    <option>Once a week</option>
                                                    <option>Once a month</option>
                                </select>
                                </div>
                                            
                                        </div>
                                         
                                <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                             <input type="checkbox" name="option" value="option1"> There is a new message in my inbox application
                                             
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <select class="form-control select"  data-size="auto">
                                                        <option>Immediately</option>
                                                    <option>Once a day</option>
                                                    <option>Once a week</option>
                                                    <option>Once a month</option>
                                </select>
                                </div>
                                            
                                        </div>
                                        
                                <hr>                                                     
                                        
                                </div>   
                                </ul>           
                           </li>
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
