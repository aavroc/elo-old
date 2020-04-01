<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"> --}}
    <script src="{{ asset('assets/js/jquery.js')}}" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/37009c676e.js" crossorigin="anonymous"></script>
    <title>DeepDive - PHP - {{Request::path()}}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <script src="{{ asset('assets/js/app.js') }}" defer></script> --}}
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/dark.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/sketchy.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/solar.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/cyborg.css')}}" rel="stylesheet"> --}}

    {{-- <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet"> --}}

    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

    @auth
    @if(Auth::user()->role == 1 || Auth::user()->role == 2)
    {{-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> --}}
    
    @endif
    @endauth

</head>

<body class="{{ Request::path() == '/' ? 'background-image' : '' }}">
    @auth
        @if(Auth::user()->role <= 2) 
            @include('layouts.menus.admin')
        @elseif(Auth::user()->role == 3)
            @include('layouts.menus.student')
        @endif
    @endauth

        <div class="container-fluid">
            @yield('content')

                        <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Github linkje leggen</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                    </div>
                    <div class="modal-body">
                        Je bent nog niet aangemeld bij GitHub. Doe dit nog even via onderstaande knop. 
                        Doe je het niet dan gaat het universum imploden
                        
                    </div>
                    <div class="modal-footer">
                    @auth
                        @if(Auth::user()->github_access_token == null)
                            <a class="btn btn-success" href="{{route('github.call')}}">Github Connection</a>
                        @endif
                    @endauth
                    </div>
                </div>
                </div>
            </div>

        </div>
        @auth
            @if(Auth::user()->github_access_token == null)
            <script>
                $( document ).ready(function() {
                    $('#staticBackdrop').modal();
                });
                    
            </script>
            @endif
        @endauth
</body>

</html>