@section('title') 
Booster - Form MaxLength
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form MaxLength</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form MaxLength</li>
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
                    <h5 class="card-title text-black">Default Usage</h5>
                    <h6 class="card-subtitle">The badge will show up by default when the remaining chars are 25 or less:</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" maxlength="25" name="xp-maxlength-default" id="xp-maxlength-default" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Threshold Value</h5>
                    <h6 class="card-subtitle">Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" maxlength="25" name="xp-maxlength-threshold" id="xp-maxlength-threshold" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">All the Options</h5>
                    <h6 class="card-subtitle">This is a complete example where all the options configured for the bootstrap-maxlength counter are setted.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" maxlength="25" name="xp-maxlength-all-options" id="xp-maxlength-all-options" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Positions</h5>
                    <h6 class="card-subtitle">All you need to do is specify the placement option, with one of those strings. If none is specified, the positioning will be defauted to 'bottom'.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" maxlength="25" name="xp-maxlength-positions" id="xp-maxlength-positions" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Textarea</h5>
                    <h6 class="card-subtitle">Bootstrap maxlength supports textarea as well as inputs.</h6>
                </div>
                <div class="card-body">
                    <textarea class="form-control" maxlength="225" rows="3" name="xp-maxlength-textarea" id="xp-maxlength-textarea" placeholder="This textarea has a limit of 225 chars."></textarea>
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
<!-- MaxLength JS -->
<script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('assets/js/init/form-maxlength-init.js') }}"></script>
@endsection 