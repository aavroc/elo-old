@section('title') 
Booster - Timeline
@endsection
@extends('layouts.main')
@section('style')
<!-- Vertical Timeline CSS -->
<link href="{{ asset('assets/plugins/vertical-timeline/vertical-timeline.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Timeline</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Extra Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Timeline</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
    <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-center mt-3">
                <h4>Company Journey Timeline</h4>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
   <!-- End XP Row -->            
    <section class="xp-timeline xp-timeline-js">
        <div class="xp-timeline-container">
            <div class="xp-timeline-block xp-block-js">
                <div class="xp-timeline-img xp-timeline-img-primary xp-img-js">                    
                </div> 
                <div class="xp-timeline-content xp-content-js">
                    <h4>Company Founded</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="xp-timeline-readmore btn btn-primary btn-rounded">Read more</a>
                    <span class="xp-timeline-date">July 22</span>
                </div> 
            </div>
            <div class="xp-timeline-block xp-block-js">
                <div class="xp-timeline-img xp-timeline-img-success xp-img-js">                    
                </div>
                <div class="xp-timeline-content xp-content-js">
                    <h4>Company Registered</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="xp-timeline-readmore btn btn-primary btn-rounded">Read more</a>
                    <span class="xp-timeline-date">July 30</span>
                </div>
            </div>
            <div class="xp-timeline-block xp-block-js">
                <div class="xp-timeline-img xp-timeline-img-danger xp-img-js">                    
                </div>
                <div class="xp-timeline-content xp-content-js">
                    <h4>1st Annual Function</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="xp-timeline-readmore btn btn-primary btn-rounded">Read more</a>
                    <span class="xp-timeline-date">Aug 09</span>
                </div>
            </div>
            <div class="xp-timeline-block xp-block-js">
                <div class="xp-timeline-img xp-timeline-img-warning xp-img-js">                    
                </div>
                <div class="xp-timeline-content xp-content-js">
                    <h4>Achieve Milestone</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="xp-timeline-readmore btn btn-primary btn-rounded">Read more</a>
                    <span class="xp-timeline-date">Aug 25</span>
                </div>
            </div>
            <div class="xp-timeline-block xp-block-js">
                <div class="xp-timeline-img xp-timeline-img-info xp-img-js">                    
                </div>
                <div class="xp-timeline-content xp-content-js">
                    <h4>Become a Multi National Company</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="xp-timeline-readmore btn btn-primary btn-rounded">Read more</a>
                    <span class="xp-timeline-date">Sep 23</span>
                </div>
            </div>
            <div class="xp-timeline-block xp-block-js">
                <div class="xp-timeline-img xp-timeline-img-secondary xp-img-js">                    
                </div>
                <div class="xp-timeline-content xp-content-js">
                    <h4>No.1 Rank Company</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="xp-timeline-readmore btn btn-primary btn-rounded">Read more</a>
                    <span class="xp-timeline-date">Sep 30</span>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- Timeline JS -->
<script src="{{ asset('assets/plugins/vertical-timeline/vertical-timeline.js') }}"></script>
@endsection 