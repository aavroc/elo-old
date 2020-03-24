@extends('layouts.app')

@section('content')

<h3 class="mt-3">{{$repo}} Repository</h3>
<a href="{{route('github.fork', $repo)}}" class="btn btn-warning">Create Fork</a>
<div class="jumbotron">
    <h1 class="display-4">Welcome</h1>
    <p class="lead">Deze module is fantastisch</p>
    <hr class="my-4">
    @isset($readme_content)
    <p>{{$readme_content}}</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    @endisset
</div>
<ul class="list-group">
    @if(is_array($full_repo_data))
    @foreach($full_repo_data as $content)
    <li class="list-group-item">
        @if($content->type == 'dir')
        Folder:
        <a href="{{route('modules.show', ['repo'=> $repo, 'path'=> $content->path])}}">{{$content->name}}</a>
        @else
        File:
        {{-- <a href="{{route('github.edit-file', ['repo'=> $repo, 'path'=> $content->path] )}}">{{$content->name}}</a>
        --}}
        <a href="{{route('tasks.show', ['repo'=> $repo, 'path'=> $content->path] )}}">{{$content->name}}</a>
        @endif
    </li>
    @endforeach
    @endif
</ul>

@endsection