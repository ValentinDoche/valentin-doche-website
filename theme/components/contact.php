<?php
function contact(){ ?>
    <!-- Contact Section -->
    <section id="contact" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading">
                    <div class="header-page">
                        <h2>Restons En Contact.</h2>
                        <span></span>
                    </div>
                    <span class="heading-meta-sub">CONTACT</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-push-1">
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marked-alt"></i>Lyon, France</li>
                        <li><i class="fas fa-phone-alt"></i>+33 6-28-15-83-07</li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:contact@valentindoche.com">contact@valentindoche.com</a></li>
                        <li><i class="fas fa-globe"></i><a href="valentindoche.com">valentindoche.com</a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row">
                        <form method="post" action="send_mail.php">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nom" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <input type="submit" value="Envoyé" class="btn btn-primary">
                                </div>
                            </div>
                            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
<?php
}
