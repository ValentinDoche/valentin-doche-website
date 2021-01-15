<?php
function work_section(){ ?>
    <!-- Works Section -->
    <section id="work" class="bg-light">
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
                <div class="col-lg-12 px-25 text-center">
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
                        $work = workAll(1);
                        for ($i = 0; $i < 3; $i++){ ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 all
                            <?php
                            foreach (explode(",",$work[$i]['categories']) as $categories){
                                echo cateID((int)$categories)['name'].' ';
                            }?> ">
                                <div class="work">
                                    <img class="img-fluid" src="<?=$work[$i]['image']?>" alt="" style="height: 240px; object-fit: cover">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work/<?=$work[$i]['slug']?>"><?=$work[$i]['title']?></a></h3>
                                            <span style="text-transform: capitalize"><?php
                                                foreach (explode(",",$work[$i]['categories']) as $categories){
                                                    echo cateID((int)$categories)['name'].' ';
                                                }?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Works Section -->
<?php
}