@section('title') 
Booster - Popovers
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Popovers</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Popovers</li>
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
                    <h5 class="card-title text-black">Popovers</h5>
                    <h6 class="card-subtitle">Four options are available: top, right, bottom, and left aligned.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on top
                        </button>
                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on left
                        </button>
                        <span class="d-inline-block" data-toggle="popover" title="Popover Title" data-content="Disabled popover">
                          <button class="btn btn-danger" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                        </span>
                        <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Col --> 
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 