@section('title') 
Booster - Piety Chart
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Piety Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Piety Chart</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Chart</h5>
                    <h6 class="card-subtitle">Example of Piety Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <span class="xp-piety-line">5,3,9,6,5,9,7,3,5,2</span>
                    <span class="xp-piety-line">5,3,2,-1,-3,-2,2,3,5,2</span>
                    <span class="xp-piety-line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Updating Chart</h5>
                    <h6 class="card-subtitle">Example of Piety Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <span class="xp-piety-updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Piety Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <span class="xp-piety-bar">5,3,9,6,5,9,7,3,5,2</span>
                    <span class="xp-piety-bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                    <span class="xp-piety-bar">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pie Chart</h5>
                    <h6 class="card-subtitle">Example of Piety Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <span class="xp-piety-pie">1/5</span>
                    <span class="xp-piety-pie">226/360</span>
                    <span class="xp-piety-pie">0.52/1.561</span>
                    <span class="xp-piety-pie">1,4</span>
                    <span class="xp-piety-pie">226,134</span>
                    <span class="xp-piety-pie">0.52,1.041</span>
                    <span class="xp-piety-pie">1,2,3,2,2</span>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Donut Chart</h5>
                    <h6 class="card-subtitle">Example of Piety Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <span class="xp-piety-donut">1/5</span>
                    <span class="xp-piety-donut">226/360</span>
                    <span class="xp-piety-donut">0.52/1.561</span>
                    <span class="xp-piety-donut">1,4</span>
                    <span class="xp-piety-donut">226,134</span>
                    <span class="xp-piety-donut">0.52,1.041</span>
                    <span class="xp-piety-donut">1,2,3,2,2</span>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Data Attributes Chart</h5>
                    <h6 class="card-subtitle">Example of Piety Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <p class="xp-piety-data-attributes mb-0">
                      <span data-peity='{ "fill": ["#4c7cf3", "#e1e4e9"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
                      <span data-peity='{ "fill": ["#2bcd72", "#e1e4e9"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                      <span data-peity='{ "fill": ["#ff4b5b", "#e1e4e9"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                      <span data-peity='{ "fill": ["#fac751", "#e1e4e9"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                      <span data-peity='{ "fill": ["#52c4ca", "#e1e4e9"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                      <span data-peity='{ "fill": ["#949ca9", "#e1e4e9"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                      <span data-peity='{ "fill": ["#313131", "#e1e4e9"], "innerRadius": 15, "radius": 16 }'>7/7</span>
                    </p>
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
<!-- Piety Chart JS -->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/js/init/piety-init.js') }}"></script>
@endsection 