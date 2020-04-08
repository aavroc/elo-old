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
    <h2>Berichtencentrum</h2>
    <div class="row">
        <div class="col">
            <form action="{{route('student.request')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <h6>Wat is het onderwerp van je bericht</h6>
                        <input type="radio" name="onderwerp" id="hulpvraag" value="hulpvraag">
                        <label for="hulpvraag">Help of feedback nodig</label>
                        <input type="radio" name="onderwerp" id="nakijkverzoek" value="nakijkverzoek">
                        <label for="nakijkverzoek">Module opdracht laten beoordelen</label>
                        <input type="radio" name="onderwerp" id="coach_gesprek" value="coach_gesprek">
                        <label for="coach_gesprek">Coach gesprek aanvragen</label>
                        <input type="radio" name="onderwerp" id="workshop" value="workshop">
                        <label for="workshop">Workshop aanvragen</label>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col">
                        <div class="task-help">
                            <h6>Welke taak wil je samen met je coach bekijken?</h6>
                            @foreach ($modules as $module)
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
                            @endforeach
                        </div>
                    </div>
                    <div class="col">
                        <div class="module-feedback">
                            <label for="module_choice">Kies een module die je wilt laten beoordelen</label>
                            <select name="module_choice" id="module_choice" class="form-control">
                                <option value=""  selected hidden>kies een module</option>
                            @foreach ($modules as $module)
                                @php $levelStatus = $user->modules()->where('module_id', $module->id)->first()->pivot->status @endphp
                                @if($levelStatus == 1 )
                                    <option value="{{$module->id}}" >{{$module->name}}</option>
                                @endif
                           
                            @endforeach
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="row coach">
                    <div class="col">
                        <label for="coach_request">Coachgesprek onderwerp</label>
                        <input type="text" name="coach_request" id="coach_request" class="form-control">
                    </div>
                </div>
                <div class="row extra">
                   
                    <div class="col">
                        <h6>Geef nog eventueel extra informatie</h6>
                        <textarea name="aanvullend" id="aanvullend" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Doe aanvraag!</button>
                    </div>
                </div>
            </form>
        </div>1=hulpvraag,2=modulegesprek,3=coachgesprek,4=workshop, 5=in behandeling, 6= voltooid
        <div class="col-lg-6">
                <div class="xp-email-rightbar">
                    <div class="card m-b-30">
                        <div class="card-body">                                    
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless">                                            
                                    <tbody>
                                        {{-- {{dd($user->verzoeken)}} --}}
                                        @isset($user->verzoeken)
                                        @foreach($user->verzoeken->sortBy('updated_at') as $request)
                                        <tr class="email-unread">
                                            
                                                
                                            @switch($request->status)
                                                @case(1)
                                                <td><i class="mdi mdi-help font-18"></i></td>
                                                <td><a href="email-open.html">Hulpverzoek</a></td> 
                                                    @break
                                                @case(2)
                                                <td><i class="mdi mdi-school font-18"></i></td>
                                                <td><a href="email-open.html">Module eindgesprek</a></td> 
                                                    @break
                                                @case(3)
                                                <td><i class="mdi mdi-account-circle"></i></td>
                                                <td><a href="email-open.html">Coachgesprek</a></td> 
                                                    @break   
                                                @case(4)
                                                <td><i class="mdi mdi-laptop"></i></td>
                                                <td><a href="email-open.html">Workshop</a></td> 
                                                    @break   
                                                @case(5)
                                                <td><i class="mdi mdi-sync font-18"></i></td>
                                                <td><a href="email-open.html">In behandeling</a></td> 
                                                    @break   
                                                @case(6)
                                                <td><i class="mdi mdi-check-outline font-18"></i></td>
                                                <td><a href="email-open.html">Voltooid</a></td> 
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
   

    <div class="row">
    @foreach ($modules as $module)
        @php $levelStatus = $user->modules()->where('module_id', $module->id)->first()->pivot->status @endphp
        @if($levelStatus == 1 )
        <a href="{{route('modules.show', ['module'=> $module->slug ])}}" class="card module-to-choose">
        @endif
            <div class="card-body d-flex flex-column align-items-center justify-content-center @if($levelStatus == 0) bg-danger @elseif($levelStatus == 1) bg-success @else bg-info @endif" 
                style="width:12rem;height:12rem;" >
                <h5 class="card-title h1">{{$module->name}}</h5>
            </div>
        @if($levelStatus == 1 )
        </a>
        @endif
    @endforeach
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
            $( ".btn" ).hide();
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
                        $( ".btn" ).show();
                        
                        break;
                    case 'nakijkverzoek':
                        $( ".module-feedback" ).show();
                        $( ".task-help" ).hide();
                        $( ".coach" ).hide();
                        $("#module_choice").attr("disabled", false);
                        $(".module_task_choice").attr("disabled", true);
                        $( ".extra" ).show();
                        $( ".btn" ).show();
                        break;
                    case 'coach_gesprek':
                        $( ".module-feedback" ).hide();
                        $( ".task-help" ).hide();
                        $( ".coach" ).hide();
                        $("#module_choice").attr("disabled", true);
                        $(".module_task_choice").attr("disabled", true);
                        $( ".coach" ).show();
                        $( ".extra" ).show();
                        $( ".btn" ).show();
                    break;
                    case 'workshop':
                        $( ".module-feedback" ).hide();
                        $( ".task-help" ).hide();
                        $( ".coach" ).hide();
                        $( ".coach" ).hide();
                        $("#module_choice").attr("disabled", true);
                        $(".module_task_choice").attr("disabled", true);
                        $( ".extra" ).show();
                        $( ".btn" ).show();
                    break;
                    default:
                        $( ".task-help" ).hide();
                        $(".module_task_choice").attr("disabled", true);
                        $("#module_choice").attr("disabled", true);
                        $( ".module-feedback" ).hide();
                        $( ".extra" ).show();
                        $( ".btn" ).show();
                } 
                // alert($(this).val());
            });
        });
    </script>
@endsection 


workshop