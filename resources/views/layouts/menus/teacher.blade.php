<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{URL::to('/admin')}}">DeepDive 2.0</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link text-danger" href="{{route('admin')}}"><i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="{{route('classrooms.index')}}"><i class="fas fa-user-friends"></i>
                    Klassen</a>
            </li>
            <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link text-danger"><i class="fas fa-users"></i>
                    Gebruikers</a>
            </li>
            <li class="nav-item">
                <a href="{{route('modules.index')}}" class="nav-link text-danger"><i class="fas fa-project-diagram"></i>
                    Modules</a>
            </li>

            </li>
            <li class="nav-item">
                <a href="{{route('tasks.index')}}" class="nav-link text-danger"><i class="fas fa-tasks"></i>
                    Tasks</a>
            </li>
            <li class="nav-item">
                <a href="{{route('tags.index')}}" class="nav-link text-danger"><i class="fas fa-tags"></i></i>
                    Tags</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item pull-right">
                <a class="btn btn-danger" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout
                    {{Auth::user()->firstname}}</a>
            </li>
        </ul>
    </div>

</nav>
