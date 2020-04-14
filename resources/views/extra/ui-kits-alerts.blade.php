@section('title') 
Booster - Alerts
@endsection
@extends('layouts.main')
@section('style')
<!-- Sweet Alert -->
<link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Jquery Confirm CSS -->
<link href="{{ asset('assets/plugins/jquery-confirm/css/jquery-confirm.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Alerts</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Alerts</li>
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
                    <h5 class="card-title text-black">Examples</h5>
                    <h6 class="card-subtitle">Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the eight <strong>required</strong> contextual classes (e.g., <code class="highlighter-rouge">.alert-success</code>). For inline dismissal, use the alerts jQuery plugin.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-alert">
                        <div class="alert alert-primary" role="alert">
                          A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                          A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                          A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                          A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                          A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                          A simple info alert—check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                          A simple light alert—check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                          A simple dark alert—check it out!
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Link color</h5>
                    <h6 class="card-subtitle">Use the <code class="highlighter-rouge">.alert-link</code> utility class to quickly provide matching colored links within any alert.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-alert">
                        <div class="alert alert-primary" role="alert">
                          A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                          A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                          A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                          A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                          A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-info" role="alert">
                          A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                          A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-dark" role="alert">
                          A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Additional content</h5>
                    <h6 class="card-subtitle">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</h6>
                </div>
                <div class="card-body">  
                    <div class="xp-alert">
                        <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Well done!</h4>
                          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                          <hr>
                          <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Dismissing</h5>
                    <h6 class="card-subtitle">Add a dismiss button and the <code class="highlighter-rouge">.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code class="highlighter-rouge">.close</code> button.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-alert">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Well Done!</strong> You should check in on some of those fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>  
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div> 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Ohh no!</strong> You should check in on some of those fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>                                   
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Sweet Alert</h5>
                    <h6 class="card-subtitle">SweetAlert makes popup messages easy and pretty.</h6>
                </div>
                <div class="card-body text-center">      
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert">
                                <p class="text-muted">Text</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-basic">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">Title</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-title">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">A success message with ok button</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-success">Click for Demo</button>
                            </div>
                        </div>                                                
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">Popup with IP address</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-dynamic">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">Time for auto close</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-auto-close">Click for Demo</button>
                            </div>
                        </div>         
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">A popup with textbox,button and Ajax request</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-ajax">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">Chaining modals like multiform step</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-chaining">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">By passing a parameter with cancle</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-params">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">A popup with message and custom Image Header</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-image">Click for Demo</button>
                            </div>
                        </div>                                                
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">Sweet popup with custom HTML description and buttons</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-custom-html">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">A popup with message and custom css sush as width, padding and background</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-custom-padding-width">Click for Demo</button>
                            </div>
                        </div>                                                
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-sweet-alert m-b-30">
                                <p class="text-muted">A warning message, with the "Confirm" Button...</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="xp-sa-warning">Click for Demo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Jquery-confirm</h5>
                    <h6 class="card-subtitle">jquery-confirm! is jQuery plugin that provides great set of features like, Auto-close, Ajax-loading, Themes, Animations and more.</h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Simple Dialog</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="simple-dialog">Click for Demo</button>
                            </div>
                        </div>
                         <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Confirm Dialog</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="confirm-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Prompt using confirm</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="prompt-confirm-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Dialog without button</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="btn-without-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Button keys 1</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="btn-keys-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Button keys 2</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="btn1-keys-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Error</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="error-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Sucess</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="sucess-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Close icon</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="close-icon-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Handle closeIcon's callback</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="handle-dialog">Click for Demo</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="xp-confirm-alert m-b-30">
                                <p class="text-muted">Draggable</p>
                                <button type="button" class="btn btn-rounded btn-primary" id="draggable-dialog">Click for Demo</button>
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
<!-- Sweet-Alert JS -->
<script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/js/init/sweet-alert-init.js') }}"></script>
<!-- Confirm init JS -->
<script src="{{ asset('assets/plugins/jquery-confirm/js/jquery-confirm.js') }}"></script>
<script src="{{ asset('assets/js/init/confirm-init.js') }}"></script>
@endsection 