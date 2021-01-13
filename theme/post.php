<?php
function post($slug){ ?>
    <body class="line-numbers">
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
                                <h2><?=blogTitle($slug)?></h2>
                                <br><br><br>
                                <span></span>
                            </div>
                            <span class="heading-meta-sub">BLOG</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-offset-2 col-lg-8">
                            <div class="row">
                                <?=blogContent($slug)?>
                                <p style="text-align: right; font-size: 1em; font-weight: 700">
                                    <em style="font-size: 0.8em; font-weight: normal"><?=blogDate($slug)?></em> <br>
                                    Valentin Doche<br>
                                    <img src="/theme/assets/images/signature.png" width="150">
                                </p>
                                <p style="text-align: center">
                                    <a class="btn btn-primary" href="/blog" style="">Return to Blog</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?=footer()?>
            <?=scripts()?>
        </div>
    </body>
    </html>
<?php
}
