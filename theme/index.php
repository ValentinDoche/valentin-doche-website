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
                        <li class="mb-3"><a href="https://www.facebook.com/dochevalentin/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="mb-3"><a href="https://twitter.com/valentindoche"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-3"><a href="https://www.instagram.com/valentindoche/"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-3"><a href="https://portfolio.valentindoche.com/"><i class="fas fa-camera-retro"></i></a></li>
                    </ul>
                    <!-- Slider -->
                    <ul class="slides">
                        <li style="background: url(/theme/assets/images/slide_1.png) center center / cover;">
                            <div class="overlay-gradient"></div>
                            <div class="container">
                                <div class="col-md-8 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc" style="padding-top: 50px;">
                                            <h2>I'm Valentin<br>Doche!</h2>
                                            <h3>I am
                                                <span id="typed-slide-1"></span>
                                                <span id="typed-strings-slide-1">
                                                    <span>a WebDesigner</span>
                                                    <span>a Broadcaster Producer</span>
                                                    <span>an Event organizer</span>
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
                                        <h2 class="intro-heading">About Me</h2>
                                    </div>
                                    <p>I am a student in Marketing and Computer Science. Web-Developer since I'm 14 years old,
                                        I carry out missions of Webmaster, Web-developer or Web-designer. Marketing came later
                                        with the desire to learn the art of Selling specialized in Digital. I am more your
                                        digital companion than your subcontractor. Volunteer at "La Loutre française" and SGN
                                        I am respectively CTO and stream director, Web-designer.</p>
                                    <div class="col-md-6 col-sm-4 no-padding">
                                        <ul>
                                            <li><span>Name : </span> Valentin DOCHE</li>
                                            <li><span>Job : </span> Student & Freelancer</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-4 no-padding">
                                        <ul>
                                            <li><span>Email : </span> <a href="mailto:contact@valentindoche.com">contact@valentindoche.com</a></li>
                                            <li><span>Phone : </span> <a href="tel:+33628158307"> +33 628-158-307</a></li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 no-padding mt-20">
                                        <a class="btn btn " href="CV-VALENTIN-DOCHE.pdf" target="_blank">Download CV</a>
                                        <a class="btn btn-primary" href="https://www.malt.fr/profile/valentindoche" rel="nofollow" target="_blank">Hire Me</a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="post-image" style="background-image: url(/theme/assets/images/profile-pic.webp);"></div>
                                    <div class="display-tc">
                                        <div class="desc">
                                            <h3>My skill</h3>
                                            <div class="skill-item">
                                                <h5>HTML CSS JS</h5><span>advanced</span>
                                                <div class="progress" data-percent="80%">
                                                    <div class="progress-bar bar-null" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h5>Marketing</h5><span>beginner +</span>
                                                <div class="progress" data-percent="30%">
                                                    <div class="progress-bar bar-null" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h5>Wordpress</h5><span>Intermediate +</span>
                                                <div class="progress" data-percent="60%">
                                                    <div class="progress-bar bar-null" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
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
                                <h2>My Resume</h2>
                                <span></span>
                            </div>
                            <span class="heading-meta-sub">RESUME</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-briefcase"></i></span>La Loutre Française</h4>
                                    <span class="meta">01.2020 - XX.XXXX</span>
                                    <h5>CTO</h5>
                                    <p>Webmaster, Domain Name, G-Suite, Mailing List, DNS Zone, Wordpress, Event Organizer</p>
                                </div>
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Escen</h4>
                                    <span class="meta">09.2019 - 07.2024</span>
                                    <h5>Master Degree</h5>
                                    <p>Main Subject : Web marketing, Social Media, Community Management, Event Organizer ...</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Webtech Institute</h4>
                                    <span class="meta">09.2019 - 07.2022</span>
                                    <h5>Bachelor Degree</h5>
                                    <p>Main Subject : HTML, CSS, JS, PHP, MYSQL, PYTHON, ARDUINO, 3D Printing, Chatbot, Linux, Network</p>
                                </div>
                                <div class="item mb-40">
                                    <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>high school diploma</h4>
                                    <span class="meta">09.2018 - 07.2019</span>
                                    <h5>Scientific option</h5>
                                    <p>High School diploma, scientific option, equivalent to A Levels with honours.
                                        Main Subject :  HTML, CSS, JS, 3D PRINT, CAD Software (Solidworks, Fusion 360), Mechanical Static and Dynamic ...</p>
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
                                <h2>My Services</h2>
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
                                    <p>Template on ThemeForest and customization for your brand (Wordpress or HTML)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service">
                                <div class="icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <div class="box-num">
                                    <h2>03</h2>
                                </div>
                                <div class="text">
                                    <h3>Web Design</h3>
                                    <p>Design of your future Website on Adobe XD (Wireframe, Prototype)</p>
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
                                    <h3>Web Development</h3>
                                    <p>Your future website from scratch (HTML CSS JS W/ OR W/O PHP MYSQL)</p>
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
                                    <span class="counter js-counter" data-from="0" data-to="6" data-speed="2000" data-refresh-interval="50"></span>
                                    <span class="counter-label">Projects</span>
                                </div>
                                <div class="col-md-4 text-center">
                                    <span class="counter js-counter plus" data-from="0" data-to="40000" data-speed="2000" data-refresh-interval="50"></span>
                                    <span class="counter-label">lines of code</span>
                                </div>
                                <div class="col-md-4 text-center">
                                    <span class="counter js-counter" data-from="0" data-to="8" data-speed="2000" data-refresh-interval="50"></span>
                                    <span class="counter-label">Realized website</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Counters Section -->
            <?=contact()?>
            <?=footer()?>
        </div>
        <?=scripts()?>
    </body>
    </html>
<?php
}
