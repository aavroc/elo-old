<div class="card  m-b-30">
    <div class="card-header bg-white">
        <div class="row">
            <div class="col-lg-7 m-t-10">
                <h5 class="text-black">Taken overzicht</h5>
                <h6>Alle verzoeken omtrent taken</h6>
            </div>
                {{-- <div class="col-lg-5 text-right">
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
                </div><!-- end col --> --}}
        </div> <!--end row -->
    </div> <!-- end card header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-hover table-filter"> 
                <div class="card-header bg-white">
                    <thead>
                        <tr>
                            <th>
                                Module
                            </th>
                            <th>
                                Level
                            </th>
                            <th>
                                Taak
                            </th>
                            <th>
                                Aantal aanvragen
                            </th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                </div>                                        
                <tbody>
                    @isset($taken_requests)
                    @foreach($taken_requests->unique('task_id') as $task_request)
                        <tr class="email-unread">
                            <td><a href="#">{{$task_request->module->name}}</a></td> 
                            <td><a href="#">{{$task_request->task->level}}</a></td> 
                            <td><a href="#">{{$task_request->task->name}}</a></td> 
                            <td><a href="#">{{$counted_tasks[$task_request->task_id]}}</a></td> 
                            <td>
                                <a href="#" class="btn btn-info">Afhandelen</a>
                            </td>
                        </tr>
                    @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div><!-- end card -->
</div><!-- End XP Col -->