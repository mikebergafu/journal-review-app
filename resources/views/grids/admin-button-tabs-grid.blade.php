<section class="alazea-portfolio-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            @include('pages.admin.tab-parents.tab-head',array('ref'=>'#tab_banners','icon'=>'fa fa-flag','desc'=>'Site Banners'))
                            @include('pages.admin.tab-parents.tab-head',array('ref'=>'#tab_about_us','icon'=>'fa fa-briefcase','desc'=>'About Us','active'=>'active'))
                            @include('pages.admin.tab-parents.tab-head',array('ref'=>'#tab_addresses','icon'=>'fa fa-address-card','desc'=>'Addresses'))
                            @include('pages.admin.tab-parents.tab-head',array('ref'=>'#tab_contact_us','icon'=>'fa fa-location-arrow','desc'=>'Contact'))
                            @include('pages.admin.tab-parents.tab-head',array('ref'=>'#tab_events','icon'=>'fa fa-meetups','desc'=>'Events'))
                        </ul>
                        <div class="tab-content">
                            @include('pages.admin.tab-children.tab_banners')
                            @include('pages.admin.tab-children.tab_about-us',array('active'=>'active'))
                            @include('pages.admin.tab-children.tab_addresses')
                            @include('pages.admin.tab-children.tab_contact')
                            @include('pages.admin.tab-children.tab_events')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
</section>

@include('modals.create-banner-modal')
