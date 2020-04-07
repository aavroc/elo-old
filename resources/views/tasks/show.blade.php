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
        <form action="{{route('tasks.tag', $task)}}" method="post">
            @csrf
            <h4>Tags</h4>
            @foreach($tags as $tag)
                <div class="custom-control custom-checkbox">
                    @if(Auth::user()->role < 3)
                    <input type="checkbox" class="custom-control-input" id="{{$tag->name}}_{{$tag->id}}" value="{{$tag->id}}"  name="tags[{{$tag->id}}]"
                    @if($task->tags->find($tag->id) != null) @if($task->tags->find($tag->id)->id == $tag->id) checked @endif @endif>
                    <label class="custom-control-label" for="{{$tag->name}}_{{$tag->id}}">{{$tag->name}}</label>
                    @else
                        @if($task->tags->find($tag->id) != null) 
                            @if($task->tags->find($tag->id)->id == $tag->id)
                                <label class="custom-control-label" for="{{$tag->name}}_{{$tag->id}}">{{$tag->name}}</label>
                            @endif
                        @endif
                    @endif
                </div>
            @endforeach
            <button type="submit" class="btn btn-success">Tag you're it</button>
        </form>
        
    </div>
</div>



@endsection