<div class="xp-menubar text-left">
            <!-- Start XP Nav -->
            <nav class="xp-horizontal-nav xp-mobile-navbar xp-fixed-navbar">
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="xp-horizontal-menu">
                    <li><a href="{{route('admin')}}"><i class="mdi mdi-view-dashboard"></i><span>Dashboard</span></a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi mdi-package-variant"></i><span>Klassen</span></a>
                      <ul class="dropdown-menu">
                      <li><a href="{{URL::to('/classrooms/LCTAOO9A')}}">LCTAOO9A</a></li>
                      <li><a href="{{URL::to('/classrooms/LCTAOO9C')}}">LCTAOO9C</a></li>
                      <li><a href="{{URL::to('/classrooms/LCTAOO9D')}}">LCTAOO9D</a></li>
                      <li><a href="{{URL::to('/classrooms/LCTAO2020')}}">LCTAO2020</a></li>
                      </ul>
                    </li>
                    @if(Auth::user()->role == 1)
                    <li><a href="{{route('users.index')}}"><i class="mdi mdi-view-dashboard"></i><span>Gebruikers</span></a></li>
                    @endif
                    <li><a href="{{route('challenges.index')}}"><i class="mdi mdi-view-dashboard"></i><span>Challenges</span></a></li>
                    <li><a href="{{route('modules.index')}}"><i class="mdi mdi-view-dashboard"></i><span>Modules</span></a></li>
                    <li><a href="{{route('tasks.index')}}"><i class="mdi mdi-view-dashboard"></i><span>Taken</span></a></li>
                    <li><a href="{{route('tags.index')}}"><i class="mdi mdi-view-dashboard"></i><span>Tags</span></a></li>
                    <li><a href="{{route('skills.index')}}"><i class="mdi mdi-view-dashboard"></i><span>Vaardigheden</span></a></li>
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
