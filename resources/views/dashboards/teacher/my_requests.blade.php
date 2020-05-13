<div class="card  m-b-10">
    <div class="card-header bg-white">
        <div class="row">
            <div class="col-lg-7 m-t-10">
                <h5 class="text-black">Verzoeken af te handelen</h5>
                <h6>Mijn aangenomen verzoeken</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="xp-default-datatable2" class="display table table-hover table-myrequest">
                        <thead>
                            <tr>
                                <th>Soort</th>
                                <th>Verzoek</th>
                                <th>Student</th>
                                <th>Onderwerp</th>
                                <th>Status</th>
                                <th>Docent</th>
                                <th>Datum | tijd</th>
                                <th>Actie</th>
                            </tr>
                        </thead>                                        
                        <tbody>
                        {{-- {{dd($user->verzoeken)}} --}} 
                        @isset($requests)
                        @foreach($requests as $request)

                        @if($request->docent_id == Auth::user()->id && $request->status == 2)

                        <!-- Modal -->
                        <div class="modal fade" id="modal-myrequest{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-myrequest{{$request->id}}Title" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal-request{{$request->id}}Title">Verzoek vraag</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>{{$request->extra}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>

                        <tr>
            
                            @switch($request->type)
                            
                            @case(1)
                                <td><span class="f-w-6"><i class="mdi mdi-help mr-2"></i> hulpvraag</span>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                </button></td>
                                <td><a href="{{route('users.show', $request->user->id)}}"><u>{{$request->user->firstname}}</u></a></td>                             
                                <td><a href="{{route('tasks.show', $request->task->id)}}"><u>@isset($request->module->name){{$request->module->name}} @endisset > @isset($request->task){{$request->task->level}} @endisset > @isset($request->task->name){{$request->task->name}} @endisset</u></a></td>
                            @break

                            @case(2)
                                <td><span class="f-w-6"><i class="mdi mdi-school mr-2"></i> eindgesprek</span>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                </button></td>                               
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">@isset($request->module->name){{$request->module->name}}@endisset eindgesprek</a></td>
                            @break

                            @case(3)
                                <td><span class="f-w-6"><i class="mdi mdi-account mr-2"></i> coachgesprek</span>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                </button></td>                                   
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">coachgesprek</a></td>
                            @break

                            @case(4)
                                <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> workshop</span>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                </button></td>                                   
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">workshop</a></td>                     
                            @break                                                  

                            @default
                                <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> ?</span>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-myrequest{{$request->id}}">
                                <i class="mdi mdi-comment-eye"> bekijk</i></td>
                                </button></td>                                    
                                <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                                <td><a href="#">lege aanvraag</a></td>  
                            @endswitch
                            
                            <td>
                            @if($request->status == 1)
                                    <h6><span class="badge badge-danger"> open </span></h6>
                                @elseif($request->status == 2)
                                    <h6><span class="badge badge-warning"> in behandeling </span></h6>
                                @elseif($request->status == 3)
                                    <h6><span class="badge badge-success"> voltooid </span></h6>
                                @else
                                    <h6><span class="badge badge-danger"> open </span></h6>
                                @endif
                            </td>
                            <td>{{$usernameByID[$request->docent_id]}}</td>
                            <td>{{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}}</td>
                            <td> <!-- een taak kan alleen afgehandeld worden als deze open is -->
                                @if($request->status == 1)
                                <a href="{{route('handleRequest', ['user_request' => $request])}}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="In behandeling nemen"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                                @endif
                                @if($request->status == 2)
                                <a href="{{route('handleRequest', ['user_request' => $request ])}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Markeren als voltooid"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                                @endif
                            </td>

                        </tr>
                        @endif
                        @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div> <!-- end table responsive -->      
            </div> <!-- end card body -->
        </div><!-- end card -->
    </div><!-- End XP Col -->
</div>