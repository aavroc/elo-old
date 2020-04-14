@section('title') 
Booster - Range Slider
@endsection
@extends('layouts.main')
@section('style')
<!-- Range Slider CSS -->
<link href="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Range Slider</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Components</a></li>
        <li class="breadcrumb-item active" aria-current="page">Range Slider</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Basic</h5>
                    <h6 class="card-subtitle">Start without params</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-basic">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Min and Max</h5>
                    <h6 class="card-subtitle">Set min value, max value and start point</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-min-max">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Prefix</h5>
                    <h6 class="card-subtitle">Set type to double and specify range, also showing grid and adding prefix "$"</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-prefix">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Range</h5>
                    <h6 class="card-subtitle">Set up range with negative values</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-range">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Step</h5>
                    <h6 class="card-subtitle">Using step 250</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-step">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Fractional Step</h5>
                    <h6 class="card-subtitle">Set up range with fractional values, using fractional step</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-fractional-step">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Own Numbers</h5>
                    <h6 class="card-subtitle">Set up you own numbers</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-own-numbers">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">String Value</h5>
                    <h6 class="card-subtitle">Using any strings as your values</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-string-value">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">No Prettify</h5>
                    <h6 class="card-subtitle">Big numbers are ugly and unreadable</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-no-prettify">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Prettify</h5>
                    <h6 class="card-subtitle">Prettify enabled. Much better!</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-prettify">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Seperator</h5>
                    <h6 class="card-subtitle">Don't like space as separator? Use anything you like!</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-seperator">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Own Prettify Function</h5>
                    <h6 class="card-subtitle">You don't like default prettify function? Use your own!</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-own-prettify-function">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Postfixes</h5>
                    <h6 class="card-subtitle">Using postfixes</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-postfixes">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Max Postfixes</h5>
                    <h6 class="card-subtitle">Want to show that max number is not the biggest one?</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-max-postfixes">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Both Decoration</h5>
                    <h6 class="card-subtitle">Want to show that max number is not the biggest one?</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-both-decoration">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Remove Decoration</h5>
                    <h6 class="card-subtitle">Remove double decoration</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-remove-decoration">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Own Values Separator</h5>
                    <h6 class="card-subtitle">Use your own separator symbol with values_separator option. Like →</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-own-value-separator">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Values Separator To</h5>
                    <h6 class="card-subtitle">Or " to ":</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-value-separator-to">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Hide Visual Details</h5>
                    <h6 class="card-subtitle">You can disable all the sliders visual details, if you wish. Like this:</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-hide-visual-details">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Hide any Details</h5>
                    <h6 class="card-subtitle">Or hide any part you wish</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-hide-any-detail">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Hide From-To Details</h5>
                    <h6 class="card-subtitle">And some more</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-hide-from-to-details">    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Hide Min-Max & Grid Details</h5>
                    <h6 class="card-subtitle">And some more</h6>
                </div>
                <div class="card-body">
                    <input id="xp-range-slider-hide-min-max-grid-details">    
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
<!-- Range Slider JS -->
<script src="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/init/range-slider-init.js') }}"></script>
@endsection 