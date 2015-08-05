<header class="header fixed">
<div class="row padding">
<div class="col-lg-7 col-md-4">	
<a class="logo-login" href="<? echo $root_path; ?>general/public/home/index.php"><i class="fa fa-home"></i> Home</a>	
<div id="menu-private">
<a href="#" class="navbar-btn sidebar-toggle x-navigation-minimize" data-toggle="offcanvas" role="button"><i class="fa fa-bars"></i></a>			
                    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
              <a href="<? echo $root_path; ?>professional/public/index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Professionals <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<? echo $root_path; ?>professional/public/profile/about-me.php">About me</a></li>
                  <li><a href="<? echo $root_path; ?>professional/public/profile/expertise.php">Expertise</a></li>
                  <li><a href="<? echo $root_path; ?>professional/public/profile/my-resume.php">My resume</a></li>
                  <li><a href="<? echo $root_path; ?>professional/public/profile/360-view.php">360 view</a></li>
                  <li><a href="<? echo $root_path; ?>professional/public/profile/blogs.php">Blogposts</a></li>
                  <li><a href="<? echo $root_path; ?>professional/public/profile/rate-review.php">Rate & review</a></li>
                </ul>
              
              </li>
                            
              <li class="dropdown">
              <a href="<? echo $root_path; ?>company/public/index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="<? echo $root_path; ?>company/public/profile/about-us.php">About me</a></li>
                  <li><a href="<? echo $root_path; ?>company/public/profile/360-view.php">360 view</a></li>
                  <li><a href="<? echo $root_path; ?>company/public/profile/rate-review.php">Rate & review</a></li>
                  <li><a href="<? echo $root_path; ?>company/public/profile/supplier.php">Supplier</a></li>
                  <li><a href="<? echo $root_path; ?>company/public/profile/jobs.php">Jobs</a></li>
                  <li><a href="<? echo $root_path; ?>company/public/profile/deals.php">Deals</a></li>
                  <li><a href="<? echo $root_path; ?>company/public/profile/contact.php">Contact</a></li>
                  <li><a href="<? echo $root_path; ?>company/public/profile/claim-company.php">Claim company</a></li>
                </ul>
              </li>
              
              <li><a href="<? echo $root_path; ?>jobs/public/index.php">Jobs</span></a></li>
              
              <li><a href="<? echo $root_path; ?>blogs/public/index.php">Blogs</span></a></li>
              
              <li><a href="<? echo $root_path; ?>general/public/products/products-overview.php">Stores</a></li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      </div>
<!-- Header Navbar: style can be found in header.less -->
</div>

<div class="col-lg-5 col-md-8 text-right">

<div class="header-navbar">
<div class="search" data-ng-controller="uiSearchController">
          <form role="search" action="/o/profiles/browse/" ng-action="action" method="get" ng-submit="search()" ng-init="context = 'client'">
            <div class="input-group">
              <div class="dropdown" ng-class="{active: isOpen}">
                <input id="search-freelancers" type="radio" ng-model="context" value="client" ng-disabled="actionSelectDisabled">
                <label for="search-freelancers" ng-click="context = 'client'">Freelancers</label>

                <input id="search-jobs" type="radio" ng-model="context" value="freelancer" ng-disabled="actionSelectDisabled">
                <label for="search-jobs" ng-click="context = 'freelancer'">Jobs</label>
              </div>
              <span class="button" ng-click="toggleDropDown()"></span>
              <input type="text" name="q" placeholder="Find Freelancers"
                     ng-placeholder="placeholder" maxlength="100" autocomplete="off" ng-model="query"
                     mixpanel-trigger="enter"
                     mixpanel-event="Used Search"
                     mixpanel-data='{
                   "Search Location": "visitor_home",
                   "Search Sub-location": "Global Header",
                   "Page URL": "http://www.upwork.com/"
                 }'>
            </div>
          </form>
        </div>      
        </div>
<nav class="navbar navbar-static-top" role="navigation">      
<div class="navbar-left">
                    <ul class="nav navbar-nav">
                    
<!-- Email: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>                            </a>
<ul class="dropdown-menu">
                                <li class="header">You have 4 email</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<? echo $root_path; ?>img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<? echo $root_path; ?>img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<? echo $root_path; ?>img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<? echo $root_path; ?>img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<? echo $root_path; ?>img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
<!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="label label-warning">10</span>                            </a>
<ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
<!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>                            </a>
<ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                        <a href="#"><i class="fa fa-key"></i></a>
                        </li>
                        
                       <li class="dropdown flag">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<? echo $root_path; ?>img/en.png">
                            </a>
                            <ul class="dropdown-menu flag-right">
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul>
                                        <li><a href="#"><img src="<? echo $root_path; ?>img/en.png">
                                <h4>Nederland</h4>
                                                </a>
                                        </li><!-- end message -->
                                        <li><a href="#"><img src="<? echo $root_path; ?>img/gb.png">
                                        <h4>English</h4>
                                            </a>
                                        </li>
                                        <li><a href="#"><img src="<? echo $root_path; ?>img/de.png">
                                        <h4>Deutsch</h4>
                                            </a>
                                        </li>
                                        <li><a href="#"><img src="<? echo $root_path; ?>img/cn.png">
                                        <h4>Chinese</h4>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                       </li> 
                      </ul>
                </div>
 </nav>
 
                                      
                              
</div></div>
</div>
</div>

</header>