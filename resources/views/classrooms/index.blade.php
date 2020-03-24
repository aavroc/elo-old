@extends('layouts.app')

@section('content')

<div class="row mt-4">
    <div class="col-12">
        <h4 class="display-3">Klassen</h4>
    </div>
    <hr>
    <div class="col-6">
        <h4>Levels</h4>
        <label class="text-muted">Verander het niveau per student</label>

        <div class="list-group">
            @foreach ($classrooms as $classroom)
            <a href="{{route('classrooms.show_levels', $classroom)}}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mt-3">
                <div>{{$classroom->name}} <i class="fas fa-info text-warning"></i></div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="col-6">
        <h4>Oefeningen</h4>
        <label class="text-muted">Bekijk de gemaakte oefeningen</label>
        <div class="list-group">
            @foreach ($classrooms as $classroom)
            <a href="{{route('classrooms.show_exercises', $classroom)}}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mt-3">
                <div>{{$classroom->name}} <i class="fas fa-info text-warning"></i></div>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection