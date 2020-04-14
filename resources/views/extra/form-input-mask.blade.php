@section('title') 
Booster - Form Input Mask
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form Input Mask</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Input Mask</li>
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
                    <h5 class="card-title text-black">Date</h5>
                    <h6 class="card-subtitle">Example of  Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-date" name="xp-inputmask-date" placeholder="dd/mm/yyyy">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Time</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-time" name="xp-inputmask-time" placeholder="hh:mm">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Date & Time</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-datetime" name="xp-inputmask-datetime" placeholder="dd/mm/yyyy hh:mm">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Phone</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-phone" name="xp-inputmask-phone" placeholder="(__) ___-___-____">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Zipcode</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-zipcode" name="xp-inputmask-zipcode" placeholder="______">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Email</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-email" name="xp-inputmask-email" placeholder="_@_._">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Decimal</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-decimal" name="xp-inputmask-decimal" placeholder="0.00">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Currency</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-currency" name="xp-inputmask-currency" placeholder="$ 0.00">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">IP Address</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input class="form-control" id="xp-inputmask-ip" name="xp-inputmask-ip" placeholder="___.___.___.___">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Card Number</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-card-number" name="xp-inputmask-card-number" placeholder="____ ____ ____ ____">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Card CVV</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-card-cvv" name="xp-inputmask-card-csv" placeholder="___">
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Card Due Date</h5>
                    <h6 class="card-subtitle">Example of Input Mask.</h6>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="xp-inputmask-card-date" name="xp-inputmask-card-date" placeholder="__/__">
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
<!-- Input Mask JS -->
<script src="{{ asset('assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/init/form-inputmask-init.js') }}"></script>
@endsection 