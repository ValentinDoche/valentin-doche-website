<?php
function blog(){ ?>
    <body>
        <?=menu()?>
        <div id="page">
            <?=header_html()?>
            <?=spacer(150)?>
            <!-- Blog Section -->
            <section id="blog" class="bg-section bg-light pt-0">
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
                        <div class="col-md-12">
                            <div class="row">
                                <?php
                                foreach (blogAll(1) as $post){
                                    blog_gallery($post['title'], $post['short_description'], $post['slug'], blogDate($post['slug']), $post['image']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Blog Section -->
            <?=footer()?>
            <?=scripts()?>
        </div>
    </body>
    </html>
<?php
}
