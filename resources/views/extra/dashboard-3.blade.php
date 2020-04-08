@section('title') 
Booster - Home
@endsection 
@extends('layouts.main')
@section('style')
<!-- Chartist Chart CSS -->
<link href="{{ asset('assets/plugins/chartist-js/chartist.min.css') }}" rel="stylesheet" type="text/css" />
<!-- jvectormap CSS -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Dashboard 3</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard 3</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                            <i class="mdi mdi-file-document font-30 text-primary"></i>
                        </div>
                        <h4 class="xp-counter text-primary m-t-20">2580</h4>
                        <p class="text-muted">Total Projects</p>
                        <p class="mb-0 f-w-5 text-danger"><i class="mdi mdi-arrow-down mx-1"></i>24.2%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                            <i class="mdi mdi-currency-usd font-30 text-success"></i>
                        </div>
                        <h4 class="xp-counter text-success m-t-20">55790</h4>
                        <p class="text-muted">Total Revenue</p>
                        <p class="mb-0 f-w-5 text-success"><i class="mdi mdi-arrow-up mx-1"></i>112.71%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                            <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                        </div>
                        <h4 class="xp-counter text-warning m-t-20">930</h4>
                        <p class="text-muted">Total Clients</p>
                        <p class="mb-0 f-w-5 text-success"><i class="mdi mdi-arrow-up mx-1"></i>24.2%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                            <i class="mdi mdi-eye font-30 text-danger"></i>
                        </div>
                        <h4 class="xp-counter text-danger m-t-20">2750</h4>
                        <p class="text-muted">Total Visitors</p>
                        <p class="mb-0 f-w-5 text-danger"><i class="mdi mdi-arrow-down mx-1"></i>112.71%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Daily Revenue</h5>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-basic-line" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Monthly Revenue</h5>
                </div>
                <div class="card-body">                                    
                    <canvas id="xp-chartjs-bar-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Yearly Revenue</h5>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-pie-chart" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- End XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-6 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Projects Payments</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Index</th>
                                    <th class="border-top-0">Client Name</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Payment Method</th>
                                    <th class="border-top-0">Paid Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);">John Doe</a>
                                    </td>
                                    <td>01/05/2018</td>
                                    <td>IMPS</td> 
                                    <td>$100</td> 
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <a href="javascript:void(0);">Nora Tsunoda</a>
                                    </td>
                                    <td>10/06/2018</td>
                                    <td>RTGS</td>                                 
                                    <td>$300</td>  
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <a href="javascript:void(0);">Natalie Smith</a>
                                    </td>
                                    <td>05/07/2018</td>
                                    <td>NEFT</td>  
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <a href="javascript:void(0);">Scott Warner</a>
                                    </td>
                                    <td>01/08/2018</td>
                                    <td>CASH</td>
                                    <td>$550</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <a href="javascript:void(0);">Jimi Hendrix</a>
                                    </td>
                                    <td>11/09/2018</td>
                                    <td>PayPal</td>                                 
                                    <td>$270</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <a href="javascript:void(0);">Justin Mark</a>
                                    </td>
                                    <td>25/10/2018</td>
                                    <td>Stripe</td>                                 
                                    <td>$350</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Clients by Countries</h5>
                </div>
                <div class="card-body">
                   <div id="xp-world-map-markers" style="height: 320px"></div>
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
<!-- Chart JS -->
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
<!-- Vector Maps JS -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/gdp-data.js') }}"></script>
<!-- Dashboard JS -->
<script src="{{ asset('assets/js/init/dashborad-3.js') }}"></script>
@endsection 