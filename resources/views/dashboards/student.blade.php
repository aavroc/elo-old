@extends('layouts.main')

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


@endsection