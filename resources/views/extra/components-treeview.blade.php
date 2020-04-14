@section('title') 
Booster - Tree View
@endsection
@extends('layouts.main')
@section('style')
 <!-- jstree CSS -->
<link href="{{ asset('assets/plugins/jstree/jstree.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Tree View</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Components</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tree View</li>
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
                    <h5 class="card-title text-black">Types Tree View</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-types-tree"></div>                    
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Checkbox Tree View</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-checkbox-tree"></div>                    
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Drag & Drop Tree View</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-drag-drop-tree"></div>                    
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Ajax Tree View</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-ajax-tree"></div>                    
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
<!-- Nestable js -->
<script src="{{ asset('assets/plugins/jstree/jstree.min.js') }}"></script>
<script src="{{ asset('assets/js/init/jstree-init.js') }}"></script>
@endsection 