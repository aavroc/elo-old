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
    <div class="col-6">
        <ul class="list-group">
            @if(is_array($full_repo_data))
            @foreach($full_repo_data as $content)
            @if($content->type == 'dir' )
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$content->name}}</h5>
                    <a href="{{route('modules.show', ['repo'=> $repo, 'path'=> $content->path])}}"
                        class="card-link">Check it out</a>
                </div>
            </div>
            @endif

            @endforeach
            @endif
        </ul>
    </div>
</div>



@endsection