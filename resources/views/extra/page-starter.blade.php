@section('title') 
Booster - Starter
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Starter</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Extra Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Starter</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Write page content code here -->
    <!-- Start XP Row -->    
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-center mt-3 mb-5">
                <h4>Page Title</h4>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 