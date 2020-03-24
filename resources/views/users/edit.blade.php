@extends('layouts.app')

@section('content')

<form class="mt-4" method="post" action="{{route('users.update', $user)}}">
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="firstname" class="col-sm-2 col-form-label">Voornaam</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" value="{{$user->firstname}}" name="firstname">
        </div>
    </div>
    <div class="form-group row">
        <label for="prefix" class="col-sm-2 col-form-label">Tussenvoegsel</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="prefix" value="{{$user->prefix}}" name="prefix">
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-sm-2 col-form-label">Achternaam</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" value="{{$user->lastname}}" name="lastname">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" value="{{$user->email}}" name="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="tag" class="col-sm-2 col-form-label">Kies type gebruiker</label>

        <div class="form-check">
            <label class="form-check" for="admin">
                <input class="form-check-input" type="radio" name="type_gebruiker" id="admin" value="1" @if($user->role
                == 1) checked @endif>
                Admin
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check" for="teacher">
                <input class="form-check-input" type="radio" name="type_gebruiker" id="teacher" value="2"
                    @if($user->role == 2) checked @endif>
                Docent
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check" for="student">
                <input class="form-check-input" type="radio" name="type_gebruiker" id="student" value="3"
                    @if($user->role == 3) checked @endif>
                Student
            </label>
        </div>
    </div>
    <div class="form-group row">
        <label for="yes_active" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <input type="radio" name="status" id="yes_active" @if($user->status_id == 1) checked @endif
            value="1">
            <label for="yes_active">Actief</label>
            --vs--
            <label for="no_active">Niet Actief</label>
            <input type="radio" name="status" id="no_active" @if($user->status_id == 0) checked @endif
            value="0">
        </div>
    </div>
    @if($user->role == 3)
    <div class="form-group row">
        <label for="classroom" class="col-sm-2 col-form-label">Huidige klas</label>
        <div class="col-sm-10">
            @foreach($classrooms as $classroom)
            <div class="form-check">
                <input type="radio" class="form-check-input" name="classroom" id="classroom_{{$classroom->id}}"
                    @if($user->classroom ==
                $classroom->name) checked @endif value="{{$classroom->name}}">
                <label for="classroom_{{$classroom->id}}" class="form-check-label">{{$classroom->name}}</label>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <a href="{{route('users.index')}}" class="btn btn-info mr-3">Annuleer</a>
    <button type="submit" class="btn btn-warning" name="submit">Wijzig</button>
    @endsection