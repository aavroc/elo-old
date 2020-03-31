@section('title') 
Booster - Google Map
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Google Map</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Maps</a></li>
        <li class="breadcrumb-item active" aria-current="page">Google Map</li>
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
                    <h5 class="card-title text-black">Basic</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-basic-map" class="gmaps"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Marker</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-markers-map" class="gmaps"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Search Location Map</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <form method="post" id="xp-geocoding_form" class="m-b-20">
                         <div class="input-group mb-3">
                            <input type="text" id="address" class="form-control fill" placeholder="Search your place" aria-label="Search your place" aria-describedby="button-addon2">
                               <div class="input-group-append">
                                <button class="btn btn-primary">Search Location</button>
                               </div>
                         </div>                                 
                    </form>
                 <div id="xp-mapGeo" class="gmaps"></div>
             </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Street View Panoramas</h5>
                    <h6 class="card-subtitle">Let's start to see your place.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-mapStreet" class="gmaps"></div>
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
<!-- Google Maps JS -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
<script src="{{ asset('assets/plugins/gmaps/gmaps.min.js') }}"></script>
<script src="{{ asset('assets/js/init/gmaps-init.js') }}"></script>
@endsection 