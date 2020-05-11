@section('title')
Dashboard
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
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-left mt-3 mb-5">
                <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
            </div>
        </div>
        <!-- End XP Col -->

        {{-- show barchart --}}
        @include('layouts.charts.classroom-total-tasks-completed')
        @yield('content')

        <!-- Start XP Col -->
        <div class="col-lg-2">
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
        <!-- End XP Col -->
    </div>
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
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

