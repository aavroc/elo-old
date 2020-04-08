@section('title') 
Repositories
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
                <h4>{{$module->name}}</h4>
                <h6>gebruiker: {{$user->firstname}} {{$user->prefix}} {{$user->lastname}}</h6>
            </div>
        </div>
        <!-- End XP Col -->
    <!-- Start XP Row -->
    @if(is_array($levels))
        @foreach($levels as $level)
        @if($level->type == 'dir')
        <!-- Start XP Col -->
            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-black mb-0">{{$level->name}}</h5>
                    </div>
                    <div class="card-body">
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
                    </div>
                </div>
            </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-black mb-0">{{$level->name}}</h5>
                    </div>
                    <div class="card-body">
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
                    </div>
                </div>
            </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-black mb-0">{{$level->name}}</h5>
                    </div>
                    <div class="card-body">
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
                </div>
            </div>
        <!-- End XP Col -->
        @endif
        @endforeach
    @else
    <!-- Start XP Col -->
            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-black mb-0">Geen werk gemaakt tot dusver</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- End XP Col -->
    @endif
</div>
<!-- End XP Row -->
<!-- Start XP Row -->    
<div class="row">

</div>
<!-- End XP Row -->
</div>
<!-- End XP Contentbar -->