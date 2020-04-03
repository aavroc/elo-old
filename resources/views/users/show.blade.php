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
        @if(Auth::user()->role == 1)
        <a href="{{route('users.edit', $user)}}" class="btn btn-warning">Edit gebruiker</a>
        @endif
    </div>
</div>
<div class="row">
    <div class="col">
        @if($user->role == 3)
        <div class="row mt-3">
                @foreach ($all_modules as $module)
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <div class="col">
                                <h5 class="card-title">{{$module->name}}</h5>
                                <a href="{{route('users.repo', ['user'=> $user, 'module'=> $module->slug])}}"
                                    class="card-link">Check user module</a>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="closed_{{$module->slug}}" value="0">
                                    <label class="form-check-label" for="closed_{{$module->slug}}">Closed</label>
                                  </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="open_{{$module->slug}}" value="1">
                                    <label class="form-check-label" for="open_{{$module->slug}}">Open</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="done_{{$module->slug}}" value="3">
                                    <label class="form-check-label" for="done_{{$module->slug}}">Done</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
        </div>
        <div class="row mt-3">
            {{-- {{dd($user_events)}} --}}
            @if(is_array($user_events))
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h4>last pushed commits</h4>
                        <ul class="list-group">
                            @foreach($user_events as $event)
                            @if($event->type == "PushEvent")
                            @foreach($event->payload->commits as $commit)
                            @php $module = explode('/', $event->repo->name)[1]; @endphp
                            <li class="list-group-item">
                                check module: <a href="{{route('users.repo', ['user'=> $user, 'module'=> $module])}}"
                                class="card-link">{{$module}}</a>
                            check commit on github: <a href="https://github.com/{{$event->repo->name}}/commit/{{$commit->sha}}" target="_blank">{{$commit->message}}</a> 
                            |
                                
                            </li>
                            @endforeach
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            @else
            <p>No events recored yet</p>
            @endif
        </div>
        @endif
    </div>
</div>

<script>
    $('input[type=radio][name=level_user_{{$user->id}}').change(function() {
    console.log(this.id);
    let level_id = $(this).attr('data-level');
    let student_id = $(this).attr('data-student');
    console.log(student_id);
    $.ajax({
        method: "POST",
        url: "/students/update_level",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: { 
                'student': student_id, 
                'level': level_id,
            },
        success: function(response){ // What to do if we succeed
            console.log(response); 
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    })
    .done(function( msg ) {
        var messageType = '';
        if(msg.level == 1){
            messageType = 'secondary';
        }
        if(msg.level == 2){
            messageType = 'warning';
        }
        if(msg.level == 3){
            messageType = 'success';
        }
        $("#message").html(
            
            '<div class="alert alert-'+messageType+'" role="alert">'+ msg.msg+'</div>'
            
        );
    });
// Run code
});
                    
</script>




@endsection