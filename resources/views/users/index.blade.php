@extends('layouts.app')

@section('content')
<style>
    .form-check-label,
    .form-radio-label {
        font-size: 24px;
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
        <table class="table table-sm table-hover table-datatable" id="users_table">
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>vv</th>
                    <th>Achternaam</th>
                    <th>Klas</th>
                    <th>Rol</th>
                    <th>Level</th>
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
                        {{$user->prefix}}
                    </td>
                    <td>
                        <a href="{{route('users.show', $user)}}" class="alert-link">
                            {{$user->lastname}}
                        </a>
                    </td>
                    <td>
                        {{-- <a href="{{route('classrooms.show_exercises', $user->classroom)}}" class="alert-link"> --}}
                        {{$user->classroom}}
                        {{-- </a> --}}
                    </td>
                    <td><?php 
                            $data = ['', 'Admin', 'Docent', 'Student'];    
                        ?>
                        {{$data[$user->role]}}
                    </td>
                    <td>
                        {{$user->level_id}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

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
// });
                                                
</script>




@endsection