<?php
$this->title = "Blog";
?>
<br/>
<br/>
<br/>
<br/>
</br>
</br>
<h1>Mon blog</h1>
<br/>
<div id="space"></div>
<?php
foreach ($articles as $article) {
    ?>
    <div id="post">
        <h2>
            <a href="../public/index.php?route=article&idArt=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a>
        </h2>
        <p><?= html_entity_decode(substr(htmlspecialchars($article->getContent()), 0, 230)); ?></p>

        <p> <?= htmlspecialchars($article->getUsername()); ?></p>
        <p>Mis a jour le : <?= htmlspecialchars($article->getDateAdded()); ?></p>
        <br/>
        <hr/>
    </div>
    <br>
    <?php
}
?>

<!-- pagination -->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <h6> pagination </h6>
        <?php
        for($i=1;$i<=ceil($nbArticleTotal/10);$i++)
        {
            $affichage = ceil($i);
            if ($affichage == $pageCourante)
            {
                echo '<li class="green" class="page-item"><a class="page-link" href="../public/index.php?route=blog&page=' . ceil($i) . '">' . $affichage . '</a></li>';
            }
            else {
                echo '<li class="page-item"><a class="page-link" href="../public/index.php?route=blog&page=' . ceil($i) . '">' . $affichage . '</a></li>';
            }
        }
        ?>
    </ul>
</nav>




<body id="page-top" class="index">


<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Sacha Durand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="">
                    <a href="../public/index.php#portfolio">Portfolio</a>
                </li>
                <li class="">
                    <a href="../public/index.php#about">About</a>
                </li>
                <li class="">
                    <a href="../public/index.php#contact">Contact</a>
                </li>

                <li class="">
                    <a href="../public/index.php?route=blog&page=1" class="btn btn-success btn-lg">Blog</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Member Space</h3>
                    <?php
                    if (isset($_SESSION['user']) == 'membre' or isset($_SESSION['user']) == 'admin') {
                        ?>
                        <?php
                        if (isset($_SESSION['user']) == 'admin') {
                            ?>
                            <a href="../public/index.php?route=adminarticle" class="btn btn-success btn-lg">Le back-office</a>
                            <br/><br/>
                        <?php }
                        ?>

                        <a href="../public/index.php?route=deconnexion" class="btn btn-success btn-lg"> Se déconnecter</a>

                    <?php } else {
                        ?>


                        <br>
                        <a href="../public/index.php?route=connect" class="btn btn-success btn-lg"> Connexion</a></p><br>

                        <p class="small"> Pas encore inscrit ? <br/>
                            <a href="../public/index.php?route=register" class="btn btn-success btn-lg"> Inscription</a>
                        </p>


                        <?php
                    } ?>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://github.com/DurandSacha/" class="btn-social btn-outline"><i
                                        class="fa fa-fw fa-github"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/sacha-durand-687032150" class="btn-social btn-outline"><i
                                        class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>

                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About me</h3>
                    <p>Freelance is a free to use, open source Bootstrap theme created by <a
                                href="http://startbootstrap.com">Start Bootstrap</a>.</p>
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




</body>