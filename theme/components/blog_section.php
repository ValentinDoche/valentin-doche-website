<?php
function blog_section(){ ?>
    <!-- Blog Section -->
    <section id="blog" class="bg-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading">
                    <div class="header-page">
                        <h2>Blog</h2>
                        <span></span>
                    </div>
                    <span class="heading-meta-sub">BLOG</span>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <?php
                $blogs = blogAll(1);
                for ($i = 0; $i < 3; $i++){ ?>
                    <div class="col-md-4">
                        <div class="blog">
                            <a href="/blog/<?=$blogs[$i]['slug']?>"><img class="img-responsive" src="<?=$blogs[$i]['image']?>" alt=""></a>
                            <div class="blog-text">
                                <span class="posted_on"><?=blogDate($blogs[$i]['slug'])?></span>
                                <h3><a href="blog.html"><?=$blogs[$i]['title']?></a></h3>
                                <p><?=$blogs[$i]['short_description']?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
<?php
}
