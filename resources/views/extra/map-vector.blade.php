@section('title') 
Booster - Vector Map
@endsection
@extends('layouts.main')
@section('style')
<!-- jvectormap CSS -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Vector Map</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Maps</a></li>
        <li class="breadcrumb-item active" aria-current="page">Vector Map</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">World Map</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-world-map-markers" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">USA</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-usa" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">India</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-india" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Australia</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-australia" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">France</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-france" style="height: 400px"></div>
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
<!-- Vector Maps JS -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/gdp-data.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-fr_regions-mill.js') }}"></script>
<script src="{{ asset('assets/js/init/jvectormap-init.js') }}"></script>
@endsection 