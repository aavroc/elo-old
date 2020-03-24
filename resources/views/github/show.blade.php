@extends('layouts.app')

@section('content')

<h3 class="mt-3">{{$repo}} Repository</h3>
<a href="{{route('github.fork', $repo)}}" class="btn btn-warning">Create Fork</a>
<ul class="list-group">
    @if(is_array($full_repo_data))
    @foreach($full_repo_data as $content)
    <li class="list-group-item">
        @if($content->type == 'dir')
        Folder:
        <a href="{{route('github.show', ['repo'=> $repo, 'path'=> $content->path])}}">{{$content->name}}</a>
        @else
        File:
        <a href="{{route('github.edit-file', ['repo'=> $repo, 'path'=> $content->path] )}}">{{$content->name}}</a>
        @endif
    </li>
    @endforeach
    @endif
</ul>

@endsection