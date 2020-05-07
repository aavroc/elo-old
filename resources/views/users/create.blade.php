@section('title') 
Wijzig gebruiker
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title"></h4>
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Maak gebruiker</h5>
                </div>
                <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="mt-4" method="post" action="{{route('users.store')}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="studentnr">Studentnummer</label>
                        <input type="text" name="studentnr" id="studentnr" class="form-control"
                            value="{{old('studentnr')}}">
                    </div>
                    <div class="form-group col-md-7">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="firstname">Voornaam</label>
                        <input type="text" name="firstname" id="firstname" class="form-control"
                            value="{{old('firstname')}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="prefix">Tussenvoegsel</label>
                        <input type="text" name="prefix" id="prefix" class="form-control" value="{{old('prefix')}}">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="lastname">Achternaam</label>
                        <input type="text" name="lastname" id="lastname" class="form-control"
                            value="{{old('lastname')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
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
                    <div class="form-row text-right">
                        <div class="form-group col-md-12 text-right">
                        <button type="submit" class="btn btn-success">Maak Gebruiker</button>
                    </div>
                </form>
            </div>
            </div>                  
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
@endsection