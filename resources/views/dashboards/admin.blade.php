@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col">
        <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
    </div>
</div>



@endsection