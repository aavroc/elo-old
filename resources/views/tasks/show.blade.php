@section('title') 
Booster - Starter
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<div class="xp-breadcrumbbar text-center">
</div>
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Write page content code here -->
    <!-- Start XP Row -->     
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-7">
            <div class="card">
            <div class="card-header bg-white">
                <h5 class="card-title">module: {{$task->module->name}} | taak: {{$task->name}}</h5>
            </div>
            <div class="card-body readme-txt">
            @isset($readme_content)
            <p>{!!$readme_content!!}</p>
            @endisset
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div><!-- End XP Col -->
            <!-- Start XP Col -->
            <div class="col-lg-5">
            <div class="card">
            <div class="card-body">
    <form action="{{route('tasks.tag', $task)}}" method="post">
            @csrf
            <div class="m-b-20">
            <h6>Tags</h6>
            </div>
            @foreach($tags as $tag)
                <div class="custom-control custom-checkbox">
                    @if(Auth::user()->role < 3)
                    <input type="checkbox" class="custom-control-input" id="{{$tag->name}}_{{$tag->id}}" value="{{$tag->id}}"  name="tags[{{$tag->id}}]"
                    @if($task->tags->find($tag->id) != null) @if($task->tags->find($tag->id)->id == $tag->id) checked @endif @endif>
                    <label class="custom-control-label" for="{{$tag->name}}_{{$tag->id}}">{{$tag->name}}</label>
                    @else
                        @if($task->tags->find($tag->id) != null) 
                            @if($task->tags->find($tag->id)->id == $tag->id)
                                <label class="custom-control-label" for="{{$tag->name}}_{{$tag->id}}">{{$tag->name}}</label>
                            @endif
                        @endif
                    @endif
                </div>
            @endforeach
            @if(Auth::user()->role < 3)
            <button type="submit" class="btn btn-success m-t-20">Tag you're it</button>
            @endif
        </form>
        </div> <!-- end card body -->
        </div> <!-- end card -->
    </div><!-- End XP Col -->
    </div>
    <!-- End XP Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection