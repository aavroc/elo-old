@section('title') 
Booster - Email Open
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Email Open</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Email</a></li>
        <li class="breadcrumb-item active" aria-current="page">Email Open</li>
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
                        <a href="#" class="btn btn-danger btn-lg btn-block">Compose</a>
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
                <div class="card email-open-box m-b-30">
                    <div class="card-header bg-white">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><h5 class="mt-2 mb-0 text-black">I thought you might like this video</h5></li>
                            <li class="list-inline-item float-right"><a href="#"><i class="mdi mdi-tab font-24"></i></a></li>
                            <li class="list-inline-item float-right"><a href="#"><i class="mdi mdi-printer font-24 mr-2"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">                                    
                        <div class="row m-b-30">
                            <div class="col-md-5">
                                <div class="media">
                                  <img class="align-self-center mr-3" src="./assets/images/email/email-user.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                    <h6 class="mt-0 text-black">John Doe</h6>
                                    <p class="text-muted mb-0">info@domain.com</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="open-email-head">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">Sep 15, 2018, 5:36 PM</li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-star-outline font-24"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-reply font-24"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-dots-vertical font-24"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mt-0">This is top story</h6>
                                <p class="text-muted">Hi,</p>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="text-muted">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="text-muted">Thank You.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="open-email-footer">
                            <div class="row m-b-30">
                                <div class="col-md-3">
                                    <div class="card">
                                      <img class="card-img-top" src="./assets/images/email/email-attach-1.jpg" alt="Generic placeholder image">
                                      <div class="card-body text-center">
                                        <a href="#">Download</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                      <img class="card-img-top" src="./assets/images/email/email-attach-2.jpg" alt="Generic placeholder image">
                                      <div class="card-body text-center">
                                        <a href="#">Download</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary"><i class="mdi mdi-reply mr-2"></i>Reply</button>
                                    <button type="button" class="btn btn-secondary">Forward <i class="mdi mdi-forward ml-2"></i></button>
                                </div>
                            </div>
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

@endsection 