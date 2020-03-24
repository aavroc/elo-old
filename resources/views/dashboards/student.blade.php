@extends('layouts.app')

@section('content')
@if (session('niet_juiste_level'))
<div class="row mt-4">
    <div class="col">
        <div class="alert alert-danger mt-4">
            Jij hebt momenteel toegang tot level <strong
                style="text-decoration:underline">{{ session('niet_juiste_level') }}</strong>.
            Hogere levels zijn helaas nog niet toegankelijk. Codeer wat meer hogere levels te bereiken!
        </div>
    </div>
</div>
@endif
<div class="row mt-4">



    @foreach ($levels as $level)
    <div class="col">
        @if($level->id <= $user->level_id)
            <a href="{{route('subs.index', $level)}}" class="card level-to-choose">
                @endif
                <div class="card-body d-flex flex-column align-items-center justify-content-center"
                    style="width:12rem;height:12rem;">
                    <h5 class="card-title h1">{{$level->name}}</h5>
                </div>

                @if($level->id <= $user->level_id)
            </a>
            @endif
    </div>
    @endforeach
</div>


@endsection