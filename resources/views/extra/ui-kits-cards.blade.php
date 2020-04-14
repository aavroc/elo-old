@section('title') 
Booster - Cards
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Cards</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cards</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Start Simple Card -->
            <div class="card m-b-30">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- End Simple Card -->  
        </div>  
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Images card -->
            <div class="card m-b-30">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-2.jpg" alt="Card image cap">  
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Images Card -->  
        </div>
       <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Image Overlay Card -->
            <div class="card m-b-30">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-3.jpg" alt="Card image">
                <div class="card-img-overlay">
                    <h5 class="card-title text-white">Card title</h5>
                    <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-white"><small>Last updated 3 mins ago</small></p>
                </div>
            </div>
            <!-- Image Overlay Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Kitchen Sink Card -->
            <div class="card m-b-30">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-4.jpg" alt="Card image cap">  
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <!-- Kitchen Sink Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Titles, Text, and Links Card -->
            <div class="card m-b-30">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <!-- Titles, Text, and Links Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Header and Footer Card -->
            <div class="card m-b-30">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Header and Footer Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
           <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Header and Footer Card -->    
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Header and Footer Card -->  
            <div class="card text-center m-b-30">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
            <!-- Header and Footer Card -->    
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <div class="card-header">
                    Quote
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
            <!-- Header and Footer Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Sizing Card -->
            <div class="card m-b-30">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Sizing Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Align Center Card -->
            <div class="card text-center m-b-30">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Align Center Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Align Right Card -->
            <div class="card text-right m-b-30">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Align Right Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- List Groups Card -->
            <div class="card m-b-30">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <!-- List Groups Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- List Groups Card -->
            <div class="card m-b-30">
                <div class="card-header">
                    Featured
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <!-- List Groups Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Navbar Tab Card -->
            <div class="card m-b-30">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                      </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Navbar Tab Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Navbar Button Card -->
            <div class="card m-b-30">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                      </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Navbar Button Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Primary Card -->
            <div class="card text-white bg-primary m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Primary Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Secondary Card -->
            <div class="card text-white bg-secondary m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Secondary Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Success Card -->
            <div class="card text-white bg-success m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Success Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Danger Card -->
            <div class="card text-white bg-danger m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Danger Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Warning Card -->
            <div class="card text-white bg-warning m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Warning Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Info Card -->
            <div class="card text-white bg-info m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Info Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Light Card -->
            <div class="card bg-light m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Light Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Dark Card -->
            <div class="card text-white bg-dark m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Dark Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Primary Border Card -->
            <div class="card border-primary m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Primary Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Secondary Border Card -->
            <div class="card border-secondary m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Secondary Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Success Border Card -->
            <div class="card border-success m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Success Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Danger Border Card -->
            <div class="card border-danger m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Danger Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Warning Border Card -->
            <div class="card border-warning m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body text-warning">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Warning Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Info Border Card -->
            <div class="card border-info m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body text-info">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Info Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Light Border Card -->
            <div class="card border-light m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Light Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Dark Border Card -->
            <div class="card border-dark m-b-30">
                <div class="card-header">Header</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Dark Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Primary Border Card -->
            <div class="card border-primary m-b-30">
                <div class="card-header bg-transparent border-primary">Header</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-primary">Footer</div>
            </div>
            <!-- Mixins Primary Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Seconadry Border Card -->
            <div class="card border-secondary m-b-30">
                <div class="card-header bg-transparent border-secondary">Header</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Seconadry card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-secondary">Footer</div>
            </div>
            <!-- Mixins Seconadry Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Success Border Card -->
            <div class="card border-success m-b-30">
                <div class="card-header bg-transparent border-success">Header</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>
            <!-- Mixins Success Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Danger Border Card -->
            <div class="card border-danger m-b-30">
                <div class="card-header bg-transparent border-danger">Header</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-danger">Footer</div>
            </div>
            <!-- Mixins Danger Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Warning Border Card -->
            <div class="card border-warning m-b-30">
                <div class="card-header bg-transparent border-warning">Header</div>
                <div class="card-body text-warning">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-warning">Footer</div>
            </div>
            <!-- Mixins Warning Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Info Border Card -->
            <div class="card border-info m-b-30">
                <div class="card-header bg-transparent border-info">Header</div>
                <div class="card-body text-info">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-info">Footer</div>
            </div>
            <!-- Mixins Info Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Light Border Card -->
            <div class="card border-light m-b-30">
                <div class="card-header bg-transparent border-light">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-light">Footer</div>
            </div>
            <!-- Mixins Light Border Card -->  
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <!-- Mixins Dark Border Card -->
            <div class="card border-dark m-b-30">
                <div class="card-header bg-transparent border-dark">Header</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent border-dark">Footer</div>
            </div>
            <!-- Mixins Dark Border Card -->  
        </div>
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card-group m-b-30">
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-7.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card-group m-b-30">
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-8.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-10.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>                                    
        </div> 
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card-deck m-b-30">
              <div class="card">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-11.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-12.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-13.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>                                    
        </div> 
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card-columns m-b-30">
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-14.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title that wraps to a new line</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">
                        <small class="text-muted">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                      </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-15.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer class="blockquote-footer text-white">
                            <small>
                              Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="assets/images/ui-cards/ui-cards-16.jpg" alt="Card image cap">
                </div>
                <div class="card p-3 text-right">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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