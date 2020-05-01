@section('title') 
Toon Tags
@endsection
@extends('layouts.main')
@section('style')
@endsection 
@section('rightbar-content')


<h4>Edit Tag</h4>
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- End XP Col -->
        <div class="col-lg-6">
        <div class="card m-b-30">
                <div class="card-body">
                    <div class="m-b-20">
                        <h6>Edit tag</h6>
                    </div>
        <form action="{{route('tags.update', $tag)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tag">Tag naam</label>
            <input type="text" class="form-control" id="tag" name="tag" value="{{old('tag', $tag->name)}}">
                
              </div>
            <button type="submit" class="btn btn-primary">Update Tag</button>
        </form>
        </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
</div>
@endsection

@section('script')
@endsection 