@extends('layouts.main')

@section('content')
<h4 class="mt-3 mb-3">Modules</h4>
<ul class="list-group">
    @foreach($modules as $module)
    <a href="{{route('modules.show', Str::slug($module->name))}}"
        class="list-group-item list-group-item-action">{{$module->name}}</a>
    @endforeach
</ul>


@endsection