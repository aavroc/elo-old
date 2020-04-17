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
        
        <h2>Modules</h2>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($modules as $module)
                    @if($user->modules()->where('module_id', $module->id)->exists())
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        @php $levelStatus = $user->modules()->where('module_id', $module->id)->first()->pivot->status @endphp
                        @if($levelStatus == 1 )
                        <a href="{{route('modules.show', ['module'=> $module->slug ])}}" class="card  m-b-30">
                        @else
                        <div class="card">
                        @endif
                        <div class="card-body">
                            <div class="xp-pricing text-center">
                                <div class="xp-pricing-top py-3">
                                    <h5 class="@if($levelStatus == 0) text-danger @elseif($levelStatus == 1) text-success @else text-info @endif mb-0">{{$module->name}}</h5>
                                </div>
                                    <div class="xp-pricing-middle py-3">
                                        <ul class="list-group">
                                            @php 
                                            $names = [] ;
                                            foreach($module->tasks as $task){
                                                if($task->tags->isNotEmpty()){
                                                    foreach($task->tags as $tag){
                                                        $names[$tag->name] = $tag;
                                                    }
                                                }
                                            }
                                            foreach($names as $name => $tag): @endphp
                                                <li class="list-group-item">{{$name}}</li>   
                                            @php endforeach; @endphp
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        @if($levelStatus == 1 )
                        </a>
                        @else
                        </div>
                        @endif
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <h2>Berichtencentrum</h2>
        <div class="row">
            <div class="col-lg-5">
                <div class="xp-email-leftbar">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black">Hulp verzoek aanvraag</h5>
                        </div>
                        <div class="card-body">                                    
                            <form action="{{route('student.request')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="onderwerp" id="hulpvraag" value="hulpvraag" class="form-check-input">
                                        <label for="hulpvraag" class="form-check-label">Hulp nodig?</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="onderwerp" id="nakijkverzoek" value="nakijkverzoek" class="form-check-input">
                                        <label for="nakijkverzoek" class="form-check-label">Modulegesprek</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="onderwerp" id="coach_gesprek" value="coach_gesprek" class="form-check-input">
                                        <label for="coach_gesprek" class="form-check-label">Coachgesprek</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="onderwerp" id="workshop" value="workshop" class="form-check-input">
                                        <label for="workshop" class="form-check-label">Workshop</label>
                                    </div>
                                </div>
                                <div class="row task-help mt-3">
                                    <label for="task_choice" class="col-sm-5 col-form-label">Welke taak wil je samen met je coach bekijken?</label>
                                    <div class="col-lg-7">
                                        @foreach ($modules as $module)
                                            @if($user->modules()->where('module_id', $module->id)->exists())
                                                @php $levelStatus = $user->modules()->where('module_id', $module->id)->first()->pivot->status @endphp
                                                @if($levelStatus == 1 )
                                                    <select name="task_choice[]" id="module_task_choice_{{$module->id}}" class="form-control module_task_choice">
                                                        @php $level = null @endphp 
                                                        @foreach ($module->tasks as $task)
                                                            <option value=""  selected hidden>kies een taak bij {{$module->name}}</option>
                                                            @if($level  != $task->level)
                                                            <optgroup label="{{$task->level}}">
                                                            @endif
                                                            <option value="{{$module->id}}_{{$task->id}}" >{{$task->name}}</option>
                                                            @php $level = $task->level @endphp
                                                        @endforeach
                                                    </select>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group row module-feedback mt-3">
                                    <label for="task_choice" class="col-sm-5 col-form-label">Kies een module die je wilt laten beoordelen</label>
                                    <div class="col-sm-7">
                                        <label for="module_choice"></label>
                                        <select name="module_choice" id="module_choice" class="form-control" required>
                                            <option value=""  selected hidden>kies een module</option>
                                            @foreach ($modules as $module)
                                                @if($user->modules()->where('module_id', $module->id)->exists())
                                                    @php $levelStatus = $user->modules()->where('module_id', $module->id)->first()->pivot->status @endphp
                                                    @if($levelStatus == 1 )
                                                        <option value="{{$module->id}}" >{{$module->name}}</option>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row coach mt-3">
                                    <label for="task_choice" class="col-sm-5 col-form-label">Coachgesprek onderwerp</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="coach_request" id="coach_request" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row extra mt-3">
                                    <label for="task_choice" class="col-sm-5 col-form-label">Geef nog eventueel extra informatie</label>
                                    <div class="col-sm-7">
                                        <textarea name="aanvullend" id="aanvullend" cols="10" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary my-1 aanvraag">Doe aanvraag! <i class="mdi mdi-send ml-2"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
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
                                                        Hulpverzoek
                                                    </th>
                                                    <th>
                                                        Datum | Tijd
                                                    </th>
                                                </tr>
                                            </thead>
                                        </div>                                        
                                        <tbody>
                                            {{-- {{dd($user->verzoeken)}} --}}
                                            @isset($user->verzoeken)
                                            @foreach($user->verzoeken->sortBy('updated_at') as $request)
                                            <tr class="email-unread">
                                                
                                                    
                                                @switch($request->status)
                                                    @case(1)
                                                    <td><i class="mdi mdi-help font-18"></i></td>
                                                    <td><a href="#">@isset($request->module->name)<span class="text-success">{{$request->module->name}}</span> @endisset > @isset($request->task)<span class="text-success">{{$request->task->level}}</span> @endisset > @isset($request->task->name)<span class="text-success">{{$request->task->name}}</span> @endisset</a></td> 
                                                        @break
                                                    @case(2)
                                                    <td><i class="mdi mdi-school font-18"></i></td>
                                                    <td><a href="#">@isset($request->module->name)<span class="text-success">{{$request->module->name}}</span> @endisset Eindgesprek</a></td> 
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
            </div>
        </div>
    

        
        <!-- End XP Row -->  
    </div>
    <!-- End XP Contentbar -->
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            $( ".task-help" ).hide();
            $( ".module-feedback" ).hide();
            $( ".extra" ).hide();
            $( ".aanvraag" ).hide();
            $( ".coach" ).hide();

            $( 'input[type=radio][name=onderwerp]').change(function() {
                switch($(this).val()) {
                    case 'hulpvraag':
                        $( ".task-help" ).show();
                        $( ".extra" ).show();
                        $( ".module-feedback" ).hide();
                        $( ".coach" ).hide();
                        $("#module_choice").attr("disabled", true);
                        $(".module_task_choice").attr("disabled", false);
                        $( ".aanvraag" ).show();
                        
                        break;
                    case 'nakijkverzoek':
                        $( ".module-feedback" ).show();
                        $( ".task-help" ).hide();
                        $( ".coach" ).hide();
                        $("#module_choice").attr("disabled", false);
                        $(".module_task_choice").attr("disabled", true);
                        $( ".extra" ).show();
                        $( ".aanvraag" ).show();
                        break;
                    case 'coach_gesprek':
                        $( ".module-feedback" ).hide();
                        $( ".task-help" ).hide();
                        $( ".coach" ).hide();
                        $("#module_choice").attr("disabled", true);
                        $(".module_task_choice").attr("disabled", true);
                        $( ".coach" ).show();
                        $( ".extra" ).show();
                        $( ".aanvraag" ).show();
                    break;
                    case 'workshop':
                        $( ".module-feedback" ).hide();
                        $( ".task-help" ).hide();
                        $( ".coach" ).hide();
                        $( ".coach" ).hide();
                        $("#module_choice").attr("disabled", true);
                        $(".module_task_choice").attr("disabled", true);
                        $( ".extra" ).show();
                        $( ".aanvraag" ).show();
                    break;
                    default:
                        $( ".task-help" ).hide();
                        $(".module_task_choice").attr("disabled", true);
                        $("#module_choice").attr("disabled", true);
                        $( ".module-feedback" ).hide();
                        $( ".extra" ).show();
                        $( ".aanvraag" ).show();
                } 
                // alert($(this).val());
            });
        });
    </script>
@endsection 


workshop