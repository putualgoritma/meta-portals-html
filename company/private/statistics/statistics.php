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
                        <li class="active">Statistics</li>
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
                                <span>Activity</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                
                                
                                <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Last log in [dd-mm-yy], [hh:mm]:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Last forgotten [dd-mm-yy], [hh:mm]:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total log ins: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total forgotten: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>

      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Last upd. [dd-mm-yy], [hh:mm]:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Last froz. [dd-mm-yy], [hh:mm]:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total log ins: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total frozen [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>

      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Last chan. [dd-mm-yy], [hh:mm]:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total changed: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>
                
                                
                                
                                
                                
                                   
                          </div>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Applications</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                               	
                                <div class="row body-box">
                        <div class="col-xs-12 col-sm-6 col-md-6">Last sent [dd-mm-yy], [hh:mm]:</div>
                        <div class="col-xs-12 col-sm-6 col-md-6">Last inv. [dd-mm-yy], [hh:mm]:</div>
                      </div>
                
                      <div class="row body-box">
                        <div class="col-xs-12 col-sm-6 col-md-6">Total sent: [n]</div>
                        <div class="col-xs-12 col-sm-6 col-md-6">Total invited: [n]</div>
                      </div>
                
                      <div class="row body-box">
                        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
                        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
                      </div>
                
                      <div class="row body-box">
                        <br><div class="col-xs-12 col-sm-6 col-md-6">Last withd. [dd-mm-yy], [hh:mm]:</div>
                        <div class="col-xs-12 col-sm-6 col-md-6">Last rej. [dd-mm-yy], [hh:mm]:</div>
                      </div>
                
                      <div class="row body-box">
                        <div class="col-xs-12 col-sm-6 col-md-6">Total withdrawn: [n]</div>
                        <div class="col-xs-12 col-sm-6 col-md-6">Total rejected [n]</div>
                      </div>
                
                      <div class="row body-box">
                        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
                        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
                      </div>
                        
        
            
                                        
                                </div>
                                </li>
                                   </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <span>Favourites and reviews</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><div class="panel-body">
                                
                                <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Last time favourited by:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Last time favourited by:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Last time favourited:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">[dd-mm-yyyy], [hh:mm]</div>
      </div>

      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Last time reviewed by:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">[dd-mm-yyyy], [hh:mm]</div>
      </div>


      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Last time reviewed:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">[dd-mm-yyyy], [hh:mm]</div>
      </div>



      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Favourited by professionals:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Reviewed by professionals:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>

      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Favourited by companies:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Reviewed by companies:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>



      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Favourited by all:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Reviewed by all:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>

      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Favourited by professionals:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Reviewed by professionals:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>


      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Favourited by companies:</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Reviewed by companies:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>

      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Favourited by "all":</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Reviewed by "all":</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>
                                
                                
                                </div></li>
                            </ul>
                        </li>
                    
                    <li class="treeview active">
                            <a href="#">
                                <span>Messages and reports</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <div class="panel-body">
                             
                                <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-5">Last sent. [dd-mm-yy], [hh:mm]:</div>
        <div class="col-xs-12 col-sm-5 col-md-5">Last received message deleted [dd-mm-yy], [hh:mm]:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-5 col-md-5">Total sent: [n]</div>
        <div class="col-xs-12 col-sm-5 col-md-5">Total received messages deleted: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-5 col-md-5">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-5 col-md-5">Average per day: [n]</div>
      </div>

      <div class="row body-box">
        <br><div class="col-xs-12 col-sm-5 col-md-5">Last rec. [dd-mm-yy], [hh:mm]:</div>
        <div class="col-xs-12 col-sm-5 col-md-5">Last sent message deleted [dd-mm-yy], [hh:mm]:</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Total received: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Total sent messages deleted: [n]</div>
      </div>

      <div class="row body-box">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>


      <div class="row">
        <br><div class="col-xs-12 col-sm-6 col-md-6">Last report sent [dd-mm-yy], [hh:mm]:</div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">Total sent: [n]</div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">Average per day: [n]</div>
      </div>                                      
                                        
                                </div>  
                                </ul>            
                           </li>
                           
                           <li class="treeview active">
                            <a href="#">
                                <span>Title5</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <div class="panel-body">
                               
                               
                               <table class="table table-bordered">
          <tr>
            <td>Diplomas and certificates</td>
            <td>Total embeded: [n]<br>Average per day: [n]</td>
          </tr>

          <tr>
            <td>Photos About me</td>
            <td>Total embeded: [n]<br>Average per day: [n]</td>
          </tr>

          <tr>
            <td>Portfolio</td>
            <td>Embedded: no</td>
          </tr>

          <tr>
            <td>Presentations About me</td>
            <td>Total embeded: [n]<br>Average per day: [n]</td>
          </tr>

          <tr>
            <td>References</td>
            <td>Total embeded: [n]<br>Average per day: [n]</td>
          </tr>

          <tr>
            <td>Resume</td>
            <td>Embedded: yes</td>
          </tr>

          <tr>
            <td>VAR</td>
            <td>Embedded: yes</td>
          </tr>

          <tr>
            <td>Videos About me</td>
            <td>Total embeded: [n]<br>Average per day: [n]</td>
          </tr>
        </table>
                               
                               </div>
                               </ul>
                               </li>
                              
                           
                           
                            
                    </ul>
                    </div>                 
                 </div>
                 
                 
                 
                 
                 
                
                
    
                  </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <?php include('../../../components/private/menus/preview_menu_private.php'); ?>
                <div>
                
                
                
                </div>
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
