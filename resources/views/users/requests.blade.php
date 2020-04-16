@section('title') 
Gebruiker
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<div class="xp-breadcrumbbar text-center">
</div>
<div class="xp-contentbar">
    <div class="row">
        <div class="col-lg-6">
            <h4>gebruiker: {{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6"> <!-- User Profile -->
            
            
        </div>
        <div class="col-lg-6"> 
            
           
        </div>
    </div>
</div>
@endsection 

@section('script')




@endsection 

