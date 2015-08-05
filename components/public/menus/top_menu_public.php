<header class="header fixed">
<div class="row padding">
<div class="col-lg-7">	
<a class="logo-login" href="<? echo $root_path; ?>general/public/home/index.php"><i class="fa fa-home"></i> Home</a>	
<div id="menu-top">			
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

<div class="col-lg-5 text-right">

<form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
      </form>
<div class="header-logged-out">
<a data-toggle="collapse" data-target=".in" href="<? echo $root_path; ?>general/public/security/login.php">Login</a>
<a data-toggle="collapse" data-target=".in" href="<? echo $root_path; ?>general/public/security/login.php">Sign up</a>
</div>
<ul class="dropdown-flag nav navbar-nav">
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
                                      
                              
</div></div>
</div>
</div>

</header>