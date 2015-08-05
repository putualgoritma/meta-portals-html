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

  </head>

<body>
<!-- header logo: style can be found in header.less -->
<?php include('../../../components/public/menus/top_menu_public.php'); ?>
<div class="wrapper-public row-offcanvas row-offcanvas-left">
<div class="container">

                <!-- Main content -->
                <section class="content">
                <section class="content-header col-md-12">
                    <div class="breadcrumb">
                    <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="breadcrumb-list">
                    <li><i class="fa fa-dashboard"></i> <a href="../../../general/public/home/index.php">Home</a></li>
                    <li><a href="../index.php">Blog home</a></li>
                    <li class="active">Post name</li>
                    </ul>
                    
                    </div>
                    </div>

                    </div>
                </section>
                <!-- Content Header (Page header) -->
                
                <div>&nbsp;</div>
                <?php include('../../../components/public/banner.php'); ?>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div class="row clearfix">
                <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="box panel-body box-danger">
                    <div>
            <img src="../../../img/blog.jpg" class="img-responsive">
          </div>
          <div>&nbsp;</div>
                    <div>
             <i class="fa fa-user"></i> by: Lorem ipsum dolor sit amet
              
              </div>
                
				<h3>[Title blog post]</h3>
                 
				<i class="fa fa-calendar"></i> July 02, 2015
					<input id="input-id" type="number" class="rating" min=1 max=5 value="3" data-size="xs" disabled="true" data-show-clear="false" data-show-caption="false">
                
                <div>&nbsp;</div>
                
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,<p></p> pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.<p></p> Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.

Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.<p></p> Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla.<p></p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>

<hr>

<label><strong>Tags:</strong></label>
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

<div class="row">
	<div class="col-md-10 col-sm-12 col-xs-12">
<div class="media">
   <a class="pull-left" href="#">
      <img class="media-object" src="../../../img/avatar5.png"  style="width:50px; height:50px;" alt="Media Object">
   </a>
   <div class="media-body">
      <textarea class="form-control" placeholder="comment..." rows="7" cols="100"></textarea></b>
	</div>
</div>
</div>
</div>

<hr>

<div class="btn-pull-right"><button class="btn btn-defaultblogs">Submit</button></div>
<div class="clear">&nbsp;</div>
<hr>

<select class="select form-control">
            <option>Best</option>
            <option>Latest</option>
            <option>Rating</option>
            
            </select>
          <div>&nbsp;</div>
          
          <div class="row">
<div class="col-md-10 col-sm-12 col-xs-12">
<div class="media">
   <a class="pull-left" href="#">
       <img class="media-object" src="../../../img/avatar5.png"  style="width:50px; height:50px;"
      alt="Media Object">
   </a>
   <div class="media-body">
      <b class="media-heading">Author</b> [Date]<br>
      This is some sample text. This is some sample text. 
      This is some sample text. This is some sample text.
      This is some sample text. This is some sample text. 
      This is some sample text. This is some sample text.
	  
      <div class="media">
         <a class="pull-left" href="#">
             <img class="media-object" src="../../../img/avatar5.png"  style="width:50px; height:50px;"
            alt="Media Object">
         </a>
         <div class="media-body">
            <b class="media-heading">Author -></b> Author [Date]<br>
            This is some sample text. This is some sample text. 
            This is some sample text. This is some sample text.
            This is some sample text. This is some sample text. 
            This is some sample text. This is some sample text.<br>
			<img src="../../../img/thumbs_up.jpg" ><span class="badge">1</span>
			<img src="../../../img/thumbs_down.jpg" > <span class="badge">10</span>
			Reply
         </div>
      </div>
	  
	  
<div class="media">
   <a class="pull-left" href="#">
      <img class="media-object" src="../../../img/avatar5.png"  style="width:50px; height:50px;"
      alt="Media Object">
   </a>
   <div class="media-body">
		<textarea class="form-control" placeholder="comment..." rows="5" cols="100"></textarea></b>
	</div>
</div>


</div>
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
