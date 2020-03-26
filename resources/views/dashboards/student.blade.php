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
    {{-- {{dd($modules)}} --}}
    @foreach ($modules as $module)
    <div class="col">
        @if($module->id == $user->modules->find($module->id)['id'] )
        <a href="{{route('modules.show', ['repo'=> $module->slug ])}}" class="card module-to-choose">
            @endif
            <div class="card-body d-flex flex-column align-items-center justify-content-center"
                style="width:12rem;height:12rem;">
                <h5 class="card-title h1">{{$module->name}}</h5>
            </div>
            @if($module->id == $user->modules->find($module->id)['id'] )
        </a>
        @endif
    </div>
    @endforeach
</div>


@endsection