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
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12">
                    <div class="breadcrumb">
                    <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <ul class="breadcrumb-list">
                     <li><i class="fa fa-dashboard"></i> <a href="../../../general/public/home/index.php">Home</a></li>
                     <li><a href="../index.php">Company Home</a></li>
                     <li class="active">About Us</li>
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
                
                <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#company" aria-controls="home" role="tab" data-toggle="tab">Company info</a></li>
    	<li role="presentation" class="active"><a href="#about" aria-controls="home" role="tab" data-toggle="tab">About us</a></li>  
    </ul>
                
                
                
                 <!-- Tab panes -->
     <div class="tab-content">
  
          <div role="tabpanel" class="tab-pane" id="company">
       
       <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Visitors'address "nevenlocatie" [Company name]</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Address</strong></label>
              
              <br>
              
              <p>[Company name][Business entity]</p>
              
              <p>[Street][Number][Suffix]</p>
              
              <p>[Postal code]</p>
              
              <p>[City]</p>
              
              <p>[Country</p>
              
              <p>[Number of employees]</p>
              
              <hr>
              
              <label><strong>Contact</strong></label>
              <br>
              
              <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					Telephone Number:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[Telephone number]
       			</div>
		    </div>
          
          
            <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					Website:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[Website]
       			</div>
		    </div>
          
          
            <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					Email address:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[Email address]
       			</div>
		    </div>
            
            <hr>
            
            <label><strong>Messengers</strong></label>
            <br>
            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-skype"></i></a>
                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-comment"></i></a>
                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-comments"></i></a>
                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-phone"></i></a>
              
              <hr>
              
              
              <label><strong>Opening hours</strong></label>
              <br>
              
              <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
				    Monday &nbsp; ...to... <br>				   

       			</div>
                <div class="col-md-6 col-ms-6 col-xs-12">
				    Friday &nbsp; ...to... <br>				   

       			</div>


		    </div> 
          
          
             <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
				    Tuesday &nbsp; ...to... <br>				   

       			</div>
                <div class="col-md-6 col-ms-6 col-xs-12">
				    Saturday &nbsp; ...to... <br>				   

       			</div>


		    </div> 
          
          
             <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
				    Wednesday &nbsp; ...to... <br>				   

       			</div>
                <div class="col-md-6 col-ms-6 col-xs-12">
				    Sunday &nbsp; ...to... <br>				   

       			</div>


		    </div> 
          
          
             <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
				    Thursday &nbsp; ...to... <br>				   

       			</div>
             


		    </div>
              

              
              
              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Payment methods</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row">
		<div class="col-xs-6 col-sm-1 col-md-1 text-center" st>
				<label for="ideal"><img src="../../../img/iDeal.png" class="payment-icons" /> </label><br>
					
				
		</div>
		
		<div class="col-xs-6 col-sm-1 col-md-1 text-center">	
				<label for="visa"><img src="../../../img/Visa.png" class="payment-icons" /></label><br>
				
		</div>
		<div class="col-xs-6 col-sm-1 col-md-1 text-center">	
				<label for="mastercard"><img src="../../../img/Mastercard.png" class="payment-icons"  /></label><br>
				
		</div>	


		<div class="col-xs-6 col-sm-1 col-md-1 text-center">		
				<label for="americ_expr"><img src="../../../img/American-Express.png" class="payment-icons" /></label><br>
				
		</div>	


		<div class="col-xs-6 col-sm-1 col-md-1 text-center">		
				<label for="paypal"><img src="../../../img/PayPal-logo.png" class="payment-icons" /></label><br>
				
		</div>	


		<div class="col-xs-6 col-sm-1 col-md-1 text-center">		
				<label for="skrill"><img src="../../../img/skrill.png" class="payment-icons" /></label><br>
				
		</div>
		
		<div class="col-xs-6 col-sm-1 col-md-1 text-center">		
				<label for="acceptgiro"><img src="../../../img/acceptgiro.png" class="payment-icons"  /></label><br>
				
		</div>	
		<div class="col-xs-6 col-sm-1 col-md-1 text-center">		
				<label for="banktransfer"><img src="../../../img/bank-transfer.jpg" class="payment-icons"  /></label>
				<br>
				
		</div>	
	</div>
    
    
    <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					BIC/SWIFT
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[BIC/SWIFT]
       			</div>
		    </div> 
          
          <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					Bank account number:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[Back account number]
       			</div>
		    </div> 
          
          
            <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					Bank name:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[Bank name]
       			</div>
		    </div> 
          
            <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					Bank location:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[Bank location]
       			</div>
		    </div> 
              <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					CoC number:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[CoC number]
       			</div>
		    </div> 
          

               <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					VAT number:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[VAT number]
       			</div>
		    </div> 
          
           <div class="row body-box">
				<div class="col-md-6 col-ms-6 col-xs-12">
					Fiscal number:
       			</div>

       			<div class="col-md-6 col-ms-6 col-xs-12">
       				[Fiscal number]
       			</div>
		    </div> 
              
              </div>
              </li>
              </ul>
              </li>
              
              
               <li class="treeview active">
          <a href="#">
            <span>Partners</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              <div class="row">
				<div class="col-md-3 col-ms-3 col-xs-12" style="word-wrap: break-word;">
                <b>Title of partner 1</b><br>
                ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
                ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
                    
                </div>
                <div class="col-md-3 col-ms-3 col-xs-12" style="word-wrap: break-word;">
                <b>Title of partner 2</b><br>
                ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
                ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
                    
                </div>
                   
                <div class="col-md-3 col-ms-3 col-xs-12" style="word-wrap: break-word;">
                <b>Title of partner 3</b><br>
                ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
                ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
                    
                </div>
                   
                <div class="col-md-3 col-ms-3 col-xs-12" style="word-wrap: break-word;">
                <b>Title of partner 4</b><br>
                ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
                ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
                    
                </div>

       		
		    </div>
              </div></li></ul></li>
              
              
              </ul>
              </div>
       
        </div>


  <div role="tabpanel" class="tab-pane active" id="about">
  <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    
    
 
    <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Company description </span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					Number of employees<br>
					
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					[n]<br>
				
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					Staff association [Company name]<br>
				
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					Staff asociation<br>
				
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					Description [Company name]<br>
				
					</div>
				</div>
				<div>&nbsp;</div>
                
                <label><strong>Discription [Company name]</strong></label>
                <br>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                
                <label><strong>Ambitions [Company name]</strong></label>
                <br>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                
                <label><strong>Keywords</strong></label>
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
            <span>Photo</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              <label><strong>[Title photo]</strong></label>
              <br>
               <img src="../../../img/blog6.jpg" class="img-responsive" alt="Photo" style="height:250px; width:100%; border: 2px solid #999;">				
               
               <div>&nbsp;</div>
               
               <label><strong>[Description video]</strong></label>
               <br>
               <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
               <div>&nbsp;</div>
               <div class="row">
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
            <span>Video</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              <label><strong>[Title video]</strong></label>
              <br>
              <embed width="100%" height="315" src="//www.youtube.com/embed/d1cianvOyJU" frameborder="0" allowfullscreen></embed>
				<div>&nbsp;</div>
                <label><strong>[Description video]</strong></label>
                <br>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                <div>&nbsp;</div>
                
                <div class="row">
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
            <span>Presentation</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              <label><strong>[Title presentation]</strong></label>
              <br>
              <img src="../../../img/blog6.jpg" class="img-responsive" alt="Presentation" style="height:250px; width:100%; border: 2px solid #999;">
              <div>&nbsp;</div>
              
              <label><strong>[Description presentation]</strong></label>
              <br>
              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
              <div>&nbsp;</div>
              
              <div class="row">
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
