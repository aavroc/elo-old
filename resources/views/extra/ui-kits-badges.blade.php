@section('title') 
Booster - Badges
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Badges</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Badges</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Examples</h5>
                    <h6 class="card-subtitle">Badges scale to match the size of the immediate parent element by using relative font sizing and <code
                        class="highlighter-rouge">em</code> units.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <h1>Example heading <span class="badge badge-default">New</span></h1>
                        <h2>Example heading <span class="badge badge-default">New</span></h2>
                        <h3>Example heading <span class="badge badge-default">New</span></h3>
                        <h4>Example heading <span class="badge badge-default">New</span></h4>
                        <h5>Example heading <span class="badge badge-default">New</span></h5>
                        <h6>Example heading <span class="badge badge-default">New</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Button or Links</h5>
                    <h6 class="card-subtitle">Badges can be used as part of links or buttons to provide a counter.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <button type="button" class="btn btn-primary">
                          Notifications <span class="badge badge-light">4</span>
                        </button> 
                        <button type="button" class="btn btn-primary">
                          Profile <span class="badge badge-light">9</span>
                          <span class="sr-only">unread messages</span>
                        </button>                                  
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Contextual variations</h5>
                    <h6 class="card-subtitle">Add any of the below mentioned modifier classes to change the appearance of a badge.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>                                    
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pill badges</h5>
                    <h6 class="card-subtitle">Use the <code class="highlighter-rouge">.badge-pill</code> modifier class to make
                        badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code>
                        and additional horizontal <code class="highlighter-rouge">padding</code>).
                        Useful if you miss the badges from v3.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <span class="badge badge-pill badge-primary">Primary</span>
                        <span class="badge badge-pill badge-secondary">Secondary</span>
                        <span class="badge badge-pill badge-success">Success</span>
                        <span class="badge badge-pill badge-danger">Danger</span>
                        <span class="badge badge-pill badge-warning">Warning</span>
                        <span class="badge badge-pill badge-info">Info</span>
                        <span class="badge badge-pill badge-light">Light</span>
                        <span class="badge badge-pill badge-dark">Dark</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Links badges</h5>
                    <h6 class="card-subtitle">Using the contextual <code class="highlighter-rouge">.badge-*</code> classes on an <code class="highlighter-rouge">&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <a href="#" class="badge badge-primary">Primary</a>
                        <a href="#" class="badge badge-secondary">Secondary</a>
                        <a href="#" class="badge badge-success">Success</a>
                        <a href="#" class="badge badge-danger">Danger</a>
                        <a href="#" class="badge badge-warning">Warning</a>
                        <a href="#" class="badge badge-info">Info</a>
                        <a href="#" class="badge badge-light">Light</a>
                        <a href="#" class="badge badge-dark">Dark</a>                                    
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