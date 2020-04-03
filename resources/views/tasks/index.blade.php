@extends('layouts.main')

@section('content')

<h4>Show All Tasks</h4>

<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>module</th>
                    <th>level</th>
                    <th>url</th>
                    <th>&nbsp;</th>
                </tr>    
            </thead>    
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>
                        {{$task->name}}
                    </td>
                    <td>
                        {{$task->module->name}}
                    </td>
                    <td>
                        {{$task->level}}
                    </td>
                    <td>
                        <a href="{{$task->url}}" target="_blank">link to github</a>
                    </td>
                    <td>
                        <a href="{{route('tasks.show', $task)}}" class="text-success"><i class="far fa-eye"></i></a>
                    </td>
                </tr>

                @endforeach
            
            </tbody>
        </table>    


    </div>
</div>



@endsection