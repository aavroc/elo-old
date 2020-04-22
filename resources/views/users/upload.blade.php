@section('title') 
Booster - Form Groups
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
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Upload klas</h5>
                    <h6 class="card-subtitle">Kies de juiste klas en uplod de .csv van deze klas</h6>
                </div>
                <div class="card-body">
                <form action="{{route('users.upload_data')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="file_upload">Upload het bestand</label>
                                <input type="file" name="file_upload" id="file_upload" />
                            </div>
                            <div class="form-group">
                                @foreach($classrooms as $classroom)
                                <label for="classoom_{{$classroom->id}}">{{$classroom->name}}</label>
                                <input type="radio" name="classroom" class="classroom" id="classoom_{{$classroom->id}}"
                                    value="{{$classroom->name}}">

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="submit">Upload!</button>
            </div>
        </div>
    </div>
    <!-- End XP Col -->
    </div> <!-- end row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 