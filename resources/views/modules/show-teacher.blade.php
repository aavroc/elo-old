@section('title') 
Module: {{$module->name}}
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h4>Modules</h4>
                </div>
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            @foreach($modules as $module_link)
                            <li class="page-item @if($module_link->id == $module->id) active @endif"><a href="{{route('modules.show_teacher', $module_link->slug)}}" class="page-link">{{$module_link->name}}</a></li>
                            @endforeach
                        </ul>
                      </nav>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Start XP Col -->
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h4>{{$module->name}}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-lg">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>Klas</th>
                                <th>Status</th>
                                @isset($module->tasks)
                                @foreach($module->tasks as $task)
                                <th>
                                    <div>
                                        @php
                                            $tasknum = explode('taak',$task->name)[1];
                                            $tasklevl = explode('iveau',$task->level)[1];
                                        @endphp
                                        <a href="#" data-toggle="popover" data-placement="top" title="{{$task->name}}" data-content="@foreach($task->tags as $tag) {{$tag->name}} @endforeach">{{'t'. $tasknum}} <sub>n{{$tasklevl}}</sub></a>
                                    </div>
                                    <div>
                                        <a href="{{route('tasks.show', $task->id)}}"> <i class="mdi mdi-link-variant"></i></a>
                                    </div>
                                </th>
                                @endforeach
                                @endisset
                            </tr>
                        </thead>
                        <tbody>
                            @php $status_words = [ 0 => 'gesloten', 1 => 'bezig', 3 => 'voldaan']; @endphp
                            @isset($module->users)
                            @foreach ($module->users as $user)
                            <tr>
                                <td>
                                <a href="{{route('users.show',$user->id)}}">{{$user->firstname}}</a>
                                </td>
                                <td>
                                    <a href="{{route('users.show',$user->id)}}">{{$user->lastname}}</a>
                                </td>
                                <td>
                                    <a href="{{route('classrooms.show',$user->classroom)}}">{{$user->classroom}}</a>
                                </td>
                                @if(is_object($module->users()->where('user_id', $user->id)->first()))
                                <td>
                                    @php $status = $module->users()->where('user_id', $user->id)->first()->pivot->status; @endphp
                                    @if( $status == 0 )
                                        <span class="text-danger">{{$status_words[$status] }} <i class="mdi mdi-lock"></i></span>
                                    @elseif($status == 1)
                                        <span class="text-warning">{{$status_words[$status] }} <i class="mdi mdi-lock-open"></i></span>
                                    @else
                                        <span class="text-success">{{$status_words[$status] }} <i class="mdi mdi-school"></i></span>
                                        
                                    @endif
                                        
                                </td>
                                @endif
                                {{-- @foreach($user->tasks as $task) --}}
                                @isset($module->tasks)
                                @foreach($module->tasks as $task)
                                    @if(is_object($task->users()->where('user_id', $user->id)->first()))
                                        @if($task->users()->where('task_id', $task->id)->first()->pivot->evaluation == 1)
                                            <td >
                                                <span class="text-success"><i class="mdi mdi-check "></i></span>
                                            </td>
                                        @endif
                                    @else
                                        <td>
                                            &nbsp;
                                        </td>
                                    @endif
                                @endforeach
                                @endisset
                            </tr>
                            @endforeach
                            @endisset
                            </tbody>
                    </table><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
            </div> <!-- end card -->
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 
