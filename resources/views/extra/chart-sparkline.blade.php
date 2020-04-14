@section('title') 
Booster - Sparkline Chart
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Sparkline Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sparkline Chart</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Line Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-line"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Area Line Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-area-line"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pie Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-pie"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-bar"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Composite Bar Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-composite-bar"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Tristate Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-tristate"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Discrete Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-discrete"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bullet Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-bullet"></div>
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Box Plot Chart</h5>
                    <h6 class="card-subtitle">Example of Sparkline Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <div id="xp-sparkline-box-plot"></div>
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
<!-- Sparkline Chart JS -->
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/js/init/sparkline-init.js') }}"></script>
@endsection 