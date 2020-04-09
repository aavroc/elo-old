@section('title') 
Gebruiker
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<div class="xp-breadcrumbbar text-center">
</div>
<div class="xp-contentbar">
    <div class="row">
        <div class="col-lg-6">
            <h4>gebruiker: {{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6"> <!-- User Profile -->
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Laatst actief geweest</th>
                                @if(Auth::user()->role == 1)
                                <th>Bewerk</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                <td>@php
                                    $roles = ['','admin','docent','student'];
                                    @endphp
                                    {{$roles[$user->role]}}</td>
                                <td>@if(isset($user->session))<span class="text-success" role="alert">{{$user->session->last_activity}}</span>
                                 @else
                                <span class="text-danger" role="alert">Nooit ingelogd geweest!</span>
                                @endif</td>
                                @if(Auth::user()->role == 1)
                                <td><a href="{{route('users.edit', $user)}}" class=""><i class="fa fa-pencil"></i> bewerk</a></td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End User Profile -->
            @if($user->role == 3)
            <div class="card m-b-30">    <!-- User Modules -->
                <div class="card-body">
                    <div class="m-b-10">
                        <h6>Modules</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Module</th>
                                    <th>Toon user module</th>
                                    <th>Status</th>
                                    @if(Auth::user()->role == 1)
                                    <th>Bewerk</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($user->modules as $module)
                                <tr class="@if($module->pivot->status ==1) table-success @elseif ($module->pivot->status ==0) table-danger @else table-info @endif">
                                    <td>{{$module->name}}</td>
                                        @if($module->pivot->status ==1) 
                                        <td >open</td> 
                                        @elseif ($module->pivot->status ==3) 
                                        <td >done</td> 
                                        @else
                                        <td >closed</td> 
                                        @endif
                                    <td><a href="{{route('users.repo', ['user'=> $user, 'module'=> $module->slug])}}" class=""><i class="fa fa-eye"></i> toon</a></td>
                                    @if(Auth::user()->role == 1)
                                        <td><a href="#" class=""><i class="fa fa-pencil"></i> bewerk</a></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End User Modules -->
        </div>
        <div class="col-lg-6"> 
            <div class="card m-b-30"><!-- Laatste verzoeken -->
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Laatste verzoeken</h5>
                </div>
                <div class="card-body">
                    <div class="xp-email-rightbar">
                        <div class="card m-b-30">
                            <div class="card-body">                                    
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">    
                                            <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Onderwerp
                                                    </th>
                                                    <th>
                                                        Hulpverzoek
                                                    </th>
                                                    <th>
                                                        Datum | Tijd
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @isset($user->verzoeken)
                                            @foreach($user->verzoeken->sortBy('updated_at') as $request)
                                            <tr class="email-unread">
                                                @switch($request->status)
                                                    @case(1)
                                                    <td><i class="mdi mdi-help font-18"></i></td>
                                                    <td><a href="#">Hulpverzoek</a></td> 
                                                        @break
                                                    @case(2)
                                                    <td><i class="mdi mdi-school font-18"></i></td>
                                                    <td><a href="#">Module eindgesprek</a></td> 
                                                        @break
                                                    @case(3)
                                                    <td><i class="mdi mdi-account-circle"></i></td>
                                                    <td><a href="#">Coachgesprek</a></td> 
                                                        @break   
                                                    @case(4)
                                                    <td><i class="mdi mdi-laptop"></i></td>
                                                    <td><a href="#">Workshop</a></td> 
                                                        @break   
                                                    @case(5)
                                                    <td><i class="mdi mdi-sync font-18"></i></td>
                                                    <td><a href="#">In behandeling</a></td> 
                                                        @break   
                                                    @case(6)
                                                    <td><i class="mdi mdi-check-outline font-18"></i></td>
                                                    <td><a href="#">Voltooid</a></td> 
                                                        @break                                                    
                                                    @default
                                                        Default case...
                                                @endswitch
                                                <td>{{$request->extra}}</td>
                                                <td>
                                                    {{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}} 
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Laatste verzoeken -->
            <div class="card m-b-30"><!-- Laatste commits -->
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Laatste gepushte commits</h5>
                </div>
            </div><!-- End Laatste commits  -->
            <div class="card m-b-30"><!-- no records made  -->
                <div class="card-body"> 
                    @if(is_array($user_events))
                        <div class="table-responsive">
                            <table id="data-moduletable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Module</th>
                                        <th>Commit on github</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($user_events as $event)
                                    @if($event->type == "PushEvent")
                                        @foreach($event->payload->commits as $commit)
                                            @php $module = explode('/', $event->repo->name)[1]; @endphp
                                            <tr>
                                                <td><a href="{{route('users.repo', ['user'=> $user, 'module'=> $module])}}"
                                            class="card-link">{{$module}}</a></td>
                                                <td><a href="https://github.com/{{$event->repo->name}}/commit/{{$commit->sha}}" target="_blank">{{$commit->message}}</a> </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                    <p>No events recored yet</p>
                    @endif
                </div>
            </div><!-- End no records made  -->
            @endif
        </div>
    </div>
</div>
@endsection 

@section('script')
<!-- Required Datatable JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/init/table-datatable-init.js') }}"></script>


<script>
    $('input[type=radio]').change(function() {
    console.log($(this).parent().parent().parent().parent());
    var card =$(this).parent().parent().parent().parent();
    var status = this.id;
    $.ajax({
        method: "POST",
        url: "/students/update_level",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: { 
                'student': {{$user->id}}, 
                'status': status,
            },
        success: function(response){ // What to do if we succeed
            console.log(response); 
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    })
    .done(function( msg ) {
        $(card).removeClass('bg-danger bg-success bg-info' );
        
        if(msg == 'closed'){
            $(card).addClass('bg-danger' );
        }

        if(msg == 'open'){
            $(card).addClass('bg-success' );
        }

        if(msg == 'done'){
            $(card).addClass('bg-info' );
        }
    });
// Run code
});
                    
</script>

@endsection 

