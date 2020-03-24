@extends('layouts.app')

@section('content')

<div class="row mt-4">
    <div class="col">
        <h3>Maak Github Repo</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('github.set')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                    </div>

                    <button type="submit" class="btn btn-success">Maak Repo</button>
        </form>
    </div>
</div>


@endsection