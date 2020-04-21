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
        <!-- Start XP Col -->
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-body module-readme">
                @isset($readme_content)
                    <p>{!!$readme_content!!}</p>
                @endisset
                </div>
            </div> 
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                <h4>Taken - {{$module->name}}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>Taak</th>
                                <th>Niveau</th>
                                <th>Check or not to check</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $level = null ; @endphp
                            @foreach($module->tasks->sortBy('name')->sortBy('level')  as $content)

                                <tr class="@if($content->level == 'niveau1') bg-info @elseif($content->level == 'niveau2') bg-success @else bg-primary @endif">
                                    <td><a href="{{route('tasks.show', $content)}}" class="task-list"><i class="fa fa-eye"></i> {{$content->name}}</a></td>
                                    <td>{{$content->level}}</td>
                                    <td>
                                        @php $stats = [['nog mee bezig', 'mdi mdi-reload'], ['voldaan', 'mdi mdi-check']]; @endphp
                                        @if(Auth::user()->role == 3 && is_object($user->tasks()->where('task_id', $content->id)->first()))
                                            <i class="{{$stats[$user->tasks()->where('task_id', $content->id)->first()->pivot->evaluation][1]}}"></i>
                                            {{$stats[$user->tasks()->where('task_id', $content->id)->first()->pivot->evaluation][0]}}
                                        @else
                                            <i class="mdi mdi-play"></i>
                                            Nog niet begonnen
                                        @endif
                                    </td>
                                </tr>

                            @php $level = $content->level; @endphp
                            
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
                </div> <!-- end card -->
            </div><!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 
