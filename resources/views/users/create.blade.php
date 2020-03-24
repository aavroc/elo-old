@extends('layouts.app')

@section('content')

<div class="row mt-4">
    <div class="col">
        <h3>Maak Gebruiker</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="studentnr">Studentnummer</label>
                        <input type="text" name="studentnr" id="studentnr" class="form-control"
                            value="{{old('studentnr')}}">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Voornaam</label>
                        <input type="text" name="firstname" id="firstname" class="form-control"
                            value="{{old('firstname')}}">
                    </div>
                    <div class="form-group">
                        <label for="prefix">Tussenvoegsel</label>
                        <input type="text" name="prefix" id="prefix" class="form-control" value="{{old('prefix')}}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Achternaam</label>
                        <input type="text" name="lastname" id="lastname" class="form-control"
                            value="{{old('lastname')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                    </div>
                </div>
            </div>
            <hr class="h-divider">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <div>
                            <label for="tag">Kies type gebruiker</label>
                        </div>

                        <div class="form-check ">
                            <label class="form-check-label" for="admin">
                                <input class="form-check-input" type="radio" name="type_gebruiker" id="admin" value="1">
                                Admin
                            </label>
                        </div>
                        <div class="form-check ">
                            <label class="form-check-label" for="teacher">
                                <input class="form-check-input" type="radio" name="type_gebruiker" id="teacher"
                                    value="2">
                                Docent
                            </label>
                        </div>
                        <div class="form-check ">
                            <label class="form-check-label" for="student">
                                <input class="form-check-input" type="radio" name="type_gebruiker" id="student"
                                    value="3">
                                Student
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Maak Gebruiker</button>
        </form>
    </div>
</div>


@endsection