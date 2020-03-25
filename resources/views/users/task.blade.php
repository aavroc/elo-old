@extends('layouts.app')

@section('content')
<style>
    #someselector {
        all: revert;

        * {
            all: unset;
        }
    }
</style>
<h3 class="mt-3">{{$module->name}}</h3>
<div class="row">
    <div class="col-6">
        <div class="jumbotron">
            @isset($readme_content)
            <p id="someselector">{!!$readme_content!!}</p>
            @endisset
        </div>
    </div>
    <div class="col-6">
        <ul class="list-group">
            @if(is_array($contents))
            @foreach($contents as $content)
            @if($content->type == 'file' && $content->name != 'README.md')
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <a href="{{route('tasks.code', ['user'=> $user, 'module'=> $module, 'path'=> $content->path])}}" class="card-link">
                        <h5 class="card-title"><i class="far fa-file"></i> {{$content->name}}</h5>
                    </a>

                </div>
            </div>
            @endif
            @if($content->type == 'dir' )
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><i class="far fa-folder"></i> {{$content->name}}</h5>

                </div>
            </div>
            @endif

            @endforeach
            @endif
        </ul>
    </div>
</div>



@endsection