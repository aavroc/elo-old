<div class="xp-menubar text-left">
            <!-- Start XP Nav -->
            <nav class="xp-horizontal-nav xp-mobile-navbar xp-fixed-navbar">
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="xp-horizontal-menu">
                    <li><a href="{{route('student')}}"><i class="mdi mdi-view-dashboard"></i><span>Dashboard</span></a></li>
                    <li><a href="{{route('challenges.index')}}"><i class="mdi mdi-view-dashboard"></i><span>Challenges</span></a></li>
                    <li><a href="{{route('skills.student_index')}}"><i class="mdi mdi-view-dashboard"></i><span>Vaardigheden</span></a></li>
                   
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-package-variant"></i><span>Help</span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('help.videos')}}">Videos</a></li>
                        <li><a href="{{route('help.tekst')}}">Tekst</a></li>
                      </ul>
                    </li>
                
                  </ul>
                </div>
            </nav>
            <!-- End XP Nav -->
        </div>
