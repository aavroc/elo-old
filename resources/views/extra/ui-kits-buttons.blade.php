@section('title') 
Booster - Buttons
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Buttons</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Buttons</li>
      </ol>                
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
                    <h5 class="card-title text-black">Example Bottons</h5>
                    <h6 class="card-subtitle">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start XP Col -->
        <!-- End XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Outline buttons</h5>
                    <h6 class="card-subtitle">In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any button.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-light">Light</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start XP Col -->
        <!-- End XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Button Tags</h5>
                    <h6 class="card-subtitle">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                        <button class="btn btn-primary" type="submit">Button</button>
                        <input class="btn btn-primary" type="button" value="Input">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <input class="btn btn-primary" type="reset" value="Reset">
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Sizes Buttons</h5>
                    <h6 class="card-subtitle">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                        <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                        <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Block Buttons</h5>
                    <h6 class="card-subtitle">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Block level button</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Active State Button</h5>
                    <h6 class="card-subtitle">Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. <strong>There’s no need to add a class to <code class="highlighter-rouge">&lt;button&gt;</code>s as they use a pseudo-class</strong>. However, you can still force the same active appearance with <code class="highlighter-rouge">.active</code> (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the state programmatically.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>    
                        <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Disable State Buttons</h5>
                    <h6 class="card-subtitle">Make buttons look inactive by adding the <code class="highlighter-rouge">disabled</code> boolean attribute to any <code class="highlighter-rouge">&lt;button&gt;</code> element.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
                        <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Toggle State Buttons</h5>
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">data-toggle="button"</code> to toggle a button’s <code class="highlighter-rouge">active</code> state. If you’re pre-toggling a button, you must manually add the <code class="highlighter-rouge">.active</code> class <strong>and</strong> <code class="highlighter-rouge">aria-pressed="true"</code> to the <code class="highlighter-rouge">&lt;button&gt;</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
                            Single toggle
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Checkbox Button</h5>
                    <h6 class="card-subtitle">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to other elements, such as <code class="highlighter-rouge">&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a <code class="highlighter-rouge">.btn-group</code> containing those modified buttons to enable their toggling behavior via JavaScript and add <code class="highlighter-rouge">.btn-group-toggle</code> to style the <code class="highlighter-rouge">&lt;input&gt;</code>s within your buttons. <strong>Note that you can create single input-powered buttons or groups of them.</strong></h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <div class="btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-secondary active">
                            <input type="checkbox" checked > Checked
                          </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Radio Buttons</h5>
                    <h6 class="card-subtitle">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to other elements, such as <code class="highlighter-rouge">&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a <code class="highlighter-rouge">.btn-group</code> containing those modified buttons to enable their toggling behavior via JavaScript and add <code class="highlighter-rouge">.btn-group-toggle</code> to style the <code class="highlighter-rouge">&lt;input&gt;</code>s within your buttons. <strong>Note that you can create single input-powered buttons or groups of them.</strong></h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-secondary active">
                            <input type="radio" name="options" id="option1" checked> Active
                          </label>
                          <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2"> Radio
                          </label>
                          <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option3"> Radio
                          </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->               
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Button with Icon</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                        <button type="button" class="btn btn-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                        <button type="button" class="btn btn-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                        <button type="button" class="btn btn-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                    </div>
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                        <button type="button" class="btn btn-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                        <button type="button" class="btn btn-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                        <button type="button" class="btn btn-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                        <button type="button" class="btn btn-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                    </div>
                    <div class="xp-button">
                        <button type="button" class="btn btn-primary"><i class="mdi mdi-send"></i> </button>
                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-content-save"></i> </button>
                        <button type="button" class="btn btn-success"><i class="mdi mdi-plus"></i> </button>
                        <button type="button" class="btn btn-warning"><i class="mdi mdi-upload"></i></button>
                        <button type="button" class="btn btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Rounded Button with Icon</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-rounded btn-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                        <button type="button" class="btn btn-rounded btn-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                        <button type="button" class="btn btn-rounded btn-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                        <button type="button" class="btn btn-rounded btn-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                        <button type="button" class="btn btn-rounded btn-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                    </div>
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-rounded btn-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                        <button type="button" class="btn btn-rounded btn-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                    </div>
                    <div class="xp-button">
                        <button type="button" class="btn btn-round btn-primary"><i class="mdi mdi-send"></i> </button>
                        <button type="button" class="btn btn-round btn-secondary"><i class="mdi mdi-content-save"></i> </button>
                        <button type="button" class="btn btn-round btn-success"><i class="mdi mdi-plus"></i> </button>
                        <button type="button" class="btn btn-round btn-warning"><i class="mdi mdi-upload"></i></button>
                        <button type="button" class="btn btn-round btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Button with Icon - Outline</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-outline-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                        <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                        <button type="button" class="btn btn-outline-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                        <button type="button" class="btn btn-outline-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                        <button type="button" class="btn btn-outline-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                    </div>
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-outline-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                        <button type="button" class="btn btn-outline-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                        <button type="button" class="btn btn-outline-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                        <button type="button" class="btn btn-outline-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                        <button type="button" class="btn btn-outline-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                    </div>
                    <div class="xp-button">
                        <button type="button" class="btn btn-outline-primary"><i class="mdi mdi-send"></i> </button>
                        <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-content-save"></i> </button>
                        <button type="button" class="btn btn-outline-success"><i class="mdi mdi-plus"></i> </button>
                        <button type="button" class="btn btn-outline-warning"><i class="mdi mdi-upload"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="mdi mdi-delete-sweep"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Rounded Button with Icon - Outline</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-rounded btn-outline-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                        <button type="button" class="btn btn-rounded btn-outline-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                        <button type="button" class="btn btn-rounded btn-outline-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                        <button type="button" class="btn btn-rounded btn-outline-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                        <button type="button" class="btn btn-rounded btn-outline-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                    </div>
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-rounded btn-outline-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-outline-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-outline-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-outline-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                        <button type="button" class="btn btn-rounded btn-outline-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                    </div>
                    <div class="xp-button">
                        <button type="button" class="btn btn-round btn-outline-primary"><i class="mdi mdi-send"></i> </button>
                        <button type="button" class="btn btn-round btn-outline-secondary"><i class="mdi mdi-content-save"></i> </button>
                        <button type="button" class="btn btn-round btn-outline-success"><i class="mdi mdi-plus"></i> </button>
                        <button type="button" class="btn btn-round btn-outline-warning"><i class="mdi mdi-upload"></i></button>
                        <button type="button" class="btn btn-round btn-outline-danger"><i class="mdi mdi-delete-sweep"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Social Buttons</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-facebook"><i class="mdi mdi-facebook mr-2"></i> Facebook</button>
                        <button type="button" class="btn btn-whatsapp"><i class="mdi mdi-whatsapp mr-2"></i> Whatsapp</button>
                        <button type="button" class="btn btn-googleplus"><i class="mdi mdi-google-plus mr-2"></i> Google+</button>
                        <button type="button" class="btn btn-instagram"><i class="mdi mdi-instagram mr-2"></i> Instagram</button>
                        <button type="button" class="btn btn-youtube"><i class="fa fa-youtube mr-2"></i> Youtube</button>
                        <button type="button" class="btn btn-twitter"><i class="mdi mdi-twitter mr-2"></i> Twitter</button>
                        <button type="button" class="btn btn-linkedin"><i class="mdi mdi-linkedin mr-2"></i> Linkedin</button>
                        <button type="button" class="btn btn-dribbble"><i class="mdi mdi-dribbble mr-2"></i> Dribble</button>
                        <button type="button" class="btn btn-skype"><i class="mdi mdi-skype mr-2"></i> Skype</button>
                        <button type="button" class="btn btn-pinterest"><i class="mdi mdi-pinterest mr-2"></i> Pinterest</button>
                        <button type="button" class="btn btn-vk"><i class="mdi mdi-vk mr-2"></i> VKontakte</button>
                        <button type="button" class="btn btn-tumblr"><i class="mdi mdi-tumblr mr-2"></i> Tumblr</button>
                        <button type="button" class="btn btn-dropbox"><i class="mdi mdi-dropbox mr-2"></i> Dropbox</button>
                        <button type="button" class="btn btn-flickr"><i class="fa fa-flickr mr-2"></i> Flickr</button>
                    </div>
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-facebook">Facebook <i class="mdi mdi-facebook ml-2"></i> </button>
                        <button type="button" class="btn btn-whatsapp">Whatsapp <i class="mdi mdi-whatsapp ml-2"></i> </button>
                        <button type="button" class="btn btn-googleplus">Google+ <i class="mdi mdi-google-plus ml-2"></i> </button>
                        <button type="button" class="btn btn-instagram">Instagram <i class="mdi mdi-instagram ml-2"></i> </button>
                        <button type="button" class="btn btn-youtube">Youtube <i class="fa fa-youtube ml-2"></i> </button>
                        <button type="button" class="btn btn-twitter">Twitter <i class="mdi mdi-twitter ml-2"></i> </button>
                        <button type="button" class="btn btn-linkedin">Linkedin <i class="mdi mdi-linkedin ml-2"></i> </button>
                        <button type="button" class="btn btn-dribbble">Dribble <i class="mdi mdi-dribbble ml-2"></i> </button>
                        <button type="button" class="btn btn-skype">Skype <i class="mdi mdi-skype ml-2"></i> </button>
                        <button type="button" class="btn btn-pinterest">Pinterest <i class="mdi mdi-pinterest ml-2"></i> </button>
                        <button type="button" class="btn btn-vk">VKontakte <i class="mdi mdi-vk ml-2"></i> </button>
                        <button type="button" class="btn btn-tumblr">Tumblr <i class="mdi mdi-tumblr ml-2"></i> </button>
                        <button type="button" class="btn btn-dropbox">Dropbox <i class="mdi mdi-dropbox ml-2"></i> </button>
                        <button type="button" class="btn btn-flickr">Flickr <i class="fa fa-flickr ml-2"></i> </button>
                    </div>
                    <div class="xp-button">
                        <button type="button" class="btn btn-facebook"><i class="mdi mdi-facebook"></i> </button>
                        <button type="button" class="btn btn-whatsapp"><i class="mdi mdi-whatsapp"></i> </button>
                        <button type="button" class="btn btn-googleplus"><i class="mdi mdi-google-plus"></i> </button>
                        <button type="button" class="btn btn-instagram"><i class="mdi mdi-instagram"></i> </button>
                        <button type="button" class="btn btn-youtube"><i class="fa fa-youtube"></i> </button>
                        <button type="button" class="btn btn-twitter"><i class="mdi mdi-twitter"></i> </button>
                        <button type="button" class="btn btn-linkedin"><i class="mdi mdi-linkedin"></i> </button>
                        <button type="button" class="btn btn-dribbble"><i class="mdi mdi-dribbble"></i> </button>
                        <button type="button" class="btn btn-skype"><i class="mdi mdi-skype"></i> </button>
                        <button type="button" class="btn btn-pinterest"><i class="mdi mdi-pinterest"></i> </button>
                        <button type="button" class="btn btn-vk"><i class="mdi mdi-vk"></i> </button>
                        <button type="button" class="btn btn-tumblr"><i class="mdi mdi-tumblr"></i> </button>
                        <button type="button" class="btn btn-dropbox"><i class="mdi mdi-dropbox"></i> </button>
                        <button type="button" class="btn btn-flickr"><i class="fa fa-flickr"></i> </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Social Buttons - Rounded</h5>
                    <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-rounded btn-facebook"><i class="mdi mdi-facebook mr-2"></i> Facebook</button>
                        <button type="button" class="btn btn-rounded btn-whatsapp"><i class="mdi mdi-whatsapp mr-2"></i> Whatsapp</button>
                        <button type="button" class="btn btn-rounded btn-googleplus"><i class="mdi mdi-google-plus mr-2"></i> Google+</button>
                        <button type="button" class="btn btn-rounded btn-instagram"><i class="mdi mdi-instagram mr-2"></i> Instagram</button>
                        <button type="button" class="btn btn-rounded btn-youtube"><i class="fa fa-youtube mr-2"></i> Youtube</button>
                        <button type="button" class="btn btn-rounded btn-twitter"><i class="mdi mdi-twitter mr-2"></i> Twitter</button>
                        <button type="button" class="btn btn-rounded btn-linkedin"><i class="mdi mdi-linkedin mr-2"></i> Linkedin</button>
                        <button type="button" class="btn btn-rounded btn-dribbble"><i class="mdi mdi-dribbble mr-2"></i> Dribble</button>
                        <button type="button" class="btn btn-rounded btn-skype"><i class="mdi mdi-skype mr-2"></i> Skype</button>
                        <button type="button" class="btn btn-rounded btn-pinterest"><i class="mdi mdi-pinterest mr-2"></i> Pinterest</button>
                        <button type="button" class="btn btn-rounded btn-vk"><i class="mdi mdi-vk mr-2"></i> VKontakte</button>
                        <button type="button" class="btn btn-rounded btn-tumblr"><i class="mdi mdi-tumblr mr-2"></i> Tumblr</button>
                        <button type="button" class="btn btn-rounded btn-dropbox"><i class="mdi mdi-dropbox mr-2"></i> Dropbox</button>
                        <button type="button" class="btn btn-rounded btn-flickr"><i class="fa fa-flickr mr-2"></i> Flickr</button>
                    </div>
                    <div class="xp-button m-b-30">
                        <button type="button" class="btn btn-rounded btn-facebook">Facebook <i class="mdi mdi-facebook ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-whatsapp">Whatsapp <i class="mdi mdi-whatsapp ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-googleplus">Google+ <i class="mdi mdi-google-plus ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-instagram">Instagram <i class="mdi mdi-instagram ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-youtube">Youtube <i class="fa fa-youtube ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-twitter">Twitter <i class="mdi mdi-twitter ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-linkedin">Linkedin <i class="mdi mdi-linkedin ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-dribbble">Dribble <i class="mdi mdi-dribbble ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-skype">Skype <i class="mdi mdi-skype ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-pinterest">Pinterest <i class="mdi mdi-pinterest ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-vk">VKontakte <i class="mdi mdi-vk ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-tumblr">Tumblr <i class="mdi mdi-tumblr ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-dropbox">Dropbox <i class="mdi mdi-dropbox ml-2"></i> </button>
                        <button type="button" class="btn btn-rounded btn-flickr">Flickr <i class="fa fa-flickr ml-2"></i> </button>
                    </div>
                    <div class="xp-button">
                        <button type="button" class="btn btn-round btn-facebook"><i class="mdi mdi-facebook"></i> </button>
                        <button type="button" class="btn btn-round btn-whatsapp"><i class="mdi mdi-whatsapp"></i> </button>
                        <button type="button" class="btn btn-round btn-googleplus"><i class="mdi mdi-google-plus"></i> </button>
                        <button type="button" class="btn btn-round btn-instagram"><i class="mdi mdi-instagram"></i> </button>
                        <button type="button" class="btn btn-round btn-youtube"><i class="fa fa-youtube"></i> </button>
                        <button type="button" class="btn btn-round btn-twitter"><i class="mdi mdi-twitter"></i> </button>
                        <button type="button" class="btn btn-round btn-linkedin"><i class="mdi mdi-linkedin"></i> </button>
                        <button type="button" class="btn btn-round btn-dribbble"><i class="mdi mdi-dribbble"></i> </button>
                        <button type="button" class="btn btn-round btn-skype"><i class="mdi mdi-skype"></i> </button>
                        <button type="button" class="btn btn-round btn-pinterest"><i class="mdi mdi-pinterest"></i> </button>
                        <button type="button" class="btn btn-round btn-vk"><i class="mdi mdi-vk"></i> </button>
                        <button type="button" class="btn btn-round btn-tumblr"><i class="mdi mdi-tumblr"></i> </button>
                        <button type="button" class="btn btn-round btn-dropbox"><i class="mdi mdi-dropbox"></i> </button>
                        <button type="button" class="btn btn-round btn-flickr"><i class="fa fa-flickr"></i> </button>
                    </div>
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

@endsection 