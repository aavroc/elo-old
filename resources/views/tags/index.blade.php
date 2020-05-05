@section('title') 
Toon Tags
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
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
        <!-- End XP Col -->
        <div class="col-lg-6">
        <div class="card m-b-30">
                <div class="card-body">
                    <div class="m-b-20">
                        <h6>Tags</h6>
                    </div>
                @if (session('status'))
                    <div class="xp-alert">
                    <div class="alert alert-danger" role="alert">
                    Tag: {{ session('status') }} is in gebruik en kan niet verwijderd worden
                        </div>
                    </div>
                    @endif     
                    <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>tag naam</th>
                                    <th>bewerk</th>
                                    <th>verwijder</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->name}}</td>
                                    @if(Auth::user()->role == 1)
                                    <td><a href="{{route('tags.edit', $tag)}}" class=""><i class="mdi mdi-pencil"></i> bewerk</a></td>
                                    <td>
                                        <form action="{{route('tags.delete', $tag)}}" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm" value="delete"><i class="mdi mdi-delete-sweep"></i></button>
                                        @method('delete')
                                        @csrf
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- End XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                <div class="m-b-20">
                        <h6>Maak tag</h6>
                </div>
                <form action="{{route('tags.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="tag">Tag naam</label>
                    <input type="text" class="form-control" id="tag" name="name">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <button type="submit" class="btn btn-primary">Maak Tag</button>
                </form>
                </div>
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
<!-- Required Datatable JS -->

@endsection 

