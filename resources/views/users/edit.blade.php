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
        <div class="col-lg-10">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bewerk gebruiker: {{$user->firstname}} {{$user->prefix}} {{$user->lastname}} </h5>
                </div>
                <div class="card-body">
                    <form class="mt-4" method="post" action="{{route('users.update', $user)}}">
                    @csrf
                    @method('put')

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="firstname">Voornaam</label>
                                <input type="text" class="form-control" id="firstname" value="{{$user->firstname}}" name="firstname">
                            </div>
                            <div class="form-group col-md-2">
                            <!-- @David, status_id checkt in jouw code inactief (0) of member (1) of logged in (2), heb hier dus iets aangepast tov de oude code  $user->status_id >= 1 ipv $user->status_id == 1-->
                                <div class="f-w-5 p-b-10">Status</div>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="status" id="yes_active" class="custom-control-input" @if($user->status_id >= 1) checked @endif
                                value="1">
                                <label for="yes_active" class="custom-control-label">Actief</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="status" id="no_active" class="custom-control-input" @if($user->status_id == 0) checked @endif
                                value="0">
                                <label for="no_active" class="custom-control-label">Niet Actief</label>
                                </div>
                            </div>
                        </div>
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="prefix">Tussenvoegsel</label>
                                <input type="text" class="form-control" id="prefix" value="{{$user->prefix}}" name="prefix">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Achternaam</label>
                                <input type="text" class="form-control" id="lastname" value="{{$user->lastname}}" name="lastname">
                            </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" value="{{$user->email}}" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <div class="f-w-5 p-b-10">Type gebruiker</div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input class="custom-control-input" type="radio" name="type_gebruiker" id="admin" value="1" @if($user->role == 1) checked @endif>
                                <label class="custom-control-label" for="admin">Admin</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="type_gebruiker" id="teacher" value="2" @if($user->role == 2) checked @endif>
                                <label class="custom-control-label" for="teacher">Docent</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="type_gebruiker" id="student" value="3" @if($user->role == 3) checked @endif>
                                <label class="custom-control-label" for="student">Student</label>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            @if($user->role == 3)
                                <div class="f-w-5 p-b-10">Huidige klas</div>
                        
                            @foreach($classrooms as $classroom)
                            <div class="custom-control custom-radio custom-control-inline">
                              <input class="custom-control-input" type="radio" name="classroom" id="classroom_{{$classroom->id}}" @if($user->classroom == $classroom->name) checked @endif value="{{$classroom->name}}">
                                <label class="custom-control-label" for="classroom_{{$classroom->id}}">{{$classroom->name}}</label>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-8">
                        </div>
                        <div class="form-group">
                            <a href="{{route('users.index')}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Annuleer<i class="mdi mdi-cancel ml-2"></i> </a>
                        <button type="submit" class="btn btn-success" name="submit">Wijzig<i class="mdi mdi-upload ml-2"></i></button>
                        </div>
                    </div>
                    
                    </form>
                </div>                    
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
@endsection


