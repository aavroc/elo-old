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
        <div class="row">
        <div class="col-12">
        <div class="card m-b-30 border-dark">
                <div class="card-header bg-dark">
                    <h5 class="card-title text-white">Modules</h5>
                    <h6 class="card-subtitle text-white">klik op de module waarin je wilt werken</h6>
                </div>
                <div class="card-body">
                <div class="row">
                    @foreach ($modules as $module)
                        @if($user->modules()->where('module_id', $module->id)->exists())
                        @php 
                            $names = [] ;
                            $countb = "0";
                            $tooltip = "";
                            foreach($module->tasks as $task){
                                if($task->tags->isNotEmpty()){
                                    foreach($task->tags as $tag)
                                    {
                                        $names[$tag->name] = $tag;}
                                }
                            }
                            $levelStatus = $user->modules()->where('module_id', $module->id)->first()->pivot->status;

                            foreach($names as $name => $tag) {

                                $separator = count( $names );
                                $countb++;
                                
                                $tooltip .= (count( $names ) != $countb)? $name . ", " : $name;

                                }

                        @endphp
                            <!-- Start XP Col -->                       
                            <div class="col-xl-3 m-b-10">
                               
                                    @if($levelStatus == 1 )
                                    <a href="{{route('modules.show', ['module'=> $module->slug ])}}" class="btn btn-outline-success btn-lg btn-module f-w-7 border-success" data-toggle="tooltip" data-placement="bottom" title="OPEN - onderwerpen: {{$tooltip}}" >{{$module->name}} (#/#) <i class="mdi mdi-arrow-right-drop-circle"></i></a>
                                    @elseif($levelStatus == 0 )
                                    <a href="#" class="btn alert-danger btn-lg btn-module f-w-3" data-toggle="tooltip" data-placement="bottom" title="GEEN TOEGANG - onderwerpen: {{$tooltip}}">{{$module->name}} <i class="mdi mdi mdi-close-circle"></i> </a>
                                    @else
                                    <a href="#" class="btn btn-success btn-lg btn-module" data-toggle="tooltip" data-placement="bottom" title="MODULE AFGEROND - onderwerpen: {{$tooltip}}">{{$module->name}} <i class="mdi mdi mdi-checkbox-marked-circle"></i> </a>
                                    @endif
                                
                            </div>
                            <!-- End XP Col -->
                        @endif
                    @endforeach
                </div> <!--end card row -->
            </div> <!--end card body -->
        </div> <!--end card -->
        </div> <!--end col -->
</div> <!--end row -->
<div class="row">
        <div class="col-12">
        <div class="card m-b-10 border-info">
                <div class="card-header bg-info">
                    <h5 class="card-title text-white">Berichtencentrum</h5>
                    <h6 class="card-subtitle text-white">overzicht verzoeken en verzoek aanvragen</h6>
                </div>
                <div class="card-body">
                    <div class="row">   
                    <div class="col-md-8 col-lg-8 col-xl-8"><!-- Start XP Col --> 
                        <div class="card  m-b-10">
                            <div class="card-header alert-info">
                                <div class="row">
                                    <div class="col-lg-4">
                                            <h5 class="card-title">Mijn verzoeken</h5>
                                             <h6 class="card-subtitle">hieronder staan de verzoeken door jou gedaan</h6>
                                    </div>
                                    <div class="col-lg-8 text-right">
                                        <div class="btn-group btn-filter" data-toggle="buttons">
                                            <label class="btn btn-info active">
                                                <input type="radio" name="status" value="all" checked="checked"> Alle
                                            </label>
                                            <label class="btn btn-danger">
                                                <input type="radio" name="status" value="type1"> Open
                                            </label>
                                            <label class="btn btn-warning">
                                                <input type="radio" name="status" value="type2"> in behandeling
                                            </label>
                                            <label class="btn btn-success">
                                                <input type="radio" name="status" value="type3"> voltooid
                                            </label>						
                                        </div> <!-- end btn group -->
                                    </div><!-- end col -->
                                </div> <!--end row -->
                            </div> <!-- end card header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="xp-default-datatable" class="display table table-hover table-filter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Verzoek</th>
                                                <th>Onderwerp</th>
                                                <th>Status</th>
                                                <th>Docent</th>
                                                <th>Datum | tijd</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                        {{-- {{dd($user->verzoeken)}} --}}
                                        @isset($user->verzoeken)
                                        @foreach($user->verzoeken->sortBy('updated_at') as $request)
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-request{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-request{{$request->id}}Title" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-request{{$request->id}}Title">Verzoek vraag</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{$request->extra}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>

                                            <tr data-status="type{{$request->status}}">
                                
                                                @switch($request->type)
                                                
                                                @case(1)
                                                    <td><span class="f-w-6"><i class="mdi mdi-help mr-2"></i> hulpvraag : </span>
                                                    <!-- Button trigger modal -->
                                                    <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                                    <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                                    </button></td>                                                          
                                                    <td><a href="{{route('tasks.show', $request->task->id)}}"><u>@isset($request->module->name){{$request->module->name}} @endisset > @isset($request->task){{$request->task->level}} @endisset > @isset($request->task->name){{$request->task->name}} @endisset</u></a></td>
                                                @break

                                                @case(2)
                                                    <td><span class="f-w-6"><i class="mdi mdi-school mr-2"></i> modulegesprek :</span>
                                                    <!-- Button trigger modal -->
                                                    <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                                    <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                                    </button></td>                                                         
                                                    <td><a href="#">@isset($request->module->name){{$request->module->name}}@endisset eindgesprek</a></td>
                                                @break

                                                @case(3)
                                                    <td><span class="f-w-6"><i class="mdi mdi-account mr-2"></i> coachgesprek :</span>
                                                    <!-- Button trigger modal -->
                                                    <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                                    <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                                    </button></td>                                                        
                                                    <td><a href="#">coachgesprek</a></td>
                                                @break

                                                @case(4)
                                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> workshop : </span>
                                                    <!-- Button trigger modal -->
                                                    <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                                    <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                                    </button></td>                                                        
                                                    <td><a href="#">workshop</a></td>                     
                                                @break                                                  

                                                @default
                                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> ? : </span>
                                                    <!-- Button trigger modal -->
                                                    <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                                    <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                                    </button></td>                                                        
                                                    <td><a href="#">lege aanvraag</a></td>  
                                                @endswitch
                                                
                                                <td>
                                                    @if($request->status == 1)
                                                        <h6><span class="badge badge-danger"> open </span></h6>
                                                    @elseif($request->status == 2)
                                                        <h6><span class="badge badge-warning"> in behandeling </span></h6>
                                                    @elseif($request->status == 3)
                                                        <h6><span class="badge badge-success"> voltooid </span></h6>
                                                    @else
                                                        <h6><span class="badge badge-danger"> open </span></h6>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($request->status == 1)
                                                    nog niet toegewezen
                                                    @else
                                                        @isset($usernameByID[$request->docent_id])
                                                            {{$usernameByID[$request->docent_id]}}
                                                        @endisset
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
                        </div><!-- end card -->
                    </div><!-- End XP Col -->
            <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header alert-info">
                    <h5 class="card-title">Nieuw verzoek</h5>
                    <h6 class="card-subtitle">Maak hier een nieuw verzoek aan</h6>
                </div>
                <div class="card-body">
                        <form action="{{route('student.request')}}" method="post">
                                @csrf
                                <p class="f-w-6">wat voor een verzoek heb je? </p>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-info btn-rounded m-r-5" for="hulpvraag">
                                        <input type="radio" name="onderwerp" id="hulpvraag" value="hulpvraag" class="form-check-input"> Hulp verzoek
                                    </label>
                                    <label class="btn btn-danger btn-rounded m-r-5" for="nakijkverzoek">
                                    <input type="radio" name="onderwerp" id="nakijkverzoek" value="nakijkverzoek" class="form-check-input"> Modulegesprek
                                    </label>
                                    <label class="btn btn-warning btn-rounded m-r-5" for="coach_gesprek">
                                        <input type="radio" name="onderwerp" id="coach_gesprek" value="coach_gesprek" class="form-check-input"> Coachgesprek
                                    </label>
                                    <label class="btn btn-success btn-rounded m-r-5" for="workshop">
                                    <input type="radio" name="onderwerp" id="workshop" value="workshop" class="form-check-input"> Workshop
                                    </label>						
                                </div> <!-- end btn group -->

                                <div class="task-help">
                                    <p class="f-w-6 m-t-10">Welke taak wil je samen met je coach bekijken? </p>
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
                                

                                <div class="module-feedback">
                                    <p class="f-w-6 m-t-10">Kies een module die je wilt laten beoordelen </p>
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

                                <div class="extra m-b-10">
                                <p class="f-w-6 m-t-10">Geef extra informatie </p>
                                <textarea name="aanvullend" id="aanvullend" cols="10" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-primary my-1 aanvraag text-right m-t-20">Doe aanvraag! <i class="mdi mdi-send ml-2"></i></button>
                            </div>
                            </form>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
                </div> <!-- end row -->

            </div> <!--end card body -->
        </div> <!--end card -->
        </div> <!--end col -->
</div> <!--end row -->
        </div><!-- End XP Row --> 

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

<script>
$(document).ready(function(){
	$(".btn-group.btn-filter  .btn").click(function(){
		var inputValue = $(this).find("input").val();
		if(inputValue != 'all'){
			var target = $('table.table-filter tr[data-status="' + inputValue + '"]');
			$("table.table-filter tbody tr").not(target).hide();
			target.fadeIn();
		} else {
			$("table.table-filter tbody tr").fadeIn();
		}
	});
	// Changing the class of status label to support Bootstrap 4
    var bs = $.fn.tooltip.Constructor.VERSION;
    var str = bs.split(".");
    if(str[0] == 4){
        $(".label").each(function(){
        	var classStr = $(this).attr("class");
            var newClassStr = classStr.replace(/label/g, "badge");
            $(this).removeAttr("class").addClass(newClassStr);
        });
    }

    $('table.table-myrequest').dataTable({paging: false,
    searching: false, info: false});

});
</script>
@endsection 