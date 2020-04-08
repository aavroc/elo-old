@section('title') 
Booster - Form Editors
@endsection
@extends('layouts.main')
@section('style')
<!-- Summernote CSS -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
 <!-- Code Mirror CSS -->
<link href="{{ asset('assets/plugins/code-mirror/codemirror.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form Editors</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Editors</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->

<!-- Start XP Contentbar -->    
<div class="xp-contentbar">

    <!-- Start XP Row -->
    <div class="row">

        <!-- End XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Tinymce wysihtml5 Editor</h5>
                    <h6 class="card-subtitle">Example of Tinymce wysihtml5 Editor.</h6>
                </div>
                <div class="card-body">
                    <form method="post">
                        <textarea id="xp-tinymce" name="area">Hello, Good Morning Tinymce</textarea>
                    </form>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Summernote Editor</h5>
                    <h6 class="card-subtitle">Example of Summernote Editor.</h6>
                </div>
                <div class="card-body">
                    <div id="xp-summernote">Hello, Good Morning Summernote</div>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">HTML Editor</h5>
                    <h6 class="card-subtitle">Example of HTML Editor.</h6>
                </div>
                <div class="card-body">
                    <textarea id="xp-codemirror-html" name="xp-codemirror-html">&lt;html style="color: green"&gt;
&lt;!-- this is a comment --&gt;
&lt;head&gt;
&lt;title&gt;Mixed HTML Example&lt;/title&gt;
&lt;style&gt;
h1 {font-family: comic sans; color: #f0f;}
div {background: yellow !important;}
body {
max-width: 50em;
margin: 1em 2em 1em 5em;
}
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Mixed HTML Example&lt;/h1&gt;
&lt;script&gt;
function jsFunc(arg1, arg2) {
if (arg1 &amp;&amp; arg2) document.body.innerHTML = "achoo";
}
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</textarea>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">CSS Editor</h5>
                    <h6 class="card-subtitle">Example of CSS Editor.</h6>
                </div>
                <div class="card-body">
                    <textarea id="xp-codemirror-css" name="xp-codemirror-css">
/* Some example CSS */

@import url("something.css");

body {
margin: 0;
padding: 3em 6em;
font-family: tahoma, arial, sans-serif;
color: #000;
}

#navigation a {
font-weight: bold;
text-decoration: none !important;
}

h1 {
font-size: 2.5em;
}

h2 {
font-size: 1.7em;
}

h1:before, h2:before {
content: "::";
}

code {
font-family: courier, monospace;
font-size: 80%;
color: #418A8A;
}
                    </textarea>
                </div>
            </div>
        </div>  
        <!-- End XP Col -->

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Javascript Editor</h5>
                    <h6 class="card-subtitle">Example of Javascript Editor.</h6>
                </div>
                <div class="card-body">
                    <textarea id="xp-codemirror-javascript" name="xp-codemirror-javascript">// Demo code (the actual new parser character stream implementation)

function StringStream(string) {
this.pos = 0;
this.string = string;
}

StringStream.prototype = {
done: function() {return this.pos &gt;= this.string.length;},
peek: function() {return this.string.charAt(this.pos);},
next: function() {
if (this.pos &lt; this.string.length)
return this.string.charAt(this.pos++);
},
eat: function(match) {
var ch = this.string.charAt(this.pos);
if (typeof match == "string") var ok = ch == match;
else var ok = ch &amp;&amp; match.test ? match.test(ch) : match(ch);
if (ok) {this.pos++; return ch;}
},
eatWhile: function(match) {
var start = this.pos;
while (this.eat(match));
if (this.pos &gt; start) return this.string.slice(start, this.pos);
},
backUp: function(n) {this.pos -= n;},
column: function() {return this.pos;},
eatSpace: function() {
var start = this.pos;
while (/\s/.test(this.string.charAt(this.pos))) this.pos++;
return this.pos - start;
},
match: function(pattern, consume, caseInsensitive) {
if (typeof pattern == "string") {
function cased(str) {return caseInsensitive ? str.toLowerCase() : str;}
if (cased(this.string).indexOf(cased(pattern), this.pos) == this.pos) {
if (consume !== false) this.pos += str.length;
return true;
}
}
else {
var match = this.string.slice(this.pos).match(pattern);
if (match &amp;&amp; consume !== false) this.pos += match[0].length;
return match;
}
}
};
                    </textarea>
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
<!-- Wysiwig JS -->
<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Code Mirror JS -->
<script src="{{ asset('assets/plugins/code-mirror/codemirror.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/htmlmixed.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/css.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/javascript.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/xml.js') }}"></script>
<script src="{{ asset('assets/js/init/form-editor-init.js') }}"></script>
@endsection 