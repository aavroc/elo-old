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
        <div class="col-lg-7">
            <div class="card m-b-30 border-dark">
            <div class="card-header bg-dark">
                    <h5 class="card-title text-white">Taken - {{$module->name}}s</h5>
                    <h6 class="card-subtitle text-white">klik op de taak waaraan je wilt werken</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th>Taak</th>
                                <th>Onderwerp</th>
                                <th>Check or not to check</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $level = null ; @endphp
                            @foreach($module->tasks->sortBy('name')->sortBy('level')  as $content)

                            @if($level != $content->level)
                            <tr class="alert-info"><td colspan="3" class="text-black f-w-6">{{$content->level}}</td></tr>
                            @endif

                                <tr class="click-row" data-href="{{route('tasks.show', $content)}}">
                                    <td class="f-w-6">{{$content->name}} </td>
                                    <td>
                                    @foreach($content->tags as $tag) 
                                        {{$tag->name}}@if(!$loop->last){{','}} @endif
                                     @endforeach
                                    </td>
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

                            @php $level = $content->level; 
                            
                            @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
                </div> <!-- end card -->
            </div><!-- End XP Col -->
             <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-5">
            <div class="card m-b-30 border-info">
            <div class="card-header bg-info">
                <h5 class="card-title text-white">Over deze module</h5>
                <h6 class="card-subtitle text-white">waar gaat de module {{$module->name}} over</h6>
            </div>
                <div class="card-body module-readme readme-txt">
                @isset($readme_content)
                    <p>{!!$readme_content!!}</p>
                @endisset
                </div>
            </div> 
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

<script type="text/javascript">
$(document).ready(function($) {
    $(".click-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>

@endsection 
