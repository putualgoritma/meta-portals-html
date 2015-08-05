<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."professional/public/profile/about-me.php"; ?>
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
<div class="wrapper-private row-offcanvas row-offcanvas-left">
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
                        <li class="active">Aboutme</li>
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
	<li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About me</a></li>  
    <li role="presentation"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Personal info</a></li>
    <li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab">Portfolio</a></li>
    <li role="presentation"><a href="#availability" aria-controls="availability" role="tab" data-toggle="tab">Availability</a></li>
    <li role="presentation"><a href="#tests" aria-controls="tests" role="tab" data-toggle="tab">Tests</a></li>
    <li role="presentation"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">Upload</a></li>
    <li role="presentation"><a href="#favorites" aria-controls="favorites" role="tab" data-toggle="tab">Favorites</a></li>
  </ul>

  <!-- Tab panes -->
 <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="about">
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
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label><strong>Last name prefix</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label><strong>Last name</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Street name</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label><strong>House number</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label><strong>Suffix</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Postal code</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>City</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Province/country</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Country</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label><strong>Main email address</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Telephone number</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Mobile number</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Skype</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Facebook messenger</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                <div class="row body-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Google talk</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>ICQ</strong></label>
                                <input type="text" class="form-control">
                                </div>
                                </div>
                                
                                </div>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <div>&nbsp;</div>
                        <div class="btn-pull-right"><button id="save" class="btn btn-danger"><i class="fa fa-save"></i> Save/Edit</button></div>
                        
                        
                    </ul>
                    </div>
                                                             
    </div>
  
  
  
  
    <div role="tabpanel" class="tab-pane" id="info">
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
                                <label><strong>Describe yourself</strong></label>
                                   <textarea class="form-control" rows="3"></textarea>
                                   <br>
                                   <label><strong>My ambitions</strong></label>
                                   <textarea class="form-control" rows="3"></textarea>
                                   <br>
                                   <label><strong>Tag</strong></label>
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
                                <span>Professional information</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                               	<div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label><strong>Gender</strong></label>
                                <br>
                                  <label class="radio-inline">
                                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                      Male
                                  </label>
                                   <label class="radio-inline">
                                     <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                                     Female
                                       </label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Date of birth</strong></label>
                                <input type="dateofbirth" class="form-control datepicker" id="datepicker" size="50" placeholder="yyyy/mm/dd">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <label><strong>Place of birth</strong></label>
                                <input type="placeofbirth<" class="form-control" id="placeofbirth" size="50" placeholder="Place of birth">
                                </div>
                                
                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                <label>Pick a nationality</label>
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
                        
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                <label><strong>Drivers license</strong></label>
                                <br>
								<label class="checkbox-inline">
                                   <input type="checkbox"/>
                                   Car
                                     </label>
                                       <label class="checkbox-inline">
                                     <input type="checkbox"/>
                                     Truck
                                       </label>
                                       <label class="checkbox-inline">
                                     <input type="checkbox"/>
                                     Bus
                                       </label>
                                       <label class="checkbox-inline">
                                     <input type="checkbox"/>
                                     Motorcycle
                                       </label>
                                </div>
                                </div>
                                </div>
                                </li>
                                   </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Embed photo</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><div class="panel-body">
                                <select class="form-control select">
                                                <option>select photo to edit</option>
                                                <option>current photo 2</option>
                                                <option>Photo 3</option>
                                            </select>
                                            <div>&nbsp;</div>
                                <label><strong>Title photo</strong></label>            
                                <input type="titlephoto" class="form-control" id="titlephoto" size="50" placeholder="Title photo">
                                <br>
                                <label><strong>Enter picture url</strong></label>
                                <input type="url" class="form-control" id="url" size="50" placeholder="Enter picture url">
                                <br>
                                <img src="" class="img-responsive" alt="Preview photo" style="height:250px; width:250px; border: 2px solid #999;">
                                <br>
								<label><strong>Description photo</strong></label>
                                <textarea name="description" class="form-control" id="description" rows="5" placeholder="Description photo"></textarea>
                                <br>
								<div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button>
