  <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">CupSms</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">

            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="/admin"><i class="feather icon-home"></i><span cla data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <?php
                  //admin  
                  if ($user->role=='1') {
                      ?>
                 <li class=" nav-item"><a href="/admin/courses"><i class="fa fa-file"></i><span class="menu-title" data-i18n="Content">Courses</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/courses"><i class="fa fa-file"></i><span class="menu-title" data-i18n="Content">Course Registrations</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/timetable"><i class="fa fa-table"></i><span class="menu-title" data-i18n="Content">Timetable</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/payments"><i class="fa fa-money"></i><span class="menu-title" data-i18n="Content">Payments</span></a></li>
                <li class=" nav-item"><a href="/admin/accomodation"><i class="fa fa-bed"></i><span class="menu-title" data-i18n="Content">Accomodations</span></a></li>
                <li class=" nav-item"><a href="/admin/staff"><i class="fa fa-suitcase"></i><span class="menu-title" data-i18n="Content">Staff</span></a></li>
               
                <li class=" nav-item"><a href="/admin/students"><i class="fa fa-users"></i><span class="menu-title" data-i18n="Content">Students</span></a></li>
                
                <li class=" nav-item"><a href="/admin/faculties"><i class="fa fa-building-o"></i><span class="menu-title" data-i18n="Content">Faculties</span></a></li>

                <li class=" nav-item"><a href="/admin/results"><i class="fa fa-columns"></i><span class="menu-title" data-i18n="Content">Results</span></a></li>
                
                <li class=" nav-item"><a href="/admin/levels"><i class="fa fa-sort-amount-asc"></i><span class="menu-title" data-i18n="Content">Levels</span></a></li>

                <li class=" nav-item"><a href="/admin/settings"><i class="fa fa-gears"></i><span class="menu-title" data-i18n="Content">Settings</span></a></li>
                
                <?php
                  } elseif ($user->role=='2') {
                    //exams officer
                      ?>
                 <li class=" nav-item"><a href="/admin/courses"><i class="fa fa-file"></i><span class="menu-title" data-i18n="Content">Courses</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/timetable"><i class="fa fa-table"></i><span class="menu-title" data-i18n="Content">Timetable</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/payments"><i class="fa fa-money"></i><span class="menu-title" data-i18n="Content">Payments</span></a></li>
                <li class=" nav-item"><a href="/admin/accomodation"><i class="fa fa-bed"></i><span class="menu-title" data-i18n="Content">Accomodations</span></a></li>
                <li class=" nav-item"><a href="/admin/staff"><i class="fa fa-suitcase"></i><span class="menu-title" data-i18n="Content">Staff</span></a></li>
               
                <li class=" nav-item"><a href="/admin/students"><i class="fa fa-users"></i><span class="menu-title" data-i18n="Content">Students</span></a></li>
                
                <li class=" nav-item"><a href="/admin/results"><i class="fa fa-columns"></i><span class="menu-title" data-i18n="Content">Results</span></a></li>
                
                <li class=" nav-item"><a href="/admin/levels"><i class="fa fa-sort-amount-asc"></i><span class="menu-title" data-i18n="Content">Levels</span></a></li>
                
                


                  <?php
                    } elseif ($user->role=='3') {
                        #registration officer
                  ?>

                 <li class=" nav-item"><a href="/admin/courses"><i class="fa fa-file"></i><span class="menu-title" data-i18n="Content">Courses</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/registration"><i class="fa fa-file"></i><span class="menu-title" data-i18n="Content">Course Registrations</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/timetable"><i class="fa fa-table"></i><span class="menu-title" data-i18n="Content">Timetable</span></a>
                </li>
                
               
                <li class=" nav-item"><a href="/admin/students"><i class="fa fa-users"></i><span class="menu-title" data-i18n="Content">Students</span></a></li>                


                      <?php
                  }elseif ($user->role=='4') {
                    # IT officer
                      ?>
                 <li class=" nav-item"><a href="/admin/courses"><i class="fa fa-file"></i><span class="menu-title" data-i18n="Content">Courses</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/timetable"><i class="fa fa-table"></i><span class="menu-title" data-i18n="Content">Timetable</span></a>
                </li>
 
               
                <li class=" nav-item"><a href="/admin/students"><i class="fa fa-users"></i><span class="menu-title" data-i18n="Content">Students</span></a></li>
                
                
                <li class=" nav-item"><a href="/admin/results"><i class="fa fa-columns"></i><span class="menu-title" data-i18n="Content">Results</span></a></li>
                
                <li class=" nav-item"><a href="/admin/profile"><i class="fa fa-user-circle"></i><span class="menu-title" data-i18n="Content">Profile</span></a></li>


                      <?php
                  } elseif ($user->role=='5') {
                    ## Head of Department
                      ?>
                 <li class=" nav-item"><a href="/admin/courses"><i class="fa fa-file"></i><span class="menu-title" data-i18n="Content">Courses</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/timetable"><i class="fa fa-table"></i><span class="menu-title" data-i18n="Content">Timetable</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/payments"><i class="fa fa-money"></i><span class="menu-title" data-i18n="Content">Payments</span></a></li>
                <li class=" nav-item"><a href="/admin/accomodation"><i class="fa fa-bed"></i><span class="menu-title" data-i18n="Content">Accomodations</span></a></li>
                <li class=" nav-item"><a href="/admin/staff"><i class="fa fa-suitcase"></i><span class="menu-title" data-i18n="Content">Staff</span></a></li>
               
                <li class=" nav-item"><a href="/admin/students"><i class="fa fa-users"></i><span class="menu-title" data-i18n="Content">Students</span></a></li>
                
                <li class=" nav-item"><a href="/admin/faculties"><i class="fa fa-building-o"></i><span class="menu-title" data-i18n="Content">Faculties</span></a></li>

                <li class=" nav-item"><a href="/admin/results"><i class="fa fa-columns"></i><span class="menu-title" data-i18n="Content">Results</span></a></li>
                
                <li class=" nav-item"><a href="/admin/levels"><i class="fa fa-sort-amount-asc"></i><span class="menu-title" data-i18n="Content">Levels</span></a></li>
                
               
                      <?php
                  }
                ?>
                
                <li class=" nav-item"><a href="/admin/profile"><i class="fa fa-user-circle"></i><span class="menu-title" data-i18n="Content">Profile</span></a></li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

     <!-- BEGIN: Content-->
    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                            </ul>
                            
                            
                        </div>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                            </li>
                                                           
                          
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $user->email?></span><span class="user-status">Available</span></div><span><img class="round" src="/assets/dashboard/images/portrait/small/avatar-s-11.png" alt="avatar" height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href=""><i class="feather icon-user"></i> Edit Profile</a>
                                    <a class="dropdown-item" href=""><i class="feather icon-check-square"></i> Task</a>
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/admin/auth/logout"><i class="feather icon-power"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->