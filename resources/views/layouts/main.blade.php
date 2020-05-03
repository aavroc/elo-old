<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="EagleDev is een online platform om het werk van studenten via github te volgen">
        <meta name="keywords" content="github, platform, coderen, php, volgsysteem, modules">
        <meta name="author" content="Opleiding software development - ROC van Amsterdam - College Amstelland">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> EagleDev - @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Start CSS -->   
        @yield('style')
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">   
        <link href="{{ asset('assets/css/additional.css') }}" rel="stylesheet" type="text/css">   
        <!-- End CSS -->
    </head>
    <body class="xp-horizontal">
        <!-- Start XP Container -->
        <div id="xp-container">
            <!-- Start XP Rightbar -->
            @include('layouts.rightbar')         
            @yield('content')
            <!-- End XP Rightbar -->   
        </div>
        <!-- End XP Container --> 
        <!-- Start JS -->        
        {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
        <script src="{{ asset('assets/js/jquery.js')}}" ></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/horizontal-menu.js') }}"></script>
        @yield('script')
        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- End JS -->
        @auth
            @if(Auth::user()->github_access_token == null)
            <script>
                $( document ).ready(function() {
                    $('#staticBackdrop').modal();
                });
                    
            </script>
            @endif
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
        @endauth
    </body>
</html>    