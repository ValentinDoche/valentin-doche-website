<?php

function works(){ ?>
    <body>
        <?=menu()?>
        <div id="page">
            <?=header_html()?>
            <?=spacer(150)?>
            <!-- Works Section -->
            <section id="work" class="bg-light pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading">
                            <div class="header-page">
                                <h2>My Projects</h2>
                                <span></span>
                            </div>
                            <span class="heading-meta-sub">PORTFOLIO</span>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 px-25">
                            <ul class="work-filter">
                                <li class="filter all active" data-filter="*">All</li>
                                <?php
                                foreach (workCategories() as $item){?>
                                    <li class="filter" data-filter=".<?=$item['name']?>" style="text-transform: capitalize"><?=$item['name']?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <div class="work-gallery">
                                <?php
                                foreach (workAll() as $item){
                                    work_gallery($item['title'], explode(",",$item['categories']), $item['slug']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Works Section -->
            <?=footer()?>
            <?=scripts()?>
        </div>
    </body>
    </html>
<?php
}