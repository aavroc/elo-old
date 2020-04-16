@section('title') 
Dashboard
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Write page content code here -->
    <!-- Start XP Row -->    
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-left mt-3 mb-5">
                <h4>{{$module->name}}</h4>
                <h6>gebruiker: {{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</h6>
            </div>
        </div>
    </div>
        <!-- End XP Col -->
    <!-- Start XP Row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-4">
            @foreach($commits as $item)
            <!-- Start Simple Card -->
            <div class="card m-b-30">
                <div class="card-body">
                    <h5 class="card-title"> {{$item->commit->message}}</h5>
                    @php 
                    $dt = \Carbon\Carbon::parse($item->commit->author->date);
                    @endphp
                    <h6 class="card-subtitle mb-2 text-muted">{{$dt->locale('nl_NL')->isoFormat('LLLL') }}</h6>
                    <p class="card-text">{{$item->commit->author->name}}</p>
                    <a href="{{$item->html_url}}" class="btn btn-primary" target="_blank">Go somewhere</a>
                </div>
            </div>
            @endforeach
            <!-- End Simple Card -->  
        </div>
    </div>
</div>
<!-- End XP Row -->
<!-- Start XP Row -->    
<div class="row">

</div>
<!-- End XP Row -->
</div>
<!-- End XP Contentbar -->