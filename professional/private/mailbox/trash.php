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
                        <li class="active">Trash</li>
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
                            
                <div class="box box-body table-responsive">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 10px;"><a href="../../../Compose.php" class="btn btn-danger btn-block">Compose e-mail</a></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 10px;"><input type="text" class="form-control" placeholder="Search"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 10px;">
                <select class="form-control select">
			 	<option>Filter by</option>
				<option>Date</option>
			    <option>Important</option>
			    <option>Name</option>
				</select></div>
                </div>
                
                <hr>
                <div class="clear">&nbsp;</div>
                <table id="example2" class="table table-bordered table-hover table-striped table-mailbox">
                                        <thead>
                                            <tr>
                                                <th width="10%"><input id="selectall" type="checkbox"></th>
                                                <th width="29%">Receiver/Sender</th>
                                                <th width="25%">Subject</th>
                                                <th width="27%">Date received</th>
                                                <th width="9%">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <label style="width:20px" class="text-center">
					<input class="checkbox1" type="checkbox"></label> 

					<i class="fa fa-star-o"></i></td>
                                                <td><a href="received-message.php">[FirstName][Ln]</a></td>
                                                <td><a href="received-message.php">[SubjectOfMessage]</a></td>
                                                <td><a href="received-message.php">[dd-mm-yyyy hh:mm]</a></td>
                                                <td><a href="received-message.php">&nbsp;</a></td>
                                            </tr>
                                            <tr>
                                                <td><label style="width:20px" class="text-center">
					<input class="checkbox1" type="checkbox"></label> 

					<i class="fa fa-star-o"></i></td>
                                                <td><a href="received-message.php">[FirstName][Ln]</a></td>
                                                <td><a href="received-message.php">[SubjectOfMessage]</a></td>
                                                <td><a href="received-message.php">[dd-mm-yyyy hh:mm]</a></td>
                                                <td class="text-center"><i class="fa fa-paperclip"></i></td>
                                            </tr>
                                            <tr>
                                                <td><label style="width:20px" class="text-center">
					<input class="checkbox1" type="checkbox"></label> 

					<i class="fa fa-star-o"></i></td>
                                                <td><a href="received-message.php">[FirstName][Ln]</a></td>
                                                <td><a href="received-message.php">[SubjectOfMessage]</a></td>
                                                <td><a href="received-message.php">[dd-mm-yyyy hh:mm]</a></td>
                                                <td class="text-center">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><label style="width:20px" class="text-center">
					<input class="checkbox1" type="checkbox"></label> 

					<i class="fa fa-star-o"></i></td>
                                                <td><a href="received-message.php">[FirstName][Ln]</a></td>
                                                <td><a href="received-message.php">[SubjectOfMessage]</a></td>
                                                <td><a href="received-message.php">[dd-mm-yyyy hh:mm]</a></td>
                                                <td class="text-center">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                    <div>&nbsp;</div>
                  <div class="btn-pull-right"><button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button></div>
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


<script type="text/javascript">
            $(function() {

                "use strict";


                //When unchecking the checkbox
                $("#check-all").on('ifUnchecked', function(event) {
                    //Uncheck all checkboxes
                    $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
                });
                //When checking the checkbox
                $("#check-all").on('ifChecked', function(event) {
                    //Check all checkboxes
                    $("input[type='checkbox']", ".table-mailbox").iCheck("check");
                });
                //Handle starring for glyphicon and font awesome
                $(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function(e) {
                    e.preventDefault();
                    //detect type
                    var glyph = $(this).hasClass("glyphicon");
                    var fa = $(this).hasClass("fa");

                    //Switch states
                    if (glyph) {
                        $(this).toggleClass("glyphicon-star");
                        $(this).toggleClass("glyphicon-star-empty");
                    }

                    if (fa) {
                        $(this).toggleClass("fa-star");
                        $(this).toggleClass("fa-star-o");
                    }
                });

                //Initialize WYSIHTML5 - text editor
                $("#email_message").wysihtml5();
            });
        </script>
  
</body>
</html>