<button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
                                <div class="clear">&nbsp;</div>
                                </div></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Embed video</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <select class="form-control select">
                                                <option>select video to edit</option>
                                                <option>current video 2</option>
                                                <option>video 3</option>
                                            </select>
                                            <div>&nbsp;</div>
                                <label><strong>Title video</strong></label>            
                                <input type="titlevideo" class="form-control" id="titlevideo" size="50" placeholder="Title video">
                                <br>
                                <label><strong>Select a video channel</strong></label>
                                <select class="form-control select">
                                                <option>youtube</option>
                                                <option>vines video</option>
                                                <option>video 3</option>
                                            </select>
                                            <div>&nbsp;</div>
                                <label><strong>Video url</strong></label>
                                <input type="videourl" class="form-control" id="videourl" size="50" placeholder="Video url">
                                <br>
                                  <div class="video-container">
                                     <embed width="420" height="315" src="http://www.youtube.com/v/d1cianvOyJU">
                                 </div>
                                 
                                <br>
								<label><strong>Description Video</strong></label>
                                <textarea name="descriptionvideo" class="form-control" id="descriptionvideo" rows="5" placeholder="Description Video"></textarea>
                                <br>
								<label>Tags</label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button>
<button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
                                <div class="clear">&nbsp;</div>
                                </div></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Embed presentation </span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <select class="form-control select">
                                    <option>Current presentation 2</option>
                                    <option>presentattion 3</option>
                                    <option>presentattion 4</option>
                                </select>
                                <div>&nbsp;</div>
								<label><strong>Title presentation</strong></label>
                                <input type="titlepresentation" class="form-control" id="titlepresentation" size="50" placeholder="Title presentation">
								<br>
								<iframe src="//www.slideshare.net/slideshow/embed_code/43068913" width="425" height="355" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/TheAxisEpicsauce/ghibli-43068913" title="Ghibli" target="_blank">Ghibli</a> </strong> from <strong><a href="//www.slideshare.net/TheAxisEpicsauce" target="_blank">TheAxisEpicsauce</a></strong> </div>
                                <br>
								<label><strong>Embed code presentation</strong></label>
                                <textarea name="embedcodepresentation" class="form-control" id="embedcodepresentation" rows="5" placeholder="Embed code presentation"></textarea>
                                <br>
								<label><strong>Description presentation</strong></label>
                                <textarea name="descriptionpresentation" class="form-control" id="descriptionpresentation" rows="5" placeholder="Description presentation"></textarea>
                                <br>
								<label>Tags</label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button>
