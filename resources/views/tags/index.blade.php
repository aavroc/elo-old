@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <a href="{{route('tags.create')}}" class="btn btn-success">Create tag</a>

    </div>
    <div class="col">
        @if (session('status'))
            <div class="alert alert-danger">
                Tag: {{ session('status') }} is in gebruik en kan niet verwijderd worden
            </div>
        @endif  
    </div>

</div>
<h4>Show All Tags</h4>
<div class="row">
    <div class="col-6">
        <ul class="list-group">
            @foreach($tags as $tag)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('tags.edit', $tag)}}">{{$tag->name}}</a>
                    <form action="{{route('tags.delete', $tag)}}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                </li>
            @endforeach
          </ul>
    </div>
</div>



@endsection