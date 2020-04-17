@section('title') 
Dashboard
@endsection
@extends('layouts.main')
@section('style')

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
<div class="col-md-12 col-lg-12 col-xl-12">
    <div class="text-left mt-2 mb-3">
        <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
    </div>
</div>
<!-- End XP Col -->
<!-- Start XP Col -->
<div class="col-md-8 col-lg-8 col-xl-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Verzoeken</h5>
                </div>
                <div class="card-body bg-white">

                    <ul class="nav nav-tabs nav-pills mb-3" id="defaultTabJustified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="student-tab-justified" data-toggle="tab" href="#student-justified" role="tab" aria-controls="student" aria-selected="true">
                            Student view</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="task-tab-justified" data-toggle="tab" href="#task-justified" role="tab" aria-controls="task" aria-selected="false">
                                Task view</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="defaultTabJustifiedContent">
                      <div class="tab-pane fade show active" id="student-justified" role="tabpanel" aria-labelledby="student-tab-justified">
                        <!-- start studentenoverzicht-->
                        @php 
                            $status = [
                                1 => 'hulpvraag',
                                2 => 'modulegesprek',
                                3 => 'coachgesprek',
                                4 => 'workshop',
                            ];
                            $type = [
                                1 => 'open',
                                2 => 'in behandeling',
                                3 => 'voltooid',
                                4 => 'trash',
                            ];

                            $hCount = 0;
                            $mCount = 0;
                            $cCount = 0;
                            $wCount = 0;
                            $tCount = 0;
                        @endphp
                <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-3">
            <div class="xp-email-leftbar">
                <div class="card m-b-30">
                    <div class="card-body">
                    {{-- {{dd($user->verzoeken)}} --}}
                    @isset($requests)

                        @foreach($requests as $request)

                        @if($request->type < 4)
                            @switch($request->status) 
                                @case(1)
                                @php $hCount++; @endphp
                                @break;

                                @case(2)
                                @php $mCount++; @endphp
                                @break;

                                @case(3)
                                @php $cCount++; @endphp
                                @break;

                                @case(4)
                                @php $wCount++; @endphp
                                @break;
                            @endswitch
                        @elseif($request->type == 4) 
                            @php $tCount++; @endphp 
                        @endif

                    @endforeach

                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="active"><i class="mdi mdi-inbox mr-2"></i>Alle verzoeken</a>
                            <span class="badge badge-light badge-pill text-primary">{{$requests->count()}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-help mr-2"></i>Hulpvraag</a>
                            <span class="badge badge-light badge-pill">{{$hCount}}</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-school mr-2"></i>Modulegesprek</a>
                            <span class="badge badge-light badge-pill">{{$mCount}}</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-account mr-2"></i>Coachgesprek</a>
                            <span class="badge badge-light badge-pill">{{$cCount}}</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-laptop mr-2"></i>Workshop</a>
                            <span class="badge badge-light badge-pill">{{$wCount}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-delete-sweep mr-2"></i>Trash</a>
                            <span class="badge badge-light badge-pill">{{$tCount}}</span>
                          </li>
                        </ul>
                    @endisset
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-9">
            <div class="xp-email-rightbar">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="markeren als open"><span class="btn btn-rounded btn-success btn-sm mr-2">open</span><a href="#" data-toggle="tooltip" data-placement="top" title="markeren als in behandeling"><span class="btn btn-rounded btn-warning btn-sm mr-2">in behandeling</span></a><a href="#" data-toggle="tooltip" data-placement="top" title="markeren als voltooid"><span class="btn btn-rounded btn-primary btn-sm mr-2">voltooid</span></a></li>
                            <li class="list-inline-item">
                            <select class="xp-select2-single form-control btn-sm mr-2" name="state" data-toggle="tooltip" data-placement="top" title="verander verzoek soort">
                            <option value="">Select</option><option value="1">{{$status[1]}}</option><option value="2">{{$status[2]}}</option><option value="3">{{$status[3]}}</option><option value="4">{{$status[4]}}</option></li>
                            </select>
                            <li class="list-inline-item"><a href="#" class="btn btn-rounded btn-danger btn-sm ml-2" data-toggle="tooltip" data-placement="top" title="verwijderen"><i class="mdi mdi-delete-sweep" style="color:white;"></i></a>
                            
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">                                    
                        <div class="table-responsive">
                        <table class="table table-hover table-borderless">                                            
                        <tbody>
                        {{-- {{dd($user->verzoeken)}} --}}
                        @isset($requests)
                        @foreach($requests as $request)
                            @if($request->type < 4)
                            
                                    <tr @if($request->status == 1)class="email-unread"@endif >
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="emailCheck1">
                                                    <label class="custom-control-label psn-abs" for="emailCheck1"></label>
                                                </div>
                                            </td>                          
                            @switch($request->status)
                            
                            @case(1)
                                <td><span class="text-info"><i class="mdi mdi-help mr-2"></i> hulpvraag </span>: {{$request->extra}}</td>
                                <td>van: <a href="{{route('users.show', $request->user->id)}}"><u>{{$request->user->firstname}}</u></a></td>                             
                                <td>over: <a href="{{route('tasks.show', $request->task->id)}}"><u>@isset($request->module->name){{$request->module->name}} @endisset > @isset($request->task){{$request->task->level}} @endisset > @isset($request->task->name){{$request->task->name}} @endisset</u></a></td>
                            @break

                            @case(2)
                                <td><span class="text-info"><i class="mdi mdi-school mr-2"></i> eindgesprek </span>: {{$request->extra}}</td>
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">@isset($request->module->name){{$request->module->name}}@endisset eindgesprek</a></td>
                            @break

                            @case(3)
                                <td><span class="text-info"><i class="mdi mdi-account mr-2"></i> coachgesprek </span>: {{$request->extra}}</td>
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">coachgesprek</a></td>
                            @break

                            @case(4)
                                <td><span class="text-info"><i class="mdi mdi-laptop mr-2"></i> workshop </span>: {{$request->extra}}</td>
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">workshop</a></td>                     
                            @break                                                  

                            @default
                                <td><span class="text-info"><i class="mdi mdi-laptop mr-2"></i> workshop </span>: {{$request->extra}}</td>
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">lege aanvraag</a></td>  
                            @endswitch
                            
                            <td>
                            <!-- David dit moet nog werkend gemaakt worden: Invoegen kolom type in tabel user_requests -->
                            @if($request->type == 1)
                                    <span class="badge badge-success badge-pill mr-2">open</span>
                                @elseif($request->type == 2)
                                    <span class="badge badge-primary badge-pill mr-2">in behandeling</span>
                                @elseif($request->type == 3)
                                    <span class="badge badge-danger badge-pill mr-2">voltooid</span>
                                @else
                                    <span class="badge badge-success badge-pill mr-2">open</span>
                                @endif
                            </td>   
                            <td>{{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}}</td>
                                        
                        </tr>
                        @endif
                    @endforeach
                    @endisset
                                </tbody>
                            </table>


                        </div>
                    </div> <!-- end card body -->
                     <div class="card-footer bg-white">
                        <div class="row">
                            <div class="col-6 col-md-6 align-self-center">
                                <div class="email-show-label">
                                    <span> Show : 1 - 10 of 590</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 align-self-center">
                                <div class="email-pagination float-right">
                                  <ul class="pagination mb-0">
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                    </li>
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> <!-- end card -->
            </div> <!-- end xp-email -->
            </div> <!--end col -->
        </div> <!-- end row -->
        </div> <!-- end tab-pane -->

        <div class="tab-pane fade" id="task-justified" role="tabpanel" aria-labelledby="task-tab-justified">
        <!-- start taken overzicht -->
        <h5>Taken overzicht</h5>
        <!-- start takenoverzicht-->
            @php 
            $status = [
                1 => 'hulpvraag',
                2 => 'modulegesprek',
                3 => 'coachgesprek',
                4 => 'workshop',
            ];
            $type = [
                1 => 'open',
                2 => 'in behandeling',
                3 => 'voltooid',
                4 => 'trash',
            ];

            $tCount = 0;
        @endphp
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-3">
            <div class="xp-email-leftbar">
                <div class="card m-b-30">
                    <div class="card-body">
                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="active"><i class="mdi mdi-inbox mr-2"></i>Alle taken</a>
                            <span class="badge badge-light badge-pill text-primary">{{$requests->count()}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-delete-sweep mr-2"></i>Trash</a>
                            <span class="badge badge-light badge-pill">{{$tCount}}</span>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-9">
            <div class="xp-email-rightbar">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="markeren als open"><span class="btn btn-rounded btn-success btn-sm mr-2">open</span><a href="#" data-toggle="tooltip" data-placement="top" title="markeren als in behandeling"><span class="btn btn-rounded btn-warning btn-sm mr-2">in behandeling</span></a><a href="#" data-toggle="tooltip" data-placement="top" title="markeren als voltooid"><span class="btn btn-rounded btn-primary btn-sm mr-2">voltooid</span></a></li>
                            <li class="list-inline-item">
                            <select class="xp-select2-single form-control btn-sm mr-2" name="state" data-toggle="tooltip" data-placement="top" title="verander verzoek soort">
                            <option value="">Select</option><option value="1">{{$status[1]}}</option><option value="2">{{$status[2]}}</option><option value="3">{{$status[3]}}</option><option value="4">{{$status[4]}}</option></li>
                            </select>
                            <li class="list-inline-item"><a href="#" class="btn btn-rounded btn-danger btn-sm ml-2" data-toggle="tooltip" data-placement="top" title="verwijderen"><i class="mdi mdi-delete-sweep" style="color:white;"></i></a>
                            
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">                                    
                        <div class="table-responsive">
                        <table class="table table-hover table-borderless">                                            
                        <tbody>
                    @isset($task_requests)
                    @foreach($task_requests->unique() as $task)    

                        <tr @if($request->status == 1)class="email-unread"@endif >
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="emailCheck1">
                                    <label class="custom-control-label psn-abs" for="emailCheck1"></label>
                                </div>
                            </td> 
                            <td><a href="#">{{$task->module->name}}</a></td>
                            <td><a href="#">{{$task->level}}</a></td>
                            <td><a href="#">{{$task->name}}</a></td>
                            <td><a href="#">#{{$counted_tasks[$task->id]}}</a></td>
                            <td>                      
                            <!-- David dit moet nog werkend gemaakt worden: Invoegen kolom type in tabel user_requests -->
                            @if($request->type == 1)
                                    <span class="badge badge-success badge-pill mr-2">open</span>
                                @elseif($request->type == 2)
                                    <span class="badge badge-primary badge-pill mr-2">in behandeling</span>
                                @elseif($request->type == 3)
                                    <span class="badge badge-danger badge-pill mr-2">voltooid</span>
                                @else
                                    <span class="badge badge-success badge-pill mr-2">geen type</span>
                                @endif
                            </td>   
                            <td>{{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}}</td>
                                        
                        </tr>
                    @endforeach
                    @endisset
                                </tbody>
                            </table>
                        </div> <!-- end table responsive -->
                    </div> <!-- end card body -->
                    <!-- <div class="card-footer bg-white">
                        <div class="row">
                            <div class="col-6 col-md-6 align-self-center">
                                <div class="email-show-label">
                                    <span> Show : 1 - 10 of 590</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 align-self-center">
                                <div class="email-pagination float-right">
                                  <ul class="pagination mb-0">
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                    </li>
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div> <!-- end card -->
            </div> <!-- end xp-email -->
            </div> <!--end col -->
        </div> <!-- end row -->
        </div> <!-- end tab-pane -->
      </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End XP Col -->
     <!-- Start XP Col -->               
     <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Aangenomen verzoeken door jou</h5>
                </div>
                <div class="card-body">
                    <div class="xp-to-do-list">
                    <form action="{{route('request_to_done')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <ul id="list-group" class="list-group list-group-flush">
                                    @foreach($taken_requests as $teacher_request)
                                    <li class="list-group-item">
                                        <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="request_{{$teacher_request->id}}" name="todos[]" value="{{$teacher_request->id}}">
                                        <label class="custom-control-label f-w-4" for="request_{{$teacher_request->id}}"><span class="text-warning">{{$teacher_request->user->firstname}}</span> - {{$teacher_request->module->name}} > {{$teacher_request->task->level}} > {{$teacher_request->task->name}}</label>
                                            <a class="xp-to-do-list-remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <button type="submit" class="btn btn-primary">Markeer klaar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    <!-- Start XP Col -->               
    <div class="col-lg-4">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black">Get started!</h5>
            </div>
            <div class="card-body">
                <div class="xp-button">
                <a href="{{route('retrieve')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Retrieve all modules and tasks</a>
                <a href="{{route('users.select_file')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Upload Users</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->        
    <!-- Start XP Col -->               
    <div class="col-lg-4">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black">Klassen</h5>
            </div>
            <div class="card-body">
                <div class="xp-button">
                <a href="{{URL::to('/classrooms/LCTAOO9A')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9A</a>
                <a href="{{URL::to('/classrooms/LCTAOO9C')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9C</a>
                <a href="{{URL::to('/classrooms/LCTAOO9D')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9D</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->
    <!-- End XP Col --> 
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black">Modules</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs nav-justified mb-3" id="defaultTabJustified" role="tablist">
                    @foreach($modules as $module)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" id="{{$module->slug}}-tab-justified" data-toggle="tab" href="#{{$module->slug}}-justified" role="tab" aria-controls="{{$module->slug}}" @if ($loop->first) aria-selected="true" @endif>
                    {{$module->name}}</a>
                    </li>
                    @endforeach
                </ul>
                
                <div class="tab-content" id="defaultTabJustifiedContent">
                @foreach($modules as $module)
                    <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{$module->slug}}-justified" role="tabpanel" aria-labelledby="{{$module->slug}}-tab-justified">
                    <h5>{{$module->name}}</h5>
                    <p>content</p>
                    {{-- {{dd($data_generated)}} --}}
                {{-- @foreach($data_generated as $slug => $data)

                    @foreach($data as $user_id => $content)
                        @if(!isset($content['events']->message))
                        <p>
                                {{$content['user_data']->firstname}}
                        @endif

                        @foreach($content['events'] as $events)
                            @if(property_exists( $events, 'payload'))
                                @foreach($events->payload->commits as $commit)
                                    
                            <a href="users/{{$user_id}}/module/{{$slug}}">{{$commit->message}} </a>
                            
                        </p>
                                @endforeach
                            @endif
                            @php break; @endphp
                        @endforeach
                        
                    @endforeach
                @endforeach --}}
                    </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->
    </div> <!-- end Row -->
</div>
<!-- End XP Contentbar -->

@endsection
@section('script')

@endsection 