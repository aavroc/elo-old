@extends('layouts.app')

@section('content')

<h4>Create Tag</h4>

<div class="row">
    <div class="col">
        <form action="{{route('tags.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="tag">Tag naam</label>
                <input type="text" class="form-control" id="tag" name="tag">
                
              </div>

            
            <button type="submit" class="btn btn-primary">Maak Tag</button>
        </form>


    </div>
</div>



@endsection