@section('title') 
Booster - Chartjs Chart
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Chartjs Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Chartjs Chart</li>
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
                    <h5 class="card-title text-black">Bubble Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-bubble-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Different Size Point Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-line-diff-size-point" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col --> 
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Basic Line Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-basic-line" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Stepped Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-line-stepped" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Scatter Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-scatter-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Point Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-line-point" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-bar-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Horizontal Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-horizontal-bar-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Multi Axis Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-multi-axis-bar-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Stacked Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-stacked-bar-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Bar Mixed Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-line-bar-mixed-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Boundary Area Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-boundary-area-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Dataset Area Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-dataset-area-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Stacked Area Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-stacked-area-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Radar Area Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-radar-area-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Radar Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-radar-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Doughnut Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-doughnut-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pie Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-pie-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Polar Area Chart</h5>
                    <h6 class="card-subtitle">Example of Chartjs Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-polar-area-chart" class="xp-chartjs-chart"></canvas>
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
<!-- Chart JS -->
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/init/chartjs-init.js') }}"></script>
@endsection 