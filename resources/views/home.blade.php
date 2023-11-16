<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BOUZEBOUDJA Reyad</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png')}}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



    <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{ url('/')}}">BOUZEBOUDJA Reyad</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="#about">A propos</a></li>
                    <li><a class="nav-link scrollto" href="#services">Compétences</a></li>
                    <li><a class="nav-link scrollto " href="#work">Mes Projets</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(img/fond.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">Je suis Reyad BOUZEBOUDJA</h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="Développeur"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="{{ asset('img/moi.png')}}" style= "border-radius: 50%;width: 150px;height: 150px;object-fit: cover;"
                                                    class="img-fluid rounded-circle" alt="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <p><span class="title-s">Nom/Prénom: </span> <span>BOUZEBOUDJA
                                                        Reyad</span></p>
                                                <p><span class="title-s">Profil: </span> <span>Développeur PHP</span>
                                                </p>
                                                <p><span class="title-s">Email: </span>
                                                    <span>bouzeboudja.reyad@gmail.com</span>
                                                </p>
                                                <p><span class="title-s">Téléphone: </span> <span>06 24 31 87 87</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s">Compétences</p>
                                        <span>PHP</span> <span class="pull-right">50%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Javascript</span> <span class="pull-right">40%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 40%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>React.js</span> <span class="pull-right">40%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 40%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>HTML/CSS</span> <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>MySQL</span> <span class="pull-right">60%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                A propos de moi
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            Je suis un jeune développeur passionné, récemment diplômé d'un master en
                                            développement logiciel, mobile et IoT. Mon parcours s'est enrichi
                                            grâce à une expérience en alternance, au cours de laquelle j'ai développé
                                            des compétences solides dans le domaine du développement logiciel.
                                        </p>
                                        <p class="lead">
                                            Pendant cette période, j'ai principalement travaillé sur le développement de
                                            logiciels ERP en utilisant PHP (procédural). Cette expérience m'a permis de
                                            maîtriser les aspects fondamentaux du développement backend et de comprendre
                                            les exigences spécifiques des entreprises.
                                        </p>
                                        <p class="lead">
                                            En parallèle, mes projets scolaires m'ont amené à explorer des technologies
                                            telles que React.js, React Native (TypeScript, JavaScript), et
                                            Kotlin pour le développement mobile. Cette polyvalence m'a permis de
                                            développer des compétences diversifiées et de m'adapter rapidement à de
                                            nouveaux environnements technologiques.
                                        </p>
                                        <p class="lead">
                                            En tant que développeur, je m'intéresse également à la conception
                                            logicielle/web, et j'ai acquis des compétences en maquettage avec Figma.
                                            Cette
                                            combinaison de compétences techniques et de sensibilité à la conception me
                                            permet de créer des solutions logicielles fonctionnelles et conviviales.
                                        </p>
                                        <p class="lead">
                                            Mon objectif est de continuer à apprendre, à évoluer le domaine du
                                            développement.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Services
                            </h3>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Backend</h2>
                                <p class="s-description text-center">
                                    Je possède une expérience de 3 ans via mon alternance dans le développement de
                                    logiciel (ERP) en PHP (procédural).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Frontend</h2>
                                <p class="s-description text-center">
                                    J'ai également des compétences en React.js, HTML/CSS pour le développement d'application
                                    dynamique et réactive.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Dev Mobile</h2>
                                <p class="s-description text-center">
                                    Via mon parcours scolaire, j'ai pu développement de petite application mobile
                                    via le framework ReactNative ou encore avec le langage Kotlin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Base de données</h2>
                                <p class="s-description text-center">
                                    Avec une expérience MariaDB et MySQL, j'ai développé des bases de
                                    données relationnelles. Je possède également une petite expérience avec Firebase
                                    en utilisant une approche NoSQL.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Conception</h2>
                                <p class="s-description text-center">
                                    J'ai eu l'occasion de m'occuper de la conception, notamment du maquettage
                                    de divers sites web à travers différents projets. Pour cela, j'utilise l'outil
                                    Figma.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Mes projets
                            </h3>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="https://fr.linkedin.com/in/reyad-bouzeboudja-383790176" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="{{ asset('img/work-1.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Projet 1</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span
                                                    class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="https://fr.linkedin.com/in/reyad-bouzeboudja-383790176" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="{{ asset('img/work-4.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Projet 2</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span
                                                    class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="https://fr.linkedin.com/in/reyad-bouzeboudja-383790176" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="{{ asset('img/work-5.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Projet 3</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="https://fr.linkedin.com/in/reyad-bouzeboudja-383790176"> <span
                                                    class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Me contacter
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="forms/contact.php" method="post" role="form"
                                                class="php-email-form">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" placeholder="Your Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Your Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="5"
                                                                placeholder="Message" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center my-3">
                                                        <div class="loading">Chargement</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Votre message a été envoyé !
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit"
                                                            class="button button-a button-big button-rouded">Envoyer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Mes informations
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span> La Ciotat</li>
                                                <li><span class="bi bi-phone"></span> 06 24 31 87 87</li>
                                                <li><span class="bi bi-envelope"></span> bouzeboudja.reyad@gmail.com</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="https://fr.linkedin.com/in/reyad-bouzeboudja-383790176"><span class="ico-circle"><i
                                                                class="bi bi-linkedin"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Intégration par BOUZEBOUDJA Reyad
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/typed.js/typed.umd.js')}}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>