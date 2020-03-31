@section('title') 
Booster - Form Color Pickers
@endsection
@extends('layouts.main')
@section('style')
<!-- Color Picker CSS -->
<link href="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form Color Pickers</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Color Pickers</li>
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
                    <h5 class="card-title text-black">Default Color Picker</h5>
                    <h6 class="card-subtitle">Most simple example, with any options or color information.</h6>
                </div>
                <div class="card-body">
                    <input id="xp-default-color" type="text" class="form-control input-lg" value="#4c7cf3"/>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">RGB Color Picker</h5>
                    <h6 class="card-subtitle">Most simple example, with any options or color information.</h6>
                </div>
                <div class="card-body">
                    <input id="xp-rgb-color" type="text" class="form-control input-lg" value="#4c7cf3"/>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Initial color</h5>
                    <h6 class="card-subtitle">Usage input <code>data-color</code> attribute, colopicker element <code>data-color</code> attribute.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-initial-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="#4c7cf3"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Initial RGB Color</h5>
                    <h6 class="card-subtitle">Usage input <code>data-color</code> attribute, colopicker element <code>data-color</code> attribute.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-initial-rgb-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="#4c7cf3"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Horizontal Mode</h5>
                    <h6 class="card-subtitle">In this mode the hue and alpha bars are horizontal instead of vertical.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-horizontal-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="#4c7cf3"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Transparent</h5>
                    <h6 class="card-subtitle">Example showing the <code>transparent</code> named color support.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-transparent-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="transparent"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                    </div>
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
<!-- Color Picker JS -->
<script src="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/js/init/form-colorpicker-init.js') }}"></script>
@endsection 