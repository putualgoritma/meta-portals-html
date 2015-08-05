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
                     <li><a href="../index.php">Professional Home</a></li>
                     <li class="active">Expertise</li>
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
                
                <div class="sidebar accordion">
    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <span>Primary discipline</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                <label><strong>1. The first question (in this example an open question) an about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>2.The second question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>3.The third question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <div>&nbsp;</div>
                                <label>4.The fourth question (in this example an open question) about the chosen main discipline.</label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 16
                                <div>&nbsp;</div>
                                <label><strong>5.The fifth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>6.The sixth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Lorum ipsum.</p>
                                
                                <label><strong>7.The seventh question (in this example an open question) about the chosen main discipline.</strong></label>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 4
                                <br>
                                <input type="radio" name="Option" value="option"> Option 8
                                <br>
                                <input type="radio" name="Option" value="option"> Option 9
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 17
                                <br>
                                <input type="radio" name="Option" value="option"> Option 19
                                <br>
                                <input type="radio" name="Option" value="option"> Option 44
                                </div>                                
                                </div>
                                <div>&nbsp;</div>
                                
                                <label><strong>8.The eigth question (in this example an open question) about the chosen main discipline.</strong></label>
                                
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>9.The ninth question (in this example an open question) about the chosen main discipline.<br>From 20 February 2004 to 10 april 2008</strong></label>
                                
                                <div>&nbsp;</div>
                                <label><strong>10.The tenth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiu</p>
                                
                                
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Secondary discipline</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                
                                <label><strong>1. The first question (in this example an open question) an about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>2.The second question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>3.The third question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <div>&nbsp;</div>
                                <label>4.The fourth question (in this example an open question) about the chosen main discipline.</label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 16
                                <div>&nbsp;</div>
                                <label><strong>5.The fifth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>6.The sixth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Lorum ipsum.</p>
                                
                                <label><strong>7.The seventh question (in this example an open question) about the chosen main discipline.</strong></label>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 4
                                <br>
                                <input type="radio" name="Option" value="option"> Option 8
                                <br>
                                <input type="radio" name="Option" value="option"> Option 9
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 17
                                <br>
                                <input type="radio" name="Option" value="option"> Option 19
                                <br>
                                <input type="radio" name="Option" value="option"> Option 44
                                </div>                                
                                </div>
                                <div>&nbsp;</div>
                                
                                <label><strong>8.The eigth question (in this example an open question) about the chosen main discipline.</strong></label>
                                
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>9.The ninth question (in this example an open question) about the chosen main discipline.<br>From 20 February 2004 to 10 april 2008</strong></label>
                                
                                <div>&nbsp;</div>
                                <label><strong>10.The tenth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiu</p>
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Third discipline</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                
                                <label><strong>1. The first question (in this example an open question) an about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>2.The second question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>3.The third question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <div>&nbsp;</div>
                                <label>4.The fourth question (in this example an open question) about the chosen main discipline.</label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 16
                                <div>&nbsp;</div>
                                <label><strong>5.The fifth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>6.The sixth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Lorum ipsum.</p>
                                
                                <label><strong>7.The seventh question (in this example an open question) about the chosen main discipline.</strong></label>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 4
                                <br>
                                <input type="radio" name="Option" value="option"> Option 8
                                <br>
                                <input type="radio" name="Option" value="option"> Option 9
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 17
                                <br>
                                <input type="radio" name="Option" value="option"> Option 19
                                <br>
                                <input type="radio" name="Option" value="option"> Option 44
                                </div>                                
                                </div>
                                <div>&nbsp;</div>
                                
                                <label><strong>8.The eigth question (in this example an open question) about the chosen main discipline.</strong></label>
                                
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>9.The ninth question (in this example an open question) about the chosen main discipline.<br>From 20 February 2004 to 10 april 2008</strong></label>
                                
                                <div>&nbsp;</div>
                                <label><strong>10.The tenth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiu</p>
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                
                                <li class="treeview active">
                            <a href="#">
                                <span>Fourth discipline</span>
                                <i class="fa fa-plus-circle pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <div class="panel-body">
                                
                                <label><strong>1. The first question (in this example an open question) an about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>2.The second question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>
                                
                                <label><strong>3.The third question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <div>&nbsp;</div>
                                <label>4.The fourth question (in this example an open question) about the chosen main discipline.</label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 16
                                <div>&nbsp;</div>
                                <label><strong>5.The fifth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>6.The sixth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Lorum ipsum.</p>
                                
                                <label><strong>7.The seventh question (in this example an open question) about the chosen main discipline.</strong></label>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 4
                                <br>
                                <input type="radio" name="Option" value="option"> Option 8
                                <br>
                                <input type="radio" name="Option" value="option"> Option 9
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="Option" value="option"> Option 17
                                <br>
                                <input type="radio" name="Option" value="option"> Option 19
                                <br>
                                <input type="radio" name="Option" value="option"> Option 44
                                </div>                                
                                </div>
                                <div>&nbsp;</div>
                                
                                <label><strong>8.The eigth question (in this example an open question) about the chosen main discipline.</strong></label>
                                
                                <br>
                                <input type="radio" name="Option" value="option"> Option 1
                                <br>
                                <input type="radio" name="Option" value="option"> Option 3
                                <div>&nbsp;</div>
                                <label><strong>9.The ninth question (in this example an open question) about the chosen main discipline.<br>From 20 February 2004 to 10 april 2008</strong></label>
                                
                                <div>&nbsp;</div>
                                <label><strong>10.The tenth question (in this example an open question) about the chosen main discipline.</strong></label>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiu</p>
                                </div>
                                </li>
                                </ul>
                                </li>
                                
                                
                                
                                
                                </ul>
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
