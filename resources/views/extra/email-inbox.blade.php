@section('title') 
Booster - Email Inbox
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Email Inbox</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Email</a></li>
        <li class="breadcrumb-item active" aria-current="page">Email Inbox</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-3">
            <div class="xp-email-leftbar">
                <div class="card m-b-30">
                    <div class="card-header bg-white text-center">
                        <a href="email-compose.html" class="btn btn-danger btn-lg btn-block">Compose</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="email-inbox.html" class="active"><i class="mdi mdi-inbox mr-2"></i>Inbox</a>
                            <span class="badge badge-light badge-pill text-primary">9</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-star mr-2"></i>Starred</a>
                            <span class="badge badge-light badge-pill">2</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-clock mr-2"></i>Snoozed</a>
                            <span class="badge badge-light badge-pill">3</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-send mr-2"></i>Send</a>
                            <span class="badge badge-light badge-pill">4</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-file mr-2"></i>Drafts</a>
                            <span class="badge badge-light badge-pill">5</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-information-variant mr-2"></i>Important</a>
                            <span class="badge badge-light badge-pill">6</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-alert-octagon mr-2"></i>Spam</a>
                            <span class="badge badge-light badge-pill">7</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="mdi mdi-delete-sweep mr-2"></i>Trash</a>
                            <span class="badge badge-light badge-pill">8</span>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-9">
            <div class="xp-email-rightbar">
                <div class="card m-b-30">

                    <div class="card-header bg-white">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-checkbox-blank-outline font-24"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-package-down font-24"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-alert-octagon font-24"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-delete-sweep font-24"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-clock font-24"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-folder-move font-24"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-label font-24"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-dots-vertical font-24"></i></a></li>
                            <li class="list-inline-item float-right"><a href="#"><i class="mdi mdi-settings font-24"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">                                    
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">                                            
                                <tbody>
                                    <tr class="email-unread">                                                    
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck1">
                                                <label class="custom-control-label psn-abs" for="emailCheck1"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Facebook</a></td>                             
                                        <td><span class="badge badge-success badge-pill mr-2">New</span> Welcome to Facebook - Thank you for beign part of us</td>
                                        <td>02:05 PM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck2">
                                                <label class="custom-control-label psn-abs" for="emailCheck2"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star font-18"></i></td>
                                        <td><a href="email-open.html">Google</a></td>                                 
                                        <td>Welcome to Google - Thank you for beign part of us</td>
                                        <td>08:20 AM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck3">
                                                <label class="custom-control-label psn-abs" for="emailCheck3"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Instagram</a></td>                                 
                                        <td>Welcome to Instagram - Thank you for beign part of us</td>
                                        <td>Sep 05</td>
                                    </tr>
                                    <tr class="email-unread">
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck4">
                                                <label class="custom-control-label psn-abs" for="emailCheck4"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Twitter</a></td>                                 
                                        <td>Welcome to Twitter - Thank you for beign part of us</td>
                                        <td>Sep 03</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck5">
                                                <label class="custom-control-label psn-abs" for="emailCheck5"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Youtube</a></td>                                 
                                        <td><span class="badge badge-primary badge-pill mr-2">Social</span> Welcome to Youtube - Thank you for beign part of us</td>
                                        <td>Sep 02</td>
                                    </tr>
                                    <tr>                                                    
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck6">
                                                <label class="custom-control-label psn-abs" for="emailCheck6"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star font-18"></i></td>
                                        <td><a href="email-open.html">Facebook</a></td>                                 
                                        <td>Welcome to Facebook - Thank you for beign part of us</td>
                                        <td>Aug 26</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck7">
                                                <label class="custom-control-label psn-abs" for="emailCheck7"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Google</a></td>                                 
                                        <td>Welcome to Google - Thank you for beign part of us</td>
                                        <td>Aug 09</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck8">
                                                <label class="custom-control-label psn-abs" for="emailCheck8"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Instagram</a></td>                                 
                                        <td>Welcome to Instagram - Thank you for beign part of us</td>
                                        <td>July 22</td>
                                    </tr>
                                    <tr class="email-unread">
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck9">
                                                <label class="custom-control-label psn-abs" for="emailCheck9"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Twitter</a></td>                                 
                                        <td><span class="badge badge-danger badge-pill mr-2">Support</span> Welcome to Twitter - Thank you for beign part of us</td>
                                        <td>July 03</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="emailCheck10">
                                                <label class="custom-control-label psn-abs" for="emailCheck10"></label>
                                            </div>
                                        </td>
                                        <td><i class="mdi mdi-star-outline font-18"></i></td>
                                        <td><a href="email-open.html">Youtube</a></td>                                 
                                        <td>Welcome to Youtube - Thank you for beign part of us</td>
                                        <td>June 20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row">
                            <div class="col-6 col-md-6 align-self-center">
                                <div class="email-show-label">
                                    <span> Show : 1 - 10 of 590</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 align-self-center">
                                <div class="email-pagination float-right">
                                  <ul class="pagination mb-0">
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                    </li>
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
    </div>
    <!-- Start XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 