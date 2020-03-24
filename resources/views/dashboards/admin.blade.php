@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col">
        <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
    </div>
</div>
<div class="row mt-4">
    <div class="col">
        <h6>Aantal ingelogde studenten</h6>
        <p>{{$logged_in_users}}</p>
    </div>
</div>
<div class="row mt-4">
    <div class="col">
        <h6>Aantal bekeken opdrachten</h6>
        <p>{{$amount_of_seen_exercises}}</p>
    </div>
    <div class="col">
        <h6>Aantal ingeleverde opdrachten</h6>
        <p>{{$amount_of_exercises_delivered}}</p>
    </div>
    <div class="col">
        <h6>Aantal goedgekeurde opdrachten</h6>
        <p>{{$amount_of_approved_exercises}}</p>
    </div>
</div>
<hr style="width: 100%; height: 1px;" class="bg-danger" />
<h6>Laatste 10 ingeleverde opdrachten</h6>
<div class="row">
    <div class="col">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Opdracht</th>
                    <th>Ingeleverd</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assignments_to_be_appproved as $assignment)
                <tr>
                    <td>
                        <a href="{{route('users.show', $assignment->user)}}">
                            {{$assignment->user->firstname}} {{$assignment->user->lastname}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('exercises.view_code', [$assignment->exercise->id, $assignment->user])}}">
                            {{$assignment->exercise->name}}
                        </a>
                    </td>
                    <td>@php
                        $now = \Carbon\Carbon::now();
                        $now->tz = 'Europe/Amsterdam';

                        $dt = \Carbon\Carbon::parse($assignment->delivery);
                        $dt ->tz = 'Europe/Amsterdam';

                        @endphp
                        {{$dt->locale('nl')->diffForHumans($now, true). ' geleden'}}
                    </td>
                </tr>
                @endforeach()

            </tbody>
        </table>

    </div>
</div>



@endsection