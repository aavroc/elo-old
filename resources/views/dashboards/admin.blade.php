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
    <div class="col-md-8 col-lg-8 col-xl-8"><!-- Start XP Col --> 
     <div class="card  m-b-30">
        <div class="card-header bg-white">
                <div class="row">
                    <div class="col-lg-7 m-t-10">
                        <h4 class="text-black">Verzoeken</h4>
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
                        <table id="xp-default-datatable" class="display table table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th>Verzoek</th>
                                    <th>Van</th>
                                    <th>Onderwerp</th>
                                    <th>Status</th>
                                    <th>Datum | tijd</th>
                                    <th>Afhandelen</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                            {{-- {{dd($user->verzoeken)}} --}} 
                            @isset($requests)
                            @foreach($requests as $request)

                            <tr data-status="type{{$request->type}}">
                   
                                @switch($request->status)
                                
                                @case(1)
                                    <td><span class="f-w-6"><i class="mdi mdi-help mr-2"></i> hulpvraag </span>: {{$request->extra}}</td>
                                    <td><a href="{{route('users.show', $request->user->id)}}"><u>{{$request->user->firstname}}</u></a></td>                             
                                    <td><a href="{{route('tasks.show', $request->task->id)}}"><u>@isset($request->module->name){{$request->module->name}} @endisset > @isset($request->task){{$request->task->level}} @endisset > @isset($request->task->name){{$request->task->name}} @endisset</u></a></td>
                                @break

                                @case(2)
                                    <td><span class="f-w-6"><i class="mdi mdi-school mr-2"></i> eindgesprek </span>: {{$request->extra}}</td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">@isset($request->module->name){{$request->module->name}}@endisset eindgesprek</a></td>
                                @break

                                @case(3)
                                    <td><span class="f-w-6"><i class="mdi mdi-account mr-2"></i> coachgesprek </span>: {{$request->extra}}</td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">coachgesprek</a></td>
                                @break

                                @case(4)
                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> workshop </span>: {{$request->extra}}</td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">workshop</a></td>                     
                                @break                                                  

                                @default
                                    <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> workshop </span>: {{$request->extra}}</td>
                                    <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                    <td><a href="#">lege aanvraag</a></td>  
                                @endswitch
                                
                                <td>
                                <!-- David dit moet nog werkend gemaakt worden: Invoegen kolom type in tabel user_requests -->
                                @if($request->type == 1)
                                        <h5><span class="badge badge-danger"> open </span></h5>
                                    @elseif($request->type == 2)
                                        <h5><span class="badge badge-warning"> in behandeling </span></h5>
                                    @elseif($request->type == 3)
                                        <h5><span class="badge badge-success"> voltooid </span></h5>
                                    @else
                                        <h5><span class="badge badge-danger"> open </span></h5>
                                    @endif
                                </td>   
                                <td>{{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}}</td>
                                <td> <!-- een taak kan alleen afgehandeld worden als deze open is -->
                                    @if($request->type == 1)
                                    <a href="{{route('handleRequest', ['teacher' => Auth::user()->id, 'student' => $request->user->id, 'user_request'=> $request->id] )}}" class="btn btn-warning btn-sm">Afhandelen</a>
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
                                        <label class="custom-control-label f-w-4" for="request_{{$teacher_request->id}}"><span class="text-warning">{{$teacher_request->user->firstname}}</span> - {{$teacher_request->module->name}} > {{$teacher_request->task->level}} > {{$teacher_request->task->name}} > {{$teacher_request->type}}</label>
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
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black">Basic Form</h5>
                <h6 class="card-subtitle">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div> 
    <<div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black">Challenge1</h5>
                <h6 class="card-subtitle">De stand van zaken</h6>
            </div>
            <div class="card-body">
                <div class="xp-chart-label">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <p><i class="mdi mdi-circle-outline text-danger"></i>Nog niet begonnen</p>
                        </li>
                        <li class="list-inline-item">
                            <p><i class="mdi mdi-circle-outline text-warning"></i>Begonnen</p>
                        </li>
                        <li class="list-inline-item">
                            <p><i class="mdi mdi-circle-outline text-success"></i>Voltooid</p>
                        </li>
                    </ul>
                </div>
                <div id="xp-chartist-simple-pie-chart" class="ct-chart ct-golden-section xp-chartist-simple-pie-chart"></div>
            </div>
        </div>
    </div>
    </div> <!-- end Row -->
</div><!-- End XP Contentbar -->

@endsection
@section('script')
<script>
$(document).ready(function(){
	$(".btn-group .btn").click(function(){
		var inputValue = $(this).find("input").val();
		if(inputValue != 'all'){
			var target = $('table tr[data-status="' + inputValue + '"]');
			$("table tbody tr").not(target).hide();
			target.fadeIn();
		} else {
			$("table tbody tr").fadeIn();
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

    
    /* -----  Chartistjs - Simple Pie Chart  ----- */
	function xpChartistSimplePie() {
      var data = {
        series: [@php echo $results['closed'] @endphp, @php echo $results['open'] @endphp, @php echo $results['done'] @endphp]
      };
      console.log(data);
      var sum = function(a, b) { return a + b };
      new Chartist.Pie('#xp-chartist-simple-pie-chart', data, {
        labelInterpolationFnc: function(value) {
          return Math.round(value / data.series.reduce(sum) * 100) + '%';
        }
      });
	}
	xpChartistSimplePie();
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