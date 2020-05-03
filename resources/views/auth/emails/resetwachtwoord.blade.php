@component('mail::message')
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Write page content code here -->
    <!-- Start XP Row -->    
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-center mt-3 mb-5">
                <h4>Reset je mail hier</h4>
                <p>Beste {{$firstname}}</p>
                <p>Je wilt je wachtwoord dus resetten. Dat kan...</p>
                <p><a href="{{url('/password/reset/'.$token )}}" class="btn btn-info">Reset je wachtwoord</a></p>
                <p>Deze link zal verlopen over 60 minuten</p>
                <p>Als je geen wachtwoord reset hebt aangevraagd dan hoef je niks te doen</p>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->  
</div>
<!-- End XP Contentbar -->


@endcomponent