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
    <div class="row">
    <!-- Start XP Col -->
    <div class="col-lg-6">
    <div class="card m-b-20">
        <div class="card-body">
        <div class="m-b-10">
            <h6>Gebruiker</h6>
        </div>
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
    </div> <!-- end card -->
</div><!-- End XP Col -->
<div class="col-lg-6">
    <div class="card m-b-20">
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
                        <th>Status</th>
                        <th>Toon module</th>
                        @if(Auth::user()->role == 1)
                        <th>Bewerk</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach ($user->modules as $module)
                    <tr id="module-table-{{$module->id}}" class="@if($module->pivot->status ==1) table-success @elseif ($module->pivot->status ==0) table-danger @else table-info @endif">
                        <td>{{$module->name}}</td> 
                            <td id="txt_module-table-{{$module->id}}">@if($module->pivot->status ==1) open @elseif ($module->pivot->status ==3) done @else closed @endif</td> 
                        <td><a href="{{route('users.repo', ['user'=> $user, 'module'=> $module->slug])}}" class="task-list"><i class="fa fa-eye"></i> toon</a></td>
                        @if(Auth::user()->role == 1)
                            <td>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="{{$module->id}}_closed" value="0" @if($module->pivot->status ==0) checked @endif>
                                <label class="form-check-label f-w-3" for="{{$module->id}}_closed">closed</label>
                            </div>
                        
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="{{$module->id}}_open" value="1" @if($module->pivot->status ==1) checked @endif>
                                <label class="form-check-label f-w-3" for="{{$module->id}}_open">open</label>
                            </div>
                        
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="{{$module->id}}_done" value="3" @if($module->pivot->status ==3) checked @endif>
                                <label class="form-check-label f-w-3" for="{{$module->id}}_done">done</label>
                            </div>
                        </td>
                        @endif
                    </tr>
                @endforeach
                    </tbody>
                </table>
            </div><!-- End TABLE RESPONSIVE -->
        </div> <!-- End card body -->
    </div> <!-- end card -->
</div><!-- End XP Col -->

<!-- Start XP Col -->
<div class="col-lg-12">
    <div class="card m-b-20">
    <div class="card-header bg-white">
            <h5 class="card-title">Aanvraag</h5>
        </div>
    <div class="card-body">
        <!-- requests, alerts and reviews here -->
        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-striped table-bordered">
            <thead>
            <tr>
                <th>Omschrijving</th>
                <th>Link</th>
                <th>Type</th>
                <th>Datum</th>
                <th>Status</th>
                <th>Bekeken door</th>
                <th>Opmerkingen</th>
                <th>Bewerk</th>
            </tr>
            </thead>
            <tbody>
                <td>omschrijving</td>
                <td>link naar taak</td>
                <td>assistentie, nakijken, overig</td>
                <td>datum en tijd</td>
                <td>open, closed</td>
                <td>naam docent</td>
                <td>opmerkingen docent</td>
                <td><a href="#" class=""><i class="fa fa-pencil"></i> bewerk</a></td>
            </tbody>
            </table>
            </div> <!-- end table responsive -->
        </div> <!-- end card body -->
    </div> <!-- end card -->
</div><!-- End XP Col -->

<div class="col-lg-12">
<div class="card m-b-30">
    <div class="card-body">
    <div class="m-b-10">
            <h6>Last pushed commits</h6>
        </div>
    {{-- {{dd($user_events)}} --}}
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
    </div>
</div>
@endif
</div><!-- End XP Col -->

</div><!-- End XP Row -->
</div><!-- End XP Contentbar -->


@endsection 

@section('script')

<script>
    $('input[type=radio]').change(function() {
    console.log($(this).parent().parent().parent().parent());
    var trID = $(this).closest('tr').attr('id'); // table row ID 
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

        if(msg == 'closed'){
            $('#' + trID).attr('class', 'table-danger');
            $('#txt_' + trID).html('closed'); 
        }

        if(msg == 'open'){
            $('#' + trID).attr('class', 'table-success');
            $('#txt_' + trID).html('open'); 
        }

        if(msg == 'done'){
            $('#' + trID).attr('class', 'table-info');
            $('#txt_' + trID).html('done'); 
        }
    });
// Run code
});
                    
</script>

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




@endsection 

