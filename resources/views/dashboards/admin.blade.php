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
            <div class="text-left mt-3 mb-5">
                <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
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
                    <a href="{{URL::to('/classrooms/LCTAO2020')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAO2020</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
         <!-- Start XP Col -->
         <div class="col-md-6 col-lg-6 col-xl-6">
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
                      <!-- @David, deze looped nu door alle modules heen, ik heb tabs gemaakt dus per module, moet dus nog ingebouwd worden dat hij het per module laat zien en misschien moet het ook wel gewoon een tabel worden.. -->
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
        <!-- Start XP Col -->
        <div class="col-lg-6 col-xl-6">
            <h5>Verzoeken</h5>
            <ul class="nav nav-tabs nav-justified mb-3" id="defaultTabJustified" role="tablist">
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
                {{-- <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{$module->slug}}-justified" role="tabpanel" aria-labelledby="{{$module->slug}}-tab-justified"> --}}
                <div class="tab-pane fade show active " id="student-justified" role="tabpanel" aria-labelledby="student-tab-justified">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Studenten overzicht</h5>
                        </div>
                        @php 
                            $status = [
                                1 => 'hulpvraag',
                                2 => 'modulegesprek',
                                3 => 'coachgesprek',
                                4 => 'workshop',
                            ];
                        
                        @endphp
                        <div class="xp-email-rightbar">
                            <div class="card m-b-30">
                                <div class="card-body">                                    
                                    <div class="table-responsive">
                                        <table class="table table-hover table-borderless">    
                                            <div class="card-header bg-white">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        
                                                        <th>
                                                            Onderwerp
                                                        </th>
                                                        <th>
                                                            Student
                                                        </th>
                                                        <th>
                                                            Datum | Tijd
                                                        </th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>
                                            </div>                                        
                                            <tbody>
                                                {{-- {{dd($user->verzoeken)}} --}}
                                                @isset($requests)
                                                @foreach($requests as $request)
                                                <tr class="email-unread">
                                                    
                                                    
                                                    @switch($request->status)
                                                        @case(1)
                                                        <td><i class="mdi mdi-help font-18"></i></td>
                                                        <td><a href="#">@isset($request->module->name)<span class="text-success">{{$request->module->name}}</span> @endisset > @isset($request->task)<span class="text-success">{{$request->task->level}}</span> @endisset > @isset($request->task->name)<span class="text-success">{{$request->task->name}}</span> @endisset </a></td> 
                                                            @break
                                                        @case(2)
                                                        <td><i class="mdi mdi-school font-18"></i></td>
                                                        <td><a href="#">@isset($request->module->name)<span class="text-success">{{$request->module->name}}</span> @endisset eindgesprek</a></td> 
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
   
                                                    <td><a href="{{route('users.show', $request->user->id)}}" class="text-warning"><u>{{$request->user->firstname}}</u></a></td>
                                                    <td>
                                                        {{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}} 
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-info">Afhandelen</a>
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
                </div>
                <div class="tab-pane fade " id="task-justified" role="tabpanel" aria-labelledby="task-tab-justified">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Taken overzicht</h5>
                        </div>
                        @php 
                            $status = [
                                1 => 'hulpvraag',
                                2 => 'modulegesprek',
                                3 => 'coachgesprek',
                                4 => 'workshop',
                            ];
                        
                        @endphp
                        <div class="xp-email-rightbar">
                            <div class="card m-b-30">
                                <div class="card-body">                                    
                                    <div class="table-responsive">
                                        <table class="table table-hover table-borderless">    
                                            <div class="card-header bg-white">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Module
                                                        </th>
                                                        <th>
                                                            Level
                                                        </th>
                                                        <th>
                                                            Taak
                                                        </th>
                                                        <th>
                                                            Aantal aanvragen
                                                        </th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>
                                            </div>                                        
                                            <tbody>
                                                @isset($task_requests)
                                                @foreach($task_requests->unique() as $task)
                                                        <tr class="email-unread">
                                                            <td><a href="#">{{$task->module->name}}</a></td> 
                                                            <td><a href="#">{{$task->level}}</a></td> 
                                                            <td><a href="#">{{$task->name}}</a></td> 
                                                            <td><a href="#">{{$counted_tasks[$task->id]}}</a></td> 
                                                            <td>
                                                                <a href="" class="btn btn-info">Afhandelen</a>
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
                </div>
            </div>
           
        </div>
        <!-- End XP Col --> 
    </div>
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 