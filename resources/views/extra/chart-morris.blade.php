@section('title') 
Booster - Morris Chart
@endsection
@extends('layouts.main')
@section('style')
<!-- Morris Chart CSS -->
<link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Morris Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Morris Chart</li>
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
                    <h5 class="card-title text-black">Line Chart</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                    <div id="xp-morris-line" class="morris-chart"></div>            
                </div>                            
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Updating Chart</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                    <div id="xp-morris-updating" class="morris-chart"></div>            
                </div>                            
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                                <p><i class="mdi mdi-circle-outline text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>            
                    <div id="xp-morris-bar" class="morris-chart"></div>            
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Stacked Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                                <p><i class="mdi mdi-circle-outline text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>            
                    <div id="xp-morris-stacked-bar" class="morris-chart"></div>            
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->                           
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Area Chart</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                    <div id="xp-morris-area" class="morris-chart"></div>            
                </div>
            </div>
        </div> 
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Area Chart without Point & Line</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                    <div id="xp-morris-area-without-line-point" class="morris-chart"></div>            
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Area Chart without Smooth</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                    <div id="xp-morris-area-without-smooth" class="morris-chart"></div>            
                </div>
            </div>
        </div>
        <!-- End XP Col -->                         
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30"> 
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Donut Chart</h5>
                    <h6 class="card-subtitle">Example of Morris Chart</h6>
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
                                <p><i class="mdi mdi-circle-outline text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>               
                    <div id="xp-morris-donut" class="morris-chart"></div>            
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
<!-- Morris Chart JS -->
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/js/init/morris-init.js') }}"></script>
@endsection 