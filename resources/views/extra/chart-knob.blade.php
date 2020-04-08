@section('title') 
Booster - Knob Chart
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Knob Chart</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Charts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Knob Chart</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Disable display input</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <input class="xp-knob" data-width="150" data-height="150" data-displayInput=false data-bgColor="#e1e4e9" data-fgcolor="#4c7cf3" value="35">
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">'cursor' mode</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <input class="xp-knob" data-width="150" data-height="150" data-cursor=true data-bgColor="#e1e4e9" data-fgColor="#949ca9" data-thickness=.3 value="29">
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Display previous value</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">
                    <input class="xp-knob" data-width="150" data-height="150" data-min="-100" data-displayPrevious=true data-bgColor="#e1e4e9" data-fgcolor="#2bcd72" value="44">
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Angle offset</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <input class="xp-knob" data-width="150" data-height="150" data-angleOffset=90 data-linecap=round data-bgColor="#e1e4e9" data-fgcolor="#ff4b5b" value="35">
                </div>
            </div>
        </div>    
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Angle offset and arc</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">                                
                    <input class="xp-knob" data-width="150" data-height="150" data-angleOffset=-125 data-angleArc=250 data-bgColor="#e1e4e9" data-fgColor="#fac751" data-rotation="anticlockwise" value="35">
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">4-digit, step 0.1</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">
                    <input class="xp-knob" data-width="150" data-height="150" data-min="-10000" data-displayPrevious=true data-max="10000" data-step=".1" data-bgColor="#e1e4e9" data-fgcolor="#52c4ca" value="0">
                </div>                            
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Overloaded 'draw' method</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">
                    <input class="xp-knob" data-width="150" data-height="150" data-displayPrevious=true data-bgColor="#e1e4e9" data-fgColor="#4c7cf3" data-skin="tron" data-cursor=true value="75" data-thickness=".2">
                </div>                            
            </div>
        </div>
        <!-- End XP Col -->
         <!-- Start XP Col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Read Only</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">
                    <input class="xp-knob" data-width="150" data-height="150" data-bgColor="#e1e4e9" data-fgColor="#949ca9" data-thickness=".1" readonly value="22">
                </div>                            
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Superpose (clock)</h5>
                    <h6 class="card-subtitle">Example of knob Chart</h6>
                </div>
                <div class="card-body text-center">
                    <div class="xp-knob-superpose">
                        <div class="xp-knob-hour">
                            <input class="xp-knob hour" data-min="0" data-max="24" data-bgColor="#e1e4e9" data-fgColor="#4c7cf3" data-displayInput=false data-width="150" data-height="150" data-thickness=".3">
                        </div>
                        <div class="xp-knob-minute">
                            <input class="xp-knob minute" data-min="0" data-max="60" data-bgColor="#e1e4e9" data-fgColor="#2bcd72" data-displayInput=false data-width="90" data-height="90" data-thickness=".4">
                        </div>
                        <div class="xp-knob-second">
                            <input class="xp-knob second" data-min="0" data-max="60" data-bgColor="#e1e4e9" data-fgColor="#ff4b5b" data-displayInput=false data-width="40" data-height="40" data-thickness=".4">
                        </div>
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
<!-- Knob Chart JS -->
<script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/js/init/knob-init.js') }}"></script>
@endsection 