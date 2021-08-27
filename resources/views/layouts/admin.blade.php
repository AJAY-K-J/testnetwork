
@include('layouts.header')




<div class="adminwrapper">

    <nav id="sidebar" class=" sidebar-bg">
        <div class="sidebar-header">
            <img src="" alt="bootraper logo" class="app-logo">
        </div>
        <ul class="list-unstyled components text-secondary">
            <li>
                <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="forms.html"><i class="fas fa-file-alt"></i> Forms</a>
            </li>
            <li>
                <a href="tables.html"><i class="fas fa-table"></i> Tables</a>
            </li>
            <li>
                <a href="charts.html"><i class="fas fa-chart-bar"></i> Charts</a>
            </li>
            <li>
                <a href="icons.html"><i class="fas fa-icons"></i> Icons</a>
            </li>
            <li>
                <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                <ul class="collapse list-unstyled" id="uielementsmenu">
                    <li>
                        <a href="ui-buttons.html"><i class="fas fa-angle-right"></i> Buttons</a>
                    </li>
                    <li>
                        <a href="ui-badges.html"><i class="fas fa-angle-right"></i> Badges</a>
                    </li>
                    <li>
                        <a href="ui-cards.html"><i class="fas fa-angle-right"></i> Cards</a>
                    </li>
                    <li>
                        <a href="ui-alerts.html"><i class="fas fa-angle-right"></i> Alerts</a>
                    </li>
                    <li>
                        <a href="ui-tabs.html"><i class="fas fa-angle-right"></i> Tabs</a>
                    </li>
                    <li>
                        <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i> Date & Time Picker</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                <ul class="collapse list-unstyled" id="authmenu">
                    <li>
                        <a href="login.html"><i class="fas fa-lock"></i> Login</a>
                    </li>
                    <li>
                        <a href="signup.html"><i class="fas fa-user-plus"></i> Signup</a>
                    </li>
                    <li>
                        <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Forgot password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                <ul class="collapse list-unstyled" id="pagesmenu">
                    <li>
                        <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                    </li>
                    <li>
                        <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                    </li>
                    <li>
                        <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
            </li>
            <li>
                <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
            </li>
        </ul>
    </nav>
    <div id="navbar-body" class="">
        <!-- navbar navigation component -->
        <nav class="navbar navbar-expand-lg navbar-white navbar-bg">
            <button type="button" id="sidebarCollapse" class="btn btn-light">
                <i class="fas fa-bars"></i><span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="admin-nav-dropdown">
                            <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;"
                                    class="fas fa-caret-down"></i>
                            </a>


                            <div class="dropdown-menu dropdown-menu-first nav-link-menu" aria-labelledby="nav1">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i>
                                            Updates</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="admin-nav-dropdown">
                            <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i> <span>{{ Auth::user()->username }}</span> <i style="font-size: .8em;"
                                    class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a>
                                    </li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a>
                                    </li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                    <div class="dropdown-divider"></div>
                                    {{-- <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a> --}}
                                          <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                 
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
       
     

         
    

        <div class="content">
            <div class="container">
               



                @yield('main-content')



            </div>



            
            
            
        </div>


        <div class="footer-bottom">
            <h5>Copyright <?php echo date("Y"); ?> All rights reserved.</h5>
            <h6>Design and Developed by <a href="">aa</a></h6>
          </div>

    </div>


</div>






  
      <!--
      Essential Scripts
      =====================================-->
      <!-- Main jQuery -->
      <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  

      <!-- Form Validation -->
      <script src="{{ asset('plugins/form-validation/jquery.form.js') }}"></script>
      <script src="{{ asset('plugins/form-validation/jquery.validate.min.js') }}"></script>

      <!-- Bootstrap4 -->
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- Parallax -->
      <script src="{{ asset('plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
      <!-- lightbox -->
      <script src="{{ asset('plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
      <!-- Owl Carousel -->
      <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
      <!-- filter -->
      <script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
      <!-- Smooth Scroll js -->
      <script src="{{ asset('plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>

      <!-- Custom js -->
      <script src="{{ asset('js/script.js') }}"></script>

        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
      <script src="{{ mix('/js/app.js') }}"></script>
    </body>
    </html>

