@section('title') 
Booster - Form Touchspin
@endsection
@extends('layouts.main')
@section('style')
<!-- Touchspin CSS -->
<link href="{{ asset('assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form Touchspin</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Touchspin</li>
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
                    <h5 class="card-title text-black">Value Attribute</h5>
                    <h6 class="card-subtitle">Example of Touchspin.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-value-attribute" name="xp-touchspin-value-attribute" value="50">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Empty Value</h5>
                    <h6 class="card-subtitle">Example of Touchspin.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-empty-value" name="xp-touchspin-empty-value" value="">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Postfix</h5>
                    <h6 class="card-subtitle">Example of Touchspin.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-postfix" name="xp-touchspin-postfix" value="55">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Prefix</h5>
                    <h6 class="card-subtitle">Example of Touchspin.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-prefix" name="xp-touchspin-prefix" value="0">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Value Attribute is not set</h5>
                    <h6 class="card-subtitle">applying settings.initval</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-value-attr-not-set" name="xp-touchspin-value-attr-not-set" value="">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Value is set explicitly to 33</h5>
                    <h6 class="card-subtitle">skipping settings.initval</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-value-set-explicitly" name="xp-touchspin-value-set-explicitly" value="33">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Vertical Button</h5>
                    <h6 class="card-subtitle">Example of Touchspin.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-vertical-btn" name="xp-touchspin-vertical-btn" value="0">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Change button class</h5>
                    <h6 class="card-subtitle">skipping settings.initval</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-touchspin-change-btn-class" name="xp-touchspin-change-btn-class" value="0">
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
<!-- Touchspin JS -->
<script src="{{ asset('assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('assets/js/init/form-touchspin-init.js') }}"></script>
@endsection 