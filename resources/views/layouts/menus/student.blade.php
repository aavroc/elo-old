<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{URL::to('/student')}}">DeepDive 2.0</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('student')}}" class="nav-link">Dashboard</a>
            </li>
            @if(Auth::user()->github_access_token == null)
            <li class="nav-item pull-right">
                <a class="btn btn-success" href="{{route('github.call')}}">Github Connection</a>
            </li>
            @endif

        </ul>

        <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item" id="message">

            </li>
            <li class="nav-item pull-right">
                <a class="btn btn-success" href="{{route('github.create')}}">Github create repo</a>
            </li>
            <li class="nav-item pull-right">
                <a class="btn btn-success" href="{{route('github')}}">Github Connection</a>
            </li> --}}
            <li class="nav-item pull-right">
                <a class="btn btn-danger" href="{{route('logout')}}">Logout {{Auth::user()->firstname}}</a>
            </li>
        </ul>
    </div>
</nav>
