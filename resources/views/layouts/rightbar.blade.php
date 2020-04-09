<div class="xp-rightbar">
    <!-- Start XP Headerbar -->
    <div class="xp-headerbar">
        <!-- Start XP Topbar -->
        <div class="xp-topbar">
            <!-- Start XP Row -->
            <div class="row"> 
                <!-- Start XP Col -->
                <div class="col-3 col-md-2 col-lg-2 order-1 order-md-1 align-self-center">
                    <!-- Start XP Logobar -->
                    <div class="xp-logobar">
                        <a href="{{URL::to('/')}}" class="xp-small-logo"><img src="{{asset('assets/images/mobile-logo.svg')}}" class="img-fluid" alt="logo"></a>
                        <a href="{{URL::to('/')}}" class="xp-main-logo"><img src="{{asset('assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                    </div>                        
                    <!-- End XP Logobar -->
                </div> 
                <!-- End XP Col -->
                <!-- Start XP Col -->
                <!-- <div class="col-12 col-md-5 col-lg-3 order-3 order-md-2">
                    <div class="xp-searchbar">
                        <form>
                            <div class="input-group">
                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                              <div class="input-group-append">
                                <button class="btn" type="submit" id="button-addon2">GO</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>-->
                <!-- End XP Col -->
                <!-- Start XP Col -->
                <div class="col-12 col-md-5 col-lg-10 order-1 order-md-2">
                    <div class="xp-profilebar text-right">
                        <ul class="list-inline mb-0">
                            {{-- <li class="list-inline-item">
                                <div class="dropdown xp-message mr-3">
                                    <a class="dropdown-toggle user-profile-img text-white" href="#" role="button" id="xp-message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-message font-18 v-a-m"></i>
                                        <span class="badge badge-pill badge-success xp-badge-up">1</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-message">
                                        <ul class="list-unstyled">
                                          <li class="media">
                                            <div class="media-body">
                                              <h5 class="mt-0 mb-0 my-3 text-dark text-center font-15">1 New Messages</h5>
                                            </div>
                                          </li>  
                                          <li class="media xp-msg">
                                            <img class="mr-3 align-self-center rounded-circle" src="assets/images/topbar/user-message-1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <a href="#">  
                                                    <h5 class="mt-0 mb-1 font-14">Ariel Blue<span class="font-12 f-w-4 float-right">3 min ago</span></h5>
                                                    <p class="mb-0 font-13">Thank you for attending...<span class="badge badge-pill badge-success float-right">2</span></p>
                                                </a>
                                            </div>
                                          </li>
                                          <li class="media">
                                            <div class="media-body">
                                              <h5 class="mt-0 mb-0 my-3 text-black text-center font-15"><a href="#" class="text-primary">View All</a></h5>
                                            </div>
                                          </li>
                                        </ul>
                                    </div>
                                </div>
                            </li> --}}
                            @auth
                            @if(Auth::user()->role < 2)
                            <li class="list-inline-item">
                                <div class="dropdown xp-notification mr-3">
                                    <a class="dropdown-toggle user-profile-img text-white" href="#" role="button" id="xp-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-bell-ring font-18 v-a-m"></i>
                                        <span class="badge badge-pill badge-danger xp-badge-up">{{\App\UsersRequest::where('status', '<', 5)->count()}}</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-notification">
                                        <ul class="list-unstyled">
                                          <li class="media">
                                            <div class="media-body">
                                              <h5 class="mt-0 mb-0 my-3 text-dark text-center font-15">{{\App\UsersRequest::where('status', '<', 5)->count()}} Nieuwe verzoeken</h5>
                                            </div>
                                          </li>
                                            @php 
                                            $status = [
                                                1 => 'hulpvraag',
                                                2 => 'modulegesprek',
                                                3 => 'coachgesprek',
                                                4 => 'workshop',
                                            ];
                                            @endphp
                                          @foreach( \App\UsersRequest::where('status', '<', 5)->limit(3)->get()  as $request)
                                          <li class="media xp-noti">                                                
                                            <div class="mr-3 xp-noti-icon"><i class="mdi mdi-account-plus"></i></div>
                                            <div class="media-body">
                                                <a href="#">  
                                                    <h5 class="mt-0 mb-1 font-14">{{$status[$request->status]}}</h5>
                                                    <p class="mb-0 font-12 f-w-4">{{$request->user->firstname}}</p>
                                                </a>
                                            </div>
                                          </li>
                                          @endforeach
                                          <li class="media">
                                            <div class="media-body">
                                              <h5 class="mt-0 mb-0 my-3 text-black text-center font-15"><a href="{{route('admin')}}" class="text-primary">View All</a></h5>
                                            </div>
                                          </li>
                                        </ul>                                            
                                    </div>
                                </div>
                            </li>
                           
                            <li class="list-inline-item mr-0">
                                <div class="dropdown">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(Auth::check()) Welcome, {{Auth::user()->firstname}}
                                    @endif
                                    </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            @if(Auth::user()->github_access_token == null)
                                                <a class="dropdown-item" href="{{route('github.call')}}"><i class="ion ion-logo-github mr-2"></i> Connect to GitHub</a>
                                                @else
                                                <a class="dropdown-item" href="#"><i class="ion ion-logo-github mr-2"></i> You're connected!</a>
                                                @endif
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> Settings</a>
                                                <a class="dropdown-item" href="{{route('logout')}}"><i class="mdi mdi-logout mr-2"></i> Logout</a>
                                        </div>
                                </div>                                   
                            </li>
                            <li class="list-inline-item xp-horizontal-menu-toggle">
                                <button type="button" class="navbar-toggle bg-transparent" data-toggle="collapse" data-target="#navbar-menu">
                                    <i class="mdi mdi-sort-variant font-24 text-white"></i>
                                </button>                                   
                            </li>
                            @endif
                            @endauth
                        </ul>
                    </div>
                </div>
                <!-- End XP Col -->
            </div> 
            <!-- End XP Row -->
        </div>
        <!-- End XP Topbar -->
        <!-- Start XP Menubar -->                    
        @auth
          @if(Auth::user()->role <= 2) 
              @include('layouts.menus.admin')
          @elseif(Auth::user()->role == 3)
              @include('layouts.menus.student')
          @endif
        @endauth
        <!-- End XP Menubar -->
    </div>
    <!-- End XP Headerbar -->
    @yield('rightbar-content')
    <!-- Start XP Footerbar -->
    <div class="xp-footerbar">
        <footer class="footer">
            <p class="mb-0">© 2020</p>
        </footer>
    </div>
    <!-- End XP Footerbar -->
</div>