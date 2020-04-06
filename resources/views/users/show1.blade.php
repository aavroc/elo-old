@extends('layouts.main')

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
            @foreach ($user->modules as $module)
                <div class="col">
                    <div class="card @if($module->pivot->status ==0) bg-danger mb-3 @elseif($module->pivot->status == 1) bg-success mb-3 @else bg-info mb-3 @endif" style="width: 20rem;">
                        <div class="card-body">
                            <div class="col">
                                <h5 class="card-title">{{$module->name}}</h5>
                                <a href="{{route('users.repo', ['user'=> $user, 'module'=> $module->slug])}}"
                                    class="card-link">Check user module</a>
                            </div>

                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="{{$module->id}}_closed" value="0" >
                                    <label class="form-check-label" for="{{$module->id}}_closed">Closed</label>
                                  </div>
                               
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="{{$module->id}}_open" value="1" @if($module->pivot->status ==1) checked @endif>
                                    <label class="form-check-label" for="{{$module->id}}_open">Open</label>
                                </div>
                            
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="{{$module->id}}_done" value="3">
                                    <label class="form-check-label" for="{{$module->id}}_done">Done</label>
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
    $('input[type=radio]').change(function() {
    console.log($(this).parent().parent().parent().parent());
    var card =$(this).parent().parent().parent().parent();
    var status = this.id;
    $.ajax({
        method: "POST",
        url: "/students/update_level",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: { 
                'student': {{$user->id}}, 
                'status': status,
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
        $(card).removeClass('bg-danger bg-success bg-info' );
        
        if(msg == 'closed'){
            $(card).addClass('bg-danger' );
        }

        if(msg == 'open'){
            $(card).addClass('bg-success' );
        }

        if(msg == 'done'){
            $(card).addClass('bg-info' );
        }
    });
// Run code
});
                    
</script>

@endsection