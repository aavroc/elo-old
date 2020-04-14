@section('title') 
Booster - Switchery
@endsection
@extends('layouts.main')
@section('style')
<!-- Switchery CSS -->
<link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Switchery</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Components</a></li>
        <li class="breadcrumb-item active" aria-current="page">Switchery</li>
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
                    <h5 class="card-title text-black">Basic Switchery Examples</h5>
                    <h6 class="card-subtitle">You can add as many switches as you like, as long as their corresponding checkboxes have the same class. Select them and make new instance of the Switchery class for every of them.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-switchery">
                        <input type="checkbox" class="js-switch-primary" checked />
                        <input type="checkbox" class="js-switch-secondary" checked />
                        <input type="checkbox" class="js-switch-success" checked />
                        <input type="checkbox" class="js-switch-danger" checked />
                        <input type="checkbox" class="js-switch-warning" checked />
                        <input type="checkbox" class="js-switch-info" checked />
                        <input type="checkbox" class="js-switch-light" checked />
                        <input type="checkbox" class="js-switch-dark" checked />
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Large Switchery Examples</h5>
                    <h6 class="card-subtitle">You can add as many switches as you like, as long as their corresponding checkboxes have the same class. Select them and make new instance of the Switchery class for every of them.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-switchery">
                        <input type="checkbox" class="js-switch-primary-large" checked />
                        <input type="checkbox" class="js-switch-secondary-large" checked />
                        <input type="checkbox" class="js-switch-success-large" checked />
                        <input type="checkbox" class="js-switch-danger-large" checked />
                        <input type="checkbox" class="js-switch-warning-large" checked />
                        <input type="checkbox" class="js-switch-info-large" checked />
                        <input type="checkbox" class="js-switch-light-large" checked />
                        <input type="checkbox" class="js-switch-dark-large" checked />
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Small Switchery Examples</h5>
                    <h6 class="card-subtitle">You can add as many switches as you like, as long as their corresponding checkboxes have the same class. Select them and make new instance of the Switchery class for every of them.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-switchery">
                        <input type="checkbox" class="js-switch-primary-small" checked />
                        <input type="checkbox" class="js-switch-secondary-small" checked />
                        <input type="checkbox" class="js-switch-success-small" checked />
                        <input type="checkbox" class="js-switch-danger-small" checked />
                        <input type="checkbox" class="js-switch-warning-small" checked />
                        <input type="checkbox" class="js-switch-info-small" checked />
                        <input type="checkbox" class="js-switch-light-small" checked />
                        <input type="checkbox" class="js-switch-dark-small" checked />
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->                    
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Multicolor Switchery Examples</h5>
                    <h6 class="card-subtitle">You can change the primary(on) and secondary(off) color of the switch to fit your design perfectly. Accomplish this, changing the color and secondaryColor options. The jack colors are also customizable via the jackColor and the jackSecondaryColor options. Below is a good example of what you can accomplish using those.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-switchery">
                        <input type="checkbox" class="js-switch-primary-multicolor" checked />
                        <input type="checkbox" class="js-switch-secondary-multicolor" checked />
                        <input type="checkbox" class="js-switch-success-multicolor" checked />
                        <input type="checkbox" class="js-switch-danger-multicolor" checked />
                        <input type="checkbox" class="js-switch-warning-multicolor" checked />
                        <input type="checkbox" class="js-switch-info-multicolor" checked />
                        <input type="checkbox" class="js-switch-light-multicolor" checked />
                        <input type="checkbox" class="js-switch-dark-multicolor" checked />
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Multicolor On - Off Switchery Examples</h5>
                    <h6 class="card-subtitle">You can change the primary(on) and secondary(off) color of the switch to fit your design perfectly. Accomplish this, changing the color and secondaryColor options. The jack colors are also customizable via the jackColor and the jackSecondaryColor options. Below is a good example of what you can accomplish using those.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-switchery">
                        <input type="checkbox" class="js-switch-primary-multicolor-on-off" checked />
                        <input type="checkbox" class="js-switch-secondary-multicolor-on-off" checked />
                        <input type="checkbox" class="js-switch-success-multicolor-on-off" checked />
                        <input type="checkbox" class="js-switch-danger-multicolor-on-off" checked />
                        <input type="checkbox" class="js-switch-warning-multicolor-on-off" checked />
                        <input type="checkbox" class="js-switch-info-multicolor-on-off" checked />
                        <input type="checkbox" class="js-switch-light-multicolor-on-off" checked />
                        <input type="checkbox" class="js-switch-dark-multicolor-on-off" checked />
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
<!-- Switchery js -->
<script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
<script src="{{ asset('assets/js/init/switchery-init.js') }}"></script>
@endsection 