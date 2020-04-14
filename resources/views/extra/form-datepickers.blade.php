@section('title') 
Booster - Form Date Pickers
@endsection
@extends('layouts.main')
@section('style')
<!-- Datepicker CSS -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form Date Pickers</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Date Pickers</li>
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
                    <h5 class="card-title text-black">Default Date</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">                                  
                    <input type="text" id="xp-default-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon2"/>
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Auto Close Date</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">                                  
                    <input type="text" id="xp-autoclose-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon3"/>
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Month View Date</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="xp-month-view-date" class="form-control" placeholder="Month 2018" aria-describedby="basic-addon4" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon4"><i class="mdi mdi-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Time Format</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="xp-time-format" class="form-control" placeholder="dd/mm/yyyy - hh:ii aa" aria-describedby="basic-addon5" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon5"><i class="mdi mdi-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Multi Date</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="xp-multi-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy - dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon6" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon6"><i class="mdi mdi-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Range Dates</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="xp-range-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon7"><i class="mdi mdi-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Min and Max Dates</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="xp-min-max-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon8" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon8"><i class="mdi mdi-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Disable days of week</h5>
                    <h6 class="card-subtitle">Example of Date Picker.</h6>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="xp-disable-day-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon9" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon9"><i class="mdi mdi-calendar"></i></span>
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
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/init/form-datepicker-init.js') }}"></script>
@endsection 