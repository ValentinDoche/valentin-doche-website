<?php
function work($slug){ ?>
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
                            <h2><?=workTitle($slug)?></h2>
                            <br><br><br>
                            <span></span>
                        </div>
                        <span class="heading-meta-sub">PORTFOLIO</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-offset-2 col-lg-8">
                        <div class="row">
                            <?=workContent($slug)?>
                            <p style="text-align: right; font-size: 1em; font-weight: 700">
                                <em style="font-size: 0.8em; font-weight: normal"><?=workDate($slug)?></em> <br>
                                Valentin Doche<br>
                                <img src="/theme/assets/images/signature.png" width="150">
                            </p>
                            <p style="text-align: center">
                                <a class="btn btn-primary" href="/work" style="">Tous Mes Projets</a>
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
