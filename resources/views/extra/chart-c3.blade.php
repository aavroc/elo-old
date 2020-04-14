@section('title') 
Booster - C3 Chart
@endsection 
@extends('layouts.main')
@section('style')
<!-- C3 Charts CSS -->
<link href="{{ asset('assets/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">C3 Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">C3 Chart</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- End XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Scatter Plot Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-scatter-plot" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Step Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-step" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Simple Line Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-simple-line" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Spline Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-spline" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Area Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-area" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Stacked Area Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-stacked-area" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bar Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-bar" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Stacked Bar Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-stacked-bar" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Combination Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-combination" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Gauge Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-gauge" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pie Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-pie" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Donut Chart</h5>
                    <h6 class="card-subtitle">Example of C3 Chart</h6>
                </div>
                <div class="card-body">
                    <div id="xp-c3-donut" style="height:320px;"></div>
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
<!-- C3 Chart JS -->
<script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/plugins/c3/c3.min.js') }}"></script>
<script src="{{ asset('assets/js/init/c3-chart-init.js') }}"></script>
@endsection 