@section('title') 
Dashboard
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
    <!-- Write page content code here -->
    <!-- Start XP Row -->    
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-left mt-3 mb-5">
                <h4>Welkom {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->               
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Get started!</h5>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                    <a href="{{route('retrieve')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Retrieve all modules and tasks</a>
                    <a href="{{route('users.select_file')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Upload Users</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->               
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Klassen</h5>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                    <a href="{{URL::to('/classrooms/LCTAOO9A')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9A</a>
                    <a href="{{URL::to('/classrooms/LCTAOO9C')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9C</a>
                    <a href="{{URL::to('/classrooms/LCTAOO9D')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9D</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
         <!-- Start XP Col -->
         <div class="col-md-8 col-lg-8 col-xl-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Modules</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified mb-3" id="defaultTabJustified" role="tablist">

                    @foreach($modules as $module)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" id="{{$module->slug}}-tab-justified" data-toggle="tab" href="#{{$module->slug}}-justified" role="tab" aria-controls="{{$module->slug}}" @if ($loop->first) aria-selected="true" @endif>
                    {{$module->name}}</a>
                      </li>

                      @endforeach
                    </ul>
                    
                    <div class="tab-content" id="defaultTabJustifiedContent">
                    @foreach($modules as $module)
                      <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{$module->slug}}-justified" role="tabpanel" aria-labelledby="{{$module->slug}}-tab-justified">
                      <h5>{{$module->name}}</h5>
                      <p>content</p>
                      <!-- @David, deze looped nu door alle modules heen, ik heb tabs gemaakt dus per module, moet dus nog ingebouwd worden dat hij het per module laat zien en misschien moet het ook wel gewoon een tabel worden.. -->
                    {{-- {{dd($data_generated)}} --}}
                    {{-- @foreach($data_generated as $slug => $data)

                        @foreach($data as $user_id => $content)
                            @if(!isset($content['events']->message))
                            <p>
                                    {{$content['user_data']->firstname}}
                            @endif

                            @foreach($content['events'] as $events)
                                @if(property_exists( $events, 'payload'))
                                    @foreach($events->payload->commits as $commit)
                                        
                                <a href="users/{{$user_id}}/module/{{$slug}}">{{$commit->message}} </a>
                                
                            </p>
                                    @endforeach
                                @endif
                                @php break; @endphp
                            @endforeach
                            
                        @endforeach
                    @endforeach --}}
                      </div>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">To do Lists</h5>
                </div>
                <div class="card-body">
                    <div class="xp-to-do-list">
                        <ul id="list-group" class="list-group list-group-flush">
                        <!-- @David, hiervoor zouden we een simpele tabel in de database kunnen maken, of nog even weglaten back-end toevoegen -->
                            <li class="list-group-item">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox" id="customCheckItem1" checked="checked">
                                <label class="custom-control-label f-w-4" for="customCheckItem1">Creating creative widgets</label>
                                <a class="xp-to-do-list-remove"><i class="mdi mdi-close"></i></a>
                                </div>
                            </li>
                            <!-- einde back-end toevoegen -->
                        </ul>
                        <form class="add-items">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?" aria-label="What do you need to do today?" aria-describedby="button-addon-to-do-list">
                                <div class="input-group-append">
                                    <button class="btn btn-primary add" id="button-addon-to-do-list" type="submit">Add to List</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col --> 
    </div>
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 