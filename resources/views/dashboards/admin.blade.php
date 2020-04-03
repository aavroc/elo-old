@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col">
        <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
    </div>
</div>
<div class="row mt-3 mb-3">
    <div class="col">
        <a class="btn btn-success" href="{{route('retrieve')}}">Retrieve all modules and tasks</a>
        
    </div>
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
               
                {{-- {{dd($data_generated)}} --}}
                {{-- @foreach($data_generated as $slug => $data)
               

                
                    @foreach($data as $user_id => $content)
                        <tr>
                            @if(!isset($content['events']->message))
                                <td>
                                    {{$content['user_data']->firstname}}
                            @endif
                            @foreach($content['events'] as $events)
                                @if(property_exists( $events, 'payload'))
                                    @foreach($events->payload->commits as $commit)
                                        
                                <a href="users/{{$user_id}}/module/{{$slug}}">{{$commit->message}} </a>
                                
                                </td>
                                    @endforeach
                                @endif
                                @php break; @endphp
                            @endforeach
                            
                    @endforeach
                        </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>


@endsection