@section('title') 
Booster - Form Inputs
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form Inputs</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Inputs</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <h5 class="text-dark font-18 mb-3 mt-3">Input types</h5>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Text</h5>
                    <h6 class="card-subtitle">Usage <code>type="text"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputText" id="inputText" placeholder="Enter Text" >
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Email</h5>
                    <h6 class="card-subtitle">Usage <code>type="email"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="booster@email.com">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Password</h5>
                    <h6 class="card-subtitle">Usage <code>type="password"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Number</h5>
                    <h6 class="card-subtitle">Usage <code>type="number"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="number" class="form-control" name="inputNumber" id="inputNumber" value="1">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Search</h5>
                    <h6 class="card-subtitle">Usage <code>type="search"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="Search" class="form-control" name="inputSearch" id="inputSearch" placeholder="Type to Search">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">URL</h5>
                    <h6 class="card-subtitle">Usage <code>type="url"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="url" class="form-control" name="inputUrl" id="inputUrl" placeholder="https://websbooster.com">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Tel</h5>
                    <h6 class="card-subtitle">Usage <code>type="tel"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="tel" class="form-control" name="inputTel" id="inputTel" placeholder="+1 9876543210">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">File</h5>
                    <h6 class="card-subtitle">Usage <code>type="file"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="file" class="form-control" name="inputFile" id="inputFile">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Date & Time</h5>
                    <h6 class="card-subtitle">Usage <code>type="datetime-local"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="datetime-local" class="form-control" name="inputDateTime" id="inputDateTime">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Date</h5>
                    <h6 class="card-subtitle">Usage <code>type="date"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="date" class="form-control" name="inputDate" id="inputDate">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Time</h5>
                    <h6 class="card-subtitle">Usage <code>type="time"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="time" class="form-control" name="inputTime" id="inputTime">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Week</h5>
                    <h6 class="card-subtitle">Usage <code>type="week"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="week" class="form-control" name="inputWeek" id="inputWeek">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Month</h5>
                    <h6 class="card-subtitle">Usage <code>type="month"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="month" class="form-control" name="inputMonth" id="inputMonth">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Range</h5>
                    <h6 class="card-subtitle">Usage <code>type="range"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="range" class="form-control" name="inputRange" id="inputRange" min="0" max="100">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Color</h5>
                    <h6 class="card-subtitle">Usage <code>type="color"</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="color" class="form-control" name="inputColor" id="inputColor" value="#4c7cf3">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <h5 class="text-dark font-18 mb-3 mt-3">Input type Properties</h5>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Placeholder text</h5>
                    <h6 class="card-subtitle">Usage <code>placeholder="....."</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputPlaceholder" id="inputPlaceholder" placeholder="Placeholder Text">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col --> 
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Readonly</h5>
                    <h6 class="card-subtitle">Usage <code>readonly</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputReadonly" id="inputReadonly" placeholder="Readonly text" readonly>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Disabled</h5>
                    <h6 class="card-subtitle">Usage <code>disabled</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputDisabled" id="inputDisabled" placeholder="Disabled text" disabled>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Static Value</h5>
                    <h6 class="card-subtitle">Usage <code>.form-control-plaintext</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control-plaintext" name="inputStaticValue" id="inputStaticValue" value="example@email.com" readonly>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Default Value</h5>
                    <h6 class="card-subtitle">Usage <code>value="....."</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputDefaultValue" id="inputDefaultValue" value="Default Value">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Min Value</h5>
                    <h6 class="card-subtitle">Usage <code>minLength="....."</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputMinValue" id="inputMinValue" minLength="5" placeholder="Min Value">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Max Value</h5>
                    <h6 class="card-subtitle">Usage <code>maxLength="....."</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputMaxValue" id="inputMaxValue" maxLength="5" placeholder="Max Value">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Helper text</h5>
                    <h6 class="card-subtitle">Usage <code>.form-text</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputHelperText" id="inputHelperText" placeholder="Helper text">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                              Helper Text
                            </small>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Textarea</h5>
                    <h6 class="card-subtitle">Usage <code>textarea</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control" name="inputTextarea" id="inputTextarea" rows="3" placeholder="Textarea text"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <h5 class="text-dark font-18 mb-3 mt-3">Select</h5>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Default Select</h5>
                    <h6 class="card-subtitle">Usage <code>select</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select class="form-control" id="formControlSelect">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Multiple Select</h5>
                    <h6 class="card-subtitle">Usage <code>multiple</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select multiple class="form-control" id="formControlSelectMultiple">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <h5 class="text-dark font-18 mb-3 mt-3">Input type with different sizes</h5>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Default Size</h5>
                    <h6 class="card-subtitle">Usage <code>.form-control-md</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputDefaultSize" id="inputDefaultSize" placeholder="Default input">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Small Size</h5>
                    <h6 class="card-subtitle">Usage <code>.form-control-sm</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="inputSmallSize" id="inputSmallSize" placeholder="Small input">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Large Size</h5>
                    <h6 class="card-subtitle">Usage <code>.form-control-lg</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="inputLargeSize" id="inputLargeSize" placeholder="Large input">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Grid Sizes</h5>
                    <h6 class="card-subtitle">Usage <code>.col-sm-4</code></h6>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Grid Sizes</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder=".col-sm-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 offset-sm-2">
                            <input type="text" class="form-control" placeholder=".col-sm-6">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-2">
                            <input type="text" class="form-control" placeholder=".col-sm-8">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="text" class="form-control" placeholder=".col-sm-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <h5 class="text-dark font-18 mb-3 mt-3">Custom Range</h5>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Default Range</h5>
                    <h6 class="card-subtitle">Create custom <code class="highlighter-rouge">&lt;input type="range"&gt;</code> controls with <code class="highlighter-rouge">.custom-range</code>. The track (the background) and thumb (the value) are both styled to appear the same across browsers. As only IE and Firefox support “filling” their track from the left or right of the thumb as a means to visually indicate progress, we do not currently support it.</h6>
                </div>
                <div class="card-body">
                    <input type="range" class="custom-range" id="customRange1">
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Min Max Range</h5>
                    <h6 class="card-subtitle">Range inputs have implicit values for <code class="highlighter-rouge">min</code> and <code class="highlighter-rouge">max</code>—<code class="highlighter-rouge">0</code> and <code class="highlighter-rouge">100</code>, respectively. You may specify new values for those using the <code class="highlighter-rouge">min</code> and <code class="highlighter-rouge">max</code> attributes.</h6>
                </div>
                <div class="card-body">
                    <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Steps Range</h5>
                    <h6 class="card-subtitle">By default, range inputs “snap” to integer values. To change this, you can specify a <code class="highlighter-rouge">step</code> value. In the example below, we double the number of steps by using <code class="highlighter-rouge">step="0.5"</code>.</h6>
                </div>
                <div class="card-body">
                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <h5 class="text-dark font-18 mb-3 mt-3">Checkboxes</h5>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Default Checkbox</h5>
                    <h6 class="card-subtitle">By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code class="highlighter-rouge">.form-check</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                      <label class="form-check-label" for="defaultCheck2">
                        Disabled checkbox
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Custom Checkbox</h5>
                    <h6 class="card-subtitle">Each checkbox and radio is wrapped in a <code class="highlighter-rouge">&lt;div&gt;</code> with a sibling <code class="highlighter-rouge">&lt;span&gt;</code> to create our custom control and a <code class="highlighter-rouge">&lt;label&gt;</code> for the accompanying text. Structurally, this is the same approach as our default <code class="highlighter-rouge">.form-check</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                        <label class="custom-control-label" for="customCheckDisabled">Disable custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label v-a-m" for="customCheck2"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Inline Checkbox</h5>
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.form-check-inline</code> to any <code class="highlighter-rouge">.form-check</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                      <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Custom Inline Checkbox</h5>
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.custom-control-inline</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customCheckboxInline1">1</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="customCheckboxInline2" name="customCheckboxInline2" class="custom-control-input">
                      <label class="custom-control-label" for="customCheckboxInline2">2</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="customCheckboxInline3" name="customCheckboxInline3" class="custom-control-input" disabled>
                      <label class="custom-control-label" for="customCheckboxInline3">3 (disabled)</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <h5 class="text-dark font-18 mb-3 mt-3">Radios</h5>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Default Radios</h5>
                    <h6 class="card-subtitle">By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code class="highlighter-rouge">.form-check</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Default radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="exampleRadios2">
                        Second default radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                      <label class="form-check-label" for="exampleRadios3">
                        Disabled radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" aria-label="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Custom Radios</h5>
                    <h6 class="card-subtitle">Each checkbox and radio is wrapped in a <code class="highlighter-rouge">&lt;div&gt;</code> with a sibling <code class="highlighter-rouge">&lt;span&gt;</code> to create our custom control and a <code class="highlighter-rouge">&lt;label&gt;</code> for the accompanying text. Structurally, this is the same approach as our default <code class="highlighter-rouge">.form-check</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled>
                        <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label v-a-m" for="customRadio4"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Inline Radios</h5>
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.form-check-inline</code> to any <code class="highlighter-rouge">.form-check</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                      <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->        
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Custom Inline Radios</h5>
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.custom-control-inline</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">1</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">2</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input" disabled>
                        <label class="custom-control-label" for="customRadioInline3">3</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>  
    <!-- End Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 