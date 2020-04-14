@section('title') 
Booster - Email Compose
@endsection
@extends('layouts.main')
@section('style')
<!-- Summernote CSS -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Email Compose</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Email</a></li>
        <li class="breadcrumb-item active" aria-current="page">Email Compose</li>
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
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-black">New Message</h5>
                    </div>
                    <div class="card-body">                                    
                        <form>
                          <div class="form-group row">
                            <label for="emailTo" class="col-sm-2 col-form-label">To</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="emailTo" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="emailCc" class="col-sm-2 col-form-label">CC</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="emailCc" placeholder="CC">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="emailBcc" class="col-sm-2 col-form-label">BCC</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="emailBcc" placeholder="BCC">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="emailSubject" class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="emailSubject" placeholder="Subject">
                            </div>
                          </div>                                      
                          <div class="form-group row">
                                <label for="emailSubject" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <div class="summernote">Have nice a day from Summernote</div>
                                </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary my-1">Send <i class="mdi mdi-send ml-2"></i></button>
                              <button type="submit" class="btn btn-success my-1">Save <i class="mdi mdi-content-save ml-2"></i></button>
                              <button type="submit" class="btn btn-danger my-1">Delete <i class="mdi mdi-delete-sweep ml-2"></i></button>
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
<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/js/init/email-init.js') }}"></script>
@endsection 