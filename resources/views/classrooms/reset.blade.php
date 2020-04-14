@section('title') 
Reset Levels
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
    <!-- Start XP Row -->
    <div class="row">
    @if(Auth::user()->role == 1)
<div class="row mt-3 mb-3">
    <div class="col">
        <h6>Start Modules</h6>
        <form action="{{route('reset_levels', $classroom)}}" method="post">
            @csrf
            @foreach($modules as $module)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="basic_modules[]" id="{{$module->name}}" value="{{$module->id}}" @if($module->basic_status == 1) checked @endif>
                <label class="form-check-label" for="{{$module->name}}">{{$module->name}}</label>
            </div>
            @endforeach
            <button class="btn btn-danger" name="submit" >Set all users to start</button>
        </form>
    </div>
</div>
@endif
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 