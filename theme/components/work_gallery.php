<?php
function work_gallery($title, $category, $slug, $image="default.jpg"){ ?>
    <div class="col-lg-6 col-md-6 col-sm-12 all <?=implode(" ", $category)?>">
        <div class="work">
            <img class="img-fluid" src="/theme/assets/images/<?=$image?>" alt="">
            <div class="desc">
                <div class="con">
                    <h3><a href="work/<?=$slug?>"><?=$title?></a></h3>
                    <span style="text-transform: capitalize"><?=implode(", ", $category)?></span>
                </div>
            </div>
        </div>
    </div>
<?php
}