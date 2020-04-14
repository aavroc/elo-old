@section('title') 
Booster - Form X-editable
@endsection
@extends('layouts.main')
@section('style')
<!-- X-editable CSS -->
<link href="{{ asset('assets/plugins/bootstrap-xeditable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form X-editable</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form X-editable</li>
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
                    <h5 class="card-title text-black">Simple text field</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">
                    <a href="#" id="xp-xeditable-username">awesome</a>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Empty text field, required</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">
                    <a href="#" id="xp-xeditable-firstname" class="editable editable-click editable-empty"></a>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Select, local array, custom display</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">
                    <a href="#" id="xp-xeditable-sex" class="editable editable-click" style="color: #777777;">not selected</a>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Select, error while loading</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">
                    <a href="#" id="xp-xeditable-status" data-source="/status" class="editable editable-click">Active</a>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Textarea, buttons below. Submit by ctrl+enter</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">                                
                    <a href="#" id="xp-xeditable-comments" data-type="textarea" data-pk="1">awesome comment!</a>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">checklist</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">                                
                    <a href="#" id="xp-xeditable-checklist"></a>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Combodate (date)</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">
                    <a href="#" id="xp-xeditable-dob"></a>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Combodate (datetime)</h5>
                    <h6 class="card-subtitle">Example of X-editable</h6>
                </div>
                <div class="card-body">                                
                    <a href="#" id="xp-xeditable-event" class="editable editable-click editable-empty"></a>
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
<!-- X-editable JS -->
<script src="{{ asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/init/form-xeditable-init.js') }}"></script>
@endsection 