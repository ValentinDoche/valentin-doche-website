<?php
function work_gallery($title, $category, $slug, $image="uploads/default.jpg"){ ?>
    <div class="col-lg-6 col-md-6 col-sm-12 all
    <?php
    foreach ($category as $categories){
        echo cateID((int)$categories)['name'].' ';
    }?> ">
        <div class="work">
            <img class="img-fluid" src="/<?=$image?>" alt="" style="height: 360px;object-fit: cover;">
            <div class="desc">
                <div class="con">
                    <h3><a href="work/<?=$slug?>"><?=$title?></a></h3>
                    <span style="text-transform: capitalize"><?php
                        foreach ($category as $categories){
                            echo cateID((int)$categories)['name'].' ';
                        }?></span>
                </div>
            </div>
        </div>
    </div>
<?php
}