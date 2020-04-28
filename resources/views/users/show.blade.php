@section('title') 
Gebruiker
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<div class="xp-breadcrumbbar text-center">
</div>
<div class="xp-contentbar">
    <div class="row">
        <div class="col-lg-6">
            <div class="card m-b-20"> <!-- gebruiker card -->
                <div class="card-header bg-white">
                    <h5 class="card-title">Gebruiker</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Naam</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Laatst actief</th>
                                    @if(Auth::user()->role == 1)
                                    <th>Bewerk</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@php
                                        $roles = ['','admin','docent','student'];
                                        @endphp
                                        {{$roles[$user->role]}}</td>
                                    <td>@if(isset($user->session))<span class="text-success" role="alert">{{$user->session->last_activity}}</span>
                                        @else
                                    <span class="text-danger" role="alert">Nooit ingelogd geweest!</span>
                                    @endif</td>
                                    @if(Auth::user()->role == 1)
                                    <td><a href="{{route('users.edit', $user)}}" class=""><i class="mdi mdi-pencil"></i> bewerk</a></td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
            </div> <!-- end gebruiker card -->
            @if($user->role == 3)
            <div class="card m-b-20"> <!-- Verzoeken card -->
                <div class="card-header bg-white">
                    <h5 class="card-title">Aanvraag</h5>
                </div>
                <div class="card-body">
                    <!-- requests, alerts and reviews here -->
                    <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Omschrijving</th>
                            <th>Link</th>
                            <th>Type</th>
                            <th>Datum</th>
                            <th>Status</th>
                            <th>Bekeken door</th>
                            <th>Opmerkingen</th>
                            <th>Bewerk</th>
                        </tr>
                        </thead>
                        <tbody>
                            <td>omschrijving</td>
                            <td>link naar taak</td>
                            <td>assistentie, nakijken, overig</td>
                            <td>datum en tijd</td>
                            <td>open, closed</td>
                            <td>naam docent</td>
                            <td>opmerkingen docent</td>
                            <td><a href="#" class=""><i class="mdi mdi-pencil"></i> bewerk</a></td>
                        </tbody>
                        </table>
                    </div> <!-- end table responsive -->
                </div> <!-- end card body -->
            </div> <!-- end Verzoeken card -->
            @endif
            
        </div><!-- End XP Col -->
        
        <div class="col-lg-6">
            @if($user->role == 3)
            <div class="card m-b-20">
                <div class="card-header bg-white">
                    <h5 class="card-title">Modules</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Module</th>
                                    <th>Status</th>
                                    <th>Toon</th>
                                    @if(Auth::user()->role == 1)
                                    <th>Bewerk</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($user->modules as $module)
                                <tr id="module-table-{{$module->id}}" class="modules @if($module->pivot->status ==1) table-success @elseif ($module->pivot->status ==0) table-danger @else table-info @endif">
                                    <td>{{$module->name}}</td> 
                                    <td id="txt_module-table-{{$module->id}}">@if($module->pivot->status ==1) open @elseif ($module->pivot->status ==3) done @else closed @endif</td> 
                                    <td><a href="{{route('users.repo', ['user'=> $user, 'module'=> $module->slug])}}" class="task-list"><i class="mdi mdi-eye"></i> toon</a></td>
                                    @if(Auth::user()->role <= 2)
                                        <td>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="module_{{$module->id}}_closed" value="0" @if($module->pivot->status ==0) checked @endif>
                                            <label class="form-check-label f-w-3" for="module_{{$module->id}}_closed">closed</label>
                                        </div>
                                    
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="module_{{$module->id}}_open" value="1" @if($module->pivot->status ==1) checked @endif>
                                            <label class="form-check-label f-w-3" for="module_{{$module->id}}_open">open</label>
                                        </div>
                                    
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="user_level_{{$module->slug}}" id="module_{{$module->id}}_done" value="3" @if($module->pivot->status ==3) checked @endif>
                                            <label class="form-check-label f-w-3" for="module_{{$module->id}}_done">done</label>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
                
            </div> <!-- end card -->
            @endif
            @if($user->role == 3)
            <div class="card m-b-20">
                
                <div class="card-body">
                    <div class="m-b-10">
                        <h6>Challenges</h6>
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Challenge</th>
                                <th>Status</th>
                                <th>Toon</th>
                                @if(Auth::user()->role == 1)
                                <th>Bewerk</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @isset($user->challenges)
                        @foreach ($user->challenges as $challenge)
                            <tr class="challenges" id="challenge-table-{{$challenge->id}}">
                                <td>{{$challenge->name}}</td>
                                <td id="txt_module-table-{{$challenge->id}}">@if($challenge->pivot->status ==1) open @elseif ($challenge->pivot->status ==3) done @else closed @endif</td> 
                                @if(Auth::user()->role <= 2)
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_challenge_{{$challenge->name}}" id="challenge_{{$challenge->id}}_closed" value="0" @if($challenge->pivot->status ==0) checked @endif>
                                        <label class="form-check-label f-w-3" for="challenge_{{$challenge->id}}_closed">closed</label>
                                    </div>
                                
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_challenge_{{$challenge->name}}" id="challenge_{{$challenge->id}}_open" value="1" @if($challenge->pivot->status ==1) checked @endif>
                                        <label class="form-check-label f-w-3" for="challenge_{{$challenge->id}}_open">open</label>
                                    </div>
                                
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_challenge_{{$challenge->name}}" id="challenge_{{$challenge->id}}_done" value="3" @if($challenge->pivot->status ==3) checked @endif>
                                        <label class="form-check-label f-w-3" for="challenge_{{$challenge->id}}_done">done</label>
                                    </div>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        @endisset
                            </tbody>
                        </table>
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
                
            </div> <!-- end card -->
            @endif
        </div><!-- End XP Col -->
        
    </div>
    <div class="row">
        <div class="col-lg-6">
            @if($user->role == 3)
                <div class="card-body">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black">Commits</h5>
                            <h6 class="card-subtitle">Bekijk de gemaakte commits</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @foreach($all_modules as $key => $module)
                                        <a class="nav-link @if($key == 0) active @endif" id="v-pills-{{$module->slug}}-tab" data-toggle="pill" href="#v-pills-{{$module->slug}}" role="tab" aria-controls="v-pills-{{$module->slug}}" aria-selected="false">{{$module->name}}</a>
                                    @endforeach
                                </div>
                              </div>
                              <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    {{-- {{dd($repo_commits)}} --}}
                                    @foreach($repo_commits as $module_slug => $commit_arr)
                                    <div class="tab-pane fade @if($module_slug == 'php-basic') show active @endif" id="v-pills-{{$module_slug}}" role="tabpanel" aria-labelledby="v-pills-{{$module_slug}}-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Commit bericht</th>
                                                    <th>Datum</th>
                                                    <th>Commit Sha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @if(is_array($commit_arr))
                                                @foreach($commit_arr as $item)
                                                <tr>
                                                    <td>{{$item->commit->message}}</td>
                                                    <td>{{$item->commit->committer->date}}</td>
                                                    <td><a href="{{$item->html_url}}" target="_blank">{{Str::substr($item->sha, 0, 7)}}...</a></td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>  
                                    @endforeach
                                  
                                  
                                </div>
                              </div>
                            </div> 
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-lg-6">
            @if($user->role == 3)
                <div class="card-body">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black">Takenoverzicht</h5>
                            <h6 class="card-subtitle">Bekijk de gemaakte taken per module</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @foreach($all_modules as $key => $module)
                                        <a class="nav-link @if($key == 0) active @endif" id="v-pills-{{$module->slug}}-tab" data-toggle="pill" href="#v-pills-{{$module->slug}}" role="tab" aria-controls="v-pills-{{$module->slug}}" aria-selected="false">{{$module->name}}</a>
                                    @endforeach
                                </div>
                              </div>
                              <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    @foreach($all_modules as $key => $module)
                                    <div class="tab-pane fade @if($key == 0)show active @endif" id="v-pills-{{$module->slug}}" role="tabpanel" aria-labelledby="v-pills-{{$module->slug}}-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Taaknaam</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($module->tasks as $task)
                                                <tr>
                                                    <td>{{$task->name}}</td>
                                                    <td>
                                                        @php $stats = [['nog mee bezig', 'mdi mdi-reload'], ['voldaan', 'mdi mdi-check']]; @endphp
                                                        @if(is_object($task->users()->where('task_id', $task->id)->first()))
                                                            <i class="{{$stats[$task->users()->where('task_id', $task->id)->first()->pivot->evaluation][1]}}"></i>
                                                            {{$stats[$task->users()->where('task_id', $task->id)->first()->pivot->evaluation][0]}}
                                                        @else
                                                            <i class="mdi mdi-play"></i>
                                                            Nog niet begonnen
                                                        @endif

                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                    @endforeach
                                  
                                  
                                </div>
                              </div>
                            </div> 
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    
</div><!-- End XP Contentbar -->


@endsection 

@section('script')

<script>
    //handle module radio buttons
    $('input[type=radio]').change(function() {
        var trID = $(this).closest('tr').attr('id'); // table row ID 
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
                // console.log(response); 
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                // console.log(JSON.stringify(jqXHR));
                // console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        })
        .done(function( msg ) {

            if(msg.status_text == 'closed'){
                $('#' + trID).attr('class', 'table-danger');
                $('#txt_' + trID).html('closed'); 

              
            }

            if(msg.status_text == 'open'){
                $('#' + trID).attr('class', 'table-success');
                $('#txt_' + trID).html('open'); 
            }

            if(msg.status_text == 'done'){
                $('#' + trID).attr('class', 'table-info');
                
                $('#txt_' + trID).html('done'); 
                if(typeof msg.challenge_done != 'undefined' ){
                    msg.challenge_done.forEach(function(value, index){
                    $('#challenge-table-' + value).attr('class', 'table-success');
                    $('#challenge_'+value+'_open').attr('checked', 'checked');
                });
                }
               
            }
            
        });
    });
    
    
                    
</script>

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
@endsection 

