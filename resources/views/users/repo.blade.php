@extends('layouts.app')

@section('content')
<div class="container-fluid">


    <div class="row">
        <div class="col">
            <h1>{{$module->name}}</h1>
            <h4>{{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</h4>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row mt-3">
                
                @if(is_array($levels))
                @foreach($levels as $level)
                @if($level->type == 'dir')
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {{$level->name}}
                    </div>
                    @if($level->name == 'niveau1')
                    <ul class="list-group list-group-flush">
                        @foreach($tasks_level_1 as $task)
                        <li class="list-group-item">
                            <a href="{{route('users.task', ['user'=> $user, 'module'=> $module, 'path'=> $task->path])}}"
                                class="card-link">{{$task->name}}</a>
                            @php echo Str::limit($task->sha, $limit = 7, $end = '...') @endphp
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    @if($level->name == 'niveau2')
                    <ul class="list-group list-group-flush">
                        @foreach($tasks_level_2 as $task)

                        <li class="list-group-item">
                            <a href="{{route('users.task', ['user'=> $user, 'module'=> $module, 'path'=> $task->path])}}"
                                class="card-link">{{$task->name}}</a>
                            @php echo Str::limit($task->sha, $limit = 7, $end = '...') @endphp
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    @if($level->name == 'niveau3')
                    <ul class="list-group list-group-flush">
                        @foreach($tasks_level_3 as $task)

                        <li class="list-group-item">
                            <a href="{{route('users.task', ['user'=> $user, 'module'=> $module, 'path'=> $task->path])}}"
                                class="card-link">{{$task->name}}</a>
                            @php echo Str::limit($task->sha, $limit = 7, $end = '...') @endphp

                        </li>

                        @endforeach
                    </ul>
                    @endif

                </div>
                @endif
                @endforeach
                @else
                Geen werk gemaakt tot dusver
                @endif
            </div>
        </div>
        <div class="col">
            <div class="row mt-3">
                <div class="col-4">
                    <h4>Laatste commits deze module</h4>
                    @if(is_array($commits))
                    <ul class="list-group">
                        @foreach($commits as $commit)
                        <li class="list-group-item">
                            {{-- {{dd($commit)}} --}}
                            <a href="{{$commit->html_url}}" target="_blank">{{$commit->commit->message}} |
                                @php echo Str::limit($commit->sha, $limit = 7, $end = '...') @endphp
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p>There are no commits made by this user</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>




{{-- <div class="row">
    <div class="col">
        <table>
            <thead>
                <tr>
                    @for($x = 1; $x <=52; $x++)
                    <th>
                        ma
                    </th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($commit_activity as $week)
                    @foreach($week->days as $activity)
                        <td>{{$activity}}</td> @endforeach @endforeach </tr>
</tbody>
</table>
</div>
</div> --}}
@endsection