<section class="alazea-portfolio-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            @include('pages.admin.tab-parents.tab-head',array('ref'=>'#tab_articles','icon'=>'fa fa-list','desc'=>'Articles','active'=>'active'))
                            @include('pages.admin.tab-parents.tab-head',array('ref'=>'#tab_papers','icon'=>'fa fa-book','desc'=>'Papers'))
                        </ul>
                        <div class="tab-content">
                            @include('tabs.tab-children.articles.tab_articles',array('tab_id'=>'tab_articles','active'=>'active'))
                            @include('tabs.tab-children.articles.tab_papers',array('tab_id'=>'tab_papers'))
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
</section>
