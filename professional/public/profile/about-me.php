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

    

    <!-- AdminLTE App -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                     <li class="active">About me</li>
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
                <div class="box box-danger">
                
                <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#about" aria-controls="home" role="tab" data-toggle="tab">About me</a></li>  
    <li role="presentation"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Personal info</a></li>
    <li role="presentation"><a href="#portfolio" aria-controls="profile" role="tab" data-toggle="tab">Portfolio</a></li>
    <li role="presentation"><a href="#availability" aria-controls="messages" role="tab" data-toggle="tab">Availability</a></li>
    <li role="presentation"><a href="#tests" aria-controls="settings" role="tab" data-toggle="tab">Tests</a></li>
    <li role="presentation"><a href="#download" aria-controls="settings" role="tab" data-toggle="tab">Download</a></li>
    <li role="presentation"><a href="#favorites" aria-controls="settings" role="tab" data-toggle="tab">Favorites</a></li>
  </ul>

  <!-- Tab panes -->
 <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="about">
  <form action="/web/portals/profileabout"  method="POST" class="fos_user_profile_edit formpad form-padding"><input type="hidden" id="portals_general_profileabout_form__token" name="portals_general_profileabout_form[_token]" value="JzReHCvjWTDmW-uVtUEnDQR9k5BUhnpOqQVOuf0zP5o" />
        <div class="clear">&nbsp;</div>
    
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>Personal</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <div class="row body-box">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label><strong>First name</strong></label>
                                <br>
                                [First name]
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label><strong>Last name prefix</strong></label>
                                <br>
                                [Last name prefix]
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label><strong>Last name</strong></label>
                                <br>
                                [Last name]
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Street name</strong></label>
                                <br>
                                [Street name]
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label><strong>House number</strong></label>
                                <br>
                                [House number]
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label><strong>Suffix</strong></label>
                                <br>
                                [Suffix]
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Postal code</strong></label>
                                <br>
                                [Postal code]
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>City</strong></label>
                                <br>
                                [City]
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Province/country</strong></label>
                                <br>
                                [Province/country]
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Country</strong></label>
                                <br>
                                [Country]
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label><strong>Main email address</strong></label>
                                <br>
                                [Main email address]
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Telephone number</strong></label>
                                <br>
                                [Telephone number]
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Mobile number</strong></label>
                                <br>
                                [Mobile number]
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Skype</strong></label>
                                <br>
                               [Skype]
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Facebook messenger</strong></label>
                                <br>
                                [Facebook messenger]
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Google talk</strong></label>
                                <br>
                                [Google talk]
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>ICQ</strong></label>
                                <br>
                                [ICQ]
                                </div>
                                </div>
                                
                                </div>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <div>&nbsp;</div>
                        
                        
                    </ul>
                    </div>
                    </form>
                                                             
    </div>
  
  
  
  
    <div role="tabpanel" class="tab-pane" id="info">
    <form action="/web/portals/profileabout"  method="POST" class="fos_user_profile_edit formpad form-padding"><input type="hidden" id="portals_general_profileabout_form__token" name="portals_general_profileabout_form[_token]" value="JzReHCvjWTDmW-uVtUEnDQR9k5BUhnpOqQVOuf0zP5o" />
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>Professional desciption </span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <h5><strong>Biography [First name][Last name]</strong></h5>
                                   <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                  <h5><strong>Ambitions [First name][Last name]</strong></h5>
                                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                  
                                  <div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
                                                                      
                          </div>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Professional information</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                               	<div class="row">		
       			<div class="col-lg-6 col-md-6 col-xs-12 col-ms-6">
				<b>First name</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-xs-12 col-ms-6">
       			[Last name][Age]
       			</div>
       		</div>
<br>
       		<div class="row">
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>Age</b>
				</div>

				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					[Age]
				</div>
			</div>
<br>		            
		    <div class="row"> 
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>Nationality:</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
       				[Nationality]
       			</div>
		   </div>
<br>
		    <div class="row">
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>Street</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
       				[Street]
       			</div>
		   	</div>
