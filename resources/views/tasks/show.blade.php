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
        <div class="col-lg-6">
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
        <div class="col-lg-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('tasks.tag', $task)}}" method="post">
                        @csrf
                        <div class="m-b-20">
                            <h6>Tags</h6>
                        </div>
                        @foreach($tags as $tag)
                            @if(Auth::user()->role < 3)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{$tag->name}}_{{$tag->id}}" value="{{$tag->id}}"  name="tags[{{$tag->id}}]"
                                @if($task->tags->find($tag->id) != null) @if($task->tags->find($tag->id)->id == $tag->id) checked @endif @endif>
                                <label class="custom-control-label" for="{{$tag->name}}_{{$tag->id}}">{{$tag->name}}</label>
                            </div>
                                @else
                                <ul class="list-group">
                                    @if($task->tags->find($tag->id) != null) 
                                        @if($task->tags->find($tag->id)->id == $tag->id)
                                           <li class="list-group-item text-success m-2" for="{{$tag->name}}_{{$tag->id}}">{{$tag->name}}</li>
                                        @endif
                                    @endif
                                </ul>
                                @endif
                        @endforeach
                        @if(Auth::user()->role < 3)
                        <button type="submit" class="btn btn-success m-t-20">Tag you're it</button>
                        @endif
                    </form>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div><!-- End XP Col -->
        <div class="col-lg-4">
            @if(Auth::user()->role == 3)
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Status taak</h5>
                    <h6 class="card-subtitle">Ben je klaar? <code>verander de status hieronder</code></h6>
                </div>
                <div class="card-body">
                <form action="{{route('tasks.mark', ['task'=> $task, 'student' => Auth::user()])}}" method="post">
                        @csrf
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="taak_status" id="busy" value="0" checked>
                            <label class="form-check-label" for="busy">
                              Nog mee bezig
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="taak_status" id="voldaan" value="1">
                            <label class="form-check-label" for="voldaan">
                              Markeer als voldaan
                            </label>
                        </div>
                        <div class="form-group  mt-3">
                            <input type="text" class="form-control" name="inputText" id="inputText" placeholder="Opmerkingen kun je hier neerzetten" >
                        </div>
                        <button type="submit" class="btn btn-success m-t-20">Markeer als voldaan</button>
                    </form>
                </div>
            </div>
            @endif
        </div>

    </div>
    <!-- End XP Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection