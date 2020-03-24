@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1>{{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</h1>
        <p>Email-> {{$user->email}}</p>
        <p>Rol->
            @php
            $roles = ['','admin','docent','student'];
            @endphp
            {{$roles[$user->role]}}
        </p>
        <p>
            Laatste activiteit-> @if(isset($user->session))
            <span class="text-success" role="alert">
                {{$user->session->last_activity}}
            </span>
            @else
            <span class="text-danger" role="alert">
                Nooit ingelogd geweest!
            </span>
            @endif
        </p>
        @isset($all_modules)
        <p>
            <div id="message"></div>
            <td>
                @foreach($all_modules as $module)
                <div class="form-check form-check-inline">
                    <label class="form-radio-label fancy-radio" for="user_{{$user->id}}_level_{{$module->id}}">
                        <input class="form-radio-input" type="radio" name="module_user_{{$user->id}}"
                            id="user_{{$user->id}}_module_{{$module->id}}" data-student="{{$user->id}}"
                            data-module="{{$module->id}}" @if($module->id==$user->module_id) checked @endif>
                        <i class="fas fa-award text-danger"></i>
                        <i class="fas fa-award text-success"></i>
                        {{$module->name}}
                    </label>
                </div>
                @endforeach
            </td>
        </p>
        @endif
        @if(Auth::user()->role == 1)
        <a href="{{route('users.edit', $user)}}" class="btn btn-warning">Edit gebruiker</a>
        @endif
        @if($user->role == 3)
        <div class="row mt-3">
            <div class="d-flex flex-row justify-content-around">
                @foreach ($all_modules as $module)
                <div class="col-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$module->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">

                <h4>last commits</h4>
                {{-- {{dd($commits)}} --}}
                <ul class="list-group">
                    @foreach($commits as $commit)
                    <li class="list-group-item">
                        <a href="#">{{$commit->commit->message}}</a>
                        {{$commit->sha}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
</div>





@endsection