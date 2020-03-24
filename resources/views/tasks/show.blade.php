@extends('layouts.app')

@section('content')

<h4>Show TASK at hand!</h4>

<div class="row">
    <div class="col">
        <div class="jumbotron">
            @isset($readme_content)
            <p>{!!$readme_content!!}</p>
            @endisset
        </div>

    </div>
    <div class="col">

    </div>
</div>



@endsection