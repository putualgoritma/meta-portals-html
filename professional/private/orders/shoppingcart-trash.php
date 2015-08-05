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
                        <li class="active">Shoppingcart trash</li>
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
                
                <div class="box box-body">
                <label><strong>Search criteria:</strong></label>
                <br>
				<input type="text" value="Taulov,Warsawa" data-role="tagsinput" class="form-control">
                <div>&nbsp;</div>
                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="2" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                
                <br>
				<select class="select form-control" >
							<option>Category..</option>
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
				</select>
                <div>&nbsp;</div>
				<button type="submit" class="btn btn-danger">Search</button>
                <div>&nbsp;</div>
                
                <p><strong>Search options:</strong></p>
                
                <label for="amount">Price range:</label>
              <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                
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


    <script src="../../../js/plugins/bootstrap-slider.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(function() {
                /* BOOTSTRAP SLIDER */
                $('.slider').slider();

                /* ION SLIDER */
                $("#range_1").ionRangeSlider({
                    min: 0,
                    max: 5000,
                    from: 1000,
                    to: 4000,
                    type: 'double',
                    step: 1,
                    prefix: "$",
                    prettify: false,
                    hasGrid: true
                });
                $("#range_2").ionRangeSlider();

                $("#range_5").ionRangeSlider({
                    min: 0,
                    max: 10,
                    type: 'single',
                    step: 0.1,
                    postfix: " mm",
                    prettify: false,
                    hasGrid: true
                });
                $("#range_6").ionRangeSlider({
                    min: -50,
                    max: 50,
                    from: 0,
                    type: 'single',
                    step: 1,
                    postfix: "°",
                    prettify: false,
                    hasGrid: true
                });

                $("#range_4").ionRangeSlider({
                    type: "single",
                    step: 100,
                    postfix: " light years",
                    from: 55000,
                    hideMinMax: true,
                    hideFromTo: false
                });
                $("#range_3").ionRangeSlider({
                    type: "double",
                    postfix: " miles",
                    step: 10000,
                    from: 25000000,
                    to: 35000000,
                    onChange: function(obj) {
                        var t = "";
                        for (var prop in obj) {
                            t += prop + ": " + obj[prop] + "\r\n";
                        }
                        $("#result").php(t);
                    },
                    onLoad: function(obj) {
                        //
                    }
                });
            });
        </script>
  
</body>
</html>
