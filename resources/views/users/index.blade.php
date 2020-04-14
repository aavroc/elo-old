@section('title') 
Booster - Data Table
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->  
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- End XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Gebruikers</h5>
                    <!--<h6 class="card-subtitle">Subtitel</h6>-->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Voornaam</th>
                                <!-- <th>vv</th> -->
                                <th>Achternaam</th>
                                <th>Klas</th>
                                <th>Rol</th>
                                <th>Level</th>
                                <th>Toon</th>
                                @if(Auth::user()->role == 1)
                                <th>Bewerk</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                        {{$user->firstname}}
                                </td>
                                <!-- @David user prefix is nergens ingevuld dus even uit gezet<td>
                                    {{$user->prefix}}
                                </td>-->
                                <td>
                                        {{$user->lastname}}
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
                                    <!-- @David er is geen level_id in de database! -->
                                    {{$user->level_id}}
                                </td>
                                <td>
                                    <a href="{{route('users.show', $user)}}" class=""><i class="fa fa-eye"></i> toon</a>
                                </td>
                                    @if(Auth::user()->role == 1)
                                    <td><a href="{{route('users.edit', $user)}}" class=""><i class="fa fa-pencil"></i> bewerk</a></td>
                                    @endif
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- Required Datatable JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/init/table-datatable-init.js') }}"></script>

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