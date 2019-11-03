<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php?path=home&action=liste">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?path=home&action=liste">articles</a>
                </li>
                <?php
                    if (isset($_SESSION['token'])){
                ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?path=inscription&action=deconnexion">déconnexion</a>
                        </li>
                <?php
                    }else{
                ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?path=inscription">connexion/inscription</a>
                        </li>
                <?php
                    }
                ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?path=post">new article</a>
                </li>
            </ul>
        </div>
    </div>
</nav>