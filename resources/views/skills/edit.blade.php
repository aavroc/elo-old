@section('title') 
Wijzig Vaardigheid
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title"></h4>
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Wijzig Vaardigheid</h5>
                </div>
                <div class="card-body">
                    @error('vaardigheid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <form action="{{route('skills.update', $skill)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="vaardigheid">Vaardigheid</label>
                            <input type="text" class="form-control" id="vaardigheid" name="vaardigheid" value="{{old('skill', $skill->name)}}">
                        </div>
                        <hr>
                        <div class="form-group">
                            @foreach($indicators as $key => $indicator)
                                <label for="ind_{{$key+1}}">Indicator {{$key+1}}</label>
                                <input type="text" name="ind[{{$indicator->id}}]" id="ind_{{$key+1}}" class="form-control" value="{{$indicator->name}}">
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-warning">Update Vaardigheid</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection