@section('title') 
Booster - Images
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Images</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Images</li>
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
                    <h5 class="card-title text-black">Image Thumbnails</h5>
                    <h6 class="card-subtitle">In addition to our border-radius utilities, you can use <code class="highlighter-rouge">.img-thumbnail</code> to give an image a rounded 1px border appearance.</h6>
                </div>
                <div class="card-body">
                    <img src="assets/images/ui-images/image-thumbnail.jpg" alt="Thumbnail Image" class="img-thumbnail">
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Image Rounded</h5>
                    <h6 class="card-subtitle">In addition to our border-radius utilities, you can use <code class="highlighter-rouge">.rounded</code> to give an image a rounded 1px border appearance.</h6>
                </div>
                <div class="card-body">
                    <img src="assets/images/ui-images/image-rounded.jpg" alt="Rounded Image" class="rounded">                               
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Image Circle</h5>
                    <h6 class="card-subtitle">In addition to our border-radius utilities, you can use <code class="highlighter-rouge">.rounded-circle</code> to give an image a rounded 1px border appearance.</h6>
                </div>
                <div class="card-body">
                    <img src="assets/images/ui-images/image-circle.jpg" alt="Rounded Image" class="rounded-circle">
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Image Center</h5>
                    <h6 class="card-subtitle">In addition to our image position utilities, you can use <code class="highlighter-rouge">.mx-auto & .d-block</code> to give an image a rounded 1px border appearance.</h6>
                </div>
                <div class="card-body">
                    <img src="assets/images/ui-images/image-center.jpg" alt="Rounded Image" class="rounded-circle mx-auto d-block">
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Responsive Images</h5>
                    <h6 class="card-subtitle">Images in Bootstrap are made responsive with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width: 100%;</code> and <code class="highlighter-rouge">height: auto;</code> are applied to the image so that it scales with the parent element.</h6>
                </div>
                <div class="card-body">
                    <img src="assets/images/ui-images/image-responsive.jpg" class="img-fluid" alt="Responsive image">
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

@endsection 