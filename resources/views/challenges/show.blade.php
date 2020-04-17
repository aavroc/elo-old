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
                            <h6 class="card-subtitle">Koppel modules aan deze challenge</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('link-modules', $challenge)}}" method="post">
                                @csrf
                                <select class="xp-select2-multi-select form-control" name="modules[]" multiple="multiple">
                                    @foreach($modules as $module)
                                    <option value="{{$module->id}}">{{$module->name}}</option>
                                    
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-info">Koppel Modules</button>
                            </form>
                                
                        </div>
                    </div>
                </div>  
            </div><!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 
