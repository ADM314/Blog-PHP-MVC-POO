<?php
$this->title = "Acceuil";
?>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom" id="mainNav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Sacha Durand</a>
                  <!--<p id="message"> Bonjour Sacha </p>-->

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>

                    <li class="push page-scroll" >
                        <a href="../public/index.php?route=blog" class="btn btn-success btn-lg" >Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Sacha Durand</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Back-end Developer - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Je suis un développeur web spécialisé dans le back-end. J'utilise PHP et symfony pour remplir toute sorte de mission.
                    Je maitrise aussi d'autres technologie comme les langage lié au bases de donnée, le HTML/CSS. J'ai aussi quelques notions de
                    python et de C</p>
                </div>
                <div class="col-lg-4">
                    <p>Cela fait longtemps que je suis passionné par la technologie du web. J’ai donc chercher a m’instruire afin de construire
                        une carrière a partir de ma passion. Le développement back-end est ma spécialité.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="index.php?route=cv" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download My CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php// var_dump($_POST); ?>
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" method="POST" action="index.php?route=contact">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone"required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message"required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Member Space</h3>
                        <?php
                        if(isset($_SESSION['user']) == 'membre' or isset($_SESSION['user']) == 'admin') {
                            ?>
                            <a href="index.php?route=adminarticle" class="btn btn-success btn-lg" >Le back-office</a> <br/><br/>
                            <a href="index.php?route=deconnexion" class="btn btn-success btn-lg"> Se déconnecter</a>

                        <?php }
                        else{
                            ?>



                            <br>
                            <a href="index.php?route=connect" class="btn btn-success btn-lg"> Connexion</a></p><br>

                        <p class="small"> Pas encore inscrit ? <br/>
                            <a href="index.php?route=register" class="btn btn-success btn-lg"> Inscription</a>
                        </p>




                        <?php
                        }?>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://github.com/DurandSacha/" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/sacha-durand-687032150" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>

                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About me</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Sacha Durand
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Chalet & Caviar</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Chalets et Caviar est un site immobilier qui sert de vitrine pour les chalets de luxe a courchevel.
                                <br/> Ce site web est construit avec la technologie wordpress. Le theme de ce site est un theme entierement personnalisé.
                                <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>.
                                </p>
                            <ul class="list-inline item-details">
                                <li>Technologie:
                                    <strong><a href="http://wordpress.com">Wordpress / PHP </a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">2018</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Festival en plein Air </h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p> Un site de festival en plein Air au parc monceau a paris du 5 au 8 Aout.
                            2 films sont projeté par soir : Le site web sert d'affiche pour les films, et dispose d'un systeme de reservation complete.
                            <ul class="list-inline item-details">
                                <li>technologie:
                                    <strong><a href="http://startbootstrap.com">Wordpress PHP</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">janvier 2019</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>ExpressFood</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p> ExpressFood est une entreprise qui livre des plats de qualité a domicile grace a un réseau de livreurs a vélo. L'application web
                            concu dispose de toute les fonctionnalitées de stockage et de livraisons des plats.
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">PHP/SQL</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">2019</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Blog PHP</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p> Un blog PHP concu en architecture MVC et orienté objet. Cet projet a permis la construction de réel back-office complet. Ainsi
                            que d'un systeme d'authentification et de commentaire</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">PHP</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2019</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>The ToDo List</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p> Un projet de TodoList qui a de nombreuses fonctionnalitée. Découverte de symfony avec ce projet</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">PHP / Symfony</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>SnowTricks</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p> Un site communautaire exposant les figure de snoxboard, exécuté avec le framework symfony</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Symfony</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2019</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
