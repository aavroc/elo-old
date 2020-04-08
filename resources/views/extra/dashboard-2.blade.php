@section('title') 
Booster - Home
@endsection 
@extends('layouts.main')
@section('style')
<!-- Morris Chart CSS -->
<link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Dashboard 2</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard 2</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">2580</h4>
                            <p class="mb-0 text-white">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-file-document font-30 text-primary"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-success m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">55790</h4>
                            <p class="mb-0 text-white">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-currency-usd font-30 text-success"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-warning m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">930</h4>
                            <p class="mb-0 text-white">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                      
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-danger m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">2750</h4>
                            <p class="mb-0 text-white">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-eye font-30 text-danger"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- End XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Yearly Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-morris-donut" class="morris-chart"></div>  
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Daily Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-morris-updating" class="morris-chart"></div>   
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Monthly Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-morris-bar" class="morris-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->            
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->                       
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Social Profile</h5>
                </div>
                <div class="card-body">
                    <div class="xp-social-profile">
                        <div class="xp-social-profile-img">
                            <div class="row">
                                <div class="col-4 px-1">
                                    <img src="assets/images/ui-images/image-circle.jpg" class="rounded img-fluid" alt="img">
                                </div>
                                <div class="col-4 px-1">
                                    <img src="assets/images/ui-images/image-rounded.jpg" class="rounded img-fluid" alt="img">
                                </div>
                                <div class="col-4 px-1">
                                    <img src="assets/images/ui-images/image-thumbnail.jpg" class="rounded img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-top">
                            <div class="row">
                                <div class="col-3">
                                    <div class="xp-social-profile-star py-3">
                                        <i class="mdi mdi-star font-24"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="xp-social-profile-avatar text-center">
                                        <img src="assets/images/ui-media/media-image-8.jpg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-social-profile-live"></span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="xp-social-profile-menu text-right py-3">
                                        <i class="mdi mdi-dots-horizontal font-24"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-middle text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="xp-social-profile-title">
                                        <h5 class="my-1 text-black">karina_simons</h5>
                                    </div>
                                    <div class="xp-social-profile-subtitle">
                                        <p class="mb-3 text-muted">Karina Simons</p>
                                    </div>
                                    <div class="xp-social-profile-desc">
                                        <p class="text-muted">Lifestyle coach and photographer <br />delivering best images only...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-bottom text-center">
                            <div class="row">
                                <div class="col-4">
                                    <div class="xp-social-profile-media pt-3">
                                        <h5 class="text-black my-1">45</h5>
                                        <p class="mb-0 text-muted">Posts</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-followers pt-3">
                                        <h5 class="text-black my-1">278k</h5>
                                        <p class="mb-0 text-muted">Fans</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-following pt-3">
                                        <h5 class="text-black my-1">552</h5>
                                        <p class="mb-0 text-muted">Likes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Actions History</h5>
                </div>
                <div class="card-body">
                    <div class="xp-actions-history">
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">                                            
                                <h6 class="mb-1 text-black">Start Web Designing</h6>
                                <p class="text-muted font-12">5 mins ago</p>
                                <p class="m-b-30">We are start working on USA Project</p>
                            </div>
                        </div>
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">
                                <h6 class="mb-1 text-black">Completed Theme Development</h6>
                                <p class="text-muted font-12">15 mins ago</p>
                                <p class="m-b-30">We are completed a theme development into 5 days</p>
                            </div>
                        </div>
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">
                                <h6 class="mb-1 text-black">Project Submitted</h6>
                                <p class="text-muted font-12">30 mins ago</p>
                                <p class="m-b-30">We are done process of submitted project</p>
                            </div>
                        </div>
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">
                                <h6 class="mb-1 text-black">Received a Payment</h6>
                                <p class="text-muted font-12">45 mins ago</p>
                                <p class="m-b-30">We got monthy payment from clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">To do Lists</h5>
                </div>
                <div class="card-body">
                    <div class="xp-to-do-list">
                        <ul id="list-group" class="list-group list-group-flush"></ul>
                        <form class="add-items">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?" aria-label="What do you need to do today?" aria-describedby="button-addon-to-do-list">
                                <div class="input-group-append">
                                    <button class="btn btn-primary add" id="button-addon-to-do-list" type="submit">Add to List</button>
                                </div>
                            </div>
                        </form>
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
<!-- Morris Chart JS -->
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
<!-- To Do List JS -->
<script src="{{ asset('assets/js/init/to-do-list-init.js') }}"></script>
<!-- Dashboard JS -->
<script src="{{ asset('assets/js/init/dashborad-2.js') }}"></script>
@endsection 