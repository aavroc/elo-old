@extends('layouts.app')

@section('content')
@if(Auth::user()->role == 1)
<div class="row mt-3 mb-3">
    <div class="col">
        <h6>Start Modules</h6>
        <form action="{{route('reset_levels', $classroom)}}" method="post">
            @csrf
            @foreach($modules as $module)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="basic_modules[]" id="{{$module->name}}" value="{{$module->id}}" @if($module->basic_status == 1) checked @endif>
                <label class="form-check-label" for="{{$module->name}}">{{$module->name}}</label>
            </div>
            @endforeach
            <button class="btn btn-danger" name="submit" >Set all users to start</button>
        </form>
    </div>
</div>
@endif
<div class="row mt-4">
    <div class="col">
        <div id="message"></div>
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Ingelogd</th>
                    <th>Laatst Actief</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <a href="{{route('users.show', $user)}}" class="alert-link">
                            {{$user->firstname}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('users.show', $user)}}" class="alert-link">
                            {{$user->lastname}}
                        </a>
                    </td>
                    <td>
                        @if($user->status_id != 2)
                        <span class="text-danger" role="alert">
                            Niet ingelogd
                        </span>
                        @else
                        <span class="text-success" role="alert">
                            Ingelogd
                        </span>
                        @endif
                    </td>
                    <td>
                        @if(isset($user->session))
                        <span class="text-success" role="alert">
                            {{$user->session->last_activity}}
                        </span>
                        @else
                        <span class="text-danger" role="alert">
                            Nooit ingelogd geweest!
                        </span>
                        @endif
                    </td>
                   
                </tr>
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
                @endforeach
            </tbody>
        </table>

    </div>
</div>








@endsection