<button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
                                <div class="clear">&nbsp;</div>
                                </div></li>
                            </ul>
                        </li>
                        
                    </ul>
                    </div>
                                                             
    </div>
    
    <div role="tabpanel" class="tab-pane" id="portfolio">
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    
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
                                <select class="form-control select">
                                                <option>select video to edit</option>
                                                <option>current video 2</option>
                                                <option>video 3</option>
                                            </select>
                                            <div>&nbsp;</div>
                                <label><strong>Title video</strong></label>
                                <input type="titlevideo" class="form-control" id="titlevideo" size="50" placeholder="Title video">
                                <br>
							<label><strong>Select a video channel</strong></label>
                            <select class="form-control select">
                                                <option>youtube</option>
                                                <option>vines video</option>
                                                <option>video 3</option>
                                            </select>
                                            <div>&nbsp;</div>
                           <label><strong>Video url</strong></label>
                           <input type="videourl" class="form-control" id="videourl" size="50" placeholder="Video url">
                           <br>
                           <div class="video-container">
                                     <embed width="420" height="315" src="http://www.youtube.com/v/6YZlFdTIdzM"></iframe>
                                 </div>
                           <br>
							<label><strong>Description video</strong></label>
                            <textarea name="descriptionvideo" class="form-control" id="descriptionvideo" rows="5" placeholder="Description video"></textarea>
							<br>
							<label>Tags</label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove All Tag</button>
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
                                <span>Photos</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                    <select class="form-control select">
                                              <option>select photo to edit</option>
                                              <option>current photo 2</option>
                                              <option>Photo 3</option>
                                          </select>
                                            <div>&nbsp;</div>
                                <label><strong>Title photo</strong></label>
                                <input type="titlephoto" class="form-control" id="titlephoto" size="50" placeholder="Title photo">
                                <br>
							<label><strong>Enter picture url</strong></label>
                           <input type="pictureurl" class="form-control" id="pictureurl" size="50" placeholder="Enter picture url">
                           <br>
                           <img src="../../../img/onze.mensen.jpg" class="img-responsive" alt="Preview photo" style="height:300px; width:100%; border: 2px solid #999;">
                           <br>
							<label><strong>Description Document</strong></label>
                            <textarea name="descriptiondocument" class="form-control" id="descriptiondocument" rows="5" placeholder="Description Document"></textarea>
							<br>
							<label>Tags</label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right">
                                <button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button><button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
                                <div class="clear">&nbsp;</div>
                                </div>
                                </li>
                                   </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Documents</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><div class="panel-body">
                                <label><strong>Select a document to edit</strong></label>
                                <select class="form-control select">
                                              <option>Document A</option>
                                              <option>Document B</option>
                                              <option>tomato</option>
                                          </select>
                                            <div>&nbsp;</div>
                                <label><strong>Title Document</strong></label>
                                <input type="titledocument" class="form-control" id="titledocument" size="50" placeholder="Title Document">
                                <br>
                                <label><strong>Type document</strong></label>
                                 <select class="form-control select">
                                              <option>Select a type</option>
                                              <option>type</option>
                                              <option>tomato</option>
                                          </select>
								<div>&nbsp;</div>
								<label><strong>Upload document </strong></label>
                                <input type="uploaddocument" class="form-control" id="uploaddocument" size="50" placeholder="Upload Document">
                                <br>
                                <input type="file" id="exampleInputFile">
                                <br>
                                <label><strong>Description photo</strong></label>
                            <textarea name="descriptionphoto" class="form-control" id="descriptionphoto" rows="5" placeholder="Description photo"></textarea>
							<br>
							<label>Tags</label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger">Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right">
                                <button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button> <button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
                                <div class="clear">&nbsp;</div>
                                </div></li>
                            </ul>
                        </li>
                        
                        
                        
                    </ul>
                    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="availability">
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
    <li class="treeview active">
    <a href="#">
    <span>Availability</span>
    <i class="fa fa-plus-circle pull-right"></i>
    </a>
    <ul class="treeview-menu">
    <li>
    <div class="panel-body">
    <div>
        <label><strong>I'm available</strong></label>
       <input type="dateofbirth" class="form-control datepicker" id="datepicker" size="50" placeholder="yyyy/mm/dd">
    </div>   
    <div>&nbsp;</div>
       <hr></hr>
       <div>
       <label><strong>I'm looking for a</strong></label>
       </div>
       <div class="row body-box2">
         <div class=" col-md-4 col-sm-6 col-xs-12">
           <label class="checkbox">
             <input type="checkbox"/>
             Temporary
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Internship
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Project [Freelancer]
             </label>
           </div>
           
         <div class="col-md-4 col-sm-6 col-xs-12">
           <label class="checkbox">
             <input type="checkbox"/>
             full time contract
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             part time contract
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Volunteer
             </label>
           </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
           <label class="checkbox">
             <input type="checkbox"/>
             Job [Professional]
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Permanent
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Traineeship 
             </label>
           </div>
         
         
       </div>
       <hr></hr>
       <div>
       <label><strong>Profesional Desired salary per year based on 40 hours a week</strong></label>
       </div>
       <div class="row">
         <div class="col-xs-12 col-sm-4 col-md-4">
           <input class="form-control bfh-number" value="10" type="number"><br>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <input class="form-control bfh-number" value="10" type="number"><br>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <select class="form-control select">
             <option>Select a currency</option>
             <option>Euro</option>
             <option>Pound</option>
             <option>Turkish Lira</option>
             </select>
           </div>
       </div>
       
       <hr></hr>
       <div>
       <label><strong>Freelancer Desired fee per hour</strong></label>
       </div>
       <div class="row">
         <div class="col-xs-12 col-sm-4 col-md-4">
           <input class="form-control bfh-number" value="10" type="number"><br>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <input class="form-control bfh-number" value="10" type="number"><br>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <select class="form-control select">
             <option>Select a currency</option>
             <option>Euro</option>
             <option>Pound</option>
             <option>Turkish Lira</option>
             </select>
           </div>
       </div>
       
       <hr></hr>
       <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6">
           <label><strong>VAR valid until if applicable</strong></label>
           <input type="dp1" class="form-control" id="dp1" size="50" placeholder="VAR valid until if applicable"><br>
           </div>
         <div class="col-xs-12 col-sm-6 col-md-6">
           <label><strong>CoC number </strong></label>
           <input type="coconumber" class="form-control" id="coconumber" size="50" placeholder="CoC number"><br>
           </div>
       </div>
		 <div class="row">
		   <div class="col-xs-12 col-sm-6 col-md-6">
		     <label><strong>VAT number </strong></label>
		     <input type="vatnumber" class="form-control" id="vatnumber" size="50" placeholder="VAT number"><br>
		     </div>
		   <div class="col-xs-12 col-sm-6 col-md-6">
		     <label><strong>Fiscal number</strong></label>
		     <input type="fiscalnumber" class="form-control" id="fiscalnumber" size="50" placeholder="Fiscal number"><br>
		     </div>
		   </div>
       
       <hr></hr>
       <div>
       <label><strong>Type of internship</strong></label>
            <select multiple class="form-control">
              <option>Graduation internship</option>
              <option>Research internship</option>
              <option>Assisting internship</option>
              <option>Tester internship</option>
            </select>
       </div>
       <div>&nbsp;</div>
       <hr></hr>
       <div>
       <label><strong>Desired duration of contract</strong></label>
       </div>
       <div class="row">
         <div class="col-xs-12 col-sm-4 col-md-4">
           <input class="form-control bfh-number" value="10" type="number"><br>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <input class="form-control bfh-number" value="10" type="number"><br>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
			months
           </div>
       </div>
       
       <hr></hr>
       
       <div class="row">
         <div class="col-xs-12 col-sm-4 col-md-4">
           I'm available for
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <input class="form-control bfh-number" value="10" type="number">
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
			hours per week
           </div>
       </div>
       
        <hr></hr>
        <div>
        <label><strong>Available days per week</strong></label>
        </div>
        <div class="row body-box2">
         <div class="col-xs-12 col-sm-6 col-md-6">
           <label class="checkbox">
             <input type="checkbox"/>
             Monday 
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Thuesday
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Wednesday
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Thursday
             </label>
           </div>
         <div class="col-xs-12 col-sm-6 col-md-6">
            
             <label class="checkbox">
             <input type="checkbox"/>
             Friday
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Saturday
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Sunday
             </label>
           </div>
       </div>
       
       <hr></hr>
       <div>
       <label><strong>Desired working hours</strong></label>
       </div>
       <div class="row body-box2">
         <div class="col-xs-12 col-sm-4 col-md-4">
           <label class="checkbox">
             <input type="checkbox"/>
             Regular 
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Weekdays
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Fixed
             </label>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <label class="checkbox">
             <input type="checkbox"/>
             Evenings
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Weekends
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Irregular
             </label>
           </div>
         <div class="col-xs-12 col-sm-4 col-md-4">
           <label class="checkbox">
             <input type="checkbox"/>
             Nights
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Flexible
             </label>
             <label class="checkbox">
             <input type="checkbox"/>
             Shifts
             </label>
           </div>
         
       </div>
       
       <hr></hr>
       <div>
       <label><strong>I'd like to work...</strong></label>
       </div>
      <div class="row">
       <div class="col-xs-12 col-sm-6 col-md-4">
       <label><strong>...within the branches</strong></label>
       <select multiple class="form-control">
              <option>Branche 1</option>
              <option>Branche 2</option>
              <option>Branche 3</option>
              <option>Branche 4</option>
              <option>Branche 5</option>
            </select>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-4">
       <label><strong>...within the country</strong></label>
       <select multiple class="form-control">
              <option>Country 1</option>
              <option>Country 2</option>
              <option>Country 3</option>
              <option>Country 4</option>
              <option>Country 5</option>
            </select>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-4">
       <label><strong>...in the province</strong></label>
       <select multiple class="form-control">
              <option>Province 1</option>
              <option>Province 2</option>
              <option>Province 3</option>
              <option>Province 4</option>
              <option>Province 5</option>
            </select>
       </div>
       </div>
       
       <hr></hr>
       
       <div class="row">
       <div class="col-xs-12 col-sm-4 col-md-4">
       <label><strong>Maximum travel distance</strong></label>
        <input class="form-control bfh-number" value="10" type="number"><br>
       </div>
       <div class="col-xs-12 col-sm-4 col-md-4">
       <label><strong>Willing to relocate</strong></label>
       <br>
       <label class="radio-inline">
                                      <input type="radio" name="optionsRadios" id="optionsRadios1" checked>
                                      Yes
                                  </label>
                                   <label class="radio-inline">
                                     <input type="radio" name="optionsRadios" id="optionsRadios1">
                                     No
                                       </label>
       </div>
       <div class="col-xs-12 col-sm-4 col-md-4">
       <label><strong>Work permit EU </strong></label>
       <br>
       <label class="radio-inline">
                                      <input type="radio" name="optionsRadios2" id="optionsRadios1" checked>
                                      Yes
                                  </label>
                                   <label class="radio-inline">
                                     <input type="radio" name="optionsRadios2" id="optionsRadios1">
                                     No
                                       </label>
       </div>
       </div>
       
       
       
    </div>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </div>
    
    <div role="tabpanel" class="tab-pane" id="tests">
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    
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
                                <select class="form-control select">
                                    <option>Select Test to edit</option>
                                    <option>Current Type of test B</option>
                                    <option>Type of test A</option>
                                </select>
                                <div>&nbsp;</div>
								<label><strong>Type of test x:</strong></label>
                                <select class="form-control select">
                                    <option>Type of test x</option>
                                </select>
                                <div>&nbsp;</div>
                                <label><strong>Type of test x:</strong></label>
                                <select class="form-control select">
                                    <option>Result of type of test x</option>
                                 </select>
                                    <div>&nbsp;</div>
                            	<label><strong>Title test:</strong></label>
								<input type="titletest" class="form-control" id="titletest" size="50" placeholder="Test 2">
                                <br>
                                <label><strong>Enter result url:</strong></label>
                                <input type="url" class="form-control" id="url" size="50" placeholder="https://www.site.com/test.pdf">
                                <br>
                                <label><strong>Date:</strong></label>
                                <input type="date" class="form-control datepicker" id="date" size="50" placeholder="yyyy/mm/dd">
                                <br>
                                <label><strong>Description test:</strong></label>
								<textarea name="descriptiontest" class="form-control" id="descriptiontest" rows="5" placeholder="Description test"></textarea>
                                <br>
                                <label><strong>Tags</strong></label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger">Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right"><button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
                                <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button></div>

                                <div class="clear">&nbsp;</div>



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
                                <label><strong>Edit:</strong></label>
                                <select class="form-control select">
                                    <option>Free test 2</option>
                                    <option>Free test 1</option>
                                </select>
                                <div>&nbsp;</div>
                            	<label><strong>Title test:</strong></label>
								<input type="titletest" class="form-control" id="titletest" size="50" placeholder="Test 2">
                                <br>
                                <label><strong>Enter result url:</strong></label>
                                <input type="url" class="form-control" id="url" size="50" placeholder="https://www.site.com/test.pdf">
                                <br>
                                <label><strong>Date:</strong></label>
                                <input type="date" class="form-control datepicker" id="date" size="50" placeholder="yyyy/mm/dd">
                                <br>
                                <label><strong>Description test:</strong></label>
								<textarea name="descriptiontest" class="form-control" id="descriptiontest" rows="5" placeholder="Description test"></textarea>
                                <br>
                                <label><strong>Tags</strong></label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger">Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button>
<button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i> Delete</button></div>
                                <div class="clear">&nbsp;</div>



                                </div>
                                </li>
                                </ul>
                                </li>
                                </ul>
                                </div>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="upload">
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>Diplomas and certificates</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <label><strong>Select diploma or certificate</strong></label>
                                <select class="form-control select">
									<option>Diplomas</option>
						   			<option>Certificates</option>
 								</select>
                                <div>&nbsp;</div>
                                <label><strong>Select Diploma or certificate to edit</strong></label>
                                <select class="form-control select">
                                    <option>Diploma A</option>
                                    <option>Diploma B</option>
                                </select>
                                <div>&nbsp;</div>
                                <label><strong>Title diploma</strong></label>
                                <input type="text" name="titlediploma" id="titlediploma" class="form-control" placeholder="Title diploma">
                                <br>
                                <label><strong>Year:</strong></label>
                                <input type="text" name="year" id="year" class="form-control" placeholder="Year">
                                <br>
                                <label><strong>Upload diploma</strong></label>
                                <input type="file" id="exampleInputFile">
                                <br>
                                <label><strong>Description diploma</strong></label>
                                <textarea name="descriptiondiploma" class="form-control" id="descriptiondiploma" rows="5" placeholder="Description diploma"></textarea>
								<br>
                                <label><strong>Tags</strong></label>
                                <div>
                                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                                </div>
                                <div>&nbsp;</div>
								<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove All Tag</button>
                                <div>&nbsp;</div>
                                <div class="btn-pull-right"><button class="btn btn-defaultprofdelete"><i class="fa fa-trash-o"></i>Delete</button>
                                <button class="btn btn-danger"><i class="fa fa-edit"></i> Add another</button></div>
                                <div class="clear">&nbsp;</div>

                                </div>
                                </li>
                                </ul>
                                </li>
                                </ul>
                                </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="favorites">
    <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    <div class="sidebar accordion">
    <ul class="sidebar-menu">
    <li class="treeview active">
    <a href="#">
    <span>Favorites</span>
    <i class="fa fa-plus-circle pull-right"></i>
    </a>
    <ul class="treeview-menu">
    <li>
    <div class="panel-body">
    <div class="row clearfix">
    <div class="col-sm-12">
    <label class="checkbox-inline">
          <input type="checkbox"/>
            Select All
     </label>
    </div>
    <div>&nbsp;</div>
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
    <div class="row clearfix">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
    <label class="checkbox-inline">
          <input type="checkbox"/>
     </label>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
    <img src="../../../img/img.jpg" class="img-responsive">
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
    <a href="#"><b>[FirstName][LastName]</b></a><br>
					[Discipline]<br><br>
					<b>Professional description:</b>
                   <p>Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas Aliquam erat volutpat. Maecenas <a href="#">Read more</a></p>
    </div>
    </div>
    <hr></hr>
    
    <div class="row clearfix">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
    <label class="checkbox-inline">
          <input type="checkbox"/>
     </label>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
    <img src="../../../img/img2.jpg" class="img-responsive">
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
    <a href="#"><b>[Job title]</b></a><br>
					[Company name]<br><br>
					<b>Job description:</b>
                   <p>Aliquam pulvinar sapien ut turpis scelerisque, id hendrerit leo lacinia. Aliquam erat volutpat. Maecenas Aliquam erat volutpat. Maecenas <a href="#">Read more</a></p>
    </div>
    </div>
    <hr></hr>
    <div class="clear"><button class="btn btn-defaultprofdelete pull-right"><i class="fa fa-trash-o"></i> Delete</button></div>
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