<br>
		    <div class="row">
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>Postalcode/City:</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
       				[Postalcode] [City]
       			</div>
		    </div><br>
            
            <div class="row">
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>State</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
       				[State]
       			</div>
		    </div>
          
           <div class="row">
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>Country</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
       				[Country]
       			</div>
		    </div><br>
          
            <div class="row">
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>Telephone</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
       				[Telephone]
       			</div>
		    </div><br>
          
          
            <div class="row">
				<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
					<b>Mobile</b>
       			</div>

       			<div class="col-lg-6 col-md-6 col-ms-6 col-xs-12">
       				[Mobile]
       			</div>
		    </div>
                                </div></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Photo</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <label><strong>[Title photo]</strong></label>
                                <div>&nbsp;</div>
                                <div class="carousel slide article-slide" id="myCarousel">
      <div class="carousel-inner cont-slider">
    
        <div class="item active">
          <img src="http://placehold.it/1200x440/cccccc/ffffff">
        </div>
        <div class="item">
          <img src="http://placehold.it/1200x440/999999/cccccc">
        </div>
        <div class="item">
          <img src="http://placehold.it/1200x440/dddddd/333333">
        </div>               
      </div>
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#myCarousel">
          
        </li>
        <li class="" data-slide-to="1" data-target="#myCarousel">
        </li>
        <li class="" data-slide-to="2" data-target="#myCarousel">
        </li>               
      </ol>                 
    </div>
    <div>&nbsp;</div>
    <label><strong>[Description photo]</strong></label>
    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
    
    <div class="row body-box">
          	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Image/picture" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Image/picture" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Image/picture" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Image/picture" style="height:75px; width:100px; border: 2px solid #999;">
			</div>
		</div>
		<div>&nbsp;</div>        
        <label><strong>Tag</strong></label>
        <br>
        
        <div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
        
        
                                
                                </div></li>
                            </ul>
                        </li>
                        
                        <li class="treeview active">
                            <a href="#">
                                <span>Video</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <label><strong>[Title video]</strong></label>
                                <div>&nbsp;</div>
                                <div class="carousel slide article-slide" id="myCarousel">
      <div class="carousel-inner cont-slider">
    
        <div class="item active">
          <img src="http://placehold.it/1200x440/cccccc/ffffff">
        </div>
        <div class="item">
          <img src="http://placehold.it/1200x440/999999/cccccc">
        </div>
        <div class="item">
          <img src="http://placehold.it/1200x440/dddddd/333333">
        </div>               
      </div>
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#myCarousel">
          <img alt="" title="" src="http://placehold.it/120x44/cccccc/ffffff">
        </li>
        <li class="" data-slide-to="1" data-target="#myCarousel">
          <img alt="" title="" src="http://placehold.it/120x44/999999/cccccc">
        </li>
        <li class="" data-slide-to="2" data-target="#myCarousel">
          <img alt="" title="" src="http://placehold.it/120x44/dddddd/333333">
        </li>               
      </ol>                 
    </div>
    
    <div>&nbsp;</div>
    
    <label><strong>[Description video]</strong></label>
    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
    
    <div class="row body-box">
	 <br>
          	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 2" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 3" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 4" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 5" style="height:75px; width:100px; border: 2px solid #999;">
			<br></div>
		</div>
    
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                        <li class="treeview active">
                            <a href="#">
                                <span>Presentation </span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <label><strong>[Title presentation</strong></label>
                                <div>&nbsp;</div>
                                <img src="" class="img-responsive" alt="Presentation" style="height:250px; width:100%; border: 2px solid #999;">
                                <div>&nbsp;</div>
                                <label><strong>[Description presentation]</strong></label>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                          <div>&nbsp;</div>
                                <div class="row body-box">
          	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Presentation 2" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Presentation 3" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Presentation 4" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Presentation 5" style="height:75px; width:100px; border: 2px solid #999;"><br>
			</div>
		</div>
                          <label><strong>Tags</strong></label>
                          <br>

                          <div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>      
                                </div></li>
                            </ul>
                        </li>
                        
                    </ul>
                    </div>
                  </form>                                           
    </div>
    
    <div role="tabpanel" class="tab-pane" id="portfolio">  
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>Videos</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <label><strong>[Title video]</strong></label>
                                <div>&nbsp;</div>
                                <embed width="100%" height="315" src="//www.youtube.com/embed/TJofF_a55zA" frameborder="0" allowfullscreen></embed>
                                <div>&nbsp;</div>
                                <label><strong>[Description video]</strong></label>
                                <br>
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                <div>&nbsp;</div>
                                <div class="row bosy-box">
          	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 2" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 3" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 4" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 5" style="height:75px; width:100px; border: 2px solid #999;">
			</div>
		</div>
        
        <div>&nbsp;</div>
        <label><strong>Tags:</strong></label>
        <br>
		<div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
                                
                                
                                </div>
                                </li>
                                   </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Photo</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><div class="panel-body">
                                <label><strong>[Title Photo]</strong></label>
                                <div>&nbsp;</div>
                                <img src="" class="img-responsive" alt="Photo" style="height:250px; width:100%; border: 2px solid #999;">
                                <div>&nbsp;</div>
                                <label><strong>[Description Photo]</strong></label>
                                <br>
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                <div>&nbsp;</div>
                                <div class="row bosy-box">
          	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 2" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 3" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 4" style="height:75px; width:100px; border: 2px solid #999;">
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			  <img src="" class="img-responsive" alt="Video 5" style="height:75px; width:100px; border: 2px solid #999;">
			</div>
		</div>
        
        <div>&nbsp;</div>
        <label><strong>Tags:</strong></label>
        <br>
		<div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
                                </div></li>
                            </ul>
                        </li>
                        
                        <li class="treeview active">
                            <a href="#">
                                <span>Documents </span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><div class="panel-body">
                                <strong>[Title of document]</strong>
                                <br>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
		 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
		  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
		   Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
		 Nullam dictum felis eu pede mollis pretium.
         <div>&nbsp;</div>
         <strong>[Title of document]</strong>
         <br>
         Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
		 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
		  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
		   Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
		 Nullam dictum felis eu pede mollis pretium.
         <div>&nbsp;</div>

		<strong>[Title of document]</strong>
        <br>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
		 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
		  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
		   Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
		 Nullam dictum felis eu pede mollis pretium.
         <br>


                                
                                </div>
                                </li>
                                </ul>
                                </li>
                        
                    </ul>
                    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="availability">
    <div class="row body-box body-box">
		<p>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			I'm available:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Availability]
			</div>
		</div>
		<div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			I'm looking for a:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Contact type]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Desired salary per year basen on 40 hours a week:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[n to n currency]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Desire fee per hour:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[n to n currency]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			VAR valid until:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Date]
			</div>
		</div>
		<div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Coc number:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Coc number]
			</div>
		</div>
		<div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			VAT number:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[VAT number]
			</div>
		</div>
		<div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Fiscal number:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Fiscal number]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Desired compensation per month based on 40 hours a week:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[n to n currency]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Type of internship:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Type of internship]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Desired duration:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[n to n months]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Available days per week:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Days]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Available hours per week:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Availability]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Desired working hours:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Working hours]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			I'd like to work within the branches:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Branches]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			I'd like to work in:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Countries][Provinces]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Maximum travel distance:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Distance]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Willing to recolate:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Yes/No]
			</div>
		</div><div class="row body-box">
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			Work to permit EU:
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			[Yes/No]
			</div>
		</div>
       
       
    </div>
    <div role="tabpanel" class="tab-pane" id="tests">    
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>Results of paid tests</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                   <strong>1. [Title of test] [Type of test]:</strong>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <strong>[Result of type of test]</strong>
                                    </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                    <p><b>Date test taken:</b></p>
                    
                                </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                    <p><b>dd-mm-yyyy</b></p>
                                </div>
                                </div>
                                
                                <label><strong>Description</strong></label>
                                <br>
                                <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet massa quis mauris suscipit feugiat id et orci. Integer porttitor metus at libero aliquam, nec blandit dui blandit. Aenean cursus velit eu nunc maximus varius. Duis et massa eget nibh sollicitudin pulvinar ut eu elit. Aliquam sit amet aliquet erat. In ultrices metus eget orci rutrum, vel dapibus nibh hendrerit. Donec ultrices id ligula sed dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam egestas justo nisl, convallis ultrices quam blandit sit amet. Curabitur lobortis nibh nec metus pellentesque tristique ut ut sapien. Donec suscipit gravida ante sit amet cursus.</p>
                                <div>&nbsp;</div>
                                <div class="content-padding"><b>Download: </b><a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a><br></br></div>
                                <p><strong>Test peformed by < Company Name ></strong></p>
                                
                                <label><strong>Tags:</strong></label>
                                <br>
                                <div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
                                
                                <hr>
                                
                                <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                   <strong>2. [Title of test] [Type of test]:</strong>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <strong>[Result of type of test]</strong>
                                    </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                    <p><b>Date test taken:</b></p>
                    
                                </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                    <p><b>dd-mm-yyyy</b></p>
                                </div>
                                </div>
                                
                                <label><strong>Description</strong></label>
                                <br>
                                <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet massa quis mauris suscipit feugiat id et orci. Integer porttitor metus at libero aliquam, nec blandit dui blandit. Aenean cursus velit eu nunc maximus varius. Duis et massa eget nibh sollicitudin pulvinar ut eu elit. Aliquam sit amet aliquet erat. In ultrices metus eget orci rutrum, vel dapibus nibh hendrerit. Donec ultrices id ligula sed dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam egestas justo nisl, convallis ultrices quam blandit sit amet. Curabitur lobortis nibh nec metus pellentesque tristique ut ut sapien. Donec suscipit gravida ante sit amet cursus.</p>
                                <div>&nbsp;</div>
                                <div class="content-padding"><b>Download: </b><a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a><br></br></div>
                                <p><strong>Test peformed by < Company Name ></strong></p>
                                
                                <label><strong>Tags:</strong></label>
                                <br>
                                <div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
                                
                                
                                    
                                    
                                    </div>
                                </li>
                                </ul>
                                </li>
                                
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Results of free tests</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                   <strong>3. [Title of test] [Type of test]:</strong>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <strong>[Result of type of test]</strong>
                                    </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                    <p><b>Date test taken:</b></p>
                    
                                </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                    <p><b>dd-mm-yyyy</b></p>
                                </div>
                                </div>
                                
                                <label><strong>Description</strong></label>
                                <br>
                                <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet massa quis mauris suscipit feugiat id et orci. Integer porttitor metus at libero aliquam, nec blandit dui blandit. Aenean cursus velit eu nunc maximus varius. Duis et massa eget nibh sollicitudin pulvinar ut eu elit. Aliquam sit amet aliquet erat. In ultrices metus eget orci rutrum, vel dapibus nibh hendrerit. Donec ultrices id ligula sed dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam egestas justo nisl, convallis ultrices quam blandit sit amet. Curabitur lobortis nibh nec metus pellentesque tristique ut ut sapien. Donec suscipit gravida ante sit amet cursus.</p>
                                <div>&nbsp;</div>
                                <div class="content-padding"><b>Download: </b><a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a><br></br></div>
                                <p><strong>Test peformed by < Company Name ></strong></p>
                                
                                <label><strong>Tags:</strong></label>
                                <br>
                                <div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
                                
                                <hr>
                                
                                <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                   <strong>4. [Title of test] [Type of test]:</strong>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <strong>[Result of type of test]</strong>
                                    </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="row body-box">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                    <p><b>Date test taken:</b></p>
                    
                                </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                    <p><b>dd-mm-yyyy</b></p>
                                </div>
                                </div>
                                
                                <label><strong>Description</strong></label>
                                <br>
                                <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet massa quis mauris suscipit feugiat id et orci. Integer porttitor metus at libero aliquam, nec blandit dui blandit. Aenean cursus velit eu nunc maximus varius. Duis et massa eget nibh sollicitudin pulvinar ut eu elit. Aliquam sit amet aliquet erat. In ultrices metus eget orci rutrum, vel dapibus nibh hendrerit. Donec ultrices id ligula sed dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam egestas justo nisl, convallis ultrices quam blandit sit amet. Curabitur lobortis nibh nec metus pellentesque tristique ut ut sapien. Donec suscipit gravida ante sit amet cursus.</p>
                                <div>&nbsp;</div>
                                <div class="content-padding"><b>Download: </b><a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a><br></br></div>
                                <p><strong>Test peformed by < Company Name ></strong></p>
                                
                                <label><strong>Tags:</strong></label>
                                <br>
                                <div>
        <ul class="profile-similar-user">
          <li>
            <a href="#"class="simple-tag">
                Amsterdam
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Washington
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Sydney
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Beijing
            </a>
          </li>
        
          <li>
            <a href="#" class="simple-tag">
                Cairo
            </a>
          </li>
        
        </ul>
    </div>
                                
                                
                                </div>
                                </li>
                                </ul>
                                </li>
                                </ul>
                                </div>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="download">
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>Successes</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <h4>[Title of successes]      Year</h4> 
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                Download<a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a></div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Timestamp]</div>
                                </div>
                                
                                <label><strong>Tags</strong></label>
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
                                
                                <h4>[Title of successes]        Year</h4>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                Download<a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a></div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Timestamp]</div>
                                </div>

                                <label><strong>Tags</strong></label>
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
                                
                                
                                <div class="clear">&nbsp;</div>

                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Whitepapers</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <h4>[Title of whitepaper]</h4> 
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                Download<a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a></div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Timestamp]</div>
                                </div>
                                
                                <label><strong>Tags</strong></label>
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
                                
                                <h4>[Title of whitepaper]</h4>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                Download<a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a></div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Timestamp]</div>
                                </div>

                                <label><strong>Tags</strong></label>
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
                                
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Chamber of Commerce</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <h4>[Title of whitepaper]</h4>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                Download<a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a></div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Timestamp]</div>
                                </div>
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Brochures</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <h4>[Title of brochure]</h4>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                Download<a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a></div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Timestamp]</div>
                                </div>
                                
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Organisation chart</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <h4>Organisation chart</h4>
                                
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                Download<a href="#"><img style="width:25px; height:25px; margin-top:-13px;" src="../../../img/pdf-download-icon.png"></a></div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">[Timestamp]</div>
                                </div>
                                
                                <label><strong>Tags</strong></label>
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

                                
                                
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                </ul>
                                </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="favorites">
    
    <div class="row clearfix">
    <div class="col-sm-12">
    <label>Filter by:</label>
    <select class="form-control select">
        <option>...</option>
        <option>Date</option>
	    <option>Name</option> 								
     </select>
    </div>
    </div>
    <hr></hr>
    
    
    <div class="row">	
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<img src="../../../img/img.jpg" class="img-responsive">
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<a href="#"><b>[FirstName][LastName]</b></a><br>
					[Discipline]<br>
					<strong>Professional description:</strong>
                    <br>
                    Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
			</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form action="about-me.php#favorites" method="post"><button id="delete" class="btn btn-danger">Add to favourites</button></form>
				</div>
		</div>
    
    <hr></hr>
    
    <div class="row">	
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<img src="../../../img/img2.jpg" class="img-responsive">
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<a href="#"><b>[CompanyName]</b></a><br>
					[Company title]<br>
					<strong>Company description:</strong>
                    <br>
                    Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
			</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form action="about-me.php#favorites" method="post"><button id="delete" class="btn btn-danger">Add to favourites</button></form>
				</div>
		</div>
    <hr></hr>
    
    <div class="row">	
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<img src="../../../img/img3.jpg" class="img-responsive">
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<a href="#"><b>[FirstName][LastName]</b></a><br>
					[Discipline]<br>
					<strong>Blogpost</strong>
                    <br>
                    Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
			</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form action="about-me.php#favorites" method="post"><button id="delete" class="btn btn-danger">Add to favourites</button></form>
				</div>
		</div>
        
        
    <hr></hr>
    
    <div class="row">	
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<img src="../../../img/img4.jpg" class="img-responsive">
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<a href="#"><b>[FirstName][LastName]</b></a><br>
					[Discipline]<br>
					<strong>Job description:</strong>
                    <br>
                    Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas Aliquam erat volutpat. Maecenas <a href="#">Read more</a>
			</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form action="about-me.php#favorites" method="post"><button id="delete" class="btn btn-danger">Add to favourites</button></form>
				</div>
		</div>
        
        
    <hr></hr>
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
