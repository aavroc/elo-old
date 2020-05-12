<div class="card  m-b-30">
    <div class="card-header bg-white">
        <div class="row">
            <div class="col-lg-7 m-t-10">
                <h5 class="text-black">Alle verzoeken</h5>
                <h6>hier staan alle verzoeken</h6>
            </div>
            <div class="col-lg-5 text-right">
                <div class="btn-group btn-filter" data-toggle="buttons">
                    <label class="btn btn-info active">
                        <input type="radio" name="status" value="all" checked="checked"> Alle
                    </label>
                    <label class="btn btn-danger">
                        <input type="radio" name="status" value="type1"> Open
                    </label>
                    <label class="btn btn-warning">
                        <input type="radio" name="status" value="type2"> in behandeling
                    </label>
                    <label class="btn btn-success">
                        <input type="radio" name="status" value="type3"> voltooid
                    </label>						
                </div> <!-- end btn group -->
            </div><!-- end col -->
        </div> <!--end row -->
    </div> <!-- end card header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-hover table-filter">
                <thead>
                    <tr>
                        <th colspan="2">Verzoek</th>
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

                    

                    <!-- Modal -->
                    <div class="modal fade" id="modal-request{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-request{{$request->id}}Title" aria-hidden="true">
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

                    <tr data-status="type{{$request->status}}">
                       
                        @switch($request->type)
                        
                        @case(1)
                            <td><span class="f-w-6"><i class="mdi mdi-help mr-2"></i> hulpvraag : </span>
                            <!-- Button trigger modal -->
                            <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                            <i class="mdi mdi-comment-eye"> bekijk</i></td>
                            </button></td>                               
                            <td><a href="{{route('users.show', $request->user->id)}}"><u>{{$request->user->firstname}}</u></a></td>                             
                            <td><a href="{{route('tasks.show', $request->task->id)}}"><u>@isset($request->module->name){{$request->module->name}} @endisset > @isset($request->task){{$request->task->level}} @endisset > @isset($request->task->name){{$request->task->name}} @endisset</u></a></td>
                        @break

                        @case(2)
                            <td><span class="f-w-6"><i class="mdi mdi-school mr-2"></i> eindgesprek :</span>
                            <!-- Button trigger modal -->
                            <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                            <i class="mdi mdi-comment-eye"> bekijk</i></td>
                            </button></td>                               
                            <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                            <td><a href="#">@isset($request->module->name){{$request->module->name}}@endisset eindgesprek</a></td>
                        @break

                        @case(3)
                            <td><span class="f-w-6"><i class="mdi mdi-account mr-2"></i> coachgesprek :</span>
                            <!-- Button trigger modal -->
                            <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                            <i class="mdi mdi-comment-eye"> bekijk</i></td>
                            </button></td>                               
                            <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                            <td><a href="#">coachgesprek</a></td>
                        @break

                        @case(4)
                            <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> workshop : </span>
                            <!-- Button trigger modal -->
                            <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
                            <i class="mdi mdi-comment-eye"> bekijk</i></td>
                            </button></td>                               
                            <td><a href="{{route('users.show', $request->user->id)}}">{{$request->user->firstname}}</a></td>                             
                            <td><a href="#">workshop</a></td>                     
                        @break                                                  

                        @default
                            <td><span class="f-w-6"><i class="mdi mdi-laptop mr-2"></i> ? : </span>
                            <!-- Button trigger modal -->
                            <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-request{{$request->id}}">
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
                        <td>
                            @if($request->status == 1)
                            nog niet toegewezen
                            @else
                                @isset($usernameByID[$request->docent_id])
                                    {{$usernameByID[$request->docent_id]}}
                                @endisset
                            @endif
                        </td>
                        <td>{{\Carbon\Carbon::parse($request->updated_at)->format('d-m-Y |  H:i')}}</td>
                        <td> <!-- een taak kan alleen afgehandeld worden als deze open is -->
                            @if($request->status == 1)
                            <a href="{{route('handleRequest', ['user_request' => $request])}}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="In behandeling nemen"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                            @endif
                            @if($request->status == 2)
                            <a href="{{route('handleRequest', ['user_request'=> $request ])}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Markeren als voltooid"><i class="mdi mdi-checkbox-marked-circle-outline"></i></a>
                            @endif
                        </td>

                    </tr>

                @endforeach
                @endisset
            </tbody>
        </table>
    </div> <!-- end table responsive -->      
    </div> <!-- end card body -->
</div><!-- end card -->