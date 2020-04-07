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
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Write page content code here -->
    <!-- Start XP Row -->    
    <!-- Start XP Row -->    
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                <h4>gebruiker: {{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</h4>
                </div>
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
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
                @if($user->role == 3)
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
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
            </div> <!-- end card -->
            
        </div><!-- End XP Col -->
        
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Last pushed commits</h5>
                </div>
                <div class="card-body">
                {{-- {{dd($user_events)}} --}}
                @if(is_array($user_events))
                <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
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
                </div>
            </div>
@endif
        </div>
        <!-- End XP Col -->
    </div>

    <!-- End XP Row -->
<!-- Start XP Row -->
<div class="row">
<!-- Start XP Col -->
<div class="col-lg-6">
            
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
</div>
<!-- End XP Contentbar -->


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

