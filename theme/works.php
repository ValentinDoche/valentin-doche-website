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
                                <h2>Mes Projets</h2>
                                <span></span>
                            </div>
                            <span class="heading-meta-sub">PORTFOLIO</span>
                            <p>Impossible de trouver une passion vous trouverez tous mes projets ci-dessous que l'entreprends.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 px-25">
                            <ul class="work-filter">
                                <li class="filter all active" data-filter="*">Tous</li>
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
                                foreach (workAll(1) as $item){
                                    work_gallery($item['title'], explode(",",$item['categories']), $item['slug'], $item['image']);
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