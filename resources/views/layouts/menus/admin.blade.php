<div class="xp-menubar text-left">
            <!-- Start XP Nav -->
            <nav class="xp-horizontal-nav xp-mobile-navbar xp-fixed-navbar">
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="xp-horizontal-menu">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('admin')}}">Teacher</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-package-variant"></i><span>Klassen</span></a>
                      <ul class="dropdown-menu">
                      <li><a href="{{route('classrooms.index')}}">Klassen</a></li>

                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-album"></i><span>Icons</span></a>
                      <ul class="dropdown-menu">
                            <li><a href="{{url('/icon-material-design')}}">Material Design</a></li>
                            <li><a href="{{url('/icon-font-awesome')}}">Font Awesome</a></li>
                            <li><a href="{{url('/icon-simple-line')}}">Simple Line Icons</a></li>
                            <li><a href="{{url('/icon-themify')}}">Themify Icons</a></li>
                            <li><a href="{{url('/icon-typicons')}}">Typicons</a></li>
                            <li><a href="{{url('/icon-ionicons')}}">Ion Icons</a></li>
                            <li><a href="{{url('/icon-dripicons')}}">Dripicons</a></li>
                      </ul>
                    </li>
                    <li class="scroll"><a href="{{url('/events')}}"><i class="mdi mdi-calendar"></i><span>Events</span></a></li>
                    <li class="dropdown menu-item-has-mega-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-file-document-box"></i><span>Forms</span></a>
                      <div class="mega-menu dropdown-menu">
                        <ul class="mega-menu-row" role="menu">
                          <li class="mega-menu-col col-md-4">
                            <ul class="sub-menu">
                                <li><a href="{{url('/form-inputs')}}">Form Inputs</a></li>
                                <li><a href="{{url('/form-groups')}}">Form Groups</a></li>
                                <li><a href="{{url('/form-layouts')}}">Form Layouts</a></li>
                                <li><a href="{{url('/form-validations')}}">Form Validations</a></li>
                                <li><a href="{{url('/form-editors')}}">Form Editors</a></li>
                            </ul>
                          </li>
                          <li class="mega-menu-col col-md-4">
                            <ul class="sub-menu">
                                <li><a href="{{url('/form-file-uploads')}}">Form File Uploads</a></li>
                                <li><a href="{{url('/form-colorpickers')}}">Form Color Pickers</a></li>
                                <li><a href="{{url('/form-datepickers')}}">Form Date Pickers</a></li>
                                <li><a href="{{url('/form-maxlength')}}">Form MaxLength</a></li>
                                <li><a href="{{url('/form-touchspin')}}">Form Touchspin</a></li>
                            </ul>
                          </li>
                          <li class="mega-menu-col col-md-4">
                            <ul class="sub-menu">
                                <li><a href="{{url('/form-input-mask')}}">Form Input Mask</a></li>
                                <li><a href="{{url('/form-selects')}}">Form Selects</a></li>
                                <li><a href="{{url('/form-xeditable')}}">Form X-editable</a></li>
                                <li><a href="{{url('/form-wizards')}}">Form Wizards</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-chart-areaspline"></i><span>Charts</span></a>
                      <ul class="dropdown-menu">
                            <li><a href="{{url('/chart-chartistjs')}}">Chartist Chart</a></li> 
                            <li><a href="{{url('/chart-chartjs')}}">Chartjs Chart</a></li>                                   
                            <li><a href="{{url('/chart-c3')}}">C3 Chart</a></li>
                            <li><a href="{{url('/chart-flot')}}">Flot Chart</a></li> 
                            <li><a href="{{url('/chart-morris')}}">Morris Chart</a></li>                                
                            <li><a href="{{url('/chart-knob')}}">Knob Chart</a></li>
                            <li><a href="{{url('/chart-piety')}}">Piety Chart</a></li>
                            <li><a href="{{url('/chart-sparkline')}}">Sparkline Chart</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i><span>More</span></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Email</a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('/email-inbox')}}">Email Inbox</a></li>
                            <li><a href="{{url('/email-open')}}">Email Open</a></li>
                            <li><a href="{{url('/email-compose')}}">Email Compose</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tables</a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('/table-bootstrap')}}">Bootstrap Table</a></li>
                            <li><a href="{{url('/table-datatable')}}">Data Table</a></li>
                            <li><a href="{{url('/table-editable')}}">Editable Table</a></li>
                            <li><a href="{{url('/table-rwdtable')}}">RWD Table</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maps</a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('/map-google')}}">Google Map</a></li>
                            <li><a href="{{url('/map-vector')}}">Vector Map</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li> 
                    <li class="dropdown menu-item-has-mega-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-book-open-page-variant"></i><span>Pages</span></a>
                      <div class="mega-menu dropdown-menu">
                        <ul class="mega-menu-row" role="menu">
                          <li class="mega-menu-col col-md-4">
                            <ul class="sub-menu">
                                <li><a href="{{url('/page-login')}}">Login</a></li>
                                <li><a href="{{url('/page-register')}}">Register</a></li>
                                <li><a href="{{url('/page-forgotpsw')}}">Forgot Password</a></li>
                                <li><a href="{{url('/page-lock-screen')}}">Lock Screen</a></li> 
                                <li><a href="{{url('/page-comingsoon')}}">Coming Soon</a></li>
                            </ul>
                          </li>
                          <li class="mega-menu-col col-md-4">
                            <ul class="sub-menu">
                                <li><a href="{{url('/page-maintenance')}}">Maintenance</a></li>                               
                                <li><a href="{{url('/page-404')}}">Error 404</a></li>  
                                <li><a href="{{url('/page-403')}}">Error 403</a></li>
                                <li><a href="{{url('/page-500')}}">Error 500</a></li>  
                                <li><a href="{{url('/page-503')}}">Error 503</a></li>
                            </ul>
                          </li>
                          <li class="mega-menu-col col-md-4">
                            <ul class="sub-menu">
                                <li><a href="{{url('/page-starter')}}">Starter Page</a></li>
                                <li><a href="{{url('/page-timeline')}}">Timeline</a></li>
                                <li><a href="{{url('/page-pricing')}}">Pricing</a></li>
                                <li><a href="{{url('/page-invoice')}}">Invoice</a></li>
                                <li><a href="{{url('/page-faq')}}">FAQ</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li> 
                  </ul>
                </div>
            </nav>
            <!-- End XP Nav -->
        </div>