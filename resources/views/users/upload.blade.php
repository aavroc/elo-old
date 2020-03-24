@extends('layouts.app')

@section('content')

<form action="{{route('users.upload_data')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="file_upload">Upload het bestand</label>
                <input type="file" name="file_upload" id="file_upload" />
            </div>
            <div class="form-group">
                @foreach($classrooms as $classroom)
                <label for="classoom_{{$classroom->id}}">{{$classroom->name}}</label>
                <input type="radio" name="classroom" class="classroom" id="classoom_{{$classroom->id}}"
                    value="{{$classroom->name}}">

                @endforeach
            </div>
        </div>
    </div>
    <button type="submit">Upload!</button>

</form>
<style>
    .classroom {
        margin-left: 20px;
    }
</style>
@endsection