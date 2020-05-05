@section('title') 
Module: {{$module->name}}
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>

<div class="xp-contentbar">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h4>Eindopdracht</h4>
                </div>
                <div class="card-body">
                    {{-- {{dd($opdracht->content)}} --}}
                    {!!$readme_content!!}
                </div>
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
