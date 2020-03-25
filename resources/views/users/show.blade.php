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
                            <a href="{{route('users.repo', ['user'=> $user, 'module'=> $module])}}"
                                class="card-link">Check user module</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row mt-3">
            @if(is_array($user_events))
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h4>last pushed commits</h4>
                        <ul class="list-group">
                            @foreach($user_events as $event)
                            @if($event->type == "PushEvent")
                            @foreach($event->payload->commits as $commit)
                            <li class="list-group-item">
                                {{$commit->message}}
                            </li>
                            @endforeach
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @else
            <p>No events recored yet</p>
            @endif
        </div>
        @endif
    </div>
</div>





@endsection