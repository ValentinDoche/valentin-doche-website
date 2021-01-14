<?php
function footer(){ ?>
    <footer>
        <div id="footer">
            <div class="container">
                <div class="row copy-right">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <!-- Footer logo -->
                        <h2><a class="footer-logo" href="index.html"><img src="/theme/assets/images/logo.webp" height="100"></a></h2>
                        <!-- Social -->
                        <p class="social-icon">
                            <a href="https://www.facebook.com/dochevalentin/"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/valentindoche"><i class="fab fa-twitter-square"></i></a>
                            <a href="https://www.instagram.com/valentindoche/"><i class="fab fa-instagram"></i></a>
                            <a href="https://portfolio.valentindoche.com/"><i class="fas fa-camera-retro"></i></a>
                        </p>
                        <!-- Copyright -->
                        <p><a href="https://valentindoche.com">&copy; Valentin Doche <?=date('Y')?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to top button -->
        <a id="back-to-top" href="#"><i class="fas fa-chevron-up"></i></a>
    </footer>
<?php
}
