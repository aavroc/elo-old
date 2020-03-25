@extends('layouts.app')

@section('content')
<h3 class="mt-3">{{$module->name}}</h3>

<h4>{{$task}}</h4>
<h6>{{$contents->name}}</h6>

<div class="row">
    <div class="col">
    <a href="{{$contents->html_url}}" target="_blank">Check file op GitHub</a>
    </div>
</div>
<div class="row">
    <div class="col">
        
        <pre>
            <code data-language="php" id="code">{{$code}}</code>
        </pre>

    </div>
    <div class="col">
        
    </div>

</div>


<script src="{{asset('assets/js/rainbow-custom.min.js')}}"></script>
<link href="{{asset('assets/css/code-theme.css')}}" rel="stylesheet" type="text/css">
@endsection