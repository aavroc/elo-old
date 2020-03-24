@extends('layouts.app')

@section('content')
<style>
    .form-check-label,
    .form-radio-label {
        font-size: 15px;
    }

    .form-check-label.fancy-checkbox:hover,
    .form-radio-label.fancy-radio:hover {
        cursor: pointer;

    }

    .fancy-checkbox input[type="checkbox"],
    .fancy-checkbox .text-success,
    .fancy-radio input[type="radio"],
    .fancy-radio .text-success {
        display: none;
    }

    .fancy-checkbox input[type="checkbox"]:checked~.text-success,
    .fancy-radio input[type="radio"]:checked~.text-success {
        display: inline-block;
    }

    .fancy-checkbox input[type="checkbox"]:checked~.text-danger,
    .fancy-radio input[type="radio"]:checked~.text-danger {
        display: none;
    }
</style>
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
                    @isset($levels)
                    <th>Level</th>
                    @endisset
                    @isset($exercises)
                    @foreach( $exercises as $exercise)
                    <th class="rotate">{{$exercise->name}}</th>

                    @endforeach
                    @endisset
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
                    @isset($levels)
                    <td>
                        @foreach($levels as $level)
                        <div class="form-check form-check-inline">
                            <label class="form-radio-label fancy-radio" for="user_{{$user->id}}_level_{{$level->id}}">
                                <input class="form-radio-input" type="radio" name="level_user_{{$user->id}}"
                                    id="user_{{$user->id}}_level_{{$level->id}}" data-student="{{$user->id}}"
                                    data-level="{{$level->id}}" @if($level->id==$user->level_id) checked @endif>
                                <i class="fas fa-award text-danger"></i>
                                <i class="fas fa-award text-success"></i>
                                {{$level->name}}
                            </label>
                        </div>
                        @endforeach
                    </td>
                    @else
                    @isset($user->code)
                    @foreach($user->code->sortBy('exercise_id') as $code)
                    <td>
                        <a class="nav-item"
                            href="{{route('exercises.view_code', [ $code->exercise->id, $user->id])}}">{{$code->exercise->name}}</a>
                        <?php 
                        $current_status = $code->student_status;
                        $states = [
                            ['Niet bekeken'          => 'badge-danger'],
                            ['Bekeken'               => 'badge-warning'], 
                            ['Ingeleverd'            => 'badge-info'], 
                            ['Goed gekeurd!'         => 'badge-success'],
                            ['Probeer het opnieuw!'  => 'badge-primary'], 
                        ];
                        if (array_key_exists($current_status, $states)) :?>

                        <span
                            class="badge badge <?php echo current($states[$current_status]);?>"><?php echo key($states[$current_status]); ?>
                        </span>
                        <?php endif;?>
                    </td>

                    @endforeach
                    @else
                    <td>&nbsp;</td>
                    @endisset
                    @endisset
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