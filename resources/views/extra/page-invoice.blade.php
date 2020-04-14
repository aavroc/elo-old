@section('title') 
Booster - Invoice
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Invoice</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Extra Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Invoice</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-center mt-3 mb-5">
                <h4>Company Invoice</h4>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-invoice">
                        <div class="row mb-3">
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="xp-invoice-logo">
                                    <img src="assets/images/logo.svg" class="img-fluid" alt="invoice-logo">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="xp-invoice-name text-right">
                                    <h5 class="mb-0">Invoice</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <div class="xp-invoice-meta">
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <p class="mb-0">Date : <span class="text-black f-w-5 ml-2">05/10/2018</span></p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="mb-0">Invoice # : <span class="text-black f-w-5 ml-2">005</span></p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="mb-0">Status : <span class="text-success f-w-5 ml-2">Paid</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="xp-invoice-address mb-4">
                                    <p class="f-w-5 text-black">Bill From :</p>
                                    <h6>Company Ltd.</h6>
                                    <address>501 Clinton Lane <br> Wilkes Barre, CA 18801</address>
                                    <p>+1 123 123 4567</p>
                                    <p>company@email.com</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="xp-invoice-address mb-4">
                                    <p class="f-w-5 text-black">Bill To :</p>
                                    <h6>Company Inc.</h6>
                                    <address>501 Clinton Lane <br> Wilkes Barre, CA 18801</address>
                                    <p>+1 123 123 4567</p>
                                    <p>company@email.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <div class="xp-invoice-summary">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Price</th>
                                                <th scope="col" class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>1</td>
                                                    <td>$10</td>
                                                    <td class="text-right">$100</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Ut enim ad minim veniam</td>
                                                    <td>2</td>
                                                    <td>$20</td>
                                                    <td class="text-right">$200</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Excepteur sint occaecat cupidatat</td>
                                                    <td>3</td>
                                                    <td>$30</td>
                                                    <td class="text-right">$300</td>                             
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">                            
                            <div class="col-md-12 col-lg-12">
                                <div class="xp-invoice-total text-right font-16">
                                    <p>Sub Total : <span class="text-black f-w-5 font-18">$600</span></p>
                                    <p>Taxes (10%) : <span class="text-black f-w-5 font-18">$60</span></p>
                                    <p>Grand Total : <span class="text-black f-w-5 text-danger font-24">$660</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 col-lg-6">
                                <div class="xp-invoice-note">
                                    <p><span class="text-black f-w-5">Note :</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="xp-invoice-btn text-right">
                                    <button type="button" class="btn btn-rounded btn-success"><i class="mdi mdi-printer mr-2"></i> Print</button>
                                    <button type="button" class="btn btn-rounded btn-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                                </div>
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