@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col">
        <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
    </div>
</div>
<div class="row">
    {{-- @foreach($commits as $module => $student_data)
    <div class="col-4 mt-4">

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                {{$module}}
</div>

@foreach($student_data as $student_name => $commits)
<h4>{{$student_name}}</h4>
<ul class="list-group list-group-flush">
    @foreach($commits as $commit)
    @if(isset($commit->commit->message))
    <li class="list-group-item">{{$commit->commit->message}}</li>
    @endif
    @endforeach
</ul>
@endforeach
</div>
</div>
@endforeach --}}
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    @foreach($modules as $module)
                    <th>
                        {{$module->name}}
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($commits as $module => $student_data)
                @foreach($student_data as $student_name => $commits)

                @foreach($commits as $commit)
                <tr>
                    @if(isset($commit->commit->message))

                    <td>
                        {{$student_name}}: {{$commit->commit->message}}
                    </td>
                    @endif
                </tr>
                @endforeach

                @endforeach

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection