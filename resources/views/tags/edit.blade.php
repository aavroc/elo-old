@extends('layouts.main')

@section('content')

<h4>Edit Tag</h4>

<div class="row">
    <div class="col">
        <form action="{{route('tags.update', $tag)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tag">Tag naam</label>
            <input type="text" class="form-control" id="tag" name="tag" value="{{old('tag', $tag->name)}}">
                
              </div>
            <button type="submit" class="btn btn-warning">Update Tag</button>
        </form>


    </div>
</div>



@endsection