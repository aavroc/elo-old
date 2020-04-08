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
    @foreach ($modules as $module)
    {{-- {{dd($user->modules->find($module->id)['id'])}} --}}
    {{-- <div class="col"> --}}
        {{-- {{dd($user->modules)}} --}}
        {{-- {{dd($user->modules()->where('module_id', $module->id)->first()->pivot->status)}} --}}
        {{-- @if($user->modules()->find($module->id) != null ) --}}
        @php $levelStatus = $user->modules()->where('module_id', $module->id)->first()->pivot->status @endphp
        @if($levelStatus == 1 )
        <a href="{{route('modules.show', ['module'=> $module->slug ])}}" class="card module-to-choose">
        @endif
            <div class="card-body d-flex flex-column align-items-center justify-content-center @if($levelStatus == 0) bg-danger @elseif($levelStatus == 1) bg-success @else bg-info @endif" 
                style="width:12rem;height:12rem;" >
                <h5 class="card-title h1">{{$module->name}}</h5>
            </div>
        @if($levelStatus == 1 )
        </a>
        @endif
    {{-- </div> --}}
    @endforeach
    </div>
    <!-- End XP Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 