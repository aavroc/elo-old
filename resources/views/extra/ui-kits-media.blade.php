@section('title') 
Booster - Media
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Media</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Media</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black text-black">Example</h5>
                    <h6 class="card-subtitle">Below is an example of a single media object. Only two classes are required—the wrapping <code class="highlighter-rouge">.media</code> and the <code class="highlighter-rouge">.media-body</code> around your content.</h6>
                </div>
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/ui-media/media-image-1.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 text-black font-16">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>                               
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black text-black">Nesting</h5>
                    <h6 class="card-subtitle">Media objects can be infinitely nested, though we suggest you stop at some point. Place nested <code class="highlighter-rouge">.media</code> within the <code class="highlighter-rouge">.media-body</code> of a parent media object.</h6>
                </div>
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/ui-media/media-image-2.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 text-black font-16">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                            <div class="media mt-3">
                                <a class="pr-3" href="#">
                                    <img class="rounded-circle" src="assets/images/ui-media/media-image-3.jpg" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                <h5 class="mt-0 text-black font-16">Media heading</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>                                                             
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black text-black">Alignment</h5>
                    <h6 class="card-subtitle">Media in a media object can be aligned with flexbox utilities to the top (default), middle, or end of your <code class="highlighter-rouge">.media-body</code> content.</h6>
                </div>
                <div class="card-body">
                    <div class="media m-b-30">
                        <img class="align-self-start mr-3 rounded-circle" src="assets/images/ui-media/media-image-4.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 text-black font-16">Top-aligned media</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div> 

                    <div class="media m-b-30">
                        <img class="align-self-center mr-3 rounded-circle" src="assets/images/ui-media/media-image-5.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 text-black font-16">Center-aligned media</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>  
                    
                    <div class="media">
                        <img class="align-self-end mr-3 rounded-circle" src="assets/images/ui-media/media-image-6.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 text-black font-16">Bottom-aligned media</h5>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>   
                                                                                                          
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black text-black">Order</h5>
                    <h6 class="card-subtitle">Change the order of content in media objects by modifying the HTML itself, or by adding some custom flexbox CSS to set the <code class="highlighter-rouge">order</code> property (to an integer of your choosing).</h6>
                </div>
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1 text-black font-16">Media object</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                        <img class="ml-3 rounded-circle" src="assets/images/ui-media/media-image-7.jpg" alt="Generic placeholder image">
                    </div>                                                              
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black text-black">Media list</h5>
                    <h6 class="card-subtitle">Because the media object has so few structural requirements, you can also use these classes on list HTML elements. On your <code class="highlighter-rouge">&lt;ul&gt;</code> or <code class="highlighter-rouge">&lt;ol&gt;</code>, add the <code class="highlighter-rouge">.list-unstyled</code> to remove any browser default list styles, and then apply <code class="highlighter-rouge">.media</code> to your <code class="highlighter-rouge">&lt;li&gt;</code>s. As always, use spacing utilities wherever needed to fine tune.</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                      <li class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/ui-media/media-image-8.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0 mb-1 text-black font-16">List-based media object</h5>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                      </li>
                      <li class="media my-4">
                        <img class="mr-3 rounded-circle" src="assets/images/ui-media/media-image-9.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0 mb-1 text-black font-16">List-based media object</h5>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/ui-media/media-image-10.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0 mb-1 text-black font-16">List-based media object</h5>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                      </li>
                    </ul>                                                                                              
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