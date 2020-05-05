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
<div class="row m-b-10">
   <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="xp-button ">
                    <a href="{{route('modules.show', ['module'=> $task->module->slug ])}}" class="btn btn-outline-info active" role="button" aria-pressed="true" >
                        <i class="mdi mdi-arrow-left-drop-circle m-r-5 font-20"></i> 
                        <span>terug naar takenoverzicht:  {{$task->module->name}}</span>
                    </a>
         </div>    
    </div>
</div>
    <!-- Write page content code here -->
    <!-- Start XP Row -->     
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-7">
        <div class="card m-b-30 border-dark">
            <div class="card-header bg-dark">
                    <h5 class="card-title text-white">module: {{$task->module->name}} | taak: {{$task->name}}</h5>
                    <h6 class="card-subtitle text-white">Lees de beschrijving van de taak goed door</h6>
                </div>
            <div class="card-header alert-info">
                    <h6 class="card-subtitle text-black m-t-5">De module bevat de volgende tags:
                    <span class="f-w-6">
                    @foreach($tags as $tag)
                        @if($task->tags->find($tag->id) != null) 
                            @if($task->tags->find($tag->id)->id == $tag->id)
                                {{$tag->name}}@if(!$loop->last){{','}} @endif
                            @endif
                        @endif
                    @endforeach
                    </span>
                    </h6>
                </div>
                <div class="card-body readme-txt">
                @isset($readme_content)
                <p>{!!$readme_content!!}</p>
                @endisset
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div><!-- End XP Col -->

        @if(Auth::user()->role < 3)
            <!-- Start XP Col -->
        <div class="col-lg-2">
            <div class="card border-info">
            <div class="card-header bg-info">
                <h5 class="card-title text-white">Tags</h6>
             </div>
                <div class="card-body">
                    <form action="{{route('tasks.tag', $task)}}" method="post">
                        @csrf

                        @foreach($tags as $tag)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{$tag->name}}_{{$tag->id}}" value="{{$tag->id}}"  name="tags[{{$tag->id}}]"
                                @if($task->tags->find($tag->id) != null) @if($task->tags->find($tag->id)->id == $tag->id) checked @endif @endif>
                                <label class="custom-control-label" for="{{$tag->name}}_{{$tag->id}}">{{$tag->name}}</label>
                            </div>
                        @endforeach
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary m-t-20">Opslaan</button>
                        </div>
                    </form>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div><!-- End XP Col -->
        @endif
        
        @if(Auth::user()->role == 3)
         <!-- Start XP Col -->
            <div class="col-lg-4">
            <div class="card border-info">
            <div class="card-header bg-info">
                <h5 class="card-title text-white">Status taak</h6>
                <h6 class="card-subtitle text-white">Ben je klaar? verander de status hieronder</h6>
             </div>
             <div class="card-body">
                <form action="{{route('tasks.mark', ['task'=> $task])}}" method="post">
                        @csrf
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="taak_status" id="busy" value="0" checked>
                            <label class="form-check-label" for="busy">
                              Ik ben nog met deze taak bezig
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="taak_status" id="voldaan" value="1">
                            <label class="form-check-label" for="voldaan">
                              Ik heb deze taak afgerond en de taak is gepushed naar gitHub
                            </label>
                        </div>
                        <div class="extra m-b-10 m-t-20">
                            <textarea name="inputText" id="inputText" cols="10" rows="2" class="form-control" placeholder="Aanvullende opmerkingen? zet ze hier neer"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary m-t-20">Opslaan</button>
                        </div>

                    </form>
                </div>
            </div>            
        </div>
        
        @endif
    </div>
    <!-- End XP Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
    <script>
        let url = $('img[alt="Eindresultaat"]').attr('src');
        console.log(url);
        $('img[alt="Eindresultaat"]').attr('src', url+'?raw=true')
    </script>    
@endsection