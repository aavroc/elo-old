@section('title') 
Dashboard
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    /* Pie charts consist of solid slices where you can use this selector to override the default style. */
.ct-series-a .ct-slice-pie {
  /* fill of the pie slieces */
  fill: hsl(48, 100%, 50%) !important;

}

.ct-series-b .ct-slice-pie {
  /* fill of the pie slieces */
  fill: hsl(1, 100%, 50%) !important;

}

.ct-series-c .ct-slice-pie {
  /* fill of the pie slieces */
  fill: hsl(93, 100%, 50%) !important;

}
</style>
@endsection 
@section('rightbar-content')

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
@endphp

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
</div><!-- End XP Col -->
</div> <!-- end row -->
<div class="row">   
    <div class="col-md-12 col-lg-12 col-xl-12"><!-- Start XP Col --> 
     <div class="card  m-b-30">
        <div class="card-header bg-white">
                <div class="row">
                    <div class="col-lg-7 m-t-10">
                        <h4 class="text-black">Verzoeken door mij in behandeling genomen</h4>
                    </div>
            <div class="card-body">
            <div class="table-responsive">
                            <table id="xp-default-datatable2" class="display table table-hover table-myrequest">
                            <thead>
                                <tr>
                                    <th>Verzoek</th>
                                    <th>Student</th>
                                    <th>Onderwerp</th>
                                    <th>Status</th>
                                    <th>Docent</th>
                                    <th>Datum | tijd</th>
                                    <th>Actie</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                            {{-- {{dd($user->verzoeken)}} --}} 
                            @isset($requests)
                            @foreach($requests as $request)

                            @if($request->docent_id == Auth::user()->id && $request->type == 2)

                            <!-- Modal -->
                            <div class="modal fade" id="modal-myrequest{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-myrequest{{$request->id}}Title" aria-hidden="true">
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

                            <tr>
                   
                                @switch($request->status)
                                
                                @case(1)
                                    <td><span class="f-w-6"><i class="mdi mdi-help mr-2"></i> hulpvraag : </span>
                                     <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}"><u>{{$request->user->firstname}}</u></a></td>                             
                                    <td><a href="{{route('tasks.show', $request->task->id)}}"><u>@isset($request->module->name){{$request->module->name}} @endisset > @isset($request->task){{$request->task->level}} @endisset > @isset($request->task->name){{$request->task->name}} @endisset</u></a></td>
                                @break

                                @case(2)
                                    <td><span class="f-w-6"><i class="mdi mdi-school mr-2"></i> eindgesprek :</span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">@isset($request->module->name){{$request->module->name}}@endisset eindgesprek</a></td>
                                @break

                                @case(3)
                                    <td><span class="f-w-6"><i class="mdi mdi-account mr-2"></i> coachgesprek :</span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">coachgesprek</a></td>
                                @break

                                @case(4)
                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> workshop : </span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">workshop</a></td>                     
                                @break                                                  

                                @default
                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> ? : </span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">lege aanvraag</a></td>  
                                @endswitch
                                
                                <td>
                                @if($request->type == 1)
                                        <h6><span class="badge badge-danger"> open </span></h6>
                                    @elseif($request->type == 2)
                                        <h6><span class="badge badge-warning"> in behandeling </span></h6>
                                    @elseif($request->type == 3)
                                        <h6><span class="badge badge-success"> voltooid </span></h6>
                                    @else
                                        <h6><span class="badge badge-danger"> open </span></h6>
                                    @endif
                                </td>
                                <td>{{$request->docent_id}} / {{$request->coach}}</td>
                                <td>{{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}}</td>
                                <td> <!-- een taak kan alleen afgehandeld worden als deze open is -->
                                    @if($request->type == 1)
                                    <a href="{{route('handleRequest', ['teacher' => Auth::user()->id, 'student' => $request->user->id, 'user_request'=> $request->id, 'type'=> $request->type ])}}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="In behandeling nemen"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                                    @endif
                                    @if($request->type == 2)
                                    <a href="{{route('handleRequest', ['teacher' => Auth::user()->id, 'student' => $request->user->id, 'user_request'=> $request->id, 'type'=> $request->type ])}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Markeren als voltooid"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                                    @endif
                                </td>
  
                            </tr>
                        @endif
                        @endforeach
                        @endisset
                        </tbody>
                        </table>
                        </div> <!-- end table responsive -->      
            </div> <!-- end card body -->
        </div><!-- end card -->
    </div><!-- End XP Col -->
</div> <!-- end row -->
<div class="row">   
    <div class="col-md-12 col-lg-12 col-xl-12"><!-- Start XP Col --> 
     <div class="card  m-b-30">
        <div class="card-header bg-white">
                <div class="row">
                    <div class="col-lg-7 m-t-10">
                        <h4 class="text-black">Alle verzoeken</h4>
                    </div>
                        <div class="col-lg-5 text-right">
                            <div class="btn-group" data-toggle="buttons">
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
                                    <th>Verzoek</th>
                                    <th>Student</th>
                                    <th>Onderwerp</th>
                                    <th>Status</th>
                                    <th>Docent</th>
                                    <th>Datum | tijd</th>
                                    <th>Actie</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                            {{-- {{dd($user->verzoeken)}} --}} 
                            @isset($requests)
                            @foreach($requests as $request)

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

                            <tr data-status="type{{$request->type}}">
                   
                                @switch($request->status)
                                
                                @case(1)
                                    <td><span class="f-w-6"><i class="mdi mdi-help mr-2"></i> hulpvraag : </span>
                                     <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}"><u>{{$request->user->firstname}}</u></a></td>                             
                                    <td><a href="{{route('tasks.show', $request->task->id)}}"><u>@isset($request->module->name){{$request->module->name}} @endisset > @isset($request->task){{$request->task->level}} @endisset > @isset($request->task->name){{$request->task->name}} @endisset</u></a></td>
                                @break

                                @case(2)
                                    <td><span class="f-w-6"><i class="mdi mdi-school mr-2"></i> eindgesprek :</span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">@isset($request->module->name){{$request->module->name}}@endisset eindgesprek</a></td>
                                @break

                                @case(3)
                                    <td><span class="f-w-6"><i class="mdi mdi-account mr-2"></i> coachgesprek :</span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">coachgesprek</a></td>
                                @break

                                @case(4)
                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> workshop : </span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">workshop</a></td>                     
                                @break                                                  

                                @default
                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> ? : </span>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                                    <i class="mdi mdi-comment-eye"></i>
                                    </button>                                    
                                    </td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">lege aanvraag</a></td>  
                                @endswitch
                                
                                <td>
                                @if($request->type == 1)
                                        <h6><span class="badge badge-danger"> open </span></h6>
                                    @elseif($request->type == 2)
                                        <h6><span class="badge badge-warning"> in behandeling </span></h6>
                                    @elseif($request->type == 3)
                                        <h6><span class="badge badge-success"> voltooid </span></h6>
                                    @else
                                        <h6><span class="badge badge-danger"> open </span></h6>
                                    @endif
                                </td>
                                <td>{{$request->docent_id}} / {{$request->coach}}</td>
                                <td>{{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}}</td>
                                <td> <!-- een taak kan alleen afgehandeld worden als deze open is -->
                                    @if($request->type == 1)
                                    <a href="{{route('handleRequest', ['teacher' => Auth::user()->id, 'student' => $request->user->id, 'user_request'=> $request->id, 'type'=> $request->type ])}}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="In behandeling nemen"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                                    @endif
                                    @if($request->type == 2)
                                    <a href="{{route('handleRequest', ['teacher' => Auth::user()->id, 'student' => $request->user->id, 'user_request'=> $request->id, 'type'=> $request->type ])}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Markeren als voltooid"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                                    @endif
                                </td>
  
                            </tr>

                        @endforeach
                        @endisset
                        </tbody>
                        </table>
                        </div> <!-- end table responsive -->      
            </div> <!-- end card body -->
        </div><!-- end card -->
    </div><!-- End XP Col -->
</div> <!-- end row -->
<div class="row">          
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
        <!-- Start XP Col -->               
        <div class="col-lg-4">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black"></h5>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
    <!-- End XP Col -->
    </div> <!-- end Row -->
</div><!-- End XP Contentbar -->

@endsection
@section('script')
<script>
$(document).ready(function(){
	$(".btn-group .btn").click(function(){
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
{{-- <script src="{{ asset('assets/js/init/chartjs-init.js') }}"></script> --}}
<script src="{{ asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>

@endsection 