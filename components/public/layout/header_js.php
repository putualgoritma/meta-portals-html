<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="<? echo $root_path; ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<? echo $root_path; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/app.js"></script>
    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/bootstrap-select.js"></script>
    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/plugins.js"></script>
    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/bootstrap-datepicker.js"></script>
    
    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/navbar.js"></script>
    <script type="text/javascript" src="<? echo $root_path; ?>js/jquery.bootstrap-duallistbox.js"></script>
    
    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/bootstrap-tagsinput.js"></script>
    
    <script type="text/javascript" src="<? echo $root_path; ?>js/plugins/star-rating.js"></script>

	<script type="text/javascript">
        $(function() {
          // Javascript to enable link to tab
          var hash = document.location.hash;
          if (hash) {
            console.log(hash);
            $('.nav-tabs a[href='+hash+']').tab('show');
          }

          // Change hash for page-reload
          $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            window.location.hash = e.target.hash;
          });
        });
    </script>
    
    <script>
			var demo1 = $('select[name="duallistbox_demo6[]"]').bootstrapDualListbox();
			$("#demoform6").submit(function() {
			  alert($('[name="duallistbox_demo6[]"]').val());
			  return false;
			});
		  </script>
    

    <!-- AdminLTE App -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->