<?php

function index(){ ?>
    <body>
        <?=menu()?>
        <!-- Scroll icon -->
        <div class="scroll-icon">
            <a href="#about" class="smoothscroll">
                <div class="mouse"></div>
            </a>
            <div class="end-top"></div>
        </div>
        <div id="page">

            <?=header_html()?>

            <!-- Banner section -->
            <section id="banner" class="js-fullheight">
                <div class="flexslider js-fullheight">
                    <!-- Social -->
                    <ul class="list-unstyled ml-5 mt-3 position-relative social-links">
                        <li class="mb-3"><a href="https://www.facebook.com/dochevalentin/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="mb-3"><a href="https://twitter.com/valentindoche" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-3"><a href="https://www.instagram.com/valentindoche/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-3"><a href="https://portfolio.valentindoche.com/" target="_blank"><i class="fas fa-camera-retro"></i></a></li>
                    </ul>
                    <!-- Slider -->
                    <ul class="slides">
                        <li style="background: url(/theme/assets/images/slide_1.png) center center / cover;">
                            <div class="overlay-gradient"></div>
                            <div class="container">
                                <div class="col-md-8 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc" style="padding-top: 50px;">
                                            <h2>Je m'appelle Valentin<br>Doche!</h2>
                                            <h3>Je suis
                                                <span id="typed-slide-1"></span>
                                                <span id="typed-strings-slide-1">
                                                    <span>Producteur d’émission esport</span>
                                                    <span>Organisateur d’événement</span>
                                                    <span>Entrepreneur</span>
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- End Banner Section -->
            <!-- About Section -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-entry">

                                <div class="col-md-6">
                                    <div class="header-page-about">
                                        <h2 class="intro-heading">A Propos de Moi</h2>
                                    </div>
                                    <p>Hey, je suis un étudiant en marketing digital et en ingénierie digitale. Depuis
                                        tout petit je suis passionné par l’évènementiel esport, J’ai rejoint différente
                                        petite équipe en tant que manager. En 2019 j’ai rejoint le SGN
                                        (Student Gaming Network) je m’occupe de la régie vidéo de la Grosse Ligue. Un an
                                        après, je maitrise parfaitement des logiciels comme VMIX. Passionné dans
                                        l’informatique, j’ai aussi des compétences en création de site internet,
                                        développement d’api et de logiciel.
                                    </p>
                                    <div class="col-md-6 col-sm-4 no-padding">
                                        <ul>
                                            <li><span>Nom : </span> Valentin DOCHE</li>
                                            <li><span>Travail : </span> Etudiant & Entrepreneur</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-4 no-padding">
                                        <ul>
                                            <li><span>Email : </span> <a href="mailto:contact@valentindoche.com">contact@valentindoche.com</a></li>
                                            <li><span>Telephone : </span> <a href="tel:+33628158307"> +33 6-28-15-83-07</a></li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 no-padding mt-20">
                                        <a class="btn btn " href="CV-VALENTIN-DOCHE.pdf" target="_blank">Télécharger mon CV</a>
                                        <a class="btn btn-primary" href="https://www.malt.fr/profile/valentindoche" rel="nofollow" target="_blank">M’embauchez </a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="post-image" style="background-image: url(/theme/assets/images/profile-pic.webp);"></div>
                                    <div class="display-tc">
                                        <div class="desc">
                                            <h3>Compétences</h3>
                                            <div class="skill-item">
                                                <h5>Webdesign</h5><span>avancé +</span>
                                                <div class="progress" data-percent="80%">
                                                    <div class="progress-bar bar-null" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h5>Marketing</h5><span>Intermédiaire</span>
                                                <div class="progress" data-percent="60%">
                                                    <div class="progress-bar bar-null" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h5>Événementiel Esport</h5><span>Intermediate +</span>
                                                <div class="progress" data-percent="70%">
                                                    <div class="progress-bar bar-null" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End About Section -->

            <!-- Resume Section -->
            <section id="resume" class="bg-dark bg-dots">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading">
                            <div class="header-page">
                                <h2>Curriculum Vitae</h2>
                                <span></span>
                            </div>
                            <span class="heading-meta-sub">CV</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-briefcase"></i></span>Réalisateur Stream</h4>
                                    <span class="meta">11.2019 - XX.XXXX</span>
                                    <h5>Réalisateur Stream</h5>
                                    <p>VMIX, Google Sheet, Gestion d’évènement. </p>
                                </div>
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Escen</h4>
                                    <span class="meta">09.2019 - 07.2024</span>
                                    <h5>Master</h5>
                                    <p>Sujets Principaux : Web marketing, Social Media, Community Management, Event Organizer ...</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Webtech Institute</h4>
                                    <span class="meta">09.2019 - 07.2022</span>
                                    <h5>Bachelor</h5>
                                    <p>Sujets Principaux : HTML, CSS, JS, PHP, MYSQL, PYTHON, ARDUINO, 3D Printing, Chatbot, Linux, Network</p>
                                </div>
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Baccalauréat</h4>
                                    <span class="meta">09.2018 - 07.2019</span>
                                    <h5>Option Scientifique SI</h5>
                                    <p>Baccalauréat S Science de l'ingénieur, mention Bien.
                                        Sujet Principal :  HTML, CSS, JS, 3D PRINT, CAD Software (Solidworks, Fusion 360), Mechanical Static and Dynamic ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Resume Section -->

            <!-- Services Section -->
            <section id="services" class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading">
                            <div class="header-page">
                                <h2>Mes Services</h2>
                                <span></span>
                            </div>
                            <span class="heading-meta-sub">SERVICES</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service">
                                <div class="icon">
                                    <i class="fab fa-codepen"></i>
                                </div>
                                <div class="box-num">
                                    <h2>01</h2>
                                </div>
                                <div class="text">
                                    <h3>WebMaster</h3>
                                    <p>Choix d’une modèle sur ThemeForest, customisation et déploiement de votre futur site internet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service">
                                <div class="icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <div class="box-num">
                                    <h2>02</h2>
                                </div>
                                <div class="text">
                                    <h3>Production d’émission</h3>
                                    <p>Écriture de script, Création des Assets, Production Vidéo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service">
                                <div class="icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="box-num">
                                    <h2>03</h2>
                                </div>
                                <div class="text">
                                    <h3>Gestion d’évènement Esport</h3>
                                    <p>Gestion sur toornaments, création de publication Réseaux sociaux, Coordination des différends équipes. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Resume Section -->

            <!-- Counters Section -->
            <div class="counters" id="counter-animate">
                <div class="narrow-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4 text-center">
                                    <span class="counter js-counter plus" data-from="0" data-to="500" data-speed="2000" data-refresh-interval="50">h</span>
                                    <span class="counter-label">Heure sur VMIX</span>
                                </div>
                                <div class="col-md-4 text-center">
                                    <span class="counter js-counter plus" data-from="0" data-to="5000" data-speed="2000" data-refresh-interval="50">h</span>
                                    <span class="counter-label">Heure de Programmation</span>
                                </div>
                                <div class="col-md-4 text-center">
                                    <span class="counter js-counter" data-from="0" data-to="50" data-speed="2000" data-refresh-interval="50"></span>
                                    <span class="counter-label">Jours de régie Grosse Ligue</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Counters Section -->
            <?=work_section()?>
            <?=blog_section()?>
            <?=contact()?>
            <?=footer()?>
        </div>
        <?=scripts()?>
    </body>
    </html>
<?php
}
