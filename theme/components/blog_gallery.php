<?php
function blog_gallery($title, $description, $slug, $date, $image="default.jpg"){?>
    <div class="col-md-4">
        <div class="blog">
            <a href="blog/<?=$slug?>"><img class="img-responsive" src="<?=$image?>" alt="" style="height: 240px;object-fit: cover;"></a>
            <div class="blog-text">
                <span class="posted_on"><?=$date?></span>
                <h3><a href="blog/<?=$slug?>" style="text-transform: uppercase"><?=$title?></a></h3>
                <p><?=$description?></p>
            </div>
        </div>
    </div>
<?php
}