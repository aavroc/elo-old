@section('title') 
Booster - Float Chart
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Flot Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Flot Chart</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Real-Time Update</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-flot-real-time" class="flot-chart"></div>
                    <p style="display:none;"><input id="updateInterval" type="text" value=""></p>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Canvas Text</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-flot-canvas" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Thresholds</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-flot-thresholds" class="flot-chart"></div>                                
               </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Percentiles</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-flot-percentiles" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Categories Chart</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-flot-category" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Stracking Chart</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-flot-stracking" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Series Types</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">    
                    <div id="xp-flot-series-types" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Error Bar</h5>
                    <h6 class="card-subtitle">Example of flot Chart</h6>
                </div>
                <div class="card-body">   
                    <div id="xp-flot-errorbar" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pie Chart</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">  
                    <div id="xp-flot-pie-chart" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Donut Chart</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">   
                    <div id="xp-flot-donut-chart" class="flot-chart"></div>
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
<!-- Flot Chart JS -->
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.colorhelpers.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.errorbars.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.image.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.navigate.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.orderBars.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.symbol.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.threshold.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.canvas.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/curvedLines.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.crosshair.js') }}"></script>
<script src="{{ asset('assets/js/init/flot-init.js') }}"></script>
@endsection 