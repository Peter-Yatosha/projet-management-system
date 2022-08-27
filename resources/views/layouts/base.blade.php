<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    @livewireStyles
  </head>
  <body>
    @if (Route::has('login'))
        @auth
          @if (Auth::user()->utype === 'ADM')
            <div class="container-scroller">
              <!-- partial:partials/_navbar.html -->
              <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                  <a class="navbar-brand brand-logo" href="/"><img src="{{ asset('assets/images/wal.png')}}" alt="webline" /></a>
                  <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('assets/images/wal.png')}}" alt="webline" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                  </button>
                  <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                      </div>
                    </form>
                  </div>
                  <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                      <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                          <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">
                          <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                          <p class="mb-1 text-black">{{Auth::user()->name}}</p>
                        </div>
                      </a>
                      <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                          <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        {{--logout form start--}}
                        <form  id="form-logout" action="{{route('logout')}}" method="POST">
                          @csrf
                        </form>
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit(); ">
                          <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        {{--logout form ends--}}
                      </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                      <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count-symbol bg-warning"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <img src="{{ asset('assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                          </div>
                          <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                            <p class="text-gray mb-0"> 1 Minutes ago </p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <img src="{{ asset('assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                          </div>
                          <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                            <p class="text-gray mb-0"> 15 Minutes ago </p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                          </div>
                          <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                            <p class="text-gray mb-0"> 18 Minutes ago </p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count-symbol bg-danger"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                              <i class="mdi mdi-calendar"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                            <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                              <i class="mdi mdi-settings"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                            <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                              <i class="mdi mdi-link-variant"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                            <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                      </div>
                    </li>
                    <li class="nav-item nav-logout d-none d-lg-block">
                      {{--logout form start--}}
                      <form  id="form-logout" action="{{route('logout')}}" method="POST">
                        @csrf
                      </form>
                      <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit(); ">
                        <i class="mdi mdi-power"></i></a>
                      {{--logout form ends--}}
          
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                      <a class="nav-link" href="#">
                        <i class="mdi mdi-format-line-spacing"></i>
                      </a>
                    </li>
                  </ul>
                  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                  </button>
                </div>
              </nav>
              <!-- partial -->
              <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                  <ul class="nav">
                    <li class="nav-item nav-profile">
                      <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                          <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="profile">
                          <span class="login-status online"></span>
                          <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                          <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                          <span class="text-secondary text-small">Project Manager</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icons/mdi.html">
                        <span class="menu-title">Leads</span>
                        <i class="mdi mdi-account menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('show.client')}}">
                        <span class="menu-title">Clients</span>
                        <i class="mdi mdi-clipboard-account menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#ui-hr" aria-expanded="false" aria-controls="ui-hr">
                        <span class="menu-title">HR</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-city menu-icon"></i>
                      </a>
                      <div class="collapse" id="ui-hr">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{route('show.employee')}}">Employee</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('show.leaves')}}">Leaves</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Shift Roster</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Attendance</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('admin.department')}}">Department</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#ui-work" aria-expanded="false" aria-controls="ui-work">
                        <span class="menu-title">Work</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-folder-multiple menu-icon"></i>
                      </a>
                      <div class="collapse" id="ui-work">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{route('role.permission')}}">Contracts</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('show.project')}}">Projects</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('show.task')}}">Tasks</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Time Logs</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#ui-finance" aria-expanded="false" aria-controls="ui-finance">
                        <span class="menu-title">Finance</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-square-inc-cash menu-icon"></i>
                      </a>
                      <div class="collapse" id="ui-finance">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{route('role.permission')}}">Proposal</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Estimates</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Invoices</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Payments</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Credit Note</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Expenses</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icons/mdi.html">
                        <span class="menu-title">Products</span>
                        <i class="mdi mdi-equal-box menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icons/mdi.html">
                        <span class="menu-title">Orders</span>
                        <i class="mdi mdi-cart menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icons/mdi.html">
                        <span class="menu-title">Tickets</span>
                        <i class="mdi mdi-headphones menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icons/mdi.html">
                        <span class="menu-title">Events</span>
                        <i class="mdi mdi-calendar menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icons/mdi.html">
                        <span class="menu-title">Messages</span>
                        <i class="mdi mdi-comment-multiple-outline menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icons/mdi.html">
                        <span class="menu-title">Notice Board</span>
                        <i class="mdi mdi-content-paste menu-icon"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                      </a>
                      <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{route('role.permission')}}">Permissions</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Register</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                  <div class="content-wrapper">
                    {{$slot}}
                  </div>
                  <!-- content-wrapper ends -->
                  <!-- partial:partials/_footer.html -->
                  <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Uhuru Engineering 2022</span>
                    </div>
                  </footer>
                  <!-- partial -->
                </div>
                <!-- main-panel ends -->
              </div>
              <!-- page-body-wrapper ends -->
            </div>
         @elseif(Auth::user()->utype === 'EMP')
            <div class="container-scroller">
                 <!-- partial:partials/_navbar.html -->
                <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/logo.svg')}}" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
                  </div>
                  <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                      <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="search-field d-none d-md-block">
                      <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                          <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                          </div>
                          <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                        </div>
                      </form>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                      <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="nav-profile-img">
                            <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">
                            <span class="availability-status online"></span>
                          </div>
                          <div class="nav-profile-text">
                            <p class="mb-1 text-black">{{Auth::user()->name}}</p>
                          </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                          <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                          <div class="dropdown-divider"></div>
                          {{--logout form start--}}
                          <form  id="form-logout" action="{{route('logout')}}" method="POST">
                            @csrf
                          </form>
                          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit(); ">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                          {{--logout form ends--}}
                        </div>
                      </li>
                      <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="mdi mdi-email-outline"></i>
                          <span class="count-symbol bg-warning"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                          <h6 class="p-3 mb-0">Messages</h6>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <img src="{{ asset('assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                              <p class="text-gray mb-0"> 1 Minutes ago </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <img src="{{ asset('assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                              <p class="text-gray mb-0"> 15 Minutes ago </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                              <p class="text-gray mb-0"> 18 Minutes ago </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                          <i class="mdi mdi-bell-outline"></i>
                          <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                          <h6 class="p-3 mb-0">Notifications</h6>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                              <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                              <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-link-variant"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                              <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                      </li>
                      <li class="nav-item nav-logout d-none d-lg-block">
                        {{--logout form start--}}
                        <form  id="form-logout" action="{{route('logout')}}" method="POST">
                          @csrf
                        </form>
                        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit(); ">
                          <i class="mdi mdi-power"></i></a>
                        {{--logout form ends--}}
            
                      </li>
                      <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                          <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                      </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                      <span class="mdi mdi-menu"></span>
                    </button>
                  </div>
                </nav>
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                  <!-- partial:partials/_sidebar.html -->
                  <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                      <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                          <div class="nav-profile-image">
                            <img src="assets/images/faces/face1.jpg" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                          </div>
                          <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                            <span class="text-secondary text-small">Employee</span>
                          </div>
                          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('employee.dashboard')}}">
                          <span class="menu-title">Dashboard</span>
                          <i class="mdi mdi-home menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                          <span class="menu-title">Settings</span>
                          <i class="menu-arrow"></i>
                          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                          <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('role.permission')}}">Tasks</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/icons/mdi.html">
                          <span class="menu-title">Icons</span>
                          <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                          <span class="menu-title">Forms</span>
                          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartjs.html">
                          <span class="menu-title">Charts</span>
                          <i class="mdi mdi-chart-bar menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                          <span class="menu-title">Tables</span>
                          <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                          <span class="menu-title">Sample Pages</span>
                          <i class="menu-arrow"></i>
                          <i class="mdi mdi-medical-bag menu-icon"></i>
                        </a>
                        <div class="collapse" id="general-pages">
                          <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item sidebar-actions">
                        <span class="nav-link">
                          <div class="border-bottom">
                            <h6 class="font-weight-normal mb-3">Projects</h6>
                          </div>
                          <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                          <div class="mt-4">
                            <div class="border-bottom">
                              <p class="text-secondary">Categories</p>
                            </div>
                            <ul class="gradient-bullet-list mt-4">
                              <li>Free</li>
                              <li>Pro</li>
                            </ul>
                          </div>
                        </span>
                      </li>
                    </ul>
                  </nav>
                  <!-- partial -->
                  <div class="main-panel">
                    <div class="content-wrapper">
                      {{$slot}}
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                      <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Uhuru Engineering 2022</span>
                      </div>
                    </footer>
                    <!-- partial -->
                  </div>
                  <!-- main-panel ends -->
                </div>
                 <!-- page-body-wrapper ends -->
            </div>
          @else
            <div class="container-scroller">
                 <!-- partial:partials/_navbar.html -->
                <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/logo.svg')}}" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
                  </div>
                  <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                      <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="search-field d-none d-md-block">
                      <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                          <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                          </div>
                          <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                        </div>
                      </form>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                      <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="nav-profile-img">
                            <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">
                            <span class="availability-status online"></span>
                          </div>
                          <div class="nav-profile-text">
                            <p class="mb-1 text-black">{{Auth::user()->name}}</p>
                          </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                          <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                          <div class="dropdown-divider"></div>
                          {{--logout form start--}}
                          <form  id="form-logout" action="{{route('logout')}}" method="POST">
                            @csrf
                          </form>
                          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit(); ">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                          {{--logout form ends--}}
                        </div>
                      </li>
                      <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="mdi mdi-email-outline"></i>
                          <span class="count-symbol bg-warning"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                          <h6 class="p-3 mb-0">Messages</h6>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <img src="{{ asset('assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                              <p class="text-gray mb-0"> 1 Minutes ago </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <img src="{{ asset('assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                              <p class="text-gray mb-0"> 15 Minutes ago </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                              <p class="text-gray mb-0"> 18 Minutes ago </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                          <i class="mdi mdi-bell-outline"></i>
                          <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                          <h6 class="p-3 mb-0">Notifications</h6>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                              <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                              <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-link-variant"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                              <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                              <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                      </li>
                      <li class="nav-item nav-logout d-none d-lg-block">
                        {{--logout form start--}}
                        <form  id="form-logout" action="{{route('logout')}}" method="POST">
                          @csrf
                        </form>
                        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit(); ">
                          <i class="mdi mdi-power"></i></a>
                        {{--logout form ends--}}
            
                      </li>
                      <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                          <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                      </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                      <span class="mdi mdi-menu"></span>
                    </button>
                  </div>
                </nav>
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                  <!-- partial:partials/_sidebar.html -->
                  <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                      <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                          <div class="nav-profile-image">
                            <img src="assets/images/faces/face1.jpg" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                          </div>
                          <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                            <span class="text-secondary text-small">Customer</span>
                          </div>
                          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('customer.dashboard')}}">
                          <span class="menu-title">Dashboard</span>
                          <i class="mdi mdi-home menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                          <span class="menu-title">Settings</span>
                          <i class="menu-arrow"></i>
                          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                          <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('role.permission')}}">Orders</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/icons/mdi.html">
                          <span class="menu-title">Icons</span>
                          <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                          <span class="menu-title">Forms</span>
                          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartjs.html">
                          <span class="menu-title">Charts</span>
                          <i class="mdi mdi-chart-bar menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                          <span class="menu-title">Tables</span>
                          <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                          <span class="menu-title">Sample Pages</span>
                          <i class="menu-arrow"></i>
                          <i class="mdi mdi-medical-bag menu-icon"></i>
                        </a>
                        <div class="collapse" id="general-pages">
                          <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item sidebar-actions">
                        <span class="nav-link">
                          <div class="border-bottom">
                            <h6 class="font-weight-normal mb-3">Projects</h6>
                          </div>
                          <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                          <div class="mt-4">
                            <div class="border-bottom">
                              <p class="text-secondary">Categories</p>
                            </div>
                            <ul class="gradient-bullet-list mt-4">
                              <li>Free</li>
                              <li>Pro</li>
                            </ul>
                          </div>
                        </span>
                      </li>
                    </ul>
                  </nav>
                  <!-- partial -->
                  <div class="main-panel">
                    <div class="content-wrapper">
                      {{$slot}}
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                      <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Uhuru Engineering 2022</span>
                      </div>
                    </footer>
                    <!-- partial -->
                  </div>
                  <!-- main-panel ends -->
                </div>
                 <!-- page-body-wrapper ends -->
            </div>
          @endif
        @else
          <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
              <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                  <div class="auth-form-light text-left p-5">
                    <div class="brand-logo">
                      <img src="../../assets/images/logo.svg">
                    </div>
                    <h4>Hello! let's get started</h4>
                    <h6 class="font-weight-light">Sign in to continue.</h6>
                    <form class="pt-3">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="mt-3">
                        <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a>
                      </div>
                      <div class="my-2 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                          <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                        </div>
                        <a href="#" class="auth-link text-black">Forgot password?</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
          </div>
        @endif
    @endif
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.21.1/jquery.daterangepicker.min.js" integrity="sha512-jM36zj/2doNDqDlSIJ+OAslGvZXkT+HrtMM+MMgVxCqax1AIm1XAfLuUFP7uMSavUxow+z/T2CRnSu7PDaYu2A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    <script src="moment.min.js"></script>
    <script src="daterangepicker.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
    <script>
      $(function() {
        $('#datetimes').daterangepicker({
          datePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale: {
            format: 'M/DD hh:mm A'
          }
        });
      });
  </script>
    

    @livewireScripts
  </body>
</html>