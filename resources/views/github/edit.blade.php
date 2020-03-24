@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ $file->download_url }}" target="_blank">Download from GitHub</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ $file->html_url }}" target="_blank">View file on GitHub</a></li>
            </ol>
        </nav>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="content">File content:</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ $content }}</textarea>
            </div>
            <div class="form-group">
                <label for="commit">Commit message:</label>
                <input type="text" id="commit" class="form-control" value="{{$commitMessage}}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-control" value="Submit" />
            </div>
        </form>
    </div>
</div>
@endsection