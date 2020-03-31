@section('title') 
Booster - Pricing
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Pricing</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Extra Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pricing</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="row mb-5">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-center mt-3 mb-5">
                <h4>Pricing Plans</h4>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-pricing text-center">
                        <div class="xp-pricing-top py-3">
                            <h4 class="text-primary mb-0">Beginner</h4>
                        </div>
                        <div class="xp-pricing-middle py-3">
                            <ul class="list-group">
                              <li class="list-group-item">10 GB Disk Space</li>                                          
                              <li class="list-group-item">50 GB Bandwidth</li>
                              <li class="list-group-item">1 Email</li>
                              <li class="list-group-item">1 Domain</li>
                              <li class="list-group-item">1 User</li>
                              <li class="list-group-item">SSL Certificate</li>
                              <li class="list-group-item">24/7 Support</li>
                            </ul>
                        </div>
                        <div class="xp-pricing-bottom py-3">
                            <div class="xp-pricing-amount pb-5">
                                <h2 class="text-primary mb-0"><sup>$</sup>29</h2>
                                <span class="xp-pricing-duration">Per Month</span>
                            </div>
                            <div class="xp-pricing-btn">
                                <button type="button" class="btn btn-primary btn-rounded">Purchase</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-pricing text-center">
                        <div class="xp-pricing-top py-3">
                            <h4 class="text-success mb-0">Professional</h4>
                        </div>
                        <div class="xp-pricing-middle py-3">
                            <ul class="list-group">
                              <li class="list-group-item">100 GB Disk Space</li>                                          
                              <li class="list-group-item">500 GB Bandwidth</li>
                              <li class="list-group-item">10 Email</li>
                              <li class="list-group-item">5 Domain</li>
                              <li class="list-group-item">5 User</li>
                              <li class="list-group-item">SSL Certificate</li>
                              <li class="list-group-item">24/7 Support</li>
                            </ul>
                        </div>
                        <div class="xp-pricing-bottom py-3">
                            <div class="xp-pricing-amount pb-5">
                                <h2 class="text-success mb-0"><sup>$</sup>49</h2>
                                <span class="xp-pricing-duration">Per Month</span>
                            </div>
                            <div class="xp-pricing-btn">
                                <button type="button" class="btn btn-success btn-rounded">Purchase</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-pricing text-center">
                        <div class="xp-pricing-top py-3">
                            <h4 class="text-warning mb-0">Enterprise</h4>
                        </div>
                        <div class="xp-pricing-middle py-3">
                            <ul class="list-group">
                              <li class="list-group-item">1 TB Disk Space</li>                                          
                              <li class="list-group-item">5 TB Bandwidth</li>
                              <li class="list-group-item">100 Email</li>
                              <li class="list-group-item">50 Domain</li>
                              <li class="list-group-item">50 User</li>
                              <li class="list-group-item">SSL Certificate</li>
                              <li class="list-group-item">24/7 Support</li>
                            </ul>
                        </div>
                        <div class="xp-pricing-bottom py-3">
                            <div class="xp-pricing-amount pb-5">
                                <h2 class="text-warning mb-0"><sup>$</sup>79</h2>
                                <span class="xp-pricing-duration">Per Month</span>
                            </div>
                            <div class="xp-pricing-btn">
                                <button type="button" class="btn btn-warning btn-rounded">Purchase</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-pricing text-center">
                        <div class="xp-pricing-top py-3">
                            <h4 class="text-danger mb-0">Ultimate</h4>
                        </div>
                        <div class="xp-pricing-middle py-3">
                            <ul class="list-group">
                              <li class="list-group-item">Unlimited Disk Space</li>                                          
                              <li class="list-group-item">Unlimited Bandwidth</li>
                              <li class="list-group-item">Unlimited Email</li>
                              <li class="list-group-item">Unlimited Domain</li>
                              <li class="list-group-item">Unlimited User</li>
                              <li class="list-group-item">SSL Certificate</li>
                              <li class="list-group-item">24/7 Support</li>
                            </ul>
                        </div>
                        <div class="xp-pricing-bottom py-3">
                            <div class="xp-pricing-amount pb-5">
                                <h2 class="text-danger mb-0"><sup>$</sup>49</h2>
                                <span class="xp-pricing-duration">Per Month</span>
                            </div>
                            <div class="xp-pricing-btn">
                                <button type="button" class="btn btn-danger btn-rounded">Purchase</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 