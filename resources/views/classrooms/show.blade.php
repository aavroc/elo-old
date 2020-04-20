@section('title') 
Klassen
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
    <!-- Start XP Row -->
    @if(Auth::user()->role == 1)
    <div class="row">
        <div class="col-lg-12">
        <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Reset levels {{$classroom->name}}</h5>
                </div>
                <div class="card-body">
                <h6>Start Modules</h6>
                <form action="{{route('reset_levels', $classroom)}}" method="post">
                    @csrf
                    @foreach($modules as $module)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="basic_modules[]" id="{{$module->name}}" value="{{$module->id}}" @if($module->basic_status == 1) checked @endif>
                        <label class="form-check-label" for="{{$module->name}}">{{$module->name}}</label>
                    </div>
                    @endforeach
                    <button class="btn btn-danger" name="submit" >Set all users to start</button>
                </form>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    @endif

     <!-- Start XP Row -->
     <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$classroom->name}} - Module Overzicht</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>student</td>
                                @foreach($modules as $module)
                                <td>{{$module->name}}</td>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php $status = [ 0 => 'gesloten', 1 => 'bezig', 3 => 'voldaan']; @endphp
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                <a href="{{route('users.show',$user->id)}}">{{$user->firstname}} {{$user->lastname}}</a>
                                </td>
                                @foreach($modules as $module)
                                <td>
                                    @if(is_object($module->users()->where('user_id', $user->id)->first()))
                                    {{$status[$module->users()->where('user_id', $user->id)->first()->pivot->status] }}
                                    @endif
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>

    <!-- Start XP Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$classroom->name}}</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>Ingelogd</th>
                                <th>Laatste inlog</th>
                                <th>Toon</th>
                                @if(Auth::user()->role == 1)
                                <th>Bewerk</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{$user->firstname}}
                                </td>
                                <td>
                                    {{$user->lastname}}
                                </td>
                                <td>
                                    @if($user->status_id != 2)
                                    <span class="text-danger" role="alert">
                                        Niet ingelogd
                                    </span>
                                    @else
                                    <span class="text-success" role="alert">
                                        Ingelogd
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    @if(isset($user->session))
                                    <span class="text-success" role="alert">
                                        {{$user->session->last_activity}}
                                    </span>
                                    @else
                                    <span class="text-danger" role="alert">
                                        Nooit ingelogd geweest!
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('users.show', $user)}}" class=""><i class="fa fa-eye"></i> toon</a>
                                </td>
                                @if(Auth::user()->role == 1)
                                <td>
                                <a href="{{route('users.edit', $user)}}" class=""><i class="fa fa-pencil"></i> bewerk</a>
                                </td>
                                @endif
                            </tr>
                            <script>
                                $('input[type=radio][name=level_user_{{$user->id}}').change(function() {
                                console.log(this.id);
                                let level_id = $(this).attr('data-level');
                                let student_id = $(this).attr('data-student');
                                console.log(student_id);
                                $.ajax({
                                    method: "POST",
                                    url: "/students/update_level",
                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                    data: { 
                                            'student': student_id, 
                                            'level': level_id,
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
                                    var messageType = '';
                                    if(msg.level == 1){
                                        messageType = 'secondary';
                                    }
                                    if(msg.level == 2){
                                        messageType = 'warning';
                                    }
                                    if(msg.level == 3){
                                        messageType = 'success';
                                    }
                                    $("#message").html(
                                        
                                        '<div class="alert alert-'+messageType+'" role="alert">'+ msg.msg+'</div>'
                                        
                                    );
                                });
                            // Run code
                            });
                                                
                            </script>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
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
@endsection 