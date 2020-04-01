@extends('layouts.app')

@section('content')

<h3 class="mt-3">{{$repo}} Repository</h3>
<div class="row">
    <div class="col-6">
        <div class="jumbotron">
            @isset($readme_content)
            <p>{!!$readme_content!!}</p>
            @endisset
        </div>
    </div>
    {{-- {{dd($module->tasks->sortBy('name')->sortBy('level'))  }} --}}
    <div class="col-6">
        @php $level = null ; @endphp
        @foreach($module->tasks->sortBy('name')->sortBy('level')  as $content)
            @if($level != $content->level)
                <div class="card" style="width: 18rem;">
                    <div class="card-header">{{$content->level}}</div>
                        <ul class="list-group list-group-flush">
            @endif
                            <li class="list-group-item"><a href="{{route('tasks.show', $content)}}" class="text-success">{{$content->name}}</a></li>
              
           
          @php $level = $content->level; @endphp
            @if($level != $content->level)
                        </ul>            
                    </div>
            @endif
        @endforeach
    </div>

@endsection