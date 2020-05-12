@section('title') 
Klas:  {{$classroom->name}}
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
                    <div class="table-responsive table-sm">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                @foreach($modules as $module)
                                <th><a href="{{route('modules.show_teacher',$module->slug)}}">Module <i class="ti-eye"></i></a></th>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>Laatste inlog</th>
                                @foreach($modules as $module)
                                <th>{{$module->name}}</th>
                                @endforeach
                            </tr>
                            
                        </thead>
                        <tbody>
                            @php $status_words = [ 0 => 'gesloten', 1 => 'bezig', 3 => 'voldaan']; @endphp
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                <a href="{{route('users.show',$user->id)}}">{{$user->firstname}}</a>
                                </td>
                                <td>
                                    <a href="{{route('users.show',$user->id)}}">{{$user->lastname}}</a>
                                </td>
                                <td>
                                    @if(isset($user->session))
                                    <span class="text-success" role="alert">
                                        {{\Carbon\Carbon::parse($user->session->last_activity, 'Europe/Amsterdam')->format('d-m-Y - H:i')}}
                                    </span>
                                    @else
                                    <span class="text-danger" role="alert">
                                        Nooit ingelogd geweest!
                                    </span>
                                    @endif
                                </td>
                                @foreach($modules as $module)
                                <td>
                                    @if(is_object($module->users()->where('user_id', $user->id)->first()))
                                        @php $status = $module->users()->where('user_id', $user->id)->first()->pivot->status; @endphp
                                        @if( $status == 0 )
                                            <span class="text-danger">{{$status_words[$status] }} <i class="mdi mdi-lock"></i></span>
                                        @elseif($status == 1)
                                            <span class="text-warning">{{$status_words[$status] }} <i class="mdi mdi-lock-open"></i></span>
                                        @else
                                            <span class="text-success">{{$status_words[$status] }} <i class="mdi mdi-school"></i></span>
                                           
                                        @endif
                                        
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
    <!-- End XP Row -->

      <!-- Start XP Row -->
      {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$classroom->name}} - Skills Overzicht</h5>
                    @if(Auth::user()->role == 1)
                        <a href="{{route('resetskills', $classroom)}}" class="btn btn-danger" name="submit" >Reset all Skills</a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive table-sm">
                        <table id="xp-default-datatable" class="display table table-bordered table-hover">
                            <thead>
                                @foreach ($skills as $skill)
                                    <tr>
                                        <th>&nbsp;</th>|
                                        <th>
                                            <a href="{{route('skills.edit',$skill->id)}}">{{$skill->name}}</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        @foreach($skill->indicators as $indicator)
                                        <th>{{$indicator->name}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td style="text-align:center;padding:0 10px"><a href="{{route('users.show',$user->id)}}">{{$user->firstname}}</a></td>
                                            @foreach($user->skills as $skills)

                                            @endforeach
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                                @endforeach
                            
                                
                                        
                                        <th>
                                            @php
                                            //get current status
                                            $docent_status = $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->docent;
                                            $student_status = $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->student;
                                            @endphp
                                            @if($docent_status == 0)
                                                <span class="text-danger">Niet Voldaan</span>
                                            @elseif($docent_status == 1)
                                                <span class="text-success">Voldaan</span>
                                            @endif
                                        </th>
                                        <th>
                                        @if($student_status == 0)
                                            <span class="text-danger">Niet Voldaan</span>
                                        @elseif($student_status == 1)
                                            <span class="text-success">Voldaan</span>
                                        @endif
                                        </th>


                                        <td>
                                            @php
                                                //get current status
                                                $docent_status = $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->docent;
                                            @endphp
                                            <div class="custom-control custom-radio custom-control-inline text-success skills">
                                                <input type="radio" id="{{$indicator->id}}_voldaan" name="indy_{{$indicator->id}}" class="custom-control-input " value="voldaan" @if( $docent_status == 1) checked  @endif>
                                                <label class="custom-control-label " for="{{$indicator->id}}_voldaan">Voldaan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline text-danger skills" >
                                                <input type="radio" id="{{$indicator->id}}_nietvoldaan" name="indy_{{$indicator->id}}" class="custom-control-input" value="niet_voldaan" @if( $docent_status == 0) checked  @endif>
                                                <label class="custom-control-label " for="{{$indicator->id}}_nietvoldaan">Niet voldaan</label>
                                            </div>
                                        </td>
                                        <td>
                                            @if( $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->student == 0 )
                                                <span class="text-danger">Niet voldaan</span> 
                                                @elseif( $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->student == 1 )
                                                <span class="text-success">Voldaan</span> 
                                                
                                            @endif
                                        </td> --}}
                                 
                           
                                {{-- @foreach ($skill->users as $usr)
                                
                                    @php $docent_status = $usr->skills()->where('indicator_id', $indicator->id)->first()->pivot->docent; @endphp
                                    @php $student_status = $usr->skills()->where('indicator_id', $indicator->id)->first()->pivot->student; @endphp
                                    
                                
                                <td style="text-align:center;"  class="@if($docent_status == 0 ) bg-danger @elseif($docent_status == 1) bg-success @endif">
                                    
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="@if($level_number ==0 ) Onbekwaam @elseif($level_number == 1) Knows @elseif($level_number ==2 ) Knows How @elseif($level_number == 3 ) Shows How @elseif($level_number == 4 ) Does @endif" >{{$level_number}}</a>
                                    
                                </td>
                                <td  style="text-align:center;" class="@if($interest_number ==0 ) bg-danger @elseif($interest_number == 1) bg-success  @endif">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="@if($interest_number ==0 ) Heeft geen interesse @elseif($interest_number == 1) Is geinteresseerd @endif" >{{$interest_number}}</a>
                                    
                                    
                                </td>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div> --}}
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