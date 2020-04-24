@section('title') 
Module: {{$challenge->name}}
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
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="col-lg-6">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-black">{{$challenge->name}}</h5>
                        <h6 class="card-subtitle"></h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($challenge->modules as $module)
                                <a href="{{route('modules.show', $module->slug)}}" class="list-group-item">{{$module->name}}</a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>  
        </div><!-- End XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-5">
            <div class="card m-b-30 border-info">
            <div class="card-header bg-info">
                <h5 class="card-title text-white">Over deze Challenge</h5>
                <h6 class="card-subtitle text-white">waar gaat de Challenge {{$challenge->name}} over</h6>
            </div>
                <div class="card-body module-readme readme-txt">
                @isset($readme_content)
                    <p>{!!$readme_content!!}</p>
                @endisset
                </div>
            </div> 
        </div>
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 
