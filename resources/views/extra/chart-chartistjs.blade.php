@section('title') 
Booster - Chartist Chart
@endsection 
@extends('layouts.main')
@section('style')
<!-- Chartist Chart CSS -->
<link href="{{ asset('assets/plugins/chartist-js/chartist.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Chartist Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Chartist Chart</li>
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
                    <h5 class="card-title text-black">Advanced Smil Animations</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-advanced-smil-animations" class="ct-chart ct-golden-section xp-chartist-advanced-smil-animations"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col --> 
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">SVG Path Animations</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-svg-path-animations" class="ct-chart ct-golden-section xp-chartist-svg-path-animations"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Simple Line</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-simple-line" class="ct-chart ct-golden-section xp-chartist-simple-line"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Holes in Data</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-holes-in-data" class="ct-chart ct-golden-section xp-chartist-holes-in-data"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Filled Holes in Data</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-filled-holes-in-data" class="ct-chart ct-golden-section xp-chartist-filled-holes-in-data"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Only Holes in Data</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-only-holes-in-data" class="ct-chart ct-golden-section xp-chartist-only-holes-in-data"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Scatter Diagram with Responsive Settings</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-line-scatter-diagram" class="ct-chart ct-golden-section xp-chartist-line-scatter-diagram"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Area</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-line-area" class="ct-chart ct-golden-section xp-chartist-line-area"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bi-Polar Line Chart With Area Only</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-bi-polar-line" class="ct-chart ct-golden-section xp-chartist-bi-polar-line"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Interpolation / Smoothing</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-line-interpolation-smoothing" class="ct-chart ct-golden-section xp-chartist-line-interpolation-smoothing"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col --> 
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Series Overrides</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-series-overrides" class="ct-chart ct-golden-section xp-chartist-series-overrides"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col --> 
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bi-Polar Bar</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-bi-polar-chart" class="ct-chart ct-golden-section xp-chartist-bi-polar-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Overlapping Bars on Moblie</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-overlapping-bars-on-moblie" class="ct-chart ct-golden-section xp-chartist-overlapping-bars-on-moblie"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Add Peak Circles Using The Draw Events</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-add-peak-circles" class="ct-chart ct-golden-section xp-chartist-add-peak-circles"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Multi-Line Lables</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-multi-line-lables" class="ct-chart ct-golden-section xp-chartist-multi-line-lables"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Stacked Bar</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-stacked-bar" class="ct-chart ct-golden-section xp-chartist-stacked-bar"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Horizontal Bar</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-horizontal-bar" class="ct-chart ct-golden-section xp-chartist-horizontal-bar"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Extreme Responsive Configuration</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-info"></i>Series E</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-extreme-responsive-configuration" class="ct-chart ct-golden-section xp-chartist-extreme-responsive-configuration"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Distributed Series</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-info"></i>Series E</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-light"></i>Series F</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-dark"></i>Series G</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-distributed-series" class="ct-chart ct-golden-section xp-chartist-distributed-series"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Label Placement</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-label-placement" class="ct-chart ct-golden-section xp-chartist-label-placement"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Simple Pie Chart</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-simple-pie-chart" class="ct-chart ct-golden-section xp-chartist-simple-pie-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pie Chart with custom labels</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-pie-chart-with-custom-labels" class="ct-chart ct-golden-section xp-chartist-pie-chart-with-custom-labels"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Gauge Chart</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-gauge-chart" class="ct-chart ct-golden-section xp-chartist-gauge-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Animating a Donut with Svg.Animate</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-info"></i>Series E</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-light"></i>Series F</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-dark"></i>Series G</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-animating-donut-with-svg-animate" class="ct-chart ct-golden-section xp-chartist-animating-donut-with-svg-animate"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Donut Chart Using Fill Rather Than Stroke</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-donut-fill-rather-chart" class="ct-chart ct-golden-section xp-chartist-donut-fill-rather-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Gauge Chart Using Fill Rather Than Stroke</h5>
                    <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-gauge-fill-rather-chart" class="ct-chart ct-golden-section xp-chartist-gauge-fill-rather-chart"></div>
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
<!-- Chartist Chart JS -->
<script src="{{ asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/init/chartistjs-init.js') }}"></script>
@endsection